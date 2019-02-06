<?php require '../config.php ' ?>
<?php include'../headr.php' ?>
    <?php 
    session_start();
if(isset($_SESSION['lev'] )){
$lev=$_SESSION['lev'];

}
if($lev !=1){
    header("location:../index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../main.css">

    <title>تحرير</title>
  </head>
  <body dir="rtl">
<div class="po" ><br><br>
  
    <table border='2px'>
                <tr>
               <td>#</td>
               <td>العنوان</td>
               <td>الكاتب</td>
               <td>حدف</td>
               <td>تعديل</td>
             </tr>
      <?php  
      $sqlpo="SELECT * FROM `posts`";
      $sq= mysqli_query($conect, $sqlpo);
      if(!$sq){
          echo 'لم نتمكن من الوصول الي البيانات';
      }
      else{
          while ($row2 = mysqli_fetch_assoc($sq)) {
                $ti=$row2['title'];
                $id=$row2['id'];
                $aut=$row2['autor'];
                 $tot= mysqli_num_rows($sq);
                
 
               echo "
               

             <tr>
               <td class='id' >$id</td>
               <td class='ti' >$ti</td>
               <td class='au' >$aut</td>
                 <td class='del'><a href='/blog/admin/del.php?id=$id' class='btnd' >  حدف 
       </a></td>

       <td class='mod'><a href='/blog/admin/mod.php?id=$id' class='btnm' >  تعديل </a></td>
             </tr>
       
              
         ";
          
        
}
       
 echo '<h3>المقالات ('. $tot.') </h3>';
                }
      ?> 
    </table>
       </div>
  </body>
</html>