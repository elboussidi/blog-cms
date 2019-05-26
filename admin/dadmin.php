<?php require '../config.php ' ?>
<?php 
if(isset($_GET['id'])){
    $iddel=$_GET['id'] ;
    
 $del="DELETE FROM `admin` WHERE `id`='$iddel';";
 if(mysqli_query($conect, $del)){
     
     header("location:lsadmin.php");
     
 }
    
    
    
    
    
    
    
    
}



?>
