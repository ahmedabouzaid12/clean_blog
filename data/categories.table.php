<?php

$sql = "CREATE TABLE IF NOT EXISTS `categories`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL

)";
$result = mysqli_query($conn,$sql);

if($result){
    echo "elgadwal EL categories etaamal <br>";
}


$sql = "INSERT INTO `categories` (`title`) VALUES ('first category'),
('scond t category'),
('third category'), 
('fourth category'),
('fifte category')";

mysqli_query($conn,$sql);
?>