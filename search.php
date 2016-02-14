<?php
$title = 'Search Battery by Car Model';
$current = 'search';
include ("header.php");

$current_year = date ( "Y" );
?>

<h2>Battery finder</h2>
<p class="description">Enter your vehicle information and we'll select the right battery for you.</p>

<form action="search_result.php" method="get">
	<table border="0px;" style="margin-top: 20">
		<tr>
			<td style="padding-right: 25px;">Make</td>
			<td><select name="make" style="width: 200px">
					<option value="Audi">Audi</option>
					<option value="BMW">BMW</option>
					<option value="Cadillac">Cadillac</option>
					<option value="Dodge">Dodge</option>
					<option value="Honda">Honda</option>
					<option value="Lexus">Lexus</option>
					<option value="Toyota">Toyota</option>
			</select></td>
		</tr>
		<tr>
			<td>Model</td>
			<td><select name="model" style="width: 200px">
					<option value="Sedan">Sedan</option>
					<option value="SUV">SUV</option>
					<option value="Truck">Truck</option>
					<option value="Van">Van</option>
			</select></td>
		</tr>
		<tr>
			<td>Year</td>
			<td><select name="year" style="width: 200px">
				<?php
				foreach ( range ( $current_year, $current_year - 40 ) as $year ) {
					echo "<option>$year</option>";
				}
				?>
			</select></td>
		</tr>
		<tr>
			<td>Engine</td>
			<td><select name="engine" style="width: 200px">
					<option value="2.3-L5(Gas)">2.3 - L5 (Gas)</option>
					<option value="3.3-V6(Gas)">3.3 - V6 (Gas)</option>
					<option value="4.7-V8(Gas)">4.7 - V8 (Gas)</option>
					<option value="5.0-V8(Gas)">5.0 - V8 (Gas)</option>
			</select></td>
		</tr>
	</table>
	<br>
	<input type="submit" value="Submit">
</form>

<?php include("footer.html");?>