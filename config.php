<?php
 
$localhost="localhost";
$username="root";
$password="";
$database="blog";
$conect=mysqli_connect($localhost,$username,$password,$database);

if(!$conect){
    die("عذرا لم يتم الاتصال بقاعدة البيانات");
}
 else {
//    echo 'تم الاتصال بنجاح  ';
 }
 
?>

<?php 

$admin="
    CREATE TABLE `admin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `lev` int(5) NOT NULL DEFAULT '1'
 PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8
";
$adminqu= mysqli_query($conect, $admin);
        
if($adminqu){
    $admin1="INSERT INTO `admin` (`id`, `name`, `email`, `password`, `lev`) VALUES
(1, 'abdelmajid elboussidi', 'abdelmajidboussidi@gmail.com', 'chichaoua132', 1)";

$adminqu1= mysqli_query($conect, $admin1);
        
if($adminqu1){
    echo "تم ";  
} 
}




$admin2="CREATE TABLE `posts` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8 NOT NULL,
  `img` varchar(100) CHARACTER SET utf8 NOT NULL,
  `post` text CHARACTER SET utf8 NOT NULL,
  `autor` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dat add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8
 ";
$adminqu2= mysqli_query($conect, $admin2);
        
if($adminqu2){
   
    $admin3="INSERT INTO `posts` (`id`, `title`, `img`, `post`, `autor`, `dat add`) 
                      VALUES
(1, 'title',
 ' http://localhost/blog/img/2019-01-13_231532.png',
  ' post contneu', 
  'abdelmajid elboussidi')";

$adminqu3= mysqli_query($conect, $admin3);
        
if($adminqu3){
    echo "تم ";  
}
}






?>