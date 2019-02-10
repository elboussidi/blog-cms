<?php require 'config.php'; ?>
<?php include'headr.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="main.css">

    <title> التفاصيل</title>
  </head>
  <body>

    
    <?php
if(isset($_GET['id'])){
    
    $iid=$_GET['id'];

$single="SELECT * FROM `posts` WHERE `id`='$iid'";
$sqlsingle= mysqli_query($conect, $single);
if(!$sqlsingle){
    die("تعدر الوصول الي المقالات");
    
} else {   
    echo ' <div class="post">';
 while ($row = mysqli_fetch_assoc($sqlsingle)) {
    $title1=$row['title'];
    $post1=$row['post'];
    $img1=$row['img'];
    $autor1=$row['autor'];
    $dat1=$row['dat add']; 
    $id2=$row['id'];
//$newdat=mb_substr( "$dat1 " , 0 , 11 , "utf8" );

    
            echo "
  </div>
        <div class='single'>
          <h2> $title1 </h2>
          <img src='$img1'>
          <div  class='aut'>  بقلم :<br> $autor1</div>
          <p>
             $post1 
          </p>

        </div>
        ";
}}}
?>
      <div class="com">
        <h2> comont </h2>
      <?php 
      if(isset($_POST['send'])){
          $ncom=$_POST['autcom'];
          $com=$_POST['com'];
          
          
      $dd="INSERT INTO `com` (`id`, `autcom`, `com`, `rank`) VALUES ('', '$ncom', '$com', '$id2')";
      
      if(mysqli_query($conect, $dd)){
          
         
      }
      
      }
      
      $redcom="SELECT `id`, `autcom`, `com`, `rank` FROM `com` WHERE `rank`=$id2 ORDER BY id DESC " ;
      $que=mysqli_query($conect, $redcom);
        if($que){
          while ($row1 = mysqli_fetch_assoc($que)) {
              $autname=$row1['autcom'];
               $com=$row1['com'];
               if(empty($autname)){
                   $autname=" aucan author";
               }
               echo "
              


            <div class='out'> 
                <h1>$autname</h1>
                <p>
                   $com
                </p>

            </div>

                       ";
               
       
          }  
          
      }
      
      ?>
       

<hr>
<h2> add comont </h2>
 <br>
 <form method="POST">
 your name : <input type="text" name="autcom"/><br><br>
  your com :
  <textarea name="com" class="comtxt">

 </textarea>
<br><br>
<input class="sub" type="submit" name="send" value="add com"/>
 </form>
</div
      
      
  </body>
</html>