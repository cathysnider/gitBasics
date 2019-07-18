<?php

// Set some spacer constants
define("SPACES", "&nbsp; &nbsp;");
define("LINEBREAK", "</br />");
define("PARAGRAPH", "</br /></br />");

echo "<h2>Arrays</h2>";

// First, we create some arrays.
$countries = array('China', 'Russia', 'Kiwi', 'North Korea', 'Uganda');
$animals = array('dog' => 'Bandit', 'cat' => 'Muffins', 'hamster' => 'HammyGuy', 'horse' => 'LolaMix', 'anole' => 'Emilia');

// Now we loop through each item and do something with it
echo "<b>Using a For Loop</b>" . LINEBREAK;

function myForLoop($arrayName) {
    $arrayLength = count($arrayName);
    echo "There are " . $arrayLength . " items in this array." . LINEBREAK;
    for ($i=0; $i<$arrayLength; $i++) {
        echo $arrayName[$i];
        echo SPACES;
    }
    echo PARAGRAPH;
}

myForLoop($countries);

// myForLoop($animals); Doesn't work; you can't refer to associative array elements with index number.

echo "<b>Using a ForEach Loop; Values only</b>" . LINEBREAK;

function myForEachLoop($arrayName)
{
    foreach ($arrayName as $value) {
        print $value . SPACES;
    }
    echo PARAGRAPH;
}

myForEachLoop($countries);
myForEachLoop($animals);

echo "<b>Using a ForEach Loop; both Keys and Values</b>" . LINEBREAK;

function myForEachLoopKV($arrayName)
{
    foreach ($arrayName as $key => $value) {
        print $key . " + " . $value . LINEBREAK;
    }
    echo PARAGRAPH;
}

myForEachLoopKV($countries);
myForEachLoopKV($animals);

echo "<h2>Multidimensional Arrays</h2>";

$myMultiArray = array(
    'Harry' => array('year' => 1972, 'band' => 'The Cure','size' => 10,),
    'Ron' => array('year' => 1975,'band' => 'Coldplay','size' => 8,),
    'Hermione' => array('year' => 1969, 'band' => 'Beach Boys', 'size' => 10,)
    );

echo "<b>Using a ForEach Loop ljsdlfjs </b>" . LINEBREAK;


?>