<?php
//rand() funnctin



//echo'<h2>playing with one dice!</h2>';

//$dice = rand(1,6);
//echo $dice;

echo 'CEE LO';
echo'<h2>playing with three dice!</h2>';


echo '
<p><b>WIN</b>: All three dice show the same number. Triple 6-6-6 is the highest roll, triple 5-5-5 is the next highest, etc. Any triple is considered an instant win. </p>
<p><b>WIN</b>: Sequential 4-5-6; this is considered an instant win. </p>
<p><b>Points</b>: One pair plus any other value; the odd die is the point value. For example, either 2-2-5 or 1-1-5 would give a point value of 5, and either would outscore a roll of 3-3-4 (point value of 4), which would in turn outscore a roll of 5-5-2 (point value of 2). Possible point values range from 2 to 5, since point values of 6 and 1 are special cases. When the point value is 6, this is considered an instant win; conversely, when the point value is 1, this is considered an instant loss. </p>
<p><b>Re-roll: </b>Sequential 1-2-3; this is considered an instant loss.</p>
';


$dice1 = rand(1,6);
$dice2 = rand(1,6);
$dice3 = rand(1,6);
$points = $dice3;

echo '<p> '.$dice1.'<br>'.$dice2.'<br>'.$dice3.'';

if($dice1 == 6 && $dice2 == 6 && $dice3 == 6 ){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' you won!</p>';
};
if($dice1 == 4 && $dice2 == 5 && $dice3 == 6 ){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' you won!</p>';
};
if($dice1 == 4 && $dice2 == 5 && $dice3 == 6 ){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' you won!</p>';
};
if($dice1 == 1 && $dice2 == 2 && $dice3 == 3 ){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' you LOST!</p>';
};
if($dice1 != $dice2 && $dice3 ){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' reroll!</p>';
};
if($dice1 != $dice3 && $dice2 ){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' reroll!</p>';
};
if($dice2 != $dice1 && $dice3 ){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' reroll!</p>';
};

if($dice1 == $dice2 && $dice3 == $points){
    echo '<p> '.$dice1.''.$dice2.''.$dice3.' you have '.$points.' points!</p>';  
};
if($dice1 == $dice3 && $dice2 == $points){
    echo '<p> '.$dice1.''.$dice3.''.$dice2.' you have '.$points.' points!</p>';  
};

if($dice3 == $dice2 && $dice1 == $points){
    echo '<p> '.$dice3.''.$dice2.''.$dice1.' you have '.$points.' points!</p>';  
};


echo'<h2>display random images</h2>';


$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';



$i = rand(0, 4);


$selectedImage = ''.$photos[$i].'      ';
echo ' <img src="images/'.$selectedImage.' " alt="'.$photos[$i].'"> ';

function randomImages($photos){
    $i = rand(0, 4);
    $myReturn = '';
    $selectedImage = ''.$photos[$i].'.jpg';
    $myReturn = '<img src="images/'.$selectedImage.' " alt="'.$photos[$i].'"> ';
    return $myReturn;
}
?>