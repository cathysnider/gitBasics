<?php

// Set some spacer constants
define("SPACES", "&nbsp; &nbsp;");
define("LINEBREAK", "</br />");
define("PARAGRAPH", "<p>&nbsp;</p>");


//$linebreak = "</br />";
//$paragraph = '<p>&nbsp;</p>';
//$spaces = '&nbsp; &nbsp; ';

// First, we create an array.
$countries = array('China', 'Russia', 'Kiwi', 'North Korea', 'Uganda');
$animals = array('Bandit', 'Dice', 'HammyGuy', 'Midas', 'LolaMix');

// Now we loop through each item and do something with it

echo "<b>Using a For Loop</b>" . LINEBREAK;

function myForLoop($arrayName) {
    $arrayLength = count($arrayName);
    echo "There are " . $arrayLength . " items in this array." . LINEBREAK;
    for ($i=0; $i<$arrayLength; $i++) {
        echo $arrayName[$i];
        echo SPACES;
    }
}

myForLoop($animals);

echo PARAGRAPH;

echo "<b>Using a ForEach Loop</b>" . LINEBREAK;

foreach ($countries as $country) {
    print $country . SPACES;
}

?>
