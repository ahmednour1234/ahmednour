<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admins.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>EL-NOUR CENTER</title>
    <script>if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    </script>
</head>
<body>

<form method="GET">
    <div class="search"><input type="search" name="search" placeholder="Search By Id" required/></div>
    <div class="icon"><button type="submit" name="Search">Search...</div>
</form>
<table>
    <th>The Id</th>
    <th>The Name</th>
    <th>The Degree</th>
    <th>The attendance</th>
    <th>The Date</th>
    <th>Assignment Notes</th>
   


<?php
include "center1.php";
$host="localhost";
    $user="root";
    $password="";
    $dbName ="center";
    $database=new PDO("mysql:host=localhost;dbname=center;",$user,$password);
    if(isset($_GET['Search'])){
        $SEARCH =$database->prepare("SELECT*FROM went WHERE  id LIKE :value");
        $SEARCH_VALUE="%".$_GET['search']."%";
        $SEARCH->bindparam("value",$SEARCH_VALUE);
        $SEARCH->execute();
          foreach($SEARCH AS $data){
            echo "<tr><td>".$data['id']."</td><td>".$data['name']."</td><td>".$data['degree']."</td><td>".$data['attendance']."</td><td>".$data['date']."</td><td>".$data['notes']."</td><td>"."</td></tr>";
        }
}
?>
</body>
</html>
