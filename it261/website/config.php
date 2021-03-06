<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['mushrooms.php'] = 'Mushrooms';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// create a functino for our navigation, so the function is called out on our header.php page

function my_nav($nav){
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return.='<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        } else {
            $my_return.='<li><a href="'.$key.'">'.$value.'</a></li>';
        }//end else
    }//end for each
    return $my_return;
}// close nav function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home page of our IT 261 Website';
    $body = 'home';
    $headline = 'Welcome to our Home page of our IT 261 Website';
    break;

    case 'about.php':
    $title = 'About page of our IT 261 Website';
    $body = 'about inner';
    $headline = 'Welcome to our About page of our IT 261 Website';
    break;

    case 'daily.php':
    $title = 'Daily page of our IT 261 Website';
    $body = 'daily inner';
    $headline = 'Welcome to my Daily Page';
    break;


    case 'contact.php':
    $title = 'Contact page of our IT 261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to our Contact page of our IT 261 Website';
    break;

    case 'gallery.php':
    $title = 'Gallery page of our IT 261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to our Gallery page of our IT 261 Website';
    break;

    case 'thx.php':
        $title = 'Thank you page of our form on contact page of our IT 261 Website';
        $body = 'thanks';
        $headline = 'Thank you page of our IT 261 Website';
        break;
}

// Begining of Homework 3

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}


//emailable form php

$first_name = '';
$last_name = '';
$email = '';
$exp_level = '';
$distros = '';
$uses = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$exp_level_Err = '';
$distros_Err = '';
$uses_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your first name';
    }else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your last name';
    }else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please fill out your email name';
    }else {
        $email = $_POST['email'];
    }

    if(empty($_POST['exp_level'])) {
        $exp_level_Err = 'Please select your experience level';
    }else {
        $exp_level = $_POST['exp_level'];
    }

    if(empty($_POST['distros'])) {
        $distros_Err = 'Please select your distro';
    }else {
        $distros = $_POST['distros'];
    }

    if($_POST['uses'] == NULL) {
        $uses_Err = 'Please select your primary use';
    }else {
        $uses = $_POST['uses'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please share your commments with us.';
    }else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_Err = 'You must agree';
    }else {
        $privacy = $_POST['privacy'];
    }

    
    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Your phone number please!';
        unset($_POST['phone']);
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_Err = 'Invalid format!';
        unset($_POST['phone']);
        } else{
        $phone = $_POST['phone'];
        }
        }
        
        
           
   
    
    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['exp_level'],
        $_POST['distros'],
        $_POST['uses'],
        $_POST['comments'],
        $_POST['privacy']
    )){
        $to = 'Mattfelker206@gmail.com';
        $subject = 'Test email' .date('m/d/y') ;
        $body = '
        The first name is: '.$first_name.''.PHP_EOL.'
        The last name is: '.$last_name.''.PHP_EOL.'
        Email: '.$email.''.PHP_EOL.'
        Phone: '.$phone.''.PHP_EOL.'
        Experience Level: '.$exp_level.''.PHP_EOL.'
        Primary Uses: '.$uses.''.PHP_EOL.'
        Comments: '.$comments.''.PHP_EOL.'
        ';

        $headers = array(
            'from' => 'noreply@mystudentswa.com',
            'Reply-to' => ''.$email.''

        );
        
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }

}//end server request

//my random images!
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';


function random_pics($photos){
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpeg';
    echo '<img src="images/'.$selected_image.' "  alt=" '.$photos[$i].' ">';
}


?>

<?php 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}


?>