<html>

<head>
      <title>Redirecting</title>
      <meta http-equiv = "refresh" content = "3; url = home.php" />
</head>
<body>


<?php
$value1 = $_POST["username"];
$value2 = $_POST["pwd"];
$value3 = $_POST["roleid"];
$value4 = $_POST["emailadd"];
$value5 = $_POST["fname"];
$value6 = $_POST["lname"];
$value7 = $_POST["bdate"];
$value8 = $_POST["gender"];
$value9 = $_POST["phone"];

echo $value1;
echo "  ";
echo $value2;
echo " ";
echo $value3;
echo " ";
echo $value4;
echo $value5;
echo "  ";
echo $value6;
echo " ";
echo $value7;
echo " ";
echo $value8;
echo " ";
echo $value9;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artgallery";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "<br/>connected to database successfully<br/>";
}

$sql = "insert into user (user_name,password,role_id,email,first_name,last_name,birth_date,gender,phone_number) values ('$value1', '$value2', '$value3','$value4','$value5','$value6','$value7','$value8','$value9')";
if ($conn->query($sql) === TRUE) {
    echo "<br>Inserted successfully<br>";

} else {
    echo "<br>Error creating table: " . $conn->error;
}
$conn->close();
?>
<form action="home.php" method="post"> 
</body>
</html>