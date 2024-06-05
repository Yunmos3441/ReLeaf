<?php

// 
// Admins
/**
 * @return int|query_result
 * 
 * If success returns query result
 * 
 * -1 if database connection error
 * 
 * -2 if database query failed
 * 
 * -3 if the result set is empty (has zero rows).
 */
function get_admin_by_id($id)
{
	global $db;

	$sql = "SELECT * FROM `admin` ";
	$sql .= "WHERE id='" . db_escape($db, $id) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	if (confirm_result_set($result, $db) == -1) {
		return -1; # database connection error
	} elseif (confirm_result_set($result, $db) == -2) {
		return -2; # database query failed
	} elseif (confirm_result_set($result, $db) == -3) {
		return -3; # no records in database
	}
	$admin = mysqli_fetch_assoc($result); // get first row
	mysqli_free_result($result); // free result
	return $admin;
}

/**
 * @return int|query_result
 * 
 * If success returns query result
 * 
 * -1 if database connection error
 * 
 * -2 if database query failed
 * 
 * -3 if the result set is empty (has zero rows).
 */
function get_admin_by_username($username)
{
	global $db;

	$sql = "SELECT * FROM `admin` ";
	$sql .= "WHERE username='" . db_escape($db, $username) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	if (confirm_result_set($result, $db) == -1) {
		return -1; # database connection error
	} elseif (confirm_result_set($result, $db) == -2) {
		return -2; # database query failed
	} elseif (confirm_result_set($result, $db) == -3) {
		return -3; # no records in database
	}
	$admin = mysqli_fetch_assoc($result); // get first row
	mysqli_free_result($result);
	return $admin;
}

// User
/**
 * @return int|query_result
 * 
 * If success returns query result
 * 
 * -1 if database connection error
 * 
 * -2 if database query failed
 * 
 * -3 if the result set is empty (has zero rows).
 */
function get_user_by_id($id)
{
	global $db;

	$sql = "SELECT * FROM `user` ";
	$sql .= "WHERE uid='" . db_escape($db, $id) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	if (confirm_result_set($result, $db) == -1) {
		return -1; # database connection error
	} elseif (confirm_result_set($result, $db) == -2) {
		return -2; # database query failed
	} elseif (confirm_result_set($result, $db) == -3) {
		return -3; # no records in database
	}
	$admin = mysqli_fetch_assoc($result); // get first row
	mysqli_free_result($result); // free result
	return $admin;
}

/**
 * @return int|query_result
 * 
 * If success returns query result
 * 
 * -1 if database connection error
 * 
 * -2 if database query failed
 * 
 * -3 if the result set is empty (has zero rows).
 */
function get_user_by_email($email)
{
	global $db;

	$sql = "SELECT * FROM `user` ";
	$sql .= "WHERE username='" . db_escape($db, $email) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	if (confirm_result_set($result, $db) == -1) {
		return -1; # database connection error
	} elseif (confirm_result_set($result, $db) == -2) {
		return -2; # database query failed
	} elseif (confirm_result_set($result, $db) == -3) {
		return -3; # no records in database
	}
	$admin = mysqli_fetch_assoc($result); // get first row
	mysqli_free_result($result);
	return $admin;
}

/**
 * 
 */
function create_new_user($email, $password, $nickname)
{
	global $db;

	$sql = "INSERT INTO `user`(`username`, `password`, `nickname`) VALUES ('$email','$password','nickname')";

	$result = mysqli_query($db, $sql);
	if ($result) {
		return true;
	} else {
		// UPDATE failed
		echo mysqli_error($db);
		db_disconnect($db);
		// exit;
		return false;
	}
}

// function get_all_products()
// {
// 	global $db;

// 	$sql = "SELECT * FROM `products` ";
// 	$sql .= "ORDER BY brand ASC";
// 	$result = mysqli_query($db, $sql);
// 	if (confirm_result_set($result, $db) == -1) {
// 		return -1; # database connection error
// 	} elseif (confirm_result_set($result, $db) == -2) {
// 		return -2; # database query failed
// 	} elseif (confirm_result_set($result, $db) == -3) {
// 		return -3; # no records in database
// 	}
// 	return $result; // returns all rows
// }


// function get_user_by_username($username)
// {
// 	global $db;

// 	$sql = "SELECT * FROM `user` ";
// 	$sql .= "WHERE username='" . db_escape($db, $username) . "' ";
// 	$sql .= "LIMIT 1";
// 	$result = mysqli_query($db, $sql);
// 	if (confirm_result_set($result, $db) == -1) {
// 		return -1; # database connection error
// 	} elseif (confirm_result_set($result, $db) == -2) {
// 		return -2; # database query failed
// 	} elseif (confirm_result_set($result, $db) == -3) {
// 		return -3; # no records in database
// 	}
// 	$admin = mysqli_fetch_assoc($result);// get first row
// 	mysqli_free_result($result);
// 	return $admin;
// }


?>