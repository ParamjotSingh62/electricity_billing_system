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
$units=$_POST['numberUnits'];
$amount=$_POST["numberAmount"];
$dueDate=$_POST["dateDue"];
$query="insert into bills(mobile,name,dateOfBillGenerate,units,amount,dueDate,status) values('$mobile','$fullName', curdate(),'$units','$amount','$dueDate','Unpaid')";
mysqli_query($dbCon,$query);
$error=mysqli_error($dbCon);
if($error==""){
    echo "Successful";

}
else {
    echo $error;
}


?>
</body>
</html>
