<?php
require_once('private/initialize_b.php');

$errors = [];
$username = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$username = $_POST['username'];
	$password = $_POST['password'];

	// if there were no errors, try to login
	if (empty($errors)) {
		// Using one variable ensures that msg is the same
		$login_failure_msg = "Log in was unsuccessful. Wrong username or password";

		$admin = get_admin_by_username($username);
		if ($admin) {

			if ($password == $admin['password']) {
				// echo password_verify_own($password, $admin['password']);
				// password matches
				log_in_admin($admin);
				header("Location:index.php");
			} else {
				// username found, but password does not match
				$errors[] = $login_failure_msg;
			}
		} else {
			// no username found
			$errors[] = $login_failure_msg;
		}
	}
}

$page_title = 'Releaf';
include('h_f/header.php');
?>

<div style="margin: auto; width: 40%; padding: 10px;">
	<h1>Log in</h1>

	<form action="login.php" method="post">

		Username:<br />
		<input type="text" name="username" required /><br />

		Password:<br />
		<input type="password" name="password" id="mypassword" required />
		<input type="checkbox" onclick="show_password()">Show Password

		<script>
			function show_password() {
				var x = document.getElementById("mypassword");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>

		<br><br>
		<input type="submit" name="submit" value="Submit" />
	</form>

</div>


<?php include('h_f/footer.php'); ?>