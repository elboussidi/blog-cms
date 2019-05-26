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
  <body dir="rtl" >
<div class="po" "><br><br>
  
    <table border='2px'>
                <tr>
               <td>#</td>
               <td>صاحب التعليق  </td>
               <td>التعليق </td>
               <td>حدف</td>
               <td>الحالة</td>
             </tr>
      <?php  
      $sqlcom="SELECT * FROM `com` ";

      $sq3= mysqli_query($conect, $sqlcom);
      if(!$sq3){
          echo 'لم نتمكن من الوصول الي البيانات';
      }
      else{
          while ($row3 = mysqli_fetch_assoc($sq3)) {
                $rank=$row3['rank'];
                $autcom=$row3['autcom'];
                $com=$row3['com'];
                 $comid=$row3['id'];
                 $statu=$row3['status'];
                 $tot= mysqli_num_rows($sq3);

               echo "
               

             <tr>
               <td class='id' >$rank</td>
               <td class='ti' >$autcom</td>
               <td class='au' >$com</td>
                   
                 <td class='del'><a href='/blog/admin/del.php?id2=$comid' class='btnd' >  حدف </a></td>
       <td class='del'>  '.  ($statu=='def'? '<a href="mancom.php?id2=$comid&status=pub" class="btnd" >k</a>' : '<a href="mancom.php?id2=$comid&status=pub" class="btnd">m</a> ')  . ' </td>

      
             </tr>
        ";
              
        
          
        
}
//'
                    
//  if(empty($autcom)){
//                   $autname=" مجهول";
//               }
 echo '<h3>عدد التعليقاتء ('. $tot.') </h3>';
                }
                
      ?> 
         
    </table>
       </div>
  </body>
</html>