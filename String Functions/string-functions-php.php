<?php 
    echo "<h1>String Functions</h1>";
    echo "<br>";

    $first = "the five boxing wizard";
    $second = "jumps quicly.";  
    $therd = " but the car is not there";

    $fulSentence = $first . " " .  $second;
    
    echo "<h2>". $fulSentence ."</h2>";
    echo "<br>";

    $fulSentence .= $therd;
    echo "<h2>". $fulSentence ."</h2>";    
?>
<br>
<h3> All simple : <?php echo strtolower($fulSentence)?></h3>
<br>
<h3> All capital : <?php echo strtoupper($fulSentence)?></h3>
<br>
<h3> First letter capital : <?php echo ucfirst($fulSentence)?></h3>
<br>
<h3> First Letter Capital In All : <?php echo ucwords($fulSentence)?></h3>
<br>
<h3> Get Lenght : <?php echo strlen($fulSentence)?></h3>
<br>
<h3> Find Word in Sentence : <?php echo strstr($fulSentence, "jump")?></h3>
<br>
<h3> Replace : <?php echo str_replace("wizard", "woman", $fulSentence)?></h3>