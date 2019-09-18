<?php

$animals = [
    'lion',
    'tiger',
    'bear',
    'lowland streaked tenrec'
];
$people = [
    'Sam',
    'James'
];

function dd($arr)
{
    echo '<pre>';
    die(var_dump($arr));
    echo '</pre>';
}

function isOfAge($age)
{
    echo $age >= 21 ? 'Proceed' : 'Get out';
}

isOfAge(23);
dd($people);
dd($animals);

require 'index.view.php';
