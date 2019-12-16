<?php
require_once("config.php");
require_once("function.php");

function login(){
	if(isset($_POST['login_submit'])){
	$login_username = htmlentities($_POST['u_name']);
	$login_password = htmlentities($_POST['pwd']);
	GLOBAL $con;    
			$query = " SELECT * FROM `users_tbl` WHERE `username` = '{$login_username}' AND `password` = '{$login_password}' ";
			$run_query = mysqli_query($con, $query);
			            
			if(mysqli_num_rows($run_query) > 0){
			session_start();
			while($result = mysqli_fetch_assoc($run_query)){
			$user_id = $result['id'];
			$_SESSION['user'] = $user_id;
			?>
			<script type="text/javascript">
				window.location.href = "index.php";

			</script>
			<?php
			}
			}
			else{
			$error_msg = "Login Failed";
			}
		}
	}
function user_logout(){
		if(isset($_POST['logout_btn'])) {
			session_destroy();
			?>
				<script type="text/javascript">
					window.location.href = "login.php";
				</script>
			<?php
		}
	}
?>