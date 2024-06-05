<?php
require_once('private/initialize_b.php');

session_destroy(); //destroy the session since it was only used for admin login info

header("Location: login.php")

?>
