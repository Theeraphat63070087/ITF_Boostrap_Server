<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabbyaum.mysql.database.azure.com', 'theeraphat@itflabbyaum', 'As0986782884!', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Name = $_POST['Name'];
$Comment = $_POST['Comment'];
$Link = $_POST['Link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$Name', '$Comment', '$Link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>