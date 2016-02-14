<?php 
$title = 'Product Detail'; 
$current='';
include("header.php");
include("data.php");

$product = $product_list[$_GET['prod_id']];
?>


<div id="product_detail">
	<div class="left" style="padding-top: 20">
		<img alt="image" src="<?php echo $product['img'];?>" width="400px">
	</div>
	<div class="left" style="padding-left: 20">
		<h2><?php echo $product['name'];?></h2>
		<p style="margin-top: -20px">$<?php echo $product['price'];?></p>
		<p>Description</p>
		<ul>
			<li>Length (MM): <?php echo $product['length'];?></li>
			<li>Width (MM): <?php echo $product['width'];?></li>
			<li>Height (MM): <?php echo $product['height'];?></li>
			<li>Capacity (AH): <?php echo $product['capacity'];?></li>
			<li>Weight (lbs): <?php echo $product['weight'];?></li>
			<li>Voltage: <?php echo $product['voltage'];?></li>
			<li>CCA: <?php echo $product['cca'];?></li>
			<li>Terminal: <?php echo $product['terminal'];?></li>
			<li>Product of <?php echo $product['country'];?></li>
		</ul>
	</div>
</div>


<?php include("footer.html");?>