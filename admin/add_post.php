<?php require '../config.php ' ?>
<?php include'../headr.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>مقال جديد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../all.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<body>
  
    <?php 
    session_start();
if(isset($_SESSION['lev'] )){
$lev=$_SESSION['lev'];
$autor=$_SESSION['name'];

}
if($lev !=1){
    header("location:../index.php");
}
    
    if(isset($_POST['submit2'])){
        $title=$_POST['title'];
         $post=$_POST['post'];
          
       
     
         $path='http://localhost/blog/img/'.$_FILES['file']['name'];
      $dir="../img/".$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$dir);
        if($post == ""){
            
  
     $insert="INSERT INTO `posts` 
         (`id`, `title`, `img`, `post`, `autor`, `dat add`)
           VALUES 
          ('','$title',' $path', '$post', '$autor', CURRENT_TIMESTAMP)
          ";
     
   $query= mysqli_query($conect,$insert);
               if(!$query){
   
                   die("لم يتم النشر" . mysqli_error($conect) );
    }
 else {
        echo '<div class="yes">تمت اضافة المقال  بنجاح جاري تحويلك للرئيسة </div>';
         echo '<meta http-equiv="refresh" content="3; \'../index.php\' /> " ';
    }
   }
   
 else {
       echo '<div class"no"> لايمكن ترك حل المقال فارغ </div>';   
   }
     }
    ?>
    
    
    
<div class="addpost">
  <h2> اصافة مقال جديد </h2>
  <form method="POST" action="" enctype="multipart/form-data" >
      عنوان المقال <input class="in2"type="text" name="title" required><br>
  صورة المقال <input class="file" type="file" name="file" required><br>
  <textarea name="post" > </textarea><br>
<!--  الكاتب <input class="in2"type="text" name="autor"><br>-->
   <input class="in3" type="submit" name="submit2" value="نشر"class="fas fa-location-arrow">  
  
</form>
</div>
<?php include'../footer.php' ?>
</body>
</html>