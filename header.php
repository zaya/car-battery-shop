<html>
<head>
<title><?php echo $title; ?></title>
<!-- <script src="modernizr-1.5.js"></script> -->
<link href="css/styles.css" type="text/css" rel="stylesheet" />
<meta charset="utf-8" />
</head>

<body>
	<div id="container">
		<ul id="main">
			<li><a <?php if($current == 'home') {echo 'class="active"';} ?> href="index.php">Home</a></li>
			<li><a <?php if($current == 'products') {echo 'class="active"';} ?> href="products.php">Products</a></li>
			<ul style="float: right; list-style-type: none;">
				<li><a <?php if($current == 'cart') {echo 'class="active"';} ?> href="cart.php">Cart</a></li>
			</ul>
		</ul>
		<section>