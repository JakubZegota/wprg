<?php

function tabliczka($a)
{
    for ($i = 1; $i < $a + 1; $i++)
    {
        $tab[$i]=$i;
    }

    foreach ($tab as $t) {
        for ($i=1; $i<$a+1; $i++)
        {
            echo $t*$i."&nbsp  &nbsp &nbsp ";
        }
        echo "<br />";
    }

}

$bok = rand(3,9);
tabliczka($bok);
