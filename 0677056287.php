
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
   echo 'تم الاتصال بنجاح  ';
 }

$CREATE4="

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `lev`) VALUES
('','abdelmajid ' , 'abdelmajidboussidi@gmail.com', 'chichaoua132', 1)

";

$query4= mysqli_query($conect, $CREATE4);
        
if(!$query4){
    echo "admin creat done";
   
}

?>