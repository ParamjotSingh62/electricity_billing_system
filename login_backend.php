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
$field=$_POST["field"];
$phone=$_POST["numberPhone"];
$password=$_POST["txtPassword"];
if($field=="Admin" && $phone==123 && $password=="admin"){
    ?>
            <div style="background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));height:100%"><h2>Successfully Logged in as Admin</h2></div>
            <script type="text/javascript">setTimeout("window.location='index.html'",3000);
            </script>
            <?php
}
else {
    $query="select * from residents where mobile='$phone'";
    $table=mysqli_query($dbCon,$query);
    $row=mysqli_fetch_array($table);
    if(mysqli_num_rows($table)==1 && $password==$row["password"] ){
        ?>
                    <div style="background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));height:100%"><h2>Successfully Logged in as Customer</h2></div>
                    <script type="text/javascript">setTimeout("window.location='customer.html'",3000);
                    </script>
                    <?php
    }else {

    ?>
        <div style="background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));height:100%"><h2>Incorrect Password or Mobile Number</h2></div>
        <script type="text/javascript">setTimeout("window.location='login.html'",3000);
        </script>
        <?php
    }
}


?>
</body>
</html>
