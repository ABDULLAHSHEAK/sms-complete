CREATE TABLE `student1` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `full_name` varchar(50) NOT NULL,
  `fa_name` varchar(50) NOT NULL,
  `ma_name` varchar(50) NOT NULL,
  `student_phone` varchar(50),
  `student_fa_phone` varchar(50) NOT NULL,
  `email` varchar(50),
  `student_address` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `roll` INTEGER(50),
  `reg` varchar(50),
  `class_name` varchar(50) NOT NULL,
  `slug` varchar(50),
  `img` varchar(50),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) 