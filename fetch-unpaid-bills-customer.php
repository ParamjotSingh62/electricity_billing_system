<?php
include_once("connection.php");

$mobile=$_GET['mobile'];
$query="select * from bills where mobile='$mobile' and status='Unpaid'";
$table=mysqli_query($dbCon,$query);
$arr=array();

while($row=mysqli_fetch_array($table))
{

        $arr[]=$row;

}
echo json_encode($arr);
?>