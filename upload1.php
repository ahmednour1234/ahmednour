<?php 

$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
if(isset($_POST['submit']) && isset($_FILES['my-video'])){
    $video_name=$_FILES['my-video']['name'];
    $tmp_name=$_FILES['my-video']['tmp_name'];
    $error=$_FILES['my-video']['error'];
    $pName=$_POST['name'];
 if($error===0){
        $video_ex=pathinfo($video_name,PATHINFO_EXTENSION);
        $video_ex_lc =strtolower($video_ex);
        $allowed_exs=array("mp4","mp3","png","jpeg","jpg","mp2","webm","avi","flv");
        if(in_array($video_ex_lc,$allowed_exs)){
        $new_video_name =uniqid("video-",true).'.'.$video_ex_lc;
        $video_upload_path= 'uploads/'.$new_video_name;
        move_uploaded_file($tmp_name,$video_upload_path);
        $sql="INSERT INTO videos(video_url,name)VALUES('$new_video_name','$pName')";
        mysqli_query($conn,$sql);
        header('Location:view.php');

    }
}else{
    header("location:new.php");
}
}
?>
