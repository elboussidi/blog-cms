<?php require '../config.php '?>
<?php 
if($lev !=1){
    header("location:../index.php");


}


if(isset($_GET['id'])){
    $iddel=$_GET['id'] ;
    
 $del="DELETE FROM `admin` WHERE `id`='$iddel';";
 if(mysqli_query($conect, $del)){
     
     header("location:lsadmin.php");

     
 }
    

} 
    




?>
<?php 
if(isset($_GET['id2'])){
    $iddel2=$_GET['id2'] ;
    
 $del="DELETE FROM `com` WHERE `id`='$iddel2';";
 if(mysqli_query($conect, $del)){
     
      header("location:mangcom.php");
     
 }
    

} 



?>
<?php 
if(isset($_GET['id3'])){
    $iddel3=$_GET['id3'] ;
    
 $del3="DELETE FROM `posts` WHERE `id`='$iddel3';";
 if(mysqli_query($conect, $del3)){
     
      header("location:posts.php");
     
 }
    

} 



?>