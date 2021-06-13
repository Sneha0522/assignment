<!DOCTYPE html>
<html>
<body>
	<?php
	$amount = '';
	$kwh_usage = '';
	if (isset($_POST['submit'])) {
		$units = $_POST['kwh'];
		if (!empty($units)) {
			$kwh_usage = calculate_electricity_bill($units);
			$amount = '<strong>Total amount of ' . $units . ' units :</strong> ' . $kwh_usage;
		}
	}
	
	function calculate_electricity_bill($units) {
		$first_unit_cost = 3;
		$second_unit_cost = 4;
		$third_unit_cost = 5;
		$fourth_unit_cost = 6;

		if($units <= 100) {
			$bill = $units * $first_unit_cost;
		}
		else if($units > 100 && $units <= 200) {
			$temp = 100 * $first_unit_cost;
			$remaining_units = $units - 100;
			$bill = $temp + ($remaining_units * $second_unit_cost);
		}
		else if($units > 200 && $units <= 300) {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost);
			$remaining_units = $units - 200;
			$bill = $temp + ($remaining_units * $third_unit_cost);
		}
		else {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
			$remaining_units = $units - 300;
			$bill = $temp + ($remaining_units * $fourth_unit_cost);
		}
		return number_format((float)$bill, 2, '.', '');
	}
	?>
	<div class="container">
		<h1>Calculate electricity bill</h1>
		<form method="post">
		<input type="number" name="kwh" placeholder="Please enter no. of Units" />
                                   </br>
<br>	
                                    <input type="submit" name="submit" value="Submit" />
		</form>
		 <?php echo '<br />' . $amount; ?>
		
	</div>
</body>
</html>