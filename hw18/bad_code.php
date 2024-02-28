<?php
class badCode
{ function __construct() {echo "Hello!";}
}
$somenumber = 10;
function printSomeNumber(){
    if (!empty($somenumber)){
        echo 'Number is: ' . $somenumber;
    }else{echo "no number";}}
echo 'Number is: '.$somenumber;
function add_numbers($a, $b){return $a + $b;}
