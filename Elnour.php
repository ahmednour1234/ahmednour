<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Elnour.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>El-Nour Hospital.</title>
</head>
<body>
    <div class="main">
        <h2>El-Nour Hospital</h2>
        <div class="icon">
            <i class="fa-solid fa-hospital"></i>
        </div>
        <div class="book">
            <p>Welcome To El-Nour Hospital For Booking  Fill Out The Following Form. </p>
            <form action="Elnour.php" method="post">
                <input type="text" placeholder="Enter Your Name" name= "Name" required/>
                <input type="email" placeholder="Enter Your E-mail" name= "Email" required/>
                <input type="date" placeholder="Enter Your Date Born" name="Date" required/>
                <input type="submit" value="Book Now" name="Send" class="main-btn" required/>
            </form>
            <?php
    $host="localhost";
    $user="root";
    $password="";
    $dbName ="hospital";
    $conn=mysqli_connect($host,$user,$password,$dbName);
    if(isset($_POST['Send'])){
    $pName  =$_POST['Name'];
    $pEmail =$_POST['Email'];
    $pDate  =$_POST['Date'];
    $query = "INSERT INTO data(name,email,date)VALUE('$pName','$pEmail','$pDate')";
    $result =mysqli_query($conn,$query);
    echo "<p style='color:white'>"."The Book is succeful"."</p>";
    }
    ?>
        </div>
    </div>
</body>
</html>