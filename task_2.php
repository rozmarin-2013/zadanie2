<?php

function search(int $num, int $maxDigit = 8): array
{
    if ($num <= $maxDigit) {
        return [$num];
    } else {
        $newNum = $num - $maxDigit;
        $res = array_merge([$maxDigit], search($newNum, $maxDigit));
    }

    return $res;

}


var_dump(search(20));