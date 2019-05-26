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
               <td>الاسم الكامل </td>
               <td>البريد </td>
               <td>حدف</td>
              
             </tr>
      <?php  
      $sqlad="SELECT * FROM `admin`
";
      $sq2= mysqli_query($conect, $sqlad);
      if(!$sq2){
          echo 'لم نتمكن من الوصول الي البيانات';
      }
      else{
          while ($row2 = mysqli_fetch_assoc($sq2)) {
                $adname=$row2['name'];
                $adid=$row2['id'];
                $ademail=$row2['email'];
                 $tot= mysqli_num_rows($sq2);
                
 
               echo "
               

             <tr>
               <td class='id' >$adid</td>
               <td class='ti' >$adname</td>
               <td class='au' >$ademail</td>
                 <td class='del'><a href='/blog/admin/del.php?id=$adid' class='btnd' ><buttononclick='ax()'>  حدف </button >
       </a></td>

      
             </tr>
       
              
         ";
          
        
}
       
 echo '<h3>الاعضاء ('. $tot.') </h3>';
                }
      ?> 
          
             <a href="addadmin.php"><button class="btn"  >اضافة مسؤول   </button></a>
    </table>
       </div>
      
     
<script type="text/javascript">
	
function ax(){
var c=window.confirm("Are you sure you want to save changes ?") ;
if(c) {
onclick="location.href ='/blog/admin/dadmin.php' ;"
} else {
alert("ok");
} }
</script>

  </body>
</html>