<?php
//date function


date_default_timezone_set('America/Los_Angeles'); //sets correct server time zone
echo date('l, F j, Y h:i a'); // day - month - year - time

echo '<br>';

echo '<br>';

$our_date = date('H:i');
echo $our_date;
echo '<br>';
if($our_date <= 11){
    echo('Good Morning!');
} 

elseif($our_date <= 17){
    echo('Good Afternoon!');
}

else{
    echo('Good Evening');
}

?>