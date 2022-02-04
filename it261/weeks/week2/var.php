<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currency Logic</title>
    <link rel="stylesheet" type="text/css" href="../../../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../../../css/skeleton.css">
</head>

<body>


            <!-- Main Content -->

    <div class="container">

        <div class="row">
            <div class="one-half column" style="margin-top: 15%">

                <div class="varDiv">
                    <div class="varTitle"><h1>Var.php</h1></div>
                    <?php 
// intro to our variables
// as well as syntax
// what is a variabl?  --a variable is a container

$name='Matthieu';
// info in between single quotes is a string
echo $name;

echo '<br>'; //break tag

$name='Roger';
echo $name;

echo '<br>'; //break tag

echo "My first name is $name";
//use single quotes because we will be placing php inside our html values later on -- ex: <a href = "">

echo '<br>'; //break tag

echo 'My first name is '.$name.'     ';

echo '<br>'; //break tag
echo '<br>'; //break tag

$temp='45';
// data type - integer / number
echo 'Today the temperature was '.$temp.' degrees. ';

echo '<br>'; //break tag
echo '<br>'; //break tag

$bodyTemp = 98.6;
// data type - float - anything with a decimal.
echo 'The body temperature of the human body is '.$bodyTemp.' degrees. ';

echo '<br>'; //break tag
echo '<br>'; //break tag



//data type - boolean - TRUE or FALSE - true = 1 false = 0\

//data type - NULL - 
// <select><option value=""NULL>Select one</option></select>

$vehicle='truck';
$x = 20;
$y = 3000;
$z = $x * $y;
echo $z;

echo '<br>'; //break tag
echo '<br>'; //break tag

// circumfrence of a circle = 2 pi r 
$pi = 3.14;
$radius = 10;
$circumference = (2 * $pi) * $radius;

echo $circumference;

echo '<br>'; //break tag
echo '<br>'; //break tag

$celcius = 26;
$far = ($celcius * 9/5) + 32;
$friendlyFar = ceil($far);
// ceil is a function that will round up.
//floor is a functoin that will round down. 
echo $friendlyFar;

echo '<br>'; //break tag

$celcius = 26;
$far = ($celcius * 9/5) + 32;

// ceil is a function that will round up.
//floor is a functoin that will round down. 
//round will auto round your number
echo floor($far);

echo '<br>'; //break tag
echo '<br>'; //break tag

$money = 100;
$divide = 7;
$amount = $money / $divide;
$friendlyAmount = number_format($amount, 2);
echo $amount;
echo '<br>'; //break tag
echo $friendlyAmount;
//number_format(argument, places ex: 2)

echo '<br>'; //break tag
echo '<br>'; //break tag

$money = 2500;
$divide = 2.2;
$amount = $money / $divide;
$friendlyAmount = number_format($amount, 2);
echo 'I now have $'.$friendlyAmount.' dollars!';

?>

                </div>
            </div>
        </div>
    </div>
 

           
</body>

</html>






