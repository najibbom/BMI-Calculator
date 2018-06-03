<?php
    $height = $_REQUEST["ht"];
    $weight = $_REQUEST["wt"];
    
    $heightInMeters = $height/100;
    
    $bmi = $weight/($heightInMeters * $heightInMeters); 
    
    $message = "";
    
    if ($bmi < 18.5) {
        $message = "You're underweight. :o";
    } else if ($bmi >= 18.5 && $bmi <= 24.9) {
        $message = "You have a normal weight ;)";
    } else if ($bmi >= 24.9 && $bmi <= 29.9) {
        $message = "You are overweight :| ";
    } else {
        $message = "Be careful! You're getting obese. xD";
    }
    
    $output = array(
        "bmi" => $bmi,
        'message' => $message
        );
        
    echo json_encode($output);
?>