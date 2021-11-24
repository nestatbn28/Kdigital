<?php
    $pjg=(int)readline('Input row and column count: ');
    $dia1=0;
    $dia2=0;
    for($i=0;$i<$pjg;$i++)
    {
        for($j=0;$j<$pjg;$j++)
        {
            $temp[$i][$j]=(int)readline('Input row ['.$i.'] and column ['.$j.'] : ');
        }
    }
    echo "Matrix result:\n";
    for($i=0;$i<$pjg;$i++)
    {
        for($j=0;$j<$pjg;$j++)
        {
            echo $temp[$i][$j]." ";
        }
        echo "\n";
    }
    $dg2=$pjg;
    for($i=0;$i<$pjg;$i++)
    {
        $dia1+=$temp[$i][$i];
        $dia2+=$temp[$i][--$dg2];
    }
    $total=$dia1-$dia2;
    
    echo "Diagonal diference result = ".$total;
?>