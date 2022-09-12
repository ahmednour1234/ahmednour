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
<a href="Admins.php">Admins</a>
<a href="center3.php">Show My Data</a>
<a href="#Contact">Contacts</a>
<a href="#Education"> Education</a>
</nav>
</header>
<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
$database=new PDO("mysql:host=localhost;dbname=center;",$user,$password);
$myFiles=$conn->prepare("SELECT*FROM files");
$myFiles->execute();
foreach($myFiles AS $data){
    $getfile ="data:".$data['type'].";base64,".base64_encode($data['file']);
    echo "<section class='cards' id='services'>"."<div class='card'>".$data['name'].'<img src="' .$getfile.'" >'."</div>"."</section>";
    echo "<div class='info'>".'<a href="'.$getfile.'">'."</a>"."</div>";
}
?>
</body>
</html>