<?php
 include "config.php";
 $id=$_GET['id'];
mysqli_query($con,"DELETE FROM `tbltodo` WHERE id=$id");
header("location:index.php");

?>