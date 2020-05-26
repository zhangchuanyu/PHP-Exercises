
<?php
 	$language = "PHP";
	$greeting =  "welcome to ".$language."!";
	echo $greeting;
	echo "<hr style=\"margin 1rem 0\">";

	$firstName ="Chuanyu";
	$lastName = "Zhang";
	$day = 5;
	$month ="October";
	$year=1994;
	$assembled = "My name is ".$firstName.$lastName.". I was born on ".$day." of ".$month." in ".$year;
	echo $assembled;
	echo "<hr style=\"margin 1rem 0\">";
	
	$length = 6.5;
	$width = 3.5;
	$area = $length*$width;
	echo $area;
	echo "<hr style=\"margin 1rem 0\">";
	
	$product ="armchair";
	$price = 249.00;
	$tax = 0.13;
	$delivery = 0.05;
	$t = 1+$tax+$delivery;
	$tota = $price *$t;
	$total = $product.": ".$tota;
	echo $total;
	echo "<hr style=\"margin 1rem 0\">";

	
?>
<figure>
  	<img src="https://placehold.jp/24/e8d2ae/fff/300x300.png" alt="placeholder-image">
  	<figcaption><?php echo $total; ?> </figcaption>
	</figure>