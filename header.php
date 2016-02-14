<html>
<head>
<title><?php echo $title; ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet" />
<meta charset="utf-8" />
</head>

<body>
	<ul id="menu">
		<li id="menu_item"><a <?php if($current == 'home') {echo 'class="active"';} ?> href="index.php">Home</a></li>
		<li id="menu_item"><a <?php if($current == 'products') {echo 'class="active"';} ?> href="products.php">Products</a></li>
		<li id="menu_item"><a <?php if($current == 'search') {echo 'class="active"';} ?> href="search.php">Search</a></li>
		<!-- <ul style="float: right; list-style-type: none;">
			<li><a <?php //if($current == 'cart') {echo 'class="active"';} ?> href="cart.php">Cart</a></li>
		</ul> -->
	</ul>
	
	<div id="content">