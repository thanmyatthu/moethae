<?php
include("confs/config.php");

$id=$_GET['id'];
$sql= "DELETE FROM category WHERE id=$id" ;
mysqli_query($conn,$sql);
echo"Delete Successful";
header("location: cat-list.php");
?>
