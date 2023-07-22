<!-- คำสั่งทำซ้ำ  while -->

<table><tr>
<?php
$i = 1;
while($i<13){
    echo "<td>";
    $j = 1;
    while($j < 13){ 
        echo  "$i x $j = ". $i * $j ;
        $j++;
        echo "<br>";
    }
    $i++;
    if($i == 7){
        echo "<tr>";
    }
        echo "</td>";
}
?>
</tr></table>