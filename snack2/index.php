<?php 
    // if(empty($_GET["email"])){
    //     echo "ERROR";
    // } else{
    //     $mail=$_GET["email"];
    // }; 
    $name=$_GET["name"];
    $email=$_GET["email"];
    $age=$_GET["age"];

    if(strpos($email,".") !==false && strpos($email,"@") !==false & strlen($name) > 3 && is_numeric($age)){
        echo "Accesso riuscito!";
    } else {
        echo "Accesso negato!";
    };    
?>
