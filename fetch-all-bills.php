<?php
include_once("connection.php");


$query="select * from bills";
$table=mysqli_query($dbCon,$query);
$arr=array();

while($row=mysqli_fetch_array($table))
{

        $arr[]=$row;

}
echo json_encode($arr);
?>