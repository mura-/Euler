<?php
/*
 * 左右どちらから読んでも同じ値になる数を回文数という.
 * 2桁の数の積で表される回文数のうち, 最大のものは 9009 = 91 × 99 である.
 * では, 3桁の数の積で表される回文数のうち最大のものを求めよ.
 */

$maxPalindromic = 0;

// 三桁の掛け算を繰り返す
// 三桁分全走査してるから改善の余地ありだな。。
for ($left=999; $left>100; $left--) {
    for ($right=999; $right>100; $right--) {
        $num = $left * $right;
        if (isPalindromic($num)) {
            if ($num > $maxPalindromic) {
                $maxPalindromic = $num;
            }
        }
    }
}

// ans.
echo $maxPalindromic;

/**
 * 回文数かどうか判定する
 * @param  int $num  回文数判定したい整数値
 * @return bool      回文かどうか  
 */
function isPalindromic($num) {
    $num = (string)$num;
    $length = strlen($num);
    $halfLength = sqrt($length);

    $head = '';
    $tail = '';
    for ($i=0; $i<=$halfLength; $i++) {
        $head .= $num[$i];
        $tail .= $num[$length - ($i+1)];
    }

    if ($head == $tail) {
        return true;
    }
    return false;
}

?>
