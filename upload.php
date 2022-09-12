<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
$database=new PDO("mysql:host=localhost;dbname=center;",$user,$password);

if(isset($_POST['submit'])){
    $dir_name=dirname(__FILE__);
$path = file_get_contents($_FILES['upload']['tmp_name']);
$name = $_FILES['upload']['name'];
$size = $_FILES['upload']['size'];
$type = $_FILES['upload']['type'];
$error = $_FILES['upload']['error'];

$addfiles=$database->prepare("INSERT INTO files(file,name,type)VALUES(:file,:name,:type)");

if($addfiles->execute()){
    echo"good work";
}else{
    echo"sorry this is bad work";
}
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>EL-NOUR CENTER</title>
    <script>if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    </script>
</head>
<body>
<header>
    <a href="." class="logo">EL-NOUR CENtER</a>
    <nav class="navigation">
<a href="Admins2.php">Admins</a>
<a href="center3.php">Show My Data</a>
<a href="#Contact">Contacts</a>
<a href="#Education"> Education</a>
</nav>
</header>
<span>Select file to upload:</span>
<div class="book">
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="upload"id="file"class="main-btn"/><label for="file">Chosse file</label>
  <input type="submit" value="Upload Image" name="submit" class="main-btn1"/>
</form>
</div>

    
</body>
</html>