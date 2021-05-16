-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2021 at 07:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VGL`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `image`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, '/public/images/user/default.png', 'admin', 'admin@admin.com', NULL, '$2y$10$NUFw/ZnlTp5Y7aW7pb9SIOaXsjBp/TII6o1zGa/Micg2s2MMClZAO', '2021-05-05 00:42:35', '2021-05-05 00:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `title`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '1620990028.png', 'Status group', 1, 0, '2021-05-14 05:30:28', '2021-05-14 05:30:28'),
(2, '1620990064.png', 'Capital', 1, 0, '2021-05-14 05:31:04', '2021-05-14 05:31:04'),
(3, '1620990075.png', 'Dynamic', 1, 0, '2021-05-14 05:31:15', '2021-05-14 05:31:15'),
(4, '1620990087.png', 'Accession', 1, 0, '2021-05-14 05:31:27', '2021-05-14 05:31:27'),
(5, '1620990103.png', 'Analysis center', 1, 0, '2021-05-14 05:31:43', '2021-05-14 05:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `callbacks`
--

CREATE TABLE `callbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `callbacks`
--

INSERT INTO `callbacks` (`id`, `name`, `phone`, `email`, `category_id`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'zohara salehi', '09898989898', 'zohara@mailinator.com', '1', 1, 0, '2021-05-16 10:41:39', '2021-05-16 10:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Road Freight', 1, 0, '2021-05-14 09:09:35', '2021-05-14 09:10:58'),
(2, 'Ocean Freight', 1, 0, '2021-05-14 09:11:10', '2021-05-14 09:11:10'),
(3, 'Air Freight', 1, 0, '2021-05-14 09:11:18', '2021-05-14 09:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `image`, `name`, `email`, `website`, `message`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'default.png', 'ratnasheel meshram', 'meshram@mailinator.com', NULL, 'tettetstettfdfa', 1, 0, '2021-05-14 08:18:20', '2021-05-14 08:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_14_102738_create_admins_table', 1),
(4, '2021_05_14_072711_create_services_table', 2),
(5, '2021_05_14_094351_create_projects_table', 3),
(6, '2021_05_14_104941_create_brands_table', 4),
(7, '2021_05_14_113426_create_news_table', 5),
(8, '2021_05_14_124034_create_settings_table', 6),
(9, '2021_05_14_130033_create_testimonials_table', 7),
(10, '2021_05_14_133017_create_contacts_table', 8),
(11, '2021_05_14_142924_create_callbacks_table', 9),
(12, '2021_05_14_142952_create_categories_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `description`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '1620994339.jpg', 'Distinctively revolutionary', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 1, 0, '2021-05-14 06:17:22', '2021-05-14 06:42:19'),
(2, '1620994184.jpg', 't is a long established fact', '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, 0, '2021-05-14 06:24:30', '2021-05-14 06:39:44'),
(3, '1620994346.jpg', 'catalysts for chang the Seamlessly', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 1, 0, '2021-05-14 06:17:22', '2021-05-14 06:42:26'),
(4, '1620994209.jpg', 't is a long established fact', '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>test</p>', 1, 0, '2021-05-14 06:24:30', '2021-05-14 06:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` double(19,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `client`, `category`, `skills`, `budget`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '1620988279.jpg', 'Fapster', 'Investment, Trading', 'Business Planning', 20000.00, 1, 0, '2021-05-14 04:44:00', '2021-05-14 05:01:19'),
(2, '1620988288.jpg', 'Fapster', 'Investment, Trading', 'Business Planning', 50000.00, 1, 0, '2021-05-14 04:44:00', '2021-05-14 05:01:28'),
(3, '1620988296.jpg', 'Fapster', 'Investment, Trading', 'Business Planning', 2500000.00, 1, 0, '2021-05-14 04:44:00', '2021-05-14 05:01:36'),
(4, '1620988305.jpg', 'Fapster', 'Investment, Trading', 'Business Planning', 2500000.00, 1, 0, '2021-05-14 04:44:00', '2021-05-14 05:01:45'),
(5, '1620988320.jpg', 'Fapster', 'Investment, Trading, xyz', 'Business Planning', 780000.00, 1, 0, '2021-05-14 04:44:00', '2021-05-14 05:02:00'),
(6, '1620988331.jpg', 'Fapster', 'Investment, Trading', 'Business Planning', 2500000.00, 1, 0, '2021-05-14 04:44:00', '2021-05-14 05:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `description`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'page-title-bg.jpg', 'Transports', '<p>Verks Transports is a leading land freight forwarder. We are specialized in LAND FREIGHT services for both Local and international trucking. We provide transportation service within UAE, GCC or within the Middle east region we have our own trucks and strong partnership with the reliable transport companies to provide you with best services at all times. We offer following services: Full Truck Load (FTL) Less Truck Load (LTL) Reefer Truck Load (RTL) &ndash; (Perishables) Over Dimensional Cargo Transport. Our Land freight team is experience to handle any type cargo at any given time within the city limits or across the border. We also provide our customers border clearance support, to avoid any delay at the borders.</p>', 1, 0, '2021-05-14 07:40:54', '2021-05-14 03:50:57'),
(2, '1620983544.jpg', 'Logistics', '<p>No matter how huge or minute your operation, we have a 3PL solution to fit. VGL provides an efficient analysis of your operation and adapt a custom-made 3PL solution which best fits your requirements. Our services are scalable and can be leveraged individually or combined with other to maximize supply chain value.</p>\r\n\r\n<ul>\r\n	<li>Freight Management : It is a complete freight solution provided to the client in terms of Air, Sea (FCL/LCL), Land (FTL/LTL). By this solution VGL arrange to collect the shipment from the suppliers warehouse (local or International), store the cargo at VGL W/H, and therafter distribute /ship the cargos to various destinations as per the order issued through a timely and cost effective manner.</li>\r\n	<li>Inventory Management : A customized inventory management solution that is provided to customers which can offer accurate stock details at any given time. The inventory management process is carried out to ensure 100% transparency to its customers.Vendor Management : This service is offered to those customers that wish to keep their stock with VGL, but would like to use there own carriers in conjunction with, or in place of VGL Fleets. VGL offers assistance to carriers such as in managing load planning activities and carrier performance. The service includes Load Planning (single or multiple delivery), Load Tendering (rates and equipment to be used), and Service Coordination.</li>\r\n	<li>Rate Assessment : This service is provided to customers experiencing high cost in there transportation program, and who wish to cut their cost in there Tpt. Program. In this assessment a formal examination in conducted on clients shipment history and rates in historical lanes of services. Based on the assessment report VGL transportation analysts can cut cost appropriately out of the clients transportation program, which in return helps customers to increase their revenue.</li>\r\n	<li>Value-Added Services : A high quality service provided to customers to enhance their warehousing and transportation programs such as pick &amp; pack, consolidating, labeling, polybagging, and shrink wrapping services.</li>\r\n	<li>Track &amp; Trace : Through this process the customers is updated about their respective shipments including Air freight, Sea freight, Multimodal, FTL, LTL, and project cargos by means of online support or direct customer service support.</li>\r\n</ul>', 1, 0, '2021-05-14 03:42:24', '2021-05-14 03:42:24'),
(3, '1620983755.jpg', 'Freight Forwarding', '<p>To offer worldwide exposure for our clients freight-forwarding needs, we provide supply chain solutions with personalized customer service. Being a skilled and experienced freight forwarder, with a wide base of air freight forwarding &amp; ocean freight forwarding experience we offer efficient solutions customized to your needs.</p>\r\n\r\n<h3>Sea Freight</h3>\r\n\r\n<p>VGL is a leading Ocean Freight Forwarders that provide customized solution to their customers based on their own going requirements. Sea freight being an integral part of the supply chain solution, we offer following services:</p>\r\n\r\n<ul>\r\n	<li>Full Container Loads (FCL),</li>\r\n	<li>Less than Container Loads (LCL),</li>\r\n	<li>Reefer containers (Perishables),</li>\r\n	<li>Flat racks or special equipments,</li>\r\n	<li>Break Bulk,</li>\r\n	<li>Ship Charter,</li>\r\n</ul>\r\n\r\n<p>Due to the long terms relationship with major carriers and NVOCC operators, we can always guarantee best rates, and reliable services, to our valued customers. We ensure import and export sea freight movement are carefully managed, irrespective of the volume and size of the shipment. Our strategic partners around the globe also help us to maintain our quality services at all given time.</p>\r\n\r\n<h3>Air Freight</h3>\r\n\r\n<p>Air freight shipments are considered to be on top priority due to the urgency of the shipment. VGL as a major Air Freight Forwarding Company, strongly believe every kilo air-freighted must reach its destination on time and safely for the value of the money&Acirc; spend for the operation.</p>\r\n\r\n<p>Being one of the leading air freight forwarders, we take our delivery responsibility seriously, thus we offer various solutions such as</p>\r\n\r\n<ul>\r\n	<li>Multimodal service (Air-Sea/ Air-Land/Air-Air),</li>\r\n	<li>Air-consolidation on major destinations.</li>\r\n	<li>Perishables movements</li>\r\n	<li>Air Charters</li>\r\n</ul>\r\n\r\n<p>Our strategic network partners also provide us great strength and ability to handle various sizes and volume of shipment irrespective of import or export from and to any part of the world. Deliveries and collection are always taken care with utmost importance to ensure smooth operations and to meet deadlines.</p>\r\n\r\n<h3>Clearance</h3>\r\n\r\n<p>Customs clearance has always been an integral part of the freight forwarding business. Whether the delivery is to manufacturing site, or to the end customer, VGL ensure all customs clearance procedures irrespective of the mode of transport (air/sea/land) are cleared within less than 24-36 business hours. This has always been a great achievement for us.</p>\r\n\r\n<p>As one of the leading Customs Clearing Agents, it crucial for us to ensure smooth and efficient customs clearance is carried for all our customers, to receive their cargos on time. Our experienced customs brokerage team handles all Import and Export regulations and paperwork in the most efficient manner. They are well verse with all procedures, so clearance of any type of cargo can be done swiftly, irrespective of the size, volume or complexity of the shipment.</p>', 1, 0, '2021-05-14 03:45:55', '2021-05-14 03:45:55'),
(4, '1620983847.jpg', 'Warehousing & Distribution', '<p>Our understanding, effectiveness and flexibility when it comes to warehousing are the basis for the quality we offer you.</p>\r\n\r\n<p>From our logistics center, we put forward to you the latest technology and paramount solutions in terms of storage and handling, from the minute products arrive until they are all set for transportation to the end user, dealer or distributor or your branches.</p>\r\n\r\n<ul>\r\n	<li>Public Warehousing : A cost effective warehousing solution provided to clients that has flexible space requirement on a short term basis. This solution benefits the clients in terms of splitting the cost of labor hired, handling, etc through the process of consolidating the shipments with other customers in the same facility.</li>\r\n	<li>Contract Warehousing :&Acirc; A customized warehousing program developed for customers that needs dedicated logistical support on a long-term basis. The advantage of contract warehousing includes specialized labor force, facility, and standard operating procedures specifically designed to proactively support the client&rsquo;s operation.</li>\r\n	<li>Cross docking : A highly effective solution to enhance transportation service to customer by reducing additional handling and storage costs. It allows clients to route their volume cargo from one or multiple vendor(s) to VGL center, wherein the cargo is deconsolidated into multiple shipments and delivered directly to the customers. This solution also helps clients intending to transship the cargo to a destination by switching the containers. It is an advantage for clients that do not have space, equipment, man power, etc to handle and execute the shipment.</li>\r\n	<li>Pick/Pack :&Acirc; A service provided to customers that has multiple stock picks based on their purchase order which needs to be consolidated and repacked for shipping effectively to the end customers. VGL offers variety of flexible order fulfillment options including : Pallet break down, Individual stock picks, Building new cartons or pallets, etc to meet customer requirements.</li>\r\n	<li>Inventory Control : An effective inventory management system which ensures maximum accuracy in inventory control is designed for prompt service and reliability.</li>\r\n	<li>Order Fulfillment : VGL provides utmost care &amp; attention to accomplish a given order in the specified time frame. Upon receipt of an order fulfillment request, VGL ensures order is arranged accurately; the shipment is packed based on export packing standard, goods are properly labeled, and its delivered on time.</li>\r\n	<li>Distribution : VGL has its own fleets for handling distribution operations. Thus giving the customers an upper hand to maintain their cost of delivery low. Understanding the requirements of the client, VGL always plans it delivery routes on more optimum level for faster and cost effective operations</li>\r\n</ul>', 1, 0, '2021-05-14 03:47:27', '2021-05-14 03:47:27'),
(5, '1620983913.jpg', 'Exhibition Logistics', '<p>Verks Fairs and Exhibition (VFE) is one of the leading exhibition forwarding specialists, handling several tons of exhibits each year for their valuable clients who participates for major trade&Acirc; shows around the globe.</p>\r\n\r\n<p>The VFE teams ensure all exhibits are delivered onsite in a timely fashion. Irrespective of the size and nature of the cargo the VFE teams ensure no shipments misses it events.</p>\r\n\r\n<p>VFE offer the following services:</p>\r\n\r\n<ul>\r\n	<li>Material Collection (EXW) : For customers that requires materials to be pickup from their warehouse (local or international), VGL arrange to do the same promptly and swiftly. Through VGL network, a customer requirement can be fulfilled with highest quality and service at anytime anywhere.</li>\r\n	<li>Freight Forwarding : Upon collection of the shipment, VGL plans the freight movement based on the Exhibition date and time. Our Service and support has always ensured on time delivery at site.</li>\r\n	<li>Customs Clearance : VGL offers customs clearance support for its client that needs clearance for their shipment from either airport or seaport. Our clearance team prioritizes exhibition cargo clearing to ensure promptly delivery to the site.</li>\r\n	<li>Onsite Handling : Our exhibition team provide dedicate onsite support for the exhibiting clients such as\r\n	<ol>\r\n		<li>Delivering the exhibits to the stand area prior to clients arrival</li>\r\n		<li>Assistance in stand building</li>\r\n		<li>Stand arrangements</li>\r\n		<li>Breakdown of stand</li>\r\n		<li>Unpacking and packing of exhibits</li>\r\n		<li>Arrangement of equipments,</li>\r\n		<li>Storing of empties, etc.</li>\r\n	</ol>\r\n	</li>\r\n	<li>Transportation (Ex-work Basis) : The project team also supports its client for transporting the shipment from the shippers warehouse to the load port. This is a value added service given to the customer to ensure the timely delivery at load port is maintained as per planned schedule.</li>\r\n	<li>Export Documentation : Its an another value added service given to the customer, to avoid any improper documentation or delays, which could adversely effect the entire operation.</li>\r\n	<li>Cargo Handling : At each phase, the team ensures that the cargo handling is done as per international quality standard, thus making the execution of the shipment smooth &amp; effective.</li>\r\n	<li>Onsite Management:&Acirc; On behalf of the customer, our project team supervises cargo loading into the carrier or vessel, handles any unexpected operation hurdles, coordinate with the port authorities, etc. Thus providing our customer a tension free operation.</li>\r\n	<li>Specialized Equipments :&Acirc; Depending on the nature of the cargo, specialized equipments are made available on site to ensure the handling, and loading/offloading of cargo is done appropriately</li>\r\n</ul>', 1, 0, '2021-05-14 03:48:33', '2021-05-14 03:48:33'),
(6, '1620983949.jpg', 'Project Cargo Logistics', '<p>To handle projects movements its essential to have special expertise, technical know how, and precise planning. At VGL, we have an reputable experience team that can handle project cargo logistics of our clients from the start to the end, by understanding the nature of the cargo, port &amp; customs requirements, transportation and onsite handling needs. Our project logistics support includes heavy-lift and over dimensional cargo or out-of-gauge cargo (OOG) movements for industrial projects, and gas projects, and time sensitive projects.</p>\r\n\r\n<p>VGL project team ensures to provide the best project cargo logistics solutions for our customers, which is not only operationally efficient but also effective cost wise. Over the years our timely and cost effective delivery has earned VGL its credibility, to handle various projects on behalf of our clients.</p>\r\n\r\n<p>For smooth operation, we provide the below services :-</p>\r\n\r\n<ul>\r\n	<li>Project Consultancy : Our expert project team educates the clients with the best method for executing their project shipment in a specific time span. Our team works on behalf of the client and estimate the pros &amp; cons and advice the cost effective mode of transporting their shipments to the final destination.</li>\r\n	<li>Cost Estimation : The project &Acirc; team upon receipt of the survey report, compute the cost that would be incurred during the execution of the shipment. Having the expertise in the arena of chartering, our team also advice the client about additional cost that could incur if the shipment is executed without proper planning or arise due any unforeseen delays.</li>\r\n	<li>Cargo Planning : Upon order confirmation, our project team plans stage by stage of execution of the shipment. The team would prepare a schedule based on which the shipment would be uplifted within the time frame decided by the planning team.</li>\r\n	<li>Chartering (AIR/SEA) : Depending on the cargo volume, the project team charters respective carrier or vessel for uplifting the project cargo.</li>\r\n	<li>Transportation (Ex-work Basis) : The project team also supports its client for transporting the shipment from the shippers warehouse to the load port. This is a value added service given to the customer to ensure the timely delivery at load port is maintained as per planned schedule.</li>\r\n	<li>Export Documentation : Its an another value added service given to the customer, to avoid any improper documentation or delays, which could adversely effect the entire operation.</li>\r\n	<li>Cargo Handling : At each phase, the team ensures that the cargo handling is done as per international quality standard, thus making the execution of the shipment smooth &amp; effective.</li>\r\n	<li>Onsite Management:&Acirc; On behalf of the customer, our project team supervises cargo loading into the carrier or vessel, handles any unexpected operation hurdles, coordinate with the port authorities, etc. Thus providing our customer a tension free operation.</li>\r\n	<li>Specialized Equipments :&Acirc; Depending on the nature of the cargo, specialized equipments are made available on site to ensure the handling, and loading/offloading of cargo is done appropriately</li>\r\n</ul>', 1, 0, '2021-05-14 03:49:09', '2021-05-14 03:49:09'),
(7, '1620983996.jpg', 'Value Added Services', '<p><strong>Flight Handling:</strong>&nbsp;VGL offer this service to those valuable customers who require emergency support, dedicate service upon arrival, a local partner/agent that can handle their flight promptly and efficiently, and charter/Adhoc flight support. The services offered are.</p>\r\n\r\n<ul>\r\n	<li>Ground handling,</li>\r\n	<li>In flight catering for the crew / passengers,</li>\r\n	<li>Hotel Bookings for Crew</li>\r\n	<li>Pick and Drop from/to airport for crew</li>\r\n	<li>Aircraft Fueling</li>\r\n	<li>Cargo Handling</li>\r\n</ul>\r\n\r\n<p><strong>Executive Jet Service:</strong>&nbsp;This is premium service offered to those clients, who believes Time is Precious. We provide Executive Jet service through of Channel Partners, that can guarantee best rate, quality service, and on time destination arrival. Our channel partner meets our quality standard that we set for our High profile customers.</p>\r\n\r\n<p><strong>Insurance:</strong>&nbsp;This service support is offered to our customers that keenly require insurance coverage for their shipments that is stored in VGL W/H, or in transit, or for any project shipments. We insist all our customers to take insurance coverage to avoid unforeseen incident or heavy loss.</p>\r\n\r\n<p><strong>Wooden Crating:</strong>&nbsp;We offer wooden crating support to those clients who deal in fragile and high-end worth of cargo. All wooden crates supplied by VGL, ensures export quality packing standard. Thus assuring client with peace of mind while shipment is in transit.</p>', 1, 0, '2021-05-14 03:49:56', '2021-05-14 03:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `field_key`, `field_value`, `created_at`, `updated_at`) VALUES
(1, 'website_address', '<p>Building C, Warehouse # 3 Sheikh Zayed Road, 8th Interchange - Dubai - United Arab Emiratess</p>', NULL, '2021-05-14 08:56:42'),
(2, 'contact_1', '+971 4 8804980', NULL, NULL),
(3, 'contact_2', '+971 4 8804981', NULL, NULL),
(4, 'website_email', 'info@verksglobal.com', NULL, NULL),
(5, 'logo', 'logo.png', NULL, NULL),
(6, 'facebook', 'https://www.facebook.com/', NULL, NULL),
(7, 'twitter', 'https://twitter.com/?lang=en', NULL, NULL),
(8, 'linkdin', 'https://in.linkedin.com/', NULL, NULL),
(9, 'google', 'https://www.google.com/?hl=ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active',
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1=>deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `designation`, `description`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'default.png', 'Andre green', 'CEO, Apple Inc.', '<p>Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio</p>', 1, 0, NULL, '2021-05-14 07:55:33'),
(2, 'default.png', 'Aurther Maxwell', 'CEO, Apple Inc.', 'Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio', 1, 0, NULL, NULL),
(3, 'default.png', 'Rima Maxwell', 'CEO, Apple Inc.', 'Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio', 1, 0, NULL, NULL),
(4, 'default.png', 'test', 'tets', '<p>dfsdfadsf</p>', 1, 1, '2021-05-14 07:54:51', '2021-05-14 07:54:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callbacks`
--
ALTER TABLE `callbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `callbacks`
--
ALTER TABLE `callbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
