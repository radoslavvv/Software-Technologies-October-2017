<?php
for ($i = 0; $i <= 255; $i += 51){
    for ($j = 0; $j <= 255; $j += 51){
        for ($k = 0; $k <= 255; $k += 51){
            echo "<div style='background:rgb($i,$j,$k)'>rgb($i,$j,$k)</div>";
        }
    }
}