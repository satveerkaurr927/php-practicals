<?php
function factorial($n)
{
    $fact=1;
    for($i=1; $i <=n; $i++) {
        $fact=$fact*$i; }
        return $fact;   }
        $num=5;
        $result=factorial($num);
        echo "factorial of $num=$result";
        ?> 