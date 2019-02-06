<?php require '../config.php'; ?>
<?php include'../headr.php' ?>

<!DOCTYPE html>
<html>
<head>
    <title>اضافة مسؤول</title>
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../all.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<!--   heder    -->
<body dir="rtl">


    
    <?php 
   session_start();
if(isset($_SESSION['lev'] )){
$lev=$_SESSION['lev'];

}
if($lev !=1){
    header("location:../index.php");
}
    
    if(isset($_POST['add'])){
       $aname=$_POST['name'];
      $aemail=$_POST['email'];
   $apass=$_POST['pass'];
      
   $aadmin="INSERT INTO `admin` 
          (`id`, `name`, `email`, `password`) 
          VALUES
            ('', '$aname', '$aemail', '$apass')";
   $qty=mysqli_query($conect, $aadmin);
   
   if($qty){
       echo ' <div class="yes"> تم الاضافة بنجاح</div>';
    }  
    }  
    ?>
  
<div class="addadmin">
  <h2> اضافة مسؤول جديد للموقع</h2>
  <form method="POST" action="">
الاسم الكامل  &emsp;<input class="in" type="text" name="name"><br>
  البريد الالكتروني  <input  class="in" class="email" type="email" name="email"><br>
   كلمة المرور &emsp;<input class="in"  type="password" name="pass"><br>
   <input class="in3" type="submit" name="add" value="اضافة مسؤول">
   <br> <br><br> 
</form>





 
</body>
</html>