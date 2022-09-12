<?php
include "center1.PHP";

?>
<table>
    <th>The Id</th>
<?php
$host="localhost";
$user="root";
$password="";
$dbName ="center";
$conn=mysqli_connect($host,$user,$password,$dbName);
$query ="SELECT*FROM ourid";
$result =mysqli_query($conn,$query);

if($result){
    while($row =mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td></tr>";
    }
}

?>
