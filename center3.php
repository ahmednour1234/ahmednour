<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hyper2.css">
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
    <a href="." class="logo">EL-NOUR CENtER</a>
    <nav class="navigation">
<a href="Maine.html">Main Page</a>
<a href="center3.php">Show My Data</a>
<a href="Admins2.php">Admins</a>
</nav>
</header>
    <div class="main">
        <h2>El-Nour Center</h2>
        <div class="icon">
        <i class="fa-solid fa-school"></i>
        </div>
        <div class="book">
            <form action="center3.php" method="POST">
                <input type="text" placeholder="Enter Your Name In Arabic" name= "Name" required/>
                <input type="text" placeholder="Enter Your Id" name= "Id" required/>
                <input type="submit" value="Enter" name="Send" class="main-btn" required/>
              <div class="main-btn1"><a href="center.php">Create Account</a></div>
            </form>
            <?php
session_start();
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
if(isset($_POST['Send'])){
$Name =$_POST['Name'];
$ID =$_POST['Id'];
$sql="select*from student where name='$Name' && Id='$ID'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows(mysqli_query($conn,$sql)) > 0){
    $_SESSION['Name']=$Name;
    header("location:vphoto.php");


}else{
    $alert ="<script>alert('This Account Not Found')</script>";
    echo"<div>".$alert."</div>";
}
}
?>

        </div>
    </div>
</body>
</html>