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

$admin="CREATE TABLE `blog`.`admin` 
    ( `id` INT(50) NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(40) NOT NULL , 
    `email` VARCHAR(20) NOT NULL , 
    `password` VARCHAR(20) NOT NULL ,
     `lev` INT(5) NOT NULL DEFAULT '1'
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
  
";

$adminqu= mysqli_query($conect, $admin);
        
if(!$adminqu){
//    echo "لم يتم انشاء الجدول ادمين";
   
}

     $addadm="INSERT INTO `admin` 
      (`id`, `name`, `email`, `password`)
      VALUES 
      ('1', 'عبد المجيد البوسعيدي', 'abdelmajidboussidi@gmail.com', 'chichaoua132')";
    
  

 if(mysqli_query($conect, $addadm)){
       
       header("location: http://localhost/blog/admin/index.php");
       
   }
 else {
//       echo 'فشل اضافةالاسم الاول';    
   }

    

?>

