<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;
use App\Models\configs;
use App\Models\services;
use App\Models\photos;
use App\Models\texts;
use App\Models\prices;
use App\Models\carousel_imgs;
use App\Models\faqs;
use App\Models\chooses;
use App\Models\galerys;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class edit extends Controller
{
    public function index($table, $id, $grupp){
        $gallery = galerys::all();
        $choose = chooses::all();
        $qa = faqs::all();
        $reviews = reviews::all();
        $configs = configs::all();
        $configs_min = configs::min('id');
        $services = services::all();
        $photos = photos::all();
        $texts = texts::all();
        $prices = prices::all();
        $carousel = carousel_imgs::all();
        return view('edit', compact('services', 'gallery', 'choose', 'qa', 'reviews', 'configs', 'configs_min', 'photos', 'texts', 'prices', 'carousel', 'table', 'id', 'grupp'));
    }
    public function update(Request $request, $grupp, $id, $id2){
        switch ($grupp):
            case 1:
                $texts = texts::find(1);
                $texts->text = $request->input('text1');
                $texts->update();

                $texts = texts::find(2);
                $texts->text = $request->input('text2');
                $texts->update();
                break;
            case 2:
                if($request->hasFile('photo1')){
                    $experts = photos::find($id);
                    $final_name = $experts->photo;
                    $request->file('photo1')->move(public_path('/images/team/'), $final_name);
                }
                $photos = photos::find($id);
                $photos->text = $request->input('text1');
                $photos->update();

                $photos = photos::find($id);
                $photos->text2 = $request->input('text2');
                $photos->update();
                break;
            case 3:
                $prices = prices::find($id);
                $prices->title = $request->input('text1');
                $prices->update();

                $prices = prices::find($id);
                $prices->price = $request->input('text2');
                $prices->update();

                $prices = prices::find($id);
                $prices->services = $request->input('text3');
                $prices->update();
                break;
            case 4:
                $faqs = faqs::find($id);
                $faqs->question = $request->input('text1');
                $faqs->update();

                $faqs = faqs::find($id);
                $faqs->answer = $request->input('text2');
                $faqs->update();
                break;
            case 5:
                $works = services::find($id);
                $works->title = $request->input('text1');
                $works->update();

                $works = services::find($id);
                $works->text = $request->input('text2');
                $works->update();

                $choose = chooses::find(1);
                $choose->title = $request->input('text3');
                $choose->update();

                $choose = chooses::find(1);
                $choose->text = $request->input('text4');
                $choose->update();

                if($request->hasFile('photo1')){
                    $works = services::find($id);
                    $final_name = $works->photo;
                    $request->file('photo1')->move(public_path('/images/testimonial/'), $final_name);
                }
                if($request->hasFile('photo2')){
                    $choose = chooses::find(1);
                    $final_name = $choose->photo;
                    $request->file('photo2')->move(public_path('/images/services/single-service/'), $final_name);
                }
                break;
            case 6:
                $gallery = galerys::find($id);
                $gallery->text1 = $request->input('text1');
                $gallery->update();

                $gallery = galerys::find($id);
                $gallery->client = $request->input('text2');
                $gallery->update();

                $gallery = galerys::find(1);
                $gallery->category = $request->input('text3');
                $gallery->update();

                $gallery = galerys::find($id);
                $gallery->date = $request->input('text4');
                $gallery->update();

                $gallery = galerys::find($id);
                $gallery->mechanic = $request->input('text5');
                $gallery->update();

                $gallery = galerys::find($id);
                $gallery->text2 = $request->input('text6');
                $gallery->update();

                $gallery = galerys::find($id);
                $gallery->short_text = $request->input('text7');
                $gallery->update();

                $gallery = galerys::find($id);
                $gallery->filter = $request->input('text8');
                $gallery->update();

                if($request->hasFile('photo1')){
                    $gallery = galerys::find($id);
                    $final_name = $gallery->photo;
                    $request->file('photo1')->move(public_path('/images/projects/'), $final_name);
                }
                break;
            case 7:
                $contact = configs::find($id);
                $contact->value = $request->input('text1');
                $contact->update();

                if($id == 1 || $id == 2){
                    $contact = configs::find($id+1);
                    $contact->value = $request->input('text2');
                    $contact->update();
                }

                break;
            case 8:
                for ($i = 1; $i < 9; $i++) {
                    $config = configs::find($i);
                    $config->value = $request->input('text' . $i);
                    $config->update();
                }
                break;
            case 9:
                break;
            case 10:
                $about = reviews::find($id);
                $about->name = $request->input('text1');
                $about->update();

                $about = reviews::find($id);
                $about->comment = $request->input('text2');
                $about->update();

                $about = reviews::find($id);
                $about->service = $request->input('text3');
                $about->update();

                if($request->hasFile('photo1')){
                    $reviews = reviews::find($id);
                    $final_name = $reviews->photo;
                    $request->file('photo1')->move(public_path('/images/testimonial/'), $final_name);
                }
                if($request->hasFile('photo2')){
                    $reviews = reviews::find($id);
                    $final_name = $reviews->car;
                    $request->file('photo2')->move(public_path('/images/testimonial/'), $final_name);
                }
                break;
            default:
                break;
        endswitch;
        return redirect()->back()->with('status', 'your data has been saved');
    }
    public function register(Request $request){
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back()->with('status', 'you are admin');
    }
    public function login(Request $request){
        $login = $request->all();
        if(Auth::attempt($login)){
            return redirect('/');
        }
        return redirect()->back()->with('status', 'You are not allowed to login');
    }
    public function logout(){
        session(flush());
        Auth::logout();
        return redirect('/');
    }
}
