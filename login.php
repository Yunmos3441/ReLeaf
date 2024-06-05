<?php
require_once('admin/private/initialize_f.php');

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$email = $_POST['email'];
	$password = $_POST['password'];

	// if there were no errors, try to login
	if (empty($errors)) {
		// Using one variable ensures that msg is the same
		$login_failure_msg = "Log in was unsuccessful. Wrong email or password";

		$user = get_user_by_email($email);
		if (!is_int($user)) {

			if ($password == $user['password']) {
				// echo password_verify_own($password, $user['password']);
				// password matches
				log_in_user($user);
				header("Location:index.php");
			} else {
				// email found, but password does not match
				$errors[] = $login_failure_msg;
				echo '<script language="javascript">';
				echo 'alert("Wrong email or password")';
				echo '</script>';
			}
		} elseif ($user == -3) {
			// no email found
			$errors[] = $login_failure_msg;
			echo '<script language="javascript">';
			echo 'alert("Wrong email or password")';
			echo '</script>';
		}
		else {
			echo "no";
		}
	}
}

$page_title = 'Releaf';
include('h_f/header.php');
?>

<main id="login_sign">
	<div style="margin: auto; width: 40%; padding: 10px;">
		<h1>Login</h1>

		<form action="login.php" method="post">

			Email:<br />
			<input type="text" name="email" required /><br />

			Password:<br />
			<input type="password" name="password" id="mypassword" show_password required />
			<br>
			<input type="checkbox" onclick="show_password()"> Show Password

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
			<input type="submit" name="submit" value="Login" />
		</form>

	</div>
</main>


<?php include('h_f/footer.php'); ?>