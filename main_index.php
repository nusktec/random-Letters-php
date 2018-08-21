<?php

function randLatters($range_in_number){
    $CHAR = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $output = null;
    $n = (int) $range_in_number;
    if($n>26){
        $n = 26;
    }
    if($n<1){
        $n = 1;
    }
    for ($i = 0; $i<$n; $i++){
        $output.=$CHAR[rand(0,25)];
    }
    return $output;
}
//Let get 2 random latters from our funtion...
echo randLetters(2);

?>
