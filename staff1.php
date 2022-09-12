<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staff2.css">
    <title>EL-NOUR CENTER</title>
    <script>if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    </script>
</head>
<body>
<header>
    <a href="" class="logo">EL-NOUR CENtER</a>
    <nav class="navigation">
<a href="Maine.html">Main Page</a>
<a href="vdata.php">Show My Data</a>
<a href="Admins2.php">Admin</a>
</nav>
</header>
    <form action="" method="POST">
    <div class="class1"><input  type="password" placeholder="Enter Your Id" name="Id" required/>
        </div>
              <div class="class3"> 
                <input type="submit" value="Delete" name="Send3" class="main-btn3">
              </div>
</form>
<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
$like=mysqli_select_db($conn,$dbName);
$pId =$_POST['Id'];
if(isset($_POST['Send3'])){
    $res =mysqli_query($conn,"SELECT*FROM ourid");
    mysqli_query($conn,"DELETE from ourid where id ='$_POST[Id]'");
echo "delete succsefully";
}
?>
</body>
</html>