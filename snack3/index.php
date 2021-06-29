<?php 
    $numbers=[];
    while(count($numbers) < 15){
        $number = rand(1,50);
        if(!in_array($number,$numbers)){
            $numbers[]=$number;
        }
    }
    var_dump($numbers);
    print_r($numbers);
    ?>
