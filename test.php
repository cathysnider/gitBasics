<?php

/*
echo $linebreak = "</br />";
echo $paragraph = '<p>&nbsp;</p>';
echo $spaces = '&nbsp; &nbsp; ';
*/

// The next step is taking the data and processing it.
function replace_tokens_with_randomness($string, $replacements) { 
  
  // Loop through each replacement. We can have as many replacements as we want.
  foreach ($replacements as $token => $replacement_array) {
    $replacement_string = array_rand(array_flip($replacement_array));
    $string = str_replace($token, $replacement_string, $string);
  }
  
  return $string;
}

// Step 1 is often isolating the data that could change from one function call to another.
$string = 'This peach is ADVERB ADJECTIVEPUNCTUATION';
$replacements = array(
  'ADVERB' => array('very', 'kind of', 'super', 'not'),
  'ADJECTIVE' => array('good', 'bad', 'ugly'),
  'PUNCTUATION' => array('!', '?', '...', '.'),
);



// Pass our data to the function.
print replace_tokens_with_randomness($string, $replacements);


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