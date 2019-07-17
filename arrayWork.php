<?php

$linebreak = "</br />";
$paragraph = '<p>&nbsp;</p>';
$spaces = '&nbsp; &nbsp; ';

// First, we create an array.
$my_array = array('China', 'Russia', 'Kiwi', 'North Korea',);

// Now we loop through each item and do something with it.
foreach ($my_array as $num) {
    print $num . '<br />';
}
echo $newline;

$animalsA = array('Bandit', 'Dice', 'HammyGuy', 'Midas', 'LolaMix');

$myArrayLength = count($my_array);
echo $myArrayLength;
echo $spaces;
for ($i=0; $i<$myArrayLength; $i++){
    $item = $my_array[$i];
    echo $item;
    echo $spaces;

}
echo $newline;
echo "BEGIN NEW FUNCTION <br/>";



function myForLoop($arrayName) {

    $arrayLength = count($arrayName);
    for ($i=0; $i<$arrayLength; $i++) {
        return $arrayName[$i];
    }

};

$animals = array('Bandit', 'Dice', 'HammyGuy', 'Midas', 'LolaMix');



foreach ($animals as $animal) {
    print $animal . '<br />';
}



?>
