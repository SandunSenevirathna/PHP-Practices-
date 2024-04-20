<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Integers</title>
</head>
<body>
    <h1> PHP Integers </h1>
    <?php

        $numOne = 10;
        $numTwo = 20;

    ?>
    <br>
    <h3> Total = <?php echo ($numOne + $numTwo) ?> </h3> 
    <br>
    <h2> Some usefull integer functions PHP + Integers</h2>
    <br>
    Square Root | sqrt(): <?php echo sqrt(100); ?>
    <br>
    Exponential | pow(): <?php echo pow(2, 3); ?>
    <br>
    Absolute Value | abs(): <?php echo abs(50 - 100); ?>
    <br>
    Modulo | fmod(): <?php echo fmod(10, 3); ?>
    <br>
    Random Number | rand(): <?php echo rand(); ?>
    <br>
    Random Number | rand(10, 100): <?php echo rand(10, 100); ?>
  
</body>
</html>