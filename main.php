<?php
include "p.PHP";
?>
<table>
    <th>The Number</th>
    <th>The Name</th>
    <th>The Email</th>
    <th>The Date</th>

<?php
$host="localhost";
$user="root";
$password="";
$dbName ="hospital";
$conn=mysqli_connect($host,$user,$password,$dbName);

$query ="SELECT*FROM data";
$result =mysqli_query($conn,$query);
if($result){
    while($row =mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td></tr>";
    }
}


?>
