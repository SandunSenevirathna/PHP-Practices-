<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Floating Point</title>
</head>

<body>
    <h1>Floating Point</h1>
    <br>
    <?php

    $numberOne = 1.023;
    $numberTwo = 20.235;
    ?>

    <?php echo $numberOne . " + " . $numberTwo . " = " . abs($numberOne + $numberTwo) ?>
    <br>
    Round = <?php echo round(($numberOne + $numberTwo), 1) ?>
    <br>
    Round = <?php echo round(($numberOne + $numberTwo), 2) ?>
    <br>
    Round Up = <?php echo ceil(($numberOne + $numberTwo)) ?>
    <br>
    Round Down = <?php echo floor(($numberOne + $numberTwo)) ?>

    <h1>How to check if a number is int or float</h1>

    <?php 

        $intNumber = 250;
        $floatNumber = 253.25;

    ?>

    <br>
    <?php echo "Is {$intNumber} an Integer ? " . is_int($intNumber)  ?>
    <br>
    <?php echo "Is {$floatNumber} an Float ? " . is_float($floatNumber)  ?>
    <br>
    <?php echo "Is {$intNumber} an Float ? " . is_float($intNumber)  ?>
    <br>
    <?php echo "Is {$floatNumber} an Integer ? " . is_int($floatNumber)  ?>
    <br>
    <?php echo "Is {$floatNumber} a Number ? " . is_numeric($floatNumber)  ?>


</body>

</html>