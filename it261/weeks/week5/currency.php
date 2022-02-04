<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st currency form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label>Name</label>
        <input type="text" name="name"
            value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

        <label>email</label>
        <input type="email" name="email"
            value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

        <label>amount</label>
        <input type="number" name="amount"
            value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">


        <!-- canadian - .80 rubles - .013 pounds -11.37 euros - 1.14 yen - .0087 -->
        <!-- if post currency is set and if post currecny -->

        <label>currency</label>
        <ul>
            <li><input type="radio" name="currency" value="0.013"
                    <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.013) echo 'checked = "checked" '; ?>>Rubles
            </li>
            <li><input type="radio" name="currency" value="0.80"
                    <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.80) echo 'checked = "checked" '; ?>>canadian
            </li>
            <li><input type="radio" name="currency" value="11.37"
                    <?php if (isset($_POST['currency']) && $_POST['currency'] == 11.37) echo 'checked = "checked" '; ?>>pounds
            </li>
            <li><input type="radio" name="currency" value="1.14"
                    <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.14) echo 'checked = "checked" '; ?>>euros
            </li>
            <li><input type="radio" name="currency" value="0.0087"
                    <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.0097) echo 'checked = "checked" '; ?>>yen
            </li>
        </ul>

        <select name="bank">

            <option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected" '  ;?>>Select
                one </option>
            <option value="Bank of America" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') echo 'selected = "selected" '; ?>> Bank of
                America</option>
            <option value="CHASE" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'CHASE') echo 'selected = "selected" '; ?>> CHASE
            </option>
            <option value="BECU" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected = "selected" '; ?>> BECU
            </option>

        </select>
        <br>
        <input type="submit" value="convert it">


    </form>


    <p><a href="">reset</a></p>


    <?php
    //if name is not filled out - send message
    // if each inputs are not filled - send specific message

    // name. email. amout, currency, bank\\
    // $_SERVER['REQUEST_METHOD']


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (empty($_POST['name'])) {
            echo '// please fill out your name //';
        }
        if (empty($_POST['email'])) {
            echo '// please fill out your email //';
        }
        if (empty($_POST['amount'])) {
            echo '// please enter an amount - a zero value will not work //';
        }
        if (empty($_POST['currency'])) {
            echo '// please select a currency //';
        }
        if ($_POST['bank'] == NULL) {
            echo '// please select a bank //';
        }

        //
        if (isset(
            $_POST['name'],
            $_POST['email'],
            $_POST['amount'],
            $_POST['currency'],
            $_POST['bank'],
        )) {

            $name = $_POST['name'];
            $email =   $_POST['email'];
            $amount = $_POST['amount'];
            $currency =  $_POST['currency'];
            $bank =  $_POST['bank'];
            
            $total = $amount * $currency;

            if(!empty($name && $email && $amount && $currency && $bank)) {

            

            echo '

            <p>'.$name.'</p>
            <p>'.$email.'</p>
            <p>'.$amount.'</p>
            <p>$'.$total.'</p>
            <p>'.$bank.'</p>
            
            ';
            }
        }
    } //close server

    ?>

</body>

</html>