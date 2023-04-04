<?php
  
	// get the three messurements from the textfields
	$radius = $_POST['radius'];

	// calculate the pay
  $volume = 4.0 / 3.0 * pi () * pow($radius,3);
?>
<?php echo "<h3>Results:</h3>
  The volume of your sphere is " . round($volume, 2) . "cm<sup>3</sup>."
?>