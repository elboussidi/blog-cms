<?php require 'config.php'; 
 session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
    <title>الصفحة الرئسية </title>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" media="screen" href="all.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">




</head>

<?php include'headr.php' ?>
<img src="logo.png" id="iimg">

<?php 
if(isset($_POST['log'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];
   
    
  $log="SELECT * FROM `admin` WHERE email='$email' AND password='$pass'";
    
    $logqr=$conect->query($log) ;
    
    if($logqr){
         if($logqr->num_rows > 0);
        while ($row1 = $logqr->fetch_assoc()) {
     
            $_SESSION['name']=$row1['name'];
             $_SESSION['lev']=$row1['lev'];
        } 
      
   
      
        if ($_SESSION['lev']==1){
              
  header("location:/blog/admin/index.php");
        } }
 else {
   
        echo 'ooopps';
    }

}
?>




<?php  

if(isset($_GET['page'])){
  $page=$_GET['page'];
  
  } else {
  $page=1;    
  }
  
    if(isset($_GET['p_page'])){
  $p_page=$_GET['p_page'];
  
  }else {
  $p_page=3;    
  }
$star=$p_page*$page-$p_page ;

$reed="SELECT * FROM `posts` ORDER by `id` DESC LIMIT {$star},{$p_page } ";
$reedqr= mysqli_query($conect, $reed);
if(!$reedqr){
    die("تعدر الوصول الي المقالات");
    
} else {   
    echo ' <div class="post">';
 while ($row = mysqli_fetch_assoc($reedqr)) {
       $id=$row['id'];
    $title1=$row['title'];
    $post1=$row['post'];
    $img1=$row['img'];
    $autor1=$row['autor'];
    $dat1=$row['dat add']; 
$newdat=mb_substr( "$dat1 " , 0 , 11 , "utf8" );
$newpost=mb_substr( "$post1 " , 0 , 180 , "utf8" );
    echo "


      <a href='single.php?id=$id'>   <h2>$title1  </h2></a>
    <a href='single.php?id=$id'>  <img class='imgpost' src='$img1'></a>
      <div class='dat'>$newdat </div>
      <div class='autor'>كتب بواسطة : $autor1</div>
      <p>
       $newpost
      </p> 
      <a href='single.php?id=$id'><button class='btn' >  المزيد </button></a>
      <hr>  
  

";
} }//end while and else
$sel="SELECT * FROM `posts`";
$qry= mysqli_query($conect, $sel);

$total=mysqli_num_rows($qry);



 $pages= ceil($total/$p_page) ;
 
 if($page<$pages){
     $next=$page+1;
     ?> 



<a class="next" href="?page=<?php echo $next ?>& p_page=<?php echo$p_page?>"> التالي<a/>
  <?php   
 }

 
  for($x=1;$x<=$page;$x++){
       ?>  
      <a class="next" href="?page=<?php echo$x ?>& $p_page=<?php echo$p_page?>"> <?php echo $x ?><a/>
        
  <?php } 
 
        if($page>1){
     $perv=$page-1;
     ?> 
          
<a class="next" href="?page=<?php echo $perv ?>& p_page=<?php echo$p_page?>"> السابق<a/>
    
  <?php   
 }
        
       ?> 
        


  </div>
<div class="sbar">
     <h2>نبدة عني </h2> 
     <img src="moi.jpg" class="about">
     <p> We are an emerging Business leader in the field of
         IoT and Cognitive Technology with a noble mission
         for developing products indigenously and marketing
         them globally. We deal in the fields of Software 
         development, Embedded engineering CAD designing.
     </p>

<br><br>
 <hr>
<br><br>
<div class="log">
<?php
//if(isset($_SESSION['lev'] )){
//$lev=$_SESSION['lev'];
//}
   // }


if($_SESSION['lev']==1){
       
      echo ' <a href="/blog/admin/index.php"><button class="btn" >ادارة</button></a>'; 
    
}
else{
    $_SESSION['lev']=0;
  ?>  
  <img  src="log.png">
<form method="POST" action="" >
    <i class="fas fa-at"></i>
      البريد الالكتروني <br>
      <input class="inp" type="email" name="email"  required ><br>
       <i class="fas fa-unlock"></i> 
      كلمة المرور <br>
      <input class="inp" type="password" name="password" required><br>
      <input class="sub" type="submit" name="log" value="دخول">
</form>
 
 <?php } ?>

 </div>

 </div>

<?php  include'footer.php' ?>

</body>
</html>