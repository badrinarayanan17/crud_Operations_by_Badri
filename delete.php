<?php
include "authentication.php";

$sql = "delete from data where id='" .$_GET["id"] . "'";
if(mysqli_query($con,$sql)){
    header("Location:read.php");
}
else{
    echo "Error deleting the record".mysqli_error($con);
}
mysqli_close($con);
?>