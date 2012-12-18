<?php
    $l = 0;
    $r = 1;
    $sumEven = 0;
    for($i=1; $i<4000000; $i=$l+$r) {
        if($i % 2 == 0) {
            $sumEven += $i;
        }
        $l = $r;
        $r = $i;
    }
    echo "偶数合計:".$sumEven;
?>
