<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $rows = $_REQUEST['rows'];
    $cols = $_REQUEST['cols'];
    $key = $_REQUEST['key'];
    $sum = 0;

    $array = [];
    for ($i = 0; $i < $rows; $i++) {
        $array[$i] = [];
        for ($j = 0; $j < $cols; $j++) {
            $array[$i][$j] = $_REQUEST['item-' . $i . '-' . $j];
        }
    }
    if ($key< $cols && $key>=0){
        for($i=0;$i<$rows;$i++){
            $sum += $array[$i][$key];
        }
        echo "Sum of column no.".$key." is: ".$sum;
    }else{
        echo "ERROR!!";
    }
}