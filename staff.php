<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staff.css">
    <title>EL-NOUR CENTER</title>
</head>
<body>
<header>
    <a href="" class="logo">EL-NOUR CENtER</a>
    <nav class="navigation">
<a href="Maine.html">Main Page</a>
<a href="vdata.php">Show My Data</a>
<a href="Admins.php">Admin</a>
</nav>
</header>

    <form action="" method="POST">
    <div class="class1"><input  type="text" placeholder="Enter Your Id" name="Id" required/>
    <input  type="text" placeholder="Enter Your Name" name="Name" required/>
                <input type="text" placeholder="Enter Degree" name="Degree" required/>
                <input type="Date" placeholder="Enter Date of Day" name="Date" required/>
                <input type="text" placeholder="Enter Assignment Notes" name="notes" required/>
             <div class="class2">   <select name="icon">
                    <option >حاضر</option>
                    <option>غائب</option>
                </select>
            </div>
        </div>
              <div class="class3"> <input type="submit" value="UPDATE" name="Send1" class="main-btn1">
                <input type="submit" value="INSERT" name="Send2" class="main-btn2">
                <input type="submit" value="DELETE" name="Send3" class="main-btn3">
              </div>
</form>
<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
$like=mysqli_select_db($conn,$dbName);
if(isset($_POST["Send2"])){
    $pId =$_POST['Id'];
    $pName=$_POST['Name'];
    $pDegree =$_POST['Degree'];
    $pDate =$_POST['Date'];
    $picon =$_POST['icon'];
    $pnotes =$_POST['notes'];
    $res =mysqli_query($conn,"SELECT*FROM went");
 mysqli_query($conn,"INSERT INTO went(id,name,degree,attendance,notes,date)values('$_POST[Id]','$_POST[Name]','$_POST[Degree]','$_POST[icon]','$_POST[notes]','$_POST[Date]')");
echo "Insert succsefully";
}
if(isset($_POST['Send1'])){
    $res =mysqli_query($conn,"SELECT*FROM went");
    mysqli_query($conn,"UPDATE went Set name='$_POST[Name]',degree ='$_POST[Degree]',attendance='$_POST[icon]',notes='$_POST[notes]',date='$_POST[Date]' where id='$_POST[Id]'");
echo "Update succsefully";
}
if(isset($_POST['Send3'])){
    $res =mysqli_query($conn,"SELECT*FROM went");
    mysqli_query($conn,"DELETE from went where id ='$_POST[Id]'");
echo "delete succsefully";
}
?>
</body>
</html>