<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hyper1.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>El-Nour Center</title>
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
<a href="vphoto.php">Show Books</a>
<a href="view.php">Show Videos</a>
</nav>
</header>
</body>
</html>
<table>
    <th>The Id</th>
    <th>The Name</th>
    <th>The Degree</th>
    <th>The Attendance</th>
    <th>The Date</th>
    <th>Assignment Notes</th>
<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
if(isset($_GET['Send'])){
$ID =$_GET['Id'];
$Name=$_GET['Name'];
$sql="SELECT*FROM went WHERE id='$ID' && name='$Name'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows(mysqli_query($conn,$sql))){
    while($sqli= mysqli_fetch_assoc($result))
        echo "<tr><td>".$sqli['id']."</td><td>".$sqli['name']."</td><td>".$sqli['degree']."</td><td>".$sqli['attendance']."</td><td>".$sqli['date']."</td><td>".$sqli['notes']."</td><td>"."</td></tr>";
}
else{
    $alert ="<script>alert('This Account Not Found')</script>";
    echo"<div>".$alert."</div>";
    header("location:vdata.php");
    


}
}
?>
