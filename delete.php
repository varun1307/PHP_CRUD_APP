<?php
$db=new mysqli("localhost","root","","radar");
if(isset($_GET['Del'])){
    $id=$_GET['Del'];
    $q=$db->query("DELETE FROM employee where id='".$id."'");

    if($q>0){
        header('Location:data.php');
      }
      else{
          echo 'error occured';
      }
}
?>