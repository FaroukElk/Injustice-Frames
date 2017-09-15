<?php
require_once("config.php");
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$c = $_GET['c'];
if ($c == ""){
}
else{
$theme = $_GET['col'];
$num = $_GET['t'];
$stmt = "SELECT * FROM move_list where player = '".$c."'";
$result = mysqli_query($conn, $stmt);
echo 	'<table class="frame-data-table ' . $theme .'" id="char-table' . $num . '"> 
		<tr><th class="col-xs-1 text-left"><b>Move</b></th>
		<th class="col-xs-1 text-right"><b>Input</b></th>
		<th class="col-xs-1 text-right"><b>Startup</b></th>
		<th class="col-xs-1 text-right"><b>Active</b></th>
		<th class="col-xs-1 text-right"><b>Recovery</b></th>
		<th class="col-xs-1 text-right"><b>Block Advantage</b></th>
		<th class="col-xs-1 text-right"><b>Hit Advantage</b></th>
		<th class="col-xs-1 text-right"><b>Cancel</b></th>
		<th class="col-xs-1 text-right"><b>Move Type</b></th>
		<th class="col-xs-1 text-right"><b>Damage</b></th>
		<th class="col-xs-1 text-right"><b>Block Damage</b></th></tr>';

while($row = mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td class='text-left col-xs-1'>" . $row['move'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['input'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['startup'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['active'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['recovery'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['block'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['hitadv'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['cancel'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['hit_location'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['damage'] . "</td>";
	echo "<td class='text-right col-xs-1'>" . $row['block_damage'] . "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
