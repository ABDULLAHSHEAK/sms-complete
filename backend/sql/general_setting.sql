CREATE TABLE `general_setting` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `site_title` varchar(250) NOT NULL,
  `school_name` varchar(250) NOT NULL,
  `school_address` varchar(250) NOT NULL,
  `establish_year` varchar(50) NOT NULL,
  `eiin_no` varchar(50) NOT NULL,
  `school_code` varchar(50) NOT NULL,
  `Menu Text` varchar(50) NOT NULL,
  `school_number1` varchar(50) NOT NULL,
  `school_number2` varchar(50) NOT NULL,
  `school_email` varchar(50) NOT NULL,
  `principal_email` varchar(50) NOT NULL,
  `website_url` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) 