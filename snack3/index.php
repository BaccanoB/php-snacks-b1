<?php 
    $i;
    while($i < 15){
        for ($i=0; $i<15; $i++) { 
            $number = rand(1,50);

            if(!in_array($number,$numbers)){
                $numbers[]=$number;
            }
        }

        $i++;
    };

    print_r($numbers);
    ?>
