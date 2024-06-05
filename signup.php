<?php
require_once('admin/private/initialize_f.php');

$errors = [];
$email = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    if (create_new_user($email, $password, $nickname)) {
        header("Location:login.php");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Something went wrong, please try again later. If you have seen this message more than a few time, please contact support")';
        echo '</script>';
    }
}

$page_title = 'Releaf';
include('h_f/header.php');
?>

<style>
    .alert {
        padding: 20px;
        background-color: #f7382a;
        color: white;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>

<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Note!</strong> Releaf currently does not support password reset. Please save your email and password somewhere safe
</div>


<main id="login_sign">

    <div style="margin: auto; width: 40%; padding: 10px;">
        <h1>Sign-up</h1>

        <form action="signup.php" method="post">

            Email:<br />
            <input type="email" name="email" required /><br />

            Nickname:<br />
            <input type="text" name="nickname" required /><br />

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
            <input type="submit" name="submit" value="Sign-up" />
        </form>

    </div>

</main>



<?php include('h_f/footer.php'); ?>