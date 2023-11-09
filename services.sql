-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2023 at 08:54 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanic_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photo`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'engine.png', 'Engine Fixing', 'Engine Diagnostics: Is your vehicle displaying warning lights or unusual noises? Our state-of-the-art diagnostic tools and experienced technicians will pinpoint the root of the problem, ensuring an accurate diagnosis and an efficient repair plan.  Engine Repair: No engine problem is too big or small for our experts. From fixing minor leaks and worn-out components to more complex issues like overheating or poor performance, we\'ve got you covered. Our team will provide a comprehensive repair solution tailored to your vehicle\'s specific needs.  Engine Rebuilding: Sometimes, an engine requires more than just a quick fix. If your engine is beyond repair, we offer professional engine rebuilding services. Our technicians will rebuild your engine to factory specifications, ensuring optimal performance and longevity.  Routine Maintenance: Preventative maintenance is key to extending the life of your engine. We offer a range of maintenance services, including oil changes, filter replacements, and fluid checks, to keep your engine running smoothly.', NULL, NULL),
(2, 'ECU_programming.png', 'ECU programming', 'Our ECU Programming Services:  Performance Tuning: Experience the thrill of improved horsepower and torque with our performance tuning services. We custom-tune your ECU to maximize your vehicle\'s power while maintaining reliability.  Fuel Efficiency Enhancement: Economize your fuel consumption with our ECU programming solutions. We optimize your vehicle\'s fuel delivery, resulting in better mileage and cost savings without sacrificing performance.  Drivability Improvement: Smooth out your driving experience with drivability-focused ECU programming. Say goodbye to rough idling, throttle response issues, and transmission hiccups as we fine-tune your ECU for a more comfortable ride.  Speed Limiter Removal: Unlock your vehicle\'s full speed potential by eliminating speed limiters. If your vehicle is electronically restricted, our ECU programming can remove those limitations safely and legally.  DPF and EGR Solutions: Resolve common issues related to Diesel Particulate Filters (DPF) and Exhaust Gas Recirculation (EGR) systems. We can optimize or disable these systems, ensuring your engine runs efficiently and reliably.  Custom ECU Calibration: If you have specific performance or usage requirements, we offer custom ECU calibration services tailored to your needs. Our experts will work closely with you to achieve the desired results.', NULL, NULL),
(3, 'ECU_flashing.png', 'ECU flashing', 'Our ECU Flashing Services:\n\nPerformance Enhancement:\nExperience the thrill of increased power and torque with our performance-focused ECU flashing services. We custom-flash your ECU to maximize your vehicle\'s performance while maintaining reliability.\n\nFuel Efficiency Optimization:\nEconomize your fuel consumption with our ECU flashing solutions. We optimize your vehicle\'s fuel delivery, resulting in better mileage and cost savings without compromising performance.\n\nDrivability Improvement:\nSmooth out your driving experience with drivability-focused ECU flashing. Say goodbye to rough idling, laggy throttle response, and transmission issues as we fine-tune your ECU for a more enjoyable ride.\n\nSpeed Limiter Removal:\nUnlock your vehicle\'s full speed potential by eliminating speed limiters. If your vehicle is electronically restricted, our ECU flashing can remove these limitations safely and legally.\n\nCustom ECU Calibration:\nFor those with specific performance or usage requirements, we offer custom ECU calibration services tailored to your needs. Our experts work closely with you to achieve the desired results.\n\nDPF and EGR Solutions:\nResolve common issues related to Diesel Particulate Filters (DPF) and Exhaust Gas Recirculation (EGR) systems. We can optimize or disable these systems, ensuring your engine runs efficiently and reliably.', NULL, NULL),
(4, 'oilchange.png', 'Oil Changing', 'Our Oil Change Services:  Standard Oil Change: Experience the benefits of fresh, high-quality motor oil. Our standard oil change service includes draining old oil, replacing the oil filter, and filling your engine with the right type and amount of oil, keeping your engine lubricated and running smoothly.  Synthetic Oil Change: For vehicles that require synthetic oil, we offer premium synthetic oil change services. Synthetic oil provides superior protection and performance, especially in high-stress driving conditions.  High Mileage Oil Change: If your vehicle has reached higher mileage, we offer specialized high mileage oil change services that are designed to address the unique needs of older engines. This service helps extend the life of your vehicle.  Oil Filter Replacement: In addition to oil changes, we provide oil filter replacements. A clean oil filter is essential for preventing contaminants from entering your engine, which can lead to damage over time.  Environmental Disposal: We ensure proper and eco-friendly disposal of your old oil and oil filters, adhering to all environmental regulations and standards.', NULL, NULL),
(5, 'diagnostic.png', 'Car diagnostic', 'Our Car Diagnostic Services:  Engine Diagnostics: Is your check engine light on? Our state-of-the-art diagnostic tools and expert technicians can quickly identify the source of the problem, whether it\'s related to the engine, transmission, or emissions system.  Electrical System Analysis: Electrical issues can be frustrating and complex. We provide thorough electrical system analysis to detect and fix problems with your vehicle\'s electrical components, from batteries and alternators to wiring and sensors.  Transmission Diagnostics: If you\'re experiencing transmission-related problems like rough shifting or slipping, our diagnostic service can pinpoint the issue, whether it\'s mechanical or electronic, to ensure optimal performance.  ABS & Brake System Diagnosis: Brake and anti-lock braking system (ABS) issues can compromise your safety. Our diagnostic tools help identify brake system problems, ensuring that your vehicle\'s stopping power is at its best.  Airbag and SRS Diagnosis: Safety is paramount. Our car diagnostic services include checking your vehicle\'s airbag and supplemental restraint system (SRS) to ensure it\'s functioning as intended.  Comprehensive System Scanning: We offer a comprehensive system scan to assess all the vehicle\'s major components, including sensors, modules, and control units, to catch any hidden issues before they become major problems.', NULL, NULL),
(6, 'transmission.png', 'Transmission fixing', 'Our Transmission Fixing Services:  Transmission Repair: Is your vehicle experiencing shifting problems or transmission fluid leaks? Our expert technicians are skilled at diagnosing and repairing a wide range of transmission issues, from minor repairs to more complex problems.  Transmission Rebuild: For transmissions that require more than just a quick fix, we offer comprehensive transmission rebuild services. We\'ll disassemble, inspect, and replace worn or damaged components, ensuring your transmission operates like new.  Transmission Fluid Exchange: Regular maintenance is key to extending your transmission\'s lifespan. We provide transmission fluid exchange services to keep your transmission fluid clean and your gears shifting smoothly.  Clutch Repair and Replacement: If your vehicle has a manual transmission, we offer clutch repair and replacement services. A well-functioning clutch is essential for smooth gear changes and an enjoyable driving experience.  Differential Service: Differential issues can impact the performance of your vehicle. Our differential services include inspections, repairs, and fluid changes to ensure your vehicle\'s stability and handling.', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
