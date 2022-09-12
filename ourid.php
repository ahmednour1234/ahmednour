<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ourid.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/all.min.css">
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
<a href="center3.php">Show My Data</a>
<a href="Admins2.php">Admin</a>
</nav>
</header>

<form method="POST" action="ourid.php">
    <div class="search"><input type="password" name="id" placeholder="Enter New Id" required/></div>
    <div class="icon"><button type="submit" name="Send">Enter...</div>
    <?php

$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
if(isset($_POST['Send'])){
$pId  =$_POST['id'];
$query = "INSERT INTO ourid(id)VALUE('$pId')";

if(mysqli_query($conn,$query)){

}
}


?>
</form>
</body>
</html>
