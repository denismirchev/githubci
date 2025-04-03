<?php

use function PHPUnit\Framework\assertSame;

require_once __DIR__ . '/../add_two_numbers.php';

it('adds two normal numbers', function (): void {
    assertSame(5, addTwoNumbers(2, 3));
});

it('returns unlucky if first number is 13', function (): void {
    assertSame('unlucky', addTwoNumbers(13, 2));
});

it('returns unlucky if second number is 13', function (): void {
    assertSame('unlucky', addTwoNumbers(2, 13));
});

it('returns unlucky if both numbers are 13', function (): void {
    assertSame('unlucky', addTwoNumbers(13, 13));
});

it('handles negative numbers', function (): void {
    assertSame(-1, addTwoNumbers(-3, 2));
});
