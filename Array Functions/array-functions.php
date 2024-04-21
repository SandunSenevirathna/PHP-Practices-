<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions</title>
</head>

<body>
    <h1>Array Functions</h1>
    <br>

    <?php
        $studentName = "Nimal | Kamal | Sunimal | Ruwan";
        $randomNumbers = array(10, 22, 13, 54, 05, 66, 47, 48, 79, 10.02, 1.021, 120, 1503);
    ?>

    <pre>
        <?php
            echo print_r($randomNumbers);
        ?>
    </pre>

    <br>
    <?php
         echo "Max Value = " . max($randomNumbers);
    ?>
    <br>
    <?php
         echo "Min Value = " . min($randomNumbers);
    ?>
    <br>
    <?php
         echo "Lenght of array = " . count($randomNumbers);
    ?>
    <br>
        <pre>
            <?php
                sort($randomNumbers);
                print_r($randomNumbers);
            ?>
        </pre>

    <br>
        <pre>
            <?php
                rsort($randomNumbers);
                print_r($randomNumbers);
            ?>
        </pre>

    <br>
        <?php
                $stringValues = implode(" - ", $randomNumbers);
                echo $stringValues;
        ?>
    <br>
    <pre>
        <?php
                $stringValues = explode(" | ", $studentName);
                print_r($stringValues);
        ?>
    </pre>
    <br>
    <?php
        echo in_array("Sunimal", $stringValues);
        ?>
</body>

</html>