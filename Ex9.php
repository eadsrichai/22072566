<!-- คำสั่งทำซ้ำ  do-while -->

<?php
    $i = 10;
    do {
        $j = 1; 
        do{ 
            echo  "$i x $j = ". $i * $j . "<br>" ;
            $j++;
        }while($j < 13);
        $i++;
        echo "<br>";
    }while($i <= 20);
?>
