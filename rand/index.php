<?php
$arr = [];
for($i=1; $i<20; $i++){
    array_push($arr,rand(1,100));
    $arr = array_unique($arr);
}
sort($arr);
echo "<table border='1'>";
for($j=1; $j<count($arr); $j++){
    echo "<tr><td style='padding: 10px'>$j</td>";
    echo "<td style='padding: 10px'>$arr[$j]</td>";
    echo "</tr>";
}
echo "</table>";

