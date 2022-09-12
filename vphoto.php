<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
*{
font-family:'Poppins',sans-serif;
margin: 0;
padding: 0;
box-sizing: border-box;

}
        body{
            background:url(1.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}
        header{
    background-color: aliceblue;
    width: 100%;
    position: fixed;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 200px;
    margin-bottom :30px; ;
    }
.logo{
    text-decoration: none;
    color: rgb(90, 87, 72);
    text-transform: uppercase;
    font-weight: 700;
    font-size: 1.8em;
}
.navigation a{
    text-decoration: none;
    color: rgb(90, 87, 72);
    font-size: 1em;
    font-weight: 500;
    font-size: 20px;
    margin: 10px;
}
.navigation a:hover{
    color: dodgerblue;
}
        embed{
            width: 1160px;
            height: 1160px;
            margin: 20px;
            margin-top: 70px;
        }
       
      

</style>

</head>
<body>
<header>
    <a href="" class="logo">EL-NOUR CENtER</a>
    <nav class="navigation">
<a href="Maine.html">Main Page</a>
<a href="center3.php">Show My Data</a>
<a href="Admins2.php">Admin</a>
<a href="#Education"> Education</a>
</nav>
</header>
    <div claas="alb">
        <?php
        $host="localhost";
        $user="root";
        $password="";
        $dbName ="center";
        $conn=mysqli_connect($host,$user,$password,$dbName);
        $sql="SELECT*FROM files ORDER BY id DESC";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($video=mysqli_fetch_array($res)){
        ?>
       <embed  type="application/pdf" src="upload0/<?php echo $video['photos'];?>"></embed>
        <?php
       
        }
    }else{
        echo "<h1>empty</h1>";
    
    };
        ?>
    </div>
    
</body>
</html>