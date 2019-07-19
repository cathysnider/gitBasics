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
    'Harry' => array('Blood Status' => 'Half-blood', 'Wand' => 'Holly & Phoenix feather','Patronus' => 'Stag',),
    'Ron' => array('Blood Status' => 'Pure-blood','Wand' => 'Ash & Unicorn tail hair','Patronus' => 'Jack Russell Terrier',),
    'Hermione' => array('Blood Status' => 'Muggle', 'Wand' => 'Vine Wood & Dragon Heartstring', 'Patronus' => 'Otter',)
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

echo "<p><b>Using a ForEachKeyValue loop with a Multidimensional array to replace tokens in a string</b></p>";

// String replacement with random array elements
$fruitString = 'This myFruit is myAdverb myAdjectiveMyPunctuation';
$fruitWords = array(
    'myFruit' => array('peach', 'apple', 'banana', 'orange', 'apricot'),
    'myAdverb' => array('very', 'kind of', 'super', 'not'),
    'myAdjective' => array('good', 'bad', 'ugly'),
    'MyPunctuation' => array('!!', '??', '...', '.'),
);


// The next step is taking the data and processing it.
function replace_tokens_with_randomness($string, $multiArrayName) {
    echo "Initial string with tokens: " . $string . LINEBREAK;
    // Loop through each replacement. We can have as many replacements as we want.
    foreach ($multiArrayName as $arrayName => $elementSet) {
        $newWord = array_rand(array_flip($elementSet)); # chooses a random key word from flipped array
        $string = str_replace($arrayName, $newWord, $string); #replaces old word with new word
        echo "Looping: " . $string . LINEBREAK;
    }
    return $string;
}
$newFruitString = replace_tokens_with_randomness($fruitString, $fruitWords);
echo "The final string: " . $newFruitString;

// Example for a virtual Twister spinner.

echo "<p><b>Let's Play Twister</b></p>";
$twisterString = 'Put your LOCATION LIMB on a COLOR circle';
$twisterWords = array(
  'LOCATION' => array('right', 'left'),
  'LIMB' => array('hand', 'foot'),
  'COLOR' => array('red', 'green', 'blue', 'yellow'),
);
$newTwisterString = replace_tokens_with_randomness($twisterString, $twisterWords);
echo "The final string: " . $newTwisterString;


echo PARAGRAPH;
?>