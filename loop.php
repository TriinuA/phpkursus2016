<?php 
    $rand = rand(1,300);
    for($i = 0; $i < 300; $i++){
        echo " O ";
        if ($i == $rand) echo "0";
    }
 ?>