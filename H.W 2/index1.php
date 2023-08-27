<?php

/* Is given,
2 fans of 10 watts
5 AC of 100 watts
2 freeze of 150 watts
1 watt = 14 tk
*/


echo "<u><h3>Energy cost & electricity bill of fan, AC and freeze</h3></u>";
$numbers_of_fan = 2;
$fan_watt = 10;
$total_watt_of_fan = $numbers_of_fan * $fan_watt ;
echo "Total watt of fan: $total_watt_of_fan w <br><br>";


$numbers_of_AC = 5;
$AC_watt = 100;
$total_watt_of_AC = $numbers_of_AC * $AC_watt;
echo " Total watt of AC: $total_watt_of_AC w <br><br>";

$numbers_of_freeze = 2;
$freeze_watt = 150;
$total_watt_of_freeze = $numbers_of_freeze * $freeze_watt;
echo "Total watt of freeze: $total_watt_of_freeze w <br><br>";

$total_watt = $total_watt_of_fan + $total_watt_of_AC + $total_watt_of_freeze;
echo "<b>Total watt: $total_watt w</b> <br><br>";

$cost_per_watt = 14;
$day_per_month = 30;
$total_bill = $cost_per_watt * $total_watt * $day_per_month;
echo "<b>Total bill of a month: $total_bill tk</b>";

echo "<u><h3>Used dynamic function</h3></u>";
//$total_watt_of_fan = 50;
//$total_watt_of_AC = 800;
//$total_watt_of_freeze = 600;
function total_watt($total_watt_of_fan,$total_watt_of_AC,$total_watt_of_freeze){
$per_watt = 14;
$total_watt = $total_watt_of_fan + $total_watt_of_AC + $total_watt_of_freeze;
echo "Total watt is: $total_watt<br><br>";
$bill = $total_watt * $per_watt;
echo "Total bill is: $bill";
}
total_watt(50,800,600);
?>
