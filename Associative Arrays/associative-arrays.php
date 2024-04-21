<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Associative Arrays</title>
</head>

<body>
    <h1>PHP Associative Arrays</h1>
    <br>

    <?php
        $studentArray = array("firstName" => "Sandun", "secondName" => "Senevirathna", "age" => 25);
        $petArray = array("DOg","Cat","Pig","Elephant","Cow",) ;
    ?>

    <pre>
        <?php
            echo print_r($studentArray);
         ?>
    </pre>

    <?php
        echo "Full Name = " . $studentArray["firstName"] . " " . $studentArray["secondName"];
    ?>

    <br>
    <?php
        echo "Changed Age = " . $studentArray["age"] = 30;
    ?>
    <br>
    <pre>
        <?php
            echo print_r($studentArray);
         ?>
    </pre>
    <br>
    <pre>
        <?php
             $studentArray["address"] ="Galgamuwa";
         ?>
    </pre>
    <br>
    <pre>
        <?php
            echo print_r($studentArray);
         ?>
    </pre>
    <br>
    <br>
    <pre>
        <?php
            echo "Lenght of the array = " . count($studentArray);
         ?>
    </pre>
    <br>
</body>

</html>