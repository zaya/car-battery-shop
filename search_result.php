<?php
$title = 'Search result';
$current = '';
include ("header.php");
include ("data.php");
?>

<h2>Your Battery Results</h2>

<div>
	<div class="left" style="margin-right: 50px;">
		<table>
			<tr>
				<td class="title">Model:</td>
				<td class="value"><?php echo $_GET['model'];?></td>
			</tr>
			<tr>
				<td class="title">Make:</td>
				<td class="value"><?php echo $_GET['make'];?></td>
			</tr>
			<tr>
				<td class="title">Year:</td>
				<td class="value"><?php echo $_GET['year'];?></td>
			</tr>
			<tr>
				<td class="title">Engine:</td>
				<td class="value"><?php echo $_GET['engine'];?></td>
			</tr>
		</table>
		<form action="search.php" method="post">
			<input type="submit" value="Modify" />
		</form>
	</div>
	<div class="left">
		<?php 
		$result = rand(0,5);
		if($result > 0) {
			for($i = 0; $i < $result; $i++) {
				$id = rand(0, 9);
		?>
		<div id="search_result">
			<div class="left"><img src="<?php echo $product_list[$id]['img'];?>" height="100"></img></div>
			<div class="product_detail">
				<?php echo "<b>",$product_list[$id]['name'],"</b>";
						echo "<br>Warranty: ",$product_list[$id]['warranty']," months";
						echo "<br>Dimensions (L x W x H): ";
						echo $product_list[$id]['length']," x ",$product_list[$id]['width']," x ",$product_list[$id]['height'];
						echo "<br><br>";
						echo "<b style='color: red'>$",$product_list[$id]['price'],"</b>";
				?>
			</div>
		</div>
		<?php 
			}
		} else {
			echo "<h3 style='color:red'>No battery found.</h3>";	
		}
		?>
	</div>
</div>


<?php include("footer.html");?>