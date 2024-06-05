<?php 

function get_total_user()
{
    global $db;

    $sql = "SELECT COUNT(*) AS count FROM `user`";
    $result = mysqli_query($db, $sql); 
    if ($result) {
		$count = mysqli_fetch_assoc($result);// get first row
        mysqli_free_result($result);
        return $count;
	} else {
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