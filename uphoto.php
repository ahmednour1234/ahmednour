
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
    <a href="" class="logo">EL-NOUR CENtER</a>
    <nav class="navigation">
<a href="Admins2.php">Admins</a>
<a href="center3.php">Show My Data</a>
<a href="#Contact">Contacts</a>
<a href="#Education"> Education</a>
</nav>
</header>
<span>Select file to upload:</span>
<div class="book">
<form action="photo.php" method="post" enctype="multipart/form-data">
<div class="class1"><input  type="text" placeholder="Enter Name File" name="name" required/></div>
  <input type="file" name="file"id="file"class="main-btn"/><label for="file">Chosse file</label>
  <input type="submit" value="Upload Image" name="submit" class="main-btn1"/>
</form>
</div>

    
</body>
</html>