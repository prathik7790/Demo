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

			<table border="1px">
				<tr class="product-heading">
					<td rowspan="2"><img src="images/one.jpg" class="table-image"></td>
					<td>Product Name</td>
					<td>Display</td>
					<td>Camera</td>
					<td>Battery</td>
					<td>CPU</td>
					<td>Memory</td>
					<td>Screen</td>
					<td>OS</td>
					<td>Price</td>
				</tr>
				<tr>
					<td>Samsung Galaxy s6</td>
					<td>Full HD</td>
					<td>13 MP and 5 MP</td>
					<td>3000 mah</td>
					<td>1.8 Octa Core Snap Dragon</td>
					<td>2 Gb Ram 32 Gb Rom</td>
					<td>6 Inches</td>
					<td>Andriod Kitkat</td>
					<td>$799</td>
				</tr>
			</table>
			<div class="related-images">Related Images</div>
			<div class="row">
				<div class="col-4">
					<div class="image-wrapper">
						<img src="images/one.jpg" class="list-image">
					</div>
				</div>
				<div class="col-4">
					<div class="image-wrapper">
						<img src="images/two.jpg" class="list-image">
					</div>
				</div>
				<div class="col-4">
					<div class="image-wrapper">
						<img src="images/three.jpg" class="list-image">
					</div>
				</div>
			</div>
			<div class="related-videos">Related Videos</div>
			<div class="embed-video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/cSTEB8cdQwo" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<footer>&copy 2016. All rights Reserved.</footer>
		
	</body>
	</html>
	<?php
}
?>
