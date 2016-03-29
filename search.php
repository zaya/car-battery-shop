<?php
$title = 'Search Battery by Car Model';
$current = 'search';
include ("header.php");
include ("data.php");

$current_year = date ( "Y" );
?>

<h2>Battery finder</h2>
<p class="description">Enter your vehicle information and we'll select
	the right battery for you.</p>

<form action="search_result.php" method="get" name="search_form" onsubmit="return validateForm()">
	<table border="0px;" style="margin-top: 20">
		<tr>
			<td style="padding-right: 25px;">Make</td>
			<td style="padding-right: 25px;">
				<select name="make" style="width: 120px;">
					<option value=""></option>
					<option value="Audi">Audi</option>
					<option value="BMW">BMW</option>
					<option value="Cadillac">Cadillac</option>
					<option value="Dodge">Dodge</option>
					<option value="Honda">Honda</option>
					<option value="Lexus">Lexus</option>
					<option value="Toyota">Toyota</option>
				</select>
			</td>
			<td><p class="validation_error" id="make_error"></p></td>
		</tr>
		<tr>
			<td>Model</td>
			<td><select name="model" style="width: 120px">
					<option value=""></option>
					<option value="Sedan">Sedan</option>
					<option value="SUV">SUV</option>
					<option value="Truck">Truck</option>
					<option value="Van">Van</option>
			</select></td>
			<td><p class="validation_error" id="model_error"></p></td>
		</tr>
		<tr>
			<td>Year</td>
			<td>
				<select name="year" style="width: 120px">
					<option value=""></option>
					<?php
					foreach ( range ( $current_year, $current_year - 40 ) as $year ) {
						echo "<option>$year</option>";
					}
					?>
				</select>
			</td>
			<td><p class="validation_error" id="year_error"></p></td>
		</tr>
		<tr>
			<td>Engine</td>
			<td><select name="engine" style="width: 120px">
					<option value=""></option>
					<option value="2.3-L5(Gas)">2.3 - L5 (Gas)</option>
					<option value="3.3-V6(Gas)">3.3 - V6 (Gas)</option>
					<option value="4.7-V8(Gas)">4.7 - V8 (Gas)</option>
					<option value="5.0-V8(Gas)">5.0 - V8 (Gas)</option>
			</select></td>
			<td><p class="validation_error" id="engine_error"></p></td>
		</tr>
	</table>
	<br> <input type="submit" value="Search" id="search">
</form>

<?php include("footer.html");?>

<script type="text/javascript">
function validateForm() {
    var make = document.forms["search_form"]["make"].value;
    var model = document.forms["search_form"]["model"].value;
    var year = document.forms["search_form"]["year"].value;
    var engine = document.forms["search_form"]["engine"].value;

    var result = true;
    
    if (make == null || make == "") {
        document.getElementById('make_error').innerHTML="Please select a make!";
        result = false;
    } else {
    	document.getElementById('make_error').innerHTML="";
    }

    if (model == null || model == "") {
        document.getElementById('model_error').innerHTML="Please select a model!";
        result = false;
    } else {
    	document.getElementById('model_error').innerHTML="";
    }

    if (year == null || year == "") {
        document.getElementById('year_error').innerHTML="Please select a year!";
        result = false;
    } else {
    	document.getElementById('year_error').innerHTML="";
    }

    if (engine == null || engine == "") {
        document.getElementById('engine_error').innerHTML="Please select a engine!";
        result = false;
    } else {
    	document.getElementById('engine_error').innerHTML="";
    }

    return result;
}
</script>