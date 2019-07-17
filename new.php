<?php

/*
echo $linebreak = "</br />";
echo $paragraph = '<p>&nbsp;</p>';
echo $spaces = '&nbsp; &nbsp; ';
*/



// How to get contents from a file into a variable.
ob_start();
include('data.txt');
$data = ob_get_contents();
ob_end_clean();

// Let's make sure we have the data.
echo 'dump of the data' . $linebreak;
var_dump($data);

echo $paragraph;

// Let's take our data and make it an array so it's easy to work with. This is called a 'parser'.
$people_data_array = explode("\n", $data);
echo 'dump of the exploded data' . $linebreak;
var_dump($people_data_array);

echo $paragraph;

$myArrayLength = count($people_data_array);
echo "Array Length: " . $myArrayLength;
echo $linebreak;
for ($i=0; $i<$myArrayLength; $i++){
    $item = $people_data_array[$i];
    echo $item;
    echo $linebreak;
    }
    
echo $paragraph;

    
   // Loop through each line,
foreach ($people_data_array as $person_string) {
  $person_array = explode(',', $person_string);
  $name = trim($person_array[0]);
  $birthyear = trim($person_array[1]);
  $fav_band = trim($person_array[2]);
  $shoe_size = trim($person_array[3]);
   echo "Name: " . $name . $spaces;
  echo "Birthyear: " . $birthyear . $spaces;
  echo "Fav Band: " . $fav_band . $spaces;
 echo "Shoe size: " . $shoe_size . $spaces;
   echo $linebreak;
  $people[$name] = array(
    'birthyear' => $birthyear,
    'fav_band' => $fav_band,
    'shoe_size' => $shoe_size,
  );
}
echo $paragraph;
var_dump($people);

?>