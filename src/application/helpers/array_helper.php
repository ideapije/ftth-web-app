<?php

function array_has_dupes($array)
{
    return count($array) !== count(array_unique($array));
}

function array_get_dupes($array)
{
    $unique = array_unique($array);
    return array_diff_assoc($array, $unique);
}

function array_values_as_integer($data)
{
    $send = [];
    foreach ($data as $value) {
        $send[] = intval($value);
    }
    return $send;
}


function set_costs_matrix($data)
{
    $send = [];
    foreach($data as $values) {
        $cols = [];
        foreach($values as $value) {
            $cols[] = intval($value);
        }
        $send[] = $cols;
    }
    return $send;
}