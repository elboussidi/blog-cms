<?php require '../config.php ' ?>
<?php include'../headr.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>تعديل</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../all.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<body>
  <div class='addpost'>
  <h2> تعديل مقال </h2>
  <form method='POST'  >
    <?php 
    session_start();
if(isset($_SESSION['lev'] )){
$lev=$_SESSION['lev'];

}
if($lev !=1){
    header("location:../index.php");
}
?>
   

      
    <?php  
    if(isset($_GET['id'])){
    $idmod=$_GET['id'] ;
 
   
   
    
$reed2="SELECT * FROM `posts` WHERE `id`=$idmod ";
$reedqr2= mysqli_query($conect, $reed2);
if(!$reedqr2){
    die("تعدر الوصول الي المقالات");
    
} else {   
//    echo ' <div class="post">';
 while ($row2 = mysqli_fetch_assoc($reedqr2)) {
       $id=$row2['id'];
    $title2=$row2['title'];
    $post2=$row2['post'];
    $autor2=$row2['autor'];
    $dat2=$row2['dat add']; 
    
   
    echo "

  عنوان المقال <input class='in2' type='text' name='title2' value='$title2'><br>

  <textarea name='post2' >$post2 </textarea><br>
  الكاتب <input class='in2' type='text' name='autor2' value='$autor2'><br>
   <input class='in3' type='submit' name='updat' value='تحديث' >  
  

     ";   
 }} }
      if(isset($_POST['updat'])){
  $ntitle=$_POST['title2'] ;
   $npost=$_POST['post2'] ;
    $nautor=$_POST['autor2'] ;
    
   $up=" UPDATE `posts` SET 
          `title`='$ntitle',
           `post`='$npost',`autor`='$nautor' WHERE `id`=$idmod  ";
    if(mysqli_query($conect, $up))    {

      header("location:posts.php");   
    }
 else {
        echo 'تعذر التحديث';    
    }
      }
    ?>
 

   
    
    </form> </div>
    

<?php include'../footer.php' ?>
</body>
</html>