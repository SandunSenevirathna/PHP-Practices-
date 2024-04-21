<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
</head>
<body>
    <h1>PHP Arrays</h1>
    <br>

    <?php

        $carsArray = array("Toyota", "Benz", "BMW", "Audi");

    ?>
    <?php echo "My favorite car is." . $carsArray[3];?> 
    <br>

    <h3>Befor</h3>
    <br>
    <pre>
        <?php echo print_r($carsArray);?> 
    </pre>

    <br>
    <h3>After</h3>
    <br>
    <?php 
    
        $carsArray[4] = "Suzuki";
        array_push($carsArray,"Mitsubishi", "LMG");
        $carsArray[3] = "Honda";
    
    ?>
    <pre>
        <?php echo print_r($carsArray);?> 
    </pre>

</body>
</html>