<?php 
// this is our first form
// using $_GET global variable


//logic - asking for name and email
// if it is set yippy skippy 
// if not, show me the form


if(isset($_GET['name'],
$_GET['email'])){
$name = $_GET['name'];
$email = $_GET['email'];
} else{
    
    echo '
    <form action="" method="get">
    <label>NAME</label>
    <input type"text" name="name">

    <label>EMAIL</label>
    <input type"email" name="email">

    <input type="submit" value="confirm">
    
    
    </form>';
}
?>