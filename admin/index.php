<?php include'../headr.php' ?>
<?php 
session_start();

if(isset($_SESSION['lev'] )){
$lev=$_SESSION['lev'];

}
if($lev !=1){
    header("location:../index.php");
}
 
 if(isset($_SESSION['name'] )){
$profil=$_SESSION['name'];
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ادارة الموقع</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../main.css" />
    <script src="main.js"></script>
</head>
<body dir="rtl">
    
<div class="prof">
    <h3><?php echo  $profil ;?></h3> 
 <img src="admin.png" >
 <a href="logout.php"><button class="btn2" >تسجيل الخروج</button> </a>
</div>


 <div  class="admin">
  
   <a href="/blog/admin/add_post.php"><button class="btn" >مقال جديد</button></a>
   <a href="#"><button class="btn"> تحرير</button></a><br><br><br><br>
   <a href="#"><button class="btn" >اعدادات الموقع</button></a>
    <a href="/blog/admin/addadmin.php"><button class="btn" >اضافة مسؤول</button></a>

 </div>
 <?php include'../footer.php' ?>
</body>
</html>