<?php

function addTwoNumbers(int $a, int $b): int|string
{
    if ($a === 13 || $b === 13) {
        return 'unlucky';
    }

    return $a + $b;
}
