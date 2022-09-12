<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL-NOUR CENTER</title>
    <script>if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    </script>
</head>
<?php 

$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
if(isset($_POST['submit']) && isset($_FILES['file'])){
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error=$_FILES['file']['error'];
   $pName=$_POST['name'];
 if($error===0){
        $file_ex=pathinfo($file_name,PATHINFO_EXTENSION);
        $file_ex_lc =strtolower($file_ex);
        $allowed_exs=array("mp4","mp3","png","jpeg","jpg","mp2","webm","avi","flv","pdf","docs");
        if(in_array($file_ex_lc,$allowed_exs)){
        $new_file_name =uniqid("file-",true).'.'.$file_ex_lc;
        $file_upload_path= 'upload0/'.$new_file_name;
        move_uploaded_file($tmp_name,$file_upload_path);
        $sql="INSERT INTO files(photos,name)VALUES('$new_file_name','$pName')";
        mysqli_query($conn,$sql);
        header('Location:vphoto.php');
    }
}else{
    header("location:new.php");
}
}
?>