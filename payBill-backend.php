<?php
include_once("connection.php");

$billNo=$_GET['billNo'];
$query="update bills set status = 'Paid' where billNo='$billNo'";
mysqli_query($dbCon,$query);
$error=mysqli_error($dbCon);
if($error=="") {
    echo true;
}
else {
    echo $error;
}

?>