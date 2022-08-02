<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript">
</script>
</head>
<body>
<?php
include_once("connection.php");
$fullName=$_POST['txtName'];
$mobile=$_POST['numberMobile'];
$meterNumber=$_POST['txtMeter'];
$address=$_POST["txtAddress"];
$password=$_POST["txtPassword"];
$confirmPassword=$_POST["txtConfirmPassword"];
if($password!=$confirmPassword) {
?>
<div style="background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));height:100%"><h2>Confirm password doesn't match with your Password<h2></div>
<script type="text/javascript">setTimeout("window.location='signup.html'",3000);
</script>
<?php
}
else{
$query="insert into residents values('$mobile','$meterNumber','$fullName','$address','$password')";
mysqli_query($dbCon,$query);
$error=mysqli_error($dbCon);
if($error=="")
{?>
<script>
setTimeout("window.location='login.html'",3000);</script>
<?php
}
else{
?>
<div style="background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));height:100%"><h2><?php echo $error ?></h2></div>
<script type="text/javascript">setTimeout("window.location='signup.html'",3000);
</script>
<?php
}


}
?>
</body>
</html>

