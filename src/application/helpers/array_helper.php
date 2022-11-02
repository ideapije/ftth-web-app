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
