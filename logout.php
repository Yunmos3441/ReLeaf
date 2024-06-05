<?php
require_once('admin/private/initialize_f.php');

session_destroy(); //destroy the session since it was only used for admin login info

header("Location: index.php")

?>
