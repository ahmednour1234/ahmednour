<?php

?>
<table>
    <th>The Id</th>
    <th>The Name</th>
    <th>The Level</th>
    <th>The School</th>
    <th>The Degree</th>
    <th>The Attendance</th>

<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
$database=new PDO("mysql:host=localhost;dbname=center;",$user,$password);
    if(isset($_GET['Search'])){
        $SEARCH =$database->prepare("SELECT*FROM student WHERE id LIKE :value OR name LIKE :value");
        $SEARCH_VALUE="%".$_GET['search']."%";
        $SEARCH->bindparam("value",$SEARCH_VALUE);
       $SEARCH->execute();
       $query ="SELECT*FROM student";
       $result =mysqli_query($conn,$query);
       while($row =mysqli_fetch_assoc($result)){
    foreach($SEARCH AS $data){
        echo "<tr><td>".$data['id']."</td><td>".$data['name']."</td><td>".$data['level']."</td><td>".$data['school']."</td><td>"."</td></tr>";
    }
}
    }
?>