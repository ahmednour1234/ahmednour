<?php
include "center1.PHP";
?>
<table>
    <th>The Id</th>
    <th>The Name</th>
    <th>The Level</th>
    <th>The School</th>
    

<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
$query ="SELECT*FROM student";
$result =mysqli_query($conn,$query);

if($result){
    while($row =mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['level']."</td><td>".$row['school']."</td><td>"."</td></tr>";
    }
}

?>
