<?php
require_once("binarySearch/BinarySearch.php");

$array = [0,10,30,60,70,100];

$a = BinarySearch::search($array, 60);

var_dump(   $a,
            $array[$a],
            $array
);

?>