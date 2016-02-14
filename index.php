<?php
$title = 'Home';
$current = 'home';
include ("header.php");
include ("data.php");
?>

<img src="img/banner.jpg" alt="Delkor Banner" width="800" height="280"
	style="margin: 20 0 20 0;" />

<h3 style="margin: 0px 20px 10px 0px;">Store Locators</h3>
<?php
foreach ( $store_list as $store ) {
	if ($store ['id'] < 4) {
		echo "<div class='img' style='margin-right: 10px;'>";
	} else {
		echo "<div class='img'>";
	}
	echo "<a href=store.php?store_id=", urlencode ( $store ['id'] ), ">";
	echo "<img src='",$store['img'],"' alt='",$store ['name'],"'>";
	echo "</a>";
	echo "<div class='desc'>", $store ['name'], "</div>";
	echo "</div>";
}
?>

<br style="clear: both" />

<?php include("footer.html");?>