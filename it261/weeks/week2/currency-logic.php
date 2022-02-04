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


<?php

// We have traveled the world and have different currency that we need to exchange back to US dollar
// canadia - .80
// rubles - 0.013
// pounds - 1.37
// euros - 1.14
// yen - 0.0087

// we have 2000 of each currency

$canadianRate = 0.80;
$rublesRate = 0.013;
$poundsRate = 1.37;
$euroRate = 1.14;
$yenRate = 0.0087;

$canadianUS = number_format(2000*$canadianRate, 2);
$rubleUS = number_format(2000*$rublesRate, 2);
$poundsUS = number_format(2000*$poundsRate, 2);
$euroUS = number_format(2000*$euroRate, 2);
$yenUS = number_format(2000*$yenRate, 2);


//echo 'we have $'.$canadianUS.' US dollars exchanged from Cananda';
//echo "<br>";
//echo 'we have $'.$rubleUS.' US dollars exchanged from Russia';
//echo "<br>";
//echo 'we have $'.$poundsUS.' US dollars exchanged from London';
//echo "<br>";
//echo 'we have $'.$euroUS.' US dollars exchanged from Finland';

//€euro  ₽ruble £pound ¥yen

?>

<body>

            <!-- Main Content -->

    <div class="container">


        <div class="row">
            <div class="one-half column" style="margin-top: 15%">

                <table class="exchangeTable">
                    <div class="tableTitle"><h1>Currency logic</h1></div>
                    <thead>
                        <tr>
                            <th>Currency</th>
                            <th>Location</th>
                            <th>Amount</th>
                            <th>Exchange(In US Dollars)</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Canadian Dollar</td>
                            <td>Canada</td>
                            <td>$2000</td>

                            <td>
                                <?php echo '$'.$canadianUS.'';?>
                            </td>
                        </tr>

                        <tr>
                            <td>Pound</td>
                            <td>London</td>
                            <td>£2000</td>

                            <td>
                                <?php echo '$'.$poundsUS.'';?>
                            </td>
                        </tr>
                        <tr>
                            <td>Euro</td>
                            <td>Finland</td>
                            <td>€2000</td>

                            <td>
                                <?php echo '$'.$euroUS.'';?>
                            </td>
                        </tr>
                        <tr>
                            <td>Yen</td>
                            <td>Japan</td>
                            <td>¥2000</td>

                            <td>
                                <?php echo '$'.$yenUS.'';?>
                            </td>
                        </tr>
                        <tr>
                            <td>Rubles</td>
                            <td>Russia</td>
                            <td>₽2000</td>

                            <td>
                                <?php echo '$'.$rubleUS.'';?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        

           
</body>

</html>