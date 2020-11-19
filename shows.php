<html>
<head>
<title>ITF Lab</title>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <head>
<style>
    .card {
			border-top: solid 5px #ffc107;
		}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
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
<body class="bg-light py-6">
	<div class="container text-dark">
		<div class="row">
			<div class="col-15 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">Data</h1></div>
							<div class="col-6 text-right"><a href="form.php" class="btn btn-warning btn-sm font-weight-bold">ADD</a></div>
                        </div>
                        <div class="table-responsive">
<table border="1" id="customers" class='table'>
  <tr>
    <th> <div align="center">First Name</div></th>
    <th> <div align="center">Last Name </div></th>
    <th> <div align="center">Gender </div></th>
    <th> <div align="center">Age </div></th>
    <th> <div align="center">Phone Number </div></th>
    <th> <div align="center">Email </div></th>
    <th> <div align="center">Action </div></th>

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
    <td><a href="delete.php?ID=<?php echo $Result['ID'];?>" class="btn btn-sm btn-danger mb-2 mb-md-0">DEL</a> <a href="edit.php?ID=<?php echo $Result['ID'];?>" class="btn btn-sm btn-dark">EDIT</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
