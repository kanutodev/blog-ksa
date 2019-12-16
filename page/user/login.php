<?php 
include '../../function/user_function.php';

?>

<!DOCTYPE html>
<html>
<head>
	<?php include '../../includes/link/css_link.php'?>
	<title></title>
	
</head>

<body style="background-image: url('../../assets/img/local.jpg'); background-size: cover;">
	<div class="container-fluid">
		<div class="row justify-content-around my-5">
			<form method="POST" class="col-md-4" style="background-color: #ffffff; border-radius: 20px;">
				<h2 class="text-center">LogIn</h2>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="u_name" autocomplete="off" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="pwd" autocomplete="off" placeholder="Password" required>
				</div>
				<button type="submit" name="login_submit" class="btn btn-info">Login</button>
			</form>
		</div>
	</div>
	
</body>
</html>

<?php
login();
?>
	<?php include '../../includes/link/js_link.php'?>
