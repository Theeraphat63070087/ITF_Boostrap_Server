<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabbyaum.mysql.database.azure.com', 'theeraphat@itflabbyaum', 'As0986782884!', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO guestbook (
    firstname, 
    lastname,
    gender,
    age,
    phone,
    email,
    password
    ) VALUES ('".$firstname."', '".$lastname."', '".$gender."', '".$age."', '".$phone."', '".$email."', '".$password."')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>