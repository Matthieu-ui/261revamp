<?php

//arrays - catagories, names etc. (list)
//v1
$fruits = array(
    'bananas',
    'strawberries',
    'mangos',
    'raspberries',
    'apples',
    'pineapple'
);

//v2
$fruits = [
'bananas',
'strawberries',
'mangos',
'raspberries',
'apples',
'pineapple'
];


//indexed array EX:
$fruits [0] = 'bananas';
$fruits [1] = 'strawberries';
$fruits [2] = 'mangos';
$fruits [3] = 'raspberries';

$fruits [4] = 'apples';
$fruits [5] = 'pineapple';

//cannot echo an array

echo $fruits[2];

echo'<br>';
echo'<br>';

print_r($fruits);

echo'<br>';
//testing data types and # of characters
echo'<br>';
var_dump($fruits);

echo'<br>';
echo'<br>';

//pre looks better when using var_dump
echo'<pre>';
var_dump($fruits);
echo'</pre>';

echo'<br>';
echo'<br>';

//$title = 'handmaid\'s tale';
//$author = 'Margaret Atwood';
//$charactor = 'Elizabeth Moss';

$book = [
'title' => 'The Handmaid\'s Tale',
'author' => 'Margaret Atwood',
'charactor' => 'Elizabeth Moss'
];

//$nav['$key']   =  '$value';

$nav1['index.php'] = "Home";
$nav1['switch.php'] = "Switch";
$nav1['troubleshoot.php'] = "Troubleshooting";
$nav1['calc.php'] = "Calculator";
$nav1['email.php'] = "Email";
$nav1['gallery.php'] = "Gallery";
$nav1['database.php'] = "Database";

//you can echo an asociative array by usiong a foreach loop

foreach($nav1 as $key => $value) {
    echo ' Link '.$key.' Visual '.$value.' <br> ' ;

}

echo'<br>';
echo'<br>';

foreach($nav1 as $key => $value) {
    echo ' <a href=" '.$key.' "> '.$value.' <br> ' ;

}



?>

<nav>
    <ul>
        <?php

foreach($nav1 as $key => $value) {
    echo ' <li style="list-style-type:none;"> <a style="text-decoration:none; color: green;" href=" '.$key.' "> '.$value.' </li> ' ;

}

        ?>
    </ul>
</nav>

