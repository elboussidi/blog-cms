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

$CREATE1="
CREATE TABLE `admin` (
  `id` int(58) NOT NULL AUTO_INCREMENT ,
  `name` varchar(80) NOT NULL,
  `email` varchar(89) NOT NULL,
  `password` varchar(60) NOT NULL,
  `lev` int(58) NOT NULL DEFAULT '0'
  , PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




";

$query1= mysqli_query($conect, $CREATE1);
        
if(!$query1){
//     echo "1";
  
}

$CREATE2="
CREATE TABLE `blog`.`com` ( `id` INT(58) NOT NULL AUTO_INCREMENT , `autcom` VARCHAR(80) NOT NULL , `com` TEXT NOT NULL , `rank` INT(60) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


";
$query2= mysqli_query($conect, $CREATE2);
        
if(!$query2){
  //   echo "2";
   
}


$CREATE3="
CREATE TABLE `posts` (
  `id` int(58) NOT NULL AUTO_INCREMENT ,
  `title` varchar(80) NOT NULL,
  `img` varchar(89) NOT NULL,
  `post` text NOT NULL,
  `autor` varchar(66) NOT NULL,
  `dat add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
  , PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


  
";

$query3= mysqli_query($conect, $CREATE3);
        
if(!$query3){
 //    echo "3";
   
}



$CREATE5="

INSERT INTO `posts` (`id`, `title`, `img`, `post`, `autor`, `dat add`) VALUES ('1', 'test title', 'http://localhost/blog/img/20180620_115710.png', 'text poost her', 'admin', CURRENT_TIMESTAMP)

";

$query5= mysqli_query($conect, $CREATE5);
        
if(!$query5){
//   echo "5";
   
}

?>
