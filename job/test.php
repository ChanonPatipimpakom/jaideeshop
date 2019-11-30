<?php
    $n = 10;
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            echo '*';
        }
        echo '</br>';
    }

    $n = 10;
    $a=1;
    while($a<=$n){
        $a++;
        $b=2;
        while($b<=$a){
            echo '+';
            $b++;
        }
    echo '</br>';
    }

    $n = 10;
    for($i=1;$i<=$n;$i++){
        $sum=0;
        for($j=1;$j<=$i;$j++){
            echo "$j ";
            $sum = $sum + $j;
        }
        echo "= $sum </br>";
    }
?>