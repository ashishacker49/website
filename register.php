<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} */
require_once 'databasecon.php';


if (isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $phn=$_POST['phn'];
}
$sql="INSERT INTO users (fname, lname, email, pass, phone)
    VALUES('".$fname."', '".$lname."' , '".$email."', '".$pass."', '".$phn."')";

        





if (mysqli_query($conn, $sql)) {
  echo "YOU are successfully registered";
 header("Refresh: 3; url=login.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

