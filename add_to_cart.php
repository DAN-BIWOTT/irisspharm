<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/irisspharm/core/init.php';
$domain = ($_SERVER['HTTP_HOST'] != 'localhost' )?'.'.$_SERVER['HTTP_HOST']:false;

if ($_POST) {
	$productName = $_POST['productName'];
	$productQuantity = $_POST['productQuantity'];
	$photo = $_POST['photo'];
	$product_id = $_POST['product'];
	$user = isset($_SESSION['SBUser'])?$_SESSION['SBUser']:0;
	$result = $db->query("SELECT * FROM products WHERE id = '$product_id'");
	$result2 = mysqli_fetch_assoc($result);
	$supplier_id = $result2['supplier_id'];
		if ($user == 0) { ?>
			<script>
				alert("You must be logged in to make a purchase.");
			</script>
			<a href="index.php">Back to site</a>
			<?php
		}else{
			$query = "INSERT INTO cart(name,quantity,image,user_id,supplier_id)
							VALUES('$productName','$productQuantity','$photo','$user','$supplier_id')";
			$db->query($query);
			$_SESSION['success_flash'] = $productName.' was added to cart.';
			header('Location: index.php');
		}
	
}
?>