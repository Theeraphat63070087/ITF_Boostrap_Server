<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabbyaum.mysql.database.azure.com', 'theeraphat@itflabbyaum', 'As0986782884!', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">First Name</div></th>
    <th width="100"> <div align="center">Last Name </div></th>
    <th width="100"> <div align="center">Gender </div></th>
    <th width="100"> <div align="center">Age </div></th>
    <th width="100"> <div align="center">Phone Number </div></th>
    <th width="100"> <div align="center">Email </div></th>

  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['firstname'];?></div></td>
    <td><?php echo $Result['lastname'];?></td>
    <td><?php echo $Result['gender'];?></td>
    <td><?php echo $Result['age'];?></td>
    <td><?php echo $Result['phone'];?></td>
    <td><?php echo $Result['email'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
