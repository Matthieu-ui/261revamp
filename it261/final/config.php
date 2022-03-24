<?php //config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

// initialize variables
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have sucessfully logged on!';
$errors = array();

// navigation
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['switch.php'] = 'Switch';
$nav['house.php'] = 'Houses';
$nav['contact.php'] = 'Contact';


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
    $title = 'Home page of our final website';
    $body = 'home';
    $headline = 'Welcome to my final project! WHEW!';
    break;

    case 'about.php':
    $title = 'About page of final website';
    $body = 'about inner';
    $headline = 'Screen capture of my Databases';
    break;

    case 'switch.php':
    $title = 'Switch page of final website';
    $body = 'daily inner';
    $headline = 'Incredible homes daily!';
    break;

    case 'house.php':
    $title = 'Seattle property listings';
    $body = 'product inner';
    $headline = 'Welcome to my product page of final website';
    $house1 = 'images/houses/house1.jpg';
    break;

    case 'house-view.php':
    $title = 'Gallery view page final website';
    $body = 'product-view inner';
    $headline = 'Welcome to my Gallery view page of final website';
    break;

    case 'contact.php':
    $title = 'Contact page of final website';
    $body = 'contact inner';
    $headline = 'Contact us!';
    break;

    case 'thx.php':
    $title = 'Thank you page';
    $body = 'thanks';
    $headline = 'Thank you for filling out the form!';
    break;

    case 'login.php':
    $title = 'Login page';
    $body = '';
    $headline = '';
    break;

    case 'register.php':
    $title = 'Register page';
    $body = '';
    $headline = '';
    break;
}

// switch
if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}
switch($today) {

    case 'Sunday' :
        //$color = '<body style="background-color: whitesmoke"></body>';
        $house_address = 'Idaho, USA';
        $pic = '/sunvalley.png';
        $alt = 'Starship';
        $about = 'The custom-built compound spans a staggering 12,550 square feet and has a distinctive appearance akin to a UFO, combining a palette of concrete, steel and glass throughout. Inside, the spacious and light-filled rooms have been finished with rustic, reclaimed wood salvaged from the Pacific Northwest. Structural elements have been left exposed throughout too, giving the interior a cool industrial feel.';
        $coordinates = 'Unknown';
        break;
    
    case 'Monday' :
        //$color = '<body style="background-color: darkbrown"></body>';
        $house_address = 'Victoria, Australia';
        $pic = '/poleHouse.jpg';
        $alt = 'Pole House';
        $about = "Suspended 131 feet above Fairhaven Beach in Australia, the Pole House is one of the most iconic cliff houses in the world. With 180-degree views of the sea, it benefits from vistas across the Great Ocean Road, which is one of the world's most picturesque stretches.";
        $coordinates = '-38.46772, 144.07944';
        break;
    
    case 'Tuesday' :
        //$color = '<body style="background-color: goldenrod"></body>';
        $house_address = 'Granada, Spain';
        $pic = '/cliffHouse.jpg';
        $alt = 'Cliff House';
        $about = 'This psychedelic house, available to rent on Airbnb, has been ingeniously built into a cliff face in Salobreña in Spain. Perched high above the Mediterranean sea, the home features an unusual form and scale-like cladding.';
        $coordinates = '36.91142, -3.63751';
        break;
    
    case 'Wednesday' :
        //$color = '<body style="background-color: tan"></body>';
        $house_address = 'Suffolk, UK';
        $pic = '/belleGrove.jpg';
        $alt = 'Farm House';
        $about = 'Nick Fisher and Jo Jordan-Fisher built this remarkable farmhouse in Suffolk, England, with the couple undertaking most of the work themselves. The ultimate self-build, the remarkable residence looks like something out of a fairytale.';
        $coordinates = '52.37476, 1.52763';
        break;
    
    case 'Thursday' :
        //$color = '<body style="background-color: orange"></body>';
        $house_address = 'British Columbia, Canada';
        $pic = '/retreat.jpg';
        $alt = 'Oceanside Retreat';
        $about = 'Designed by Patkau Architects, this spectacular oceanside home in British Columbia, Canada was completed in 2012 for homeowners Eric Peterson and Christina Munck. The daring house, which juts out over a cliff, is perched a staggering 44 feet above the ocean.';
        $coordinates = 'Unknown';
        break;
    
    case 'Friday' :
        //$color = '<body style="background-color: lightskyblue"></body>';
        $house_address = 'Antiparos, Greece';
        $pic = '/ktimaHouse.jpg';
        $alt = 'Ktima House';
        $about = "Built mostly underground, Ktima House in Antiparos, Greece is a subterranean bolthole designed in a zig-zag shape and hidden away on a secluded, private part of the small island. The name Ktima means 'plot with fertile land', fitting since the house is casually tucked into the site's green slopes.";
        $coordinates = '40.40964, 23.59117';
        break;
    
    case 'Saturday' :
        //$color = '<body style="background-color: burlywood"></body>';
        $house_address = 'California, USA';
        $pic = '/joshuaTree.jpg';
        $alt = 'Joshua Tree';
        $about = "Conceived by London designer James Whitaker of Whitaker Studio, work on this futuristic shipping container home is set to begin in the not-so-distant future. Nestled in the arid desert of California's Joshua Tree National Park, the realistic renderings of the residence are almost otherworldly, depicting a sprawling white structure comprised of a number of carefully angled container units.";
        $coordinates = 'Unknown';

        break;
    
    }

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

//emailable form php

$first_name = '';
$last_name = '';
$email = '';
$home_owner = '';
$youOwn = '';
$market = '';
$comments = '';


$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$home_owner_Err = '';
$youOwn_Err = '';
$market_Err = '';
$comments_Err = '';


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

    if(empty($_POST['home_owner'])) {
        $reason_Err = 'Please select home owner status';
    }else {
        $reason = $_POST['home_owner'];
    }

    if(empty($_POST['youOwn'])) {
        $mushrooms_Err = 'Please let us know if you own a home!';
    }else {
        $mushrooms = $_POST['youOwn'];
    }

    if($_POST['market'] == NULL) {
        $locale_Err = 'Please share your thoughts!';
    }else {
        $locale = $_POST['market'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please leave a commments with us.';
    }else {
        $comments = $_POST['comments'];
    }


    // the logic is if post mushrooms IS NOT empty, then, 
    // we need to grab the mushrooms adn display the, just like we did in our implode.php

   
    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['home_owner'],
        $_POST['youOwn'],
        $_POST['market'],
        $_POST['comments']
    )){
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email' .date('m/d/y') ;
        $body = '
        First name: '.$first_name.''.PHP_EOL.'
        Last name: '.$last_name.''.PHP_EOL.'
        Email: '.$email.''.PHP_EOL.'
        home_owner: '.$home_owner.''.PHP_EOL.'
        youOwn: '.$youOwn.''.PHP_EOL.'
        market: '.$market.''.PHP_EOL.'
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
?>