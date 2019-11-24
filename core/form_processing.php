<?php 
include 'init.php';

switch ($_POST['formtype']) {
	case 'hospital':// HOSPITAL LOG IN
			$username = ((isset($_POST['Username']) && $_POST['Username'] != null)?sanitize($_POST['Username']):'');
			$password = ((isset($_POST['Password']) && $_POST['Password'] != null)?sanitize($_POST['Password']):'');
			$password = trim($password);

			$result = $db->query("SELECT * FROM iris_users WHERE username = '$username' AND passwordhash = '$password'");
			$userCount = mysqli_num_rows($result);
			$user = mysqli_fetch_assoc($result);
			if (($userCount > 0) && ($userCount < 2) && ($user['permission'] == 'hospital')) {
				$user_id = $user['id'];
				login($user_id);
			}else{
				echo "The password or email you entered does not exist <a href='../index.php'>Go back</a>";
			}
		break;
		case 'supplier':// SUPPLIER LOG IN
			$username = ((isset($_POST['Username']) && $_POST['Username'] != null)?sanitize($_POST['Username']):'');
			$password = ((isset($_POST['Password']) && $_POST['Password'] != null)?sanitize($_POST['Password']):'');

			$result = $db->query("SELECT * FROM iris_users WHERE username = '$username' AND passwordhash = '$password'");
			$user = mysqli_fetch_assoc($result);
			$userCount = mysqli_num_rows($result);
			if (($userCount > 0) && ($userCount < 2) && ($user['permission'] == 'supplier')) {
				
				$user_id = $user['id'];
				login($user_id);
				header('location: ../pages/supplier/adminpanel.php');ob_get_clean();
			}else{
				echo "The password or email you entered does not exist <a href='../index.php'>Go back</a>";
			}
			break;
			case 'admin':// ADMIN LOG IN
				$username = ((isset($_POST['Username']) && $_POST['Username'] != null)?sanitize($_POST['Username']):'');
				$password = ((isset($_POST['Password']) && $_POST['Password'] != null)?sanitize($_POST['Password']):'');

				$result = $db->query("SELECT * FROM iris_users WHERE username = '$username' AND passwordhash = '$password'");
				$userCount = mysqli_num_rows($result);
				$user = mysqli_fetch_assoc($result);
				if ($userCount > 0 && $userCount < 2 && $user['permission'] == 'admin') {
					$user_id = $user['id'];
					login($user_id);
					header('location: ../admin/index.php');ob_get_clean();
				}else{
					echo "The password or email you entered does not exist <a href='../index.php'>Go back</a>";
				}
				break;
				case 'hospitalreg':// HOSPITAL REGISTRATION
					$hospitalName = ((isset($_POST['hospitalName']) && $_POST['hospitalName'] != null)?sanitize($_POST['hospitalName']):'');
					$hospitalReg = ((isset($_POST['hospitalReg']) && $_POST['hospitalReg'] != null)?sanitize($_POST['hospitalReg']):'');
					$datereg = ((isset($_POST['datereg']) && $_POST['datereg'] != null)?sanitize($_POST['datereg']):'');
					$cart = ((isset($_POST['cart']) && $_POST['cart'] != null)?sanitize($_POST['cart']):'');
					$permission = "hospital";
					$query2 = "INSERT INTO iris_users (username,passwordhash,permission)
									 VALUES('$hospitalName','$hospitalReg','$permission')";
					$db->query($query2);
					$c_id = $db->insert_id;
						$query = "INSERT INTO hospital (hospitalName,hospitalReg,datereg,cart_id,user_id)
									 VALUES('$hospitalName','$hospitalReg','$datereg','$cart','$c_id')";
					$db->query($query);

					header('Location: ../admin/index.php');
					break;
					case 'supplierreg': // SUPPLIER REGISTRATION
						$supplierName = ((isset($_POST['supplierName']) && $_POST['supplierName'] != null)?sanitize($_POST['supplierName']):'');
						$supplierAdmin = ((isset($_POST['supplierAdmin']) && $_POST['supplierAdmin'] != null)?sanitize($_POST['supplierAdmin']):'');
						$datereg = ((isset($_POST['datereg']) && $_POST['datereg'] != null)?sanitize($_POST['datereg']):'');
						$permission = "supplier";

						$query1 = "INSERT INTO iris_users (username,passwordhash,permission)
										 VALUES('$supplierName','$supplierAdmin','$permission')";
						$db->query($query1);
						$c_id = $db->insert_id;

						$query2 = "INSERT INTO supplier (supplierName,supplierAdmin,datereg,user_id)
										 VALUES('$supplierName','$supplierAdmin','$datereg','$c_id')";
						$db->query($query2);

						header('Location: ../admin/index.php');
						break;

						case 'addProduct':// ADD PRODUCTS FROM SUPPLIER HOME
							$serialNumber = ((isset($_POST['serialNumber']) && $_POST['serialNumber']!=null)?sanitize($_POST['serialNumber']):'');
							$productName = ((isset($_POST['productName']) && $_POST['productName']!=null)?sanitize($_POST['productName']):'');
							$productQuantity = ((isset($_POST['productQuantity']) && $_POST['productQuantity']!=null)?sanitize($_POST['productQuantity']):'');
							// image handling
								move_uploaded_file($_FILES['photo']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/irisspharm/images/'.$_FILES['photo']['name']);
								$tmp ='images/'.$_FILES['photo']['name'];
								// back to query
							$supplier_id = $_SESSION['SBUser'];
							$insertQuery = "INSERT INTO `products`(`serialNumber`, `productName`, `productQuantity`,`photo`,`supplier_id`) 
													VALUES ('$serialNumber','$productName','$productQuantity','$tmp','$supplier_id')";
							$db->query($insertQuery);
							header('Location: ../pages/supplier/store.php');
							break;
	case 'hospitalEdit'://///////////////////HOSPITAL EDIT//////////////////////////////
		$hospitalId =  ((isset($_POST['hospitalId']))?$_POST['hospitalId']:'');
		$hospitalName =  ((isset($_POST['hospitalName']))?$_POST['hospitalName']:'');
		$hospitalReg =  ((isset($_POST['hospitalReg']))?$_POST['hospitalReg']:'');
		$datereg = ((isset( $_POST['datereg']))? $_POST['datereg']:'');
		$sql = "UPDATE hospital SET hospitalName = '$hospitalName',hospitalReg = '$hospitalReg',datereg = '$datereg' WHERE id = $hospitalId";
		$db->query($sql);
		header('Location: ../admin/index.php');
		break;
	case 'supplierEdit':
		$supplierName = ((isset($_POST['supplierName']) && $_POST['supplierName'] != null)?sanitize($_POST['supplierName']):'');
		$supplierAdmin = ((isset($_POST['supplierAdmin']) && $_POST['supplierAdmin'] != null)?sanitize($_POST['supplierAdmin']):'');
		$datereg = ((isset($_POST['datereg']) && $_POST['datereg'] != null)?sanitize($_POST['datereg']):'');
		
		if($db->query("UPDATE supplier SET supplierName = '$supplierName',supplierAdmin = '$supplierAdmin',datereg = '$datereg'")){
			header('Location: ../admin/index.php');
		}else{
			var_dump("we have a problem at the supplier edit in the form processing unit ");die();
		}
		break;
	
	default:
		var_dump('Invalid form.');die();
		break;
}




////////////////////////////////////////////////////////////////
 ?>
