<?php 
function sanitize($dirty){
	return htmlentities($dirty,ENT_QUOTES,"UTF-8");
}

function login($user_id)
{
	$_SESSION['SBUser'] = $user_id;
	global $db;
	$date = date("Y-m-d H:i:s");
	$db->query("UPDATE iris_users SET last_login = '$date' WHERE id = '$user_id' ");
	$_SESSION['success_flash'] = 'You have been logged in';
	header('Location: ../index.php');
}	

function is_logged_in()
{
	if (isset($_SESSION['SBUser']) && $_SESSION['SBUser'] > 0) {
		return true;
	}else{
		return false;
	}
}

function login_error_redirect($url = '../../index.php')
{
	$_SESSION['error_flash'] = 'You must be logged in to access this page';
	header('Location: '.$url);
}

function has_permission($current_user,$permission)
{	
	global $db;
	$query = $db->query("SELECT * FROM iris_users WHERE id = '$current_user'");
	$user_data = mysqli_fetch_assoc($query);
	if ($user_data['permission'] == $permission) {
		return true;
	}else{
		return false;
	}
}

function permission_redirect($value)
{	
	$_SESSION['error_flash'] = 'You do not have permission to view this page';
	header('Location: ../../'.$value);
}

function deleteMe($table_name,$table_primary_key,$primary_key_variant){
	global $db;
	$sql = "DELETE FROM $table_name WHERE $table_primary_key = $primary_key_variant";
	$db->query($sql);
	header('Location: ../index.php');
}
 ?>
