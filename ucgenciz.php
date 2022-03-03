<?php

function ucgenCiz($sayi) {
    $i=0;
while ($i<$sayi){
    $i++;
        for($j = 0; $j<=$sayi;$j++) {
            if($i>=$j) echo " 0 ";
        }
        echo "<br/>";
    }
}
ucgenCiz(15);