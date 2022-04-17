<?php
const NAMES=[
    'Katya', 'Vasya', 'Kolya', 'Sasha','Masha' 
];

function createUser()
{
    return [
        'name'=>NAMES[array_rand(NAMES)],
        'age'=>mt_rand(18,45)
    ];
}