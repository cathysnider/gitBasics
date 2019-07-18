<?php

// Set some spacer constants
define("SPACES", "&nbsp; &nbsp;");
define("LINEBREAK", "</br />");
define("PARAGRAPH", "</br /></br />");

echo "<h2>Simple Arrays</h2>";


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

function myForEachLoop($arrayName) {
    foreach ($arrayName as $value) {
        print $value . SPACES;
    }
    echo LINEBREAK;
}

myForEachLoop($countries);
myForEachLoop($animals);

echo LINEBREAK;
echo "<b>Using a ForEach Loop; both Keys and Values</b>" . LINEBREAK;

function myForEachLoopKV($arrayName)
{   $i = 0;
    foreach ($arrayName as $key => $value) {
        $i = $i++;
        print $key . ": " . $value . LINEBREAK;
    }
    echo "There are " . $i . " items in this array.";
    if ($i = 0) {echo "(Well that ain't right.)";}
    echo PARAGRAPH;
}

myForEachLoopKV($countries);
myForEachLoopKV($animals);

echo "<h2>Multidimensional Arrays</h2>";
$myMultiArray = array(
    'Harry' => array('Blood Status' => 'half-blood', 'Wand' => '11", holly, phoenix feather','Born' => 'Godric\'s Hollow, England',),
    'Ron' => array('Blood Status' => 'pure-blood','Wand' => '12", Ash, unicorn tail hair','Born' => 'Ottery St Catchpole, Devon, England,',),
    'Hermione' => array('Blood Status' => 'muggle', 'Wand' => '10 3/4", vine wood, dragon heartstring', 'Born' => 'England',)
);
echo "<p>The easiest way to loop through a multidimensional array is to nest two foreach loops; 
the outer loop goes through each outer array element, and the inner loop goes through 
each inner array element within the selected outer element.</p>";

echo "<b>Using a Nested ForEach Loop on a Multidimensional Array  </b>" . LINEBREAK;

function myForEachLoopNested($multiArrayName) {
    $i = 0;
    foreach ($multiArrayName as $arrayName => $elementSet) {
        echo "<b>" . $arrayName . "</b><br />";
       foreach($elementSet as $key => $value) {
           $i = $i++;
           print $key . ": " . $value . LINEBREAK;
       }
    }
    echo "There are " . $i . " items in this array.";
    if ($i = 0) {echo "(Well that ain't right.)";}
    echo PARAGRAPH;
}

myForEachLoopNested($myMultiArray);


?>