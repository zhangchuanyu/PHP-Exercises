
<?php $food = array("Rice","Pizza","BigMac","Fries");
echo $food[0]."<br>".$food[1]."<br>".$food[2]."<br>".$food[3];
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
 ?>
<ul>
  <li><?php echo $food[0];  ?></li>
  <li><?php echo $food[1];  ?></li>
  <li><?php echo $food[2];  ?></li>
  <li><?php echo $food[3];  ?></li>
</ul>


<?php  
// task separator
echo "<hr style=\"margin 1rem 0\">";
?>

<?php  
/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/




// task separator
	$food_assoc = array("Rice"=>"main","Pizza"=>"main2","BigMac"=>"main3","Fries"=>"sidefood");
	foreach ($food_assoc as $key => $value) {
		echo $key." | ".$value;
		echo "<br>";
	}
	echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$Rice=array(
"type:" => "main","country:"=>"China");
$Pizza=array(
"type:"=>"main2",
"country:"=>"USA");
$BigMac=array(
"type:" =>"main3",
"country:"=>"America");
$Fries=array(
"type:" =>"sidefood",
"country:"=>"Canada");
$food_assoc =array("Rice"=> $Rice,
"Pizza"=>$Pizza,
"BigMac"=>$BigMac,
"Fries"=>$Fries);

foreach ($food_assoc as $key => $value) {
	echo $key." | ";
	foreach ($value as $skey => $svalue) {
		echo $svalue." | ";
	}
	echo "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";
?>
<!-- 
/*
+---+
| 5 |
+---+
Print the array from task 4 in html table: -->

<table>
	<tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <?php 
   
    foreach ($food_assoc as $key => $value) {
       echo "<tr>";
      echo "<th>";
      echo $key;
       echo "</th>";
      foreach ($value as $fkey => $fvalue) {
         echo "<th>";
        echo "| ".$fvalue; 
        echo "</th>";
        # code...
      }
        echo "</tr>";
    }
  
   ?>
 <!--  <tr>
    <th><?php echo $food['Rice'];?></th>
    <th><?php echo $food_assoc['Rice']['type:']; ?></th>
    <th><?php echo $food_assoc['Rice']['country:']; ?></th>
  </tr>
  <tr>
    <td><?php echo $food[1]; ?></td>
    <td><?php echo $food_assoc['Pizza']['type:']; ?></td>
    <td><?php echo $food_assoc['Pizza']['country:']; ?></td>
  </tr>
  <tr>
    <td><?php echo $food[2]; ?></td>
    <td><?php echo $food_assoc['BigMac']['type:']; ?></td>
    <td><?php echo $food_assoc['BigMac']['country:']; ?></td>
  </tr>
   <tr>
    <td><?php echo $food[3]; ?></td>
    <td><?php echo $food_assoc['Fries']['type:']; ?></td>
    <td><?php echo $food_assoc['Fries']['country:']; ?></td>
  </tr> -->
</table>

