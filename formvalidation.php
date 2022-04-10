<html>
<head>
<style>
table {
font-size:large;
border:1px solid black;
}
th,td {
border:1px solid black;
padding: 5px;
}

</style>
</head>
<body>
<h1> Students Details </h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abcd"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

else {
echo"Connected successfully";
}

$sql = "INSERT INTO abcde(username, email, phonecode, phone) VALUES (masti,'masti@gmail.com','+91','9493462511')" ;

if (mysqli_query($conn, $sql) == TRUE) {
    echo"New row added successfully";
}
else {
    echo mysqli_error($conn);
}

$sql = 'SELECT*from abcde';

$retval = mysqli_query($conn, 'SELECT*from abcde');

if (!$retval) {
die("Could not get the data".mysqli_error($conn));
}

while($row = mysqli_fetch_array($retval)){
echo "username: ".$row['username']."<br>";
echo "email: ".$row['email']."<br>";
echo "phonecode: ".$row['phonecode']."<br>";
echo "phone:".$row['phone']."<br>";
} 
echo "Fetched data successfully\n";
?>
<table>
<tr>
<th> username</th>
<th> email </th>
<th> phonecode</th>
<th> phone </th>
</tr>

<?php
$retval = mysqli_query($conn, 'SELECT*from abcd');
while($row = mysqli_fetch_array($retval)) {
?>
<tr>
  <td><?php echo$row['username']; ?></td>
<td><?php echo$row['email']; ?></td>
<td><?php echo$row['phonecode']; ?></td>
<td><?php echo$row['phone']; ?></td>
<?php
}
mysqli_close($conn);
?>
</table>
</body>
</html>
