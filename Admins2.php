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
<form method="POST" action="Admins2.php">
    <div class="search"><input type="password" name="search" placeholder="password" required/></div>
    <div class="icon"><button type="submit" name="Search">Enter...</div>
</form>
<?php
include "center1.php";
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
if(isset($_POST["Search"])){
$psearch=$_POST['search'];
if($_POST['search']==30204030200290){
    header('location:Admins.php');
}elseif($_POST['search']==30204030200291){
    header('location:Admins1.php');
}elseif($_POST['search']==30204030200292){
header('location:new.php');
}elseif($_POST['search']==30204030200293){
    header('location:ourid.php');
}elseif($_POST['search']==30204030200294){
        header('location:showid.php');
}
elseif($_POST['search']==30204030200295){
    header('location:staff1.php');
}
elseif($_POST['search']==30204030200297){
    header('location:staff.php');
}
elseif($_POST['search']==30204030200296){
    header('location:svideo.php');
}
else{
    echo "...";
}
}
?>
</body>
</html>
