<?php


// Set some spacer constants
define("SPACES", "&nbsp; &nbsp;");
define("LINEBREAK", "</br />");
define("PARAGRAPH", "<p>&nbsp;</p>");

// Step 1 is often isolating the data that could change from one function call to another.
$string = 'This myFruit is myAdverb myAdjectiveMyPunctuation';
$multiArrayName = array(
    'myFruit' => array('peach', 'apple', 'banana', 'orange', 'apricot'),
    'myAdverb' => array('very', 'kind of', 'super', 'not'),
    'myAdjective' => array('good', 'bad', 'ugly'),
    'MyPunctuation' => array('!', '?', '...', '.'),
);


// The next step is taking the data and processing it.
function replace_tokens_with_randomness($string, $multiArrayName) {

    // Loop through each replacement. We can have as many replacements as we want.
    foreach ($multiArrayName as $arrayName => $elementSet) {
        $newWord = array_rand(array_flip($elementSet)); # chooses a new word
        $string = str_replace($arrayName, $newWord, $string); #replaces old word with new word
        echo $string . LINEBREAK;
    }
    echo PARAGRAPH;
    return $string;
}

print replace_tokens_with_randomness($string, $multiArrayName);





function myForEachLoopNested($multiArrayName) {

    foreach ($multiArrayName as $arrayName => $elementSet) {
        echo "<b>" . $arrayName . "</b><br />";
        foreach($elementSet as $key => $value) {
            $i = $i++;
            print $key . ": " . $value . LINEBREAK;
        }
    }

}






// Pass our data to the function.



// Example for a virtual Twister spinner.
/*
$string = 'Put your LOCATION LIMB on a COLOR circle';
$replacements = array(
  'LOCATION' => array('right', 'left'),
  'LIMB' => array('hand', 'foot'),
  'COLOR' => array('red', 'green', 'blue', 'yellow'),
);
print replace_tokens_with_randomness($string, $replacements);
*/

// Try to use this function some other ways:
// - Mad libs
// - Magic 8 ball
// - Band name generator
// - Fortune cookie

?>