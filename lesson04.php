<?php
$stack = [];

while(true){
    $mode = (int)readline("1-4 : ");

    if ($mode < 1 || $mode > 4){
        echo "終了\n";
        break;
    }

    switch($mode){

    case 1:
        $data = readline("データ : ");
        array_push($stack, $data);
        echo "エンキューしました\n";
        break;

    case 2:
        if (empty($stack)){
            echo "空です\n";
        } else {
            echo "Dequeue : " . array_shift($stack) . "\n";
        }
        break;

    case 3:
        if (empty($stack)){
            echo "空です\n";
        } else {
            echo "Front : " . $stack[0] . "\n";
        }
        break;

    case 4:
        echo empty($stack) ? "empty\n" : "not empty\n";
        break;
    
    }
}