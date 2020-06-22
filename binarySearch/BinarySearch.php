<?php
class BinarySearch {

     static public function Search(array $array, $expectedValue){
        $halfArray = intval(count($array)/2);
        $halfArrayValue = $array[$halfArray];
        $arrayLength = count($array) - 1;

        if($array[$halfArray] == $expectedValue) return $halfArray;

        if($expectedValue < $halfArrayValue  ){
            for($position = 0; $position < $halfArrayValue; $position++){
                if($array[$position] == $expectedValue) return $position;
            } 
        }
        else{
            for($position = $arrayLength; $position >= $halfArrayValue ; $position--){
                if($array[$position] == $expectedValue) return $position;
            } 
        }
        return -1;
    }
}
