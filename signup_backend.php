<?php
include_once("connection.php");
$fullName=$_GET["uid"];
$password=$_GET["pwd"];
$mobile=$_GET["mobile"];
echo $fullName;
echo $password;
echo $mobile;
$query="insert into residents values('$mobile','$fullName',$password)";
mysqli_query($dbCon,$query);
$error=mysqli_error($dbCon);
if($error=="")
{
    echo "Successfully Signed Up ";
}
else
    echo $error;


?>
