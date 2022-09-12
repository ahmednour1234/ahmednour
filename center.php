<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hyper1.css">
    <link rel="stylesheet" href="hyper.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>El-Nour Center.</title>
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
    <div class="main">
        <h2>El-Nour Center</h2>
        <div class="icon">
        <i class="fa-solid fa-school"></i>
        </div>
        <div class="book">
            <form action="center.php" method="POST">
                <input type="text" placeholder="Enter Your Name In Arabic" name= "Name" required/>
                <input type="text" placeholder="Enter Your Id" name= "Id" required/>
                <input type="Level" placeholder="Enter Your Level" name="Level" required/>
                <input type="text" placeholder="Enter Name Your School" name="School" required/>
                <div class="buttons"><input type="submit" value="Enter" name="Send" class="main-btn" required/></div>
                
                <div class="main-btn1"><a href="vdata.php">Sign_In</a></div></div>
            </form>
            <?php
    $host="localhost";
    $user="root";
    $password="";
    $dbName ="center";
    $conn=mysqli_connect($host,$user,$password,$dbName);
    if(isset($_POST['Send'])){
    $pName  =$_POST['Name'];
    $pId =$_POST['Id'];
    $pLevel =$_POST['Level'];
    $pSchool =$_POST['School'];
    $query = "INSERT INTO student(name,id,level,school)VALUE('$pName','$pId','$pLevel','$pSchool')";
    if(mysqli_query($conn,$query)){
    echo "<p style='color:white'>"."The Enter is succeful"."</p>";
   
    }else{
        echo"<p style='color:white'>"."This Id not found"."</p>";
    }
    }
    ?>
        </div>
    </div>
</body>
</html>