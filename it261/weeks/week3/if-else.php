<?php
//if/else statements --

$temp = 85;
if($temp <= 50){
echo 'chilly';
}
elseif($temp <=60){
    echo 'who knows????????';
} 
elseif($temp<=70){
    echo "getting warmer";
} 
elseif($temp<= 85){
    echo 'beach weather';
}
else{
    echo 'hot';
}


echo '<br>';
echo '<br>';

$salary = 200000; //annual salary
$someBonus = .10; //
$mediumBonus = .20; //
$bigBonus = .30; // 
$sales = 159999; //

//logic - if sales is greater than 99999, you will recieve some bonus
//if sales is over 120000, you will recieve the medium bonus
//if sales is over 140000, you will recieve the big bonus

// is sales are less than 99999 no bonus

if($sales <= 99999){
    echo 'NO BONUS';
} elseif($sales <= 119000){
    $salary *=1.10;
echo 'You earned a 10% bonus; You\'re salary is $'.$salary.'.';
} elseif($sales <= 139999){
    $salary *=1.20;
echo 'You earned a 20% bonus; You\'re salary is $'.$salary.'.';
} elseif($sales <= 149999){
    $salary *=1.30;
echo 'Whoo! You earned a 30% bonus; You\'re salary is $'.$salary.'.';
} else{
    echo('I am retiring.');
}

?>