<?php
$title = 'Products';
$current = 'products';
include ("header.php");
include ("data.php");
?>

<h2>Products</h2>

<?php
foreach($product_list as $product) {
	if (($product['id'] + 1) % 5 != 0) {
		echo "<div class='product_img' style='margin-right: 10px;'>";
	} else {
		echo "<div class='product_img'>";
	}
?>
		<div style="width: 150; height: 100;">
		  <a href="<?php echo "product_detail.php?prod_id=", $product['id']?>">
		    <img src="<?php echo $product['img'];?>" alt="Mountains">
		  </a>
		</div>
		<br style='clear: both' />
		<br>
		<div class="desc" style="font-size: 14">
			<?php echo $product['name'];?>
			<br>
			<?php echo "<b>$",$product['price'],"</b>";?>
		</div>
		
	</div>
<?php
	if (($product['id'] + 1) % 5 == 0) {
		echo "<br style='clear: both' />";
		echo "<br>";
	}
}
?>

<?php include("footer.html");?>