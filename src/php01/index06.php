<?php
function SquareArea($base, $height)
{
    return $base * $height;
}
function TriangleArea($base, $height)
{
    return $base * $height / 2;
}
function TrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}
echo SquareArea(5, 5) . "\n";
echo TriangleArea(7, 8) . "\n";
echo TrapezoidArea(4, 5, 4);