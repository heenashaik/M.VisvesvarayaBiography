<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student_DB";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!conn){
    die ("connection Failed".mysqli_connect_error());
}

else{
$sql='SELECT * from Students_DB';
$retval = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($retval))
{
echo $row['USN']."<br>";
echo $row['NAME']."<br>";
echo $row['SEMESTER']."<br>";  
}
echo "Fetched data successfully"
?>