<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3inside out HTML!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="" method="post">
    <label>First Name</label>
    <input type="text" name="first_name">

    <label>Last Name</label>
    <input type="text" name="last_name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Comments</label>
    <textarea name="comments"></textarea>
   

    <input type="submit" value="confirm">
    <p><a href="">reset</a></p>

    <?php

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['comments'],
    
    )){
        if(empty($_POST['first_name']&&
        $_POST['last_name']&&
        $_POST['email']&&
        $_POST['comments'] )){

            echo '<p class="error">please fill out the fields</p>';

        }else{

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $comments = $_POST['comments'];


            echo '
            <div class="box">
<h3>Hello '.$first_name.' '.$last_name.', </h3>
<p>
We have recieved your email as: <h3>'.$email.'</h3> We also have your comments as the following -</p><h3> '.$comments.'
</h3>
            </div>
     
            ';
        }

        //end else
        
    } //end isset
    
    
    ?>
    </form>

    
</body>
</html>