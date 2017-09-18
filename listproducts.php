<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Know your Gadget</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div>
		<ul>
			<a href="listproducts.php"><li>Home</li></a>
			<a href="logout.php"><li>Logout</li></a>
		</ul>
	</div>
	<div class="website-title">
		Welcome to the Know your Gadget
	</div>

	<div class="container">

		<div class="row">
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/one.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/two.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/three.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/one.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/two.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/three.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/one.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/two.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/three.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/one.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/two.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
			<div class="col-4">
				<div class="image-wrapper">
					<a href="showproduct.php"><img src="images/three.jpg" class="list-image"></a>
					<a href="showproduct.php"><p class="product-title">Product Name</p></a>
				</div>
			</div>
		</div>

	</div>
	<footer>&copy 2016. All rights Reserved.</footer>

</body>
</html>
<?php
}
?>
