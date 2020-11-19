<?php
	$conn = mysqli_connect('itflabbyaum.mysql.database.azure.com', 'theeraphat@itflabbyaum', 'As0986782884!', 'ITFLab');

	$id = $_GET['ID'];

	$sql = 'SELECT * FROM guestbook WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: shows.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #0000ff;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">Edit</h1></div>
						</div>
						<form action="update.php" method="post">
							<input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
                            <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputfirstname">First Name</label>
        <input type="firstname" class="form-control" id="inputfirstname" placeholder="First Name" name="firstname" value="<?php echo $data['firstname']; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputlastname">Last Name</label>
        <input type="lastname" class="form-control" id="inputlastname" placeholder="Last Name" name="lastname" value="<?php echo $data['lastname']; ?>">
      </div>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Gender</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="gender">
        <option selected>-</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputage">Age</label>
        <input type="text" class="form-control" id="inputage" placeholder="Age" name="age" value="<?php echo $data['age']; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputphonenumber">Phone Number</label>
        <input type="text" class="form-control" id="inputphonenumber" placeholder="PhoneNumber" name="phone" value="<?php echo $data['phone']; ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="<?php echo $data['email']; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="<?php echo $data['password']; ?>">
      </div>
    </div>
							<div class="text-center">
								<button type="submit" class="btn btn-sm btn-warning my-3 font-weight-bold">SAVE</button>
								<a class="btn btn-sm btn-light my-3" href="shows.php">CANCEL</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>