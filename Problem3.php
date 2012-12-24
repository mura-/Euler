<?php
/*
 * Problem 3 「最大の素因数」 †
 * 13195 の素因数は 5, 7, 13, 29 である.
 * 600851475143 の素因数のうち最大のものを求めよ.
 */
$src = 600851475143;

// 割り切れるかどうかを調べて、割り切れる場合は素数か判断
for ($i=2; $i*2<$src; $i++) {
    if (bcmod($src, $i) == 0) {
        $divide = bcdiv($src, $i);

        // 素数か調べる
        $checkPrime = function ($divide) {
            for ($j=2; $j*2<=$divide; $j++) {
                if ($divide % $j == 0) {
                    return false;
                } 
            }
            return true;
        };

        if ($checkPrime($divide)) {
            $maxPrime = $divide;
            break;
        }
        echo "\n";
    }
}
echo "最大素因数は".$maxPrime."です ";
?>
