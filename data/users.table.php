<?php


$sql = "CREATE TABLE IF NOT EXISTS `users`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `role` ENUM('admin','user') NOT NULL DEFAULT 'user', 
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 

)";
//execution
$result = mysqli_query($conn,$sql);

if($result){
    echo "elgadwal EL users etaamal <br>";
}

$password = password_hash("password",PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (`name`,`email`,`password`,`phone`) VALUES 
('ahmed ali','ahmed@eraasoft.com','$password','01063542836'),
('mustafa ali','mustafa@eraasoft.com','$password','3400629182836'),
('mona ali','mona@eraasoft.com','$password','030843542836'),
('erahim ali','ebrahim@eraasoft.com','$password','294863542836')
";

mysqli_query($conn,$sql);