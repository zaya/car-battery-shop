<script src="http://maps.googleapis.com/maps/api/js"></script>

<?php
$title = 'Store detail';
$current = '';
include ("header.php");
include ("data.php");

$store_id = $_GET ['store_id'];
$store = $store_list [$store_id];
?>

<script>
var store_name = "<?php echo $store ['name'] ?>";

function initialize() {
	var myLatLng = {lat: <?php echo $store ['lat'] ?>, lng: <?php echo $store ['lon']; ?>};
	
	var map = new google.maps.Map(document.getElementById('googleMap'), {
    	zoom: 15,
    	center: myLatLng
	});

	var marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    title: store_name
	});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<h2><?php echo $store['name']?></h2>
<div>
	<div class="left">
		<table>
			<tr>
				<td class="title">Address:</td>
				<td class="value"><?php echo $store['address'];?></td>
			</tr>
			<tr>
				<td class="title">Phone:</td>
				<td class="value"><?php echo $store['phone'];?></td>
			</tr>
			<tr>
				<td class="title">Hours:</td>
				<td>
					<table style="border-collapse: collapse;">
						<tr class="value"><td style="width: 90px;">Monday</td><td>9AM-7PM</td></tr>
						<tr class="value"><td>Tuesday</td><td>9AM-7PM</td></tr>
						<tr class="value"><td>Wednesday</td><td>9AM-7PM</td></tr>
						<tr class="value"><td>Thursday</td><td>9AM-7PM</td></tr>
						<tr class="value"><td>Friday</td><td>9AM-7PM</td></tr>
						<tr class="value"><td>Saturday</td><td>9AM-6PM</td></tr>
						<tr class="value"><td>Sunday</td><td>9AM-6PM</td></tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class="right">
		<div id="googleMap" style="width: 500px; height: 380px;"></div>
	</div>
</div>

<?php include("footer.html");?>