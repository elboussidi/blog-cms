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
  </body>
</html>