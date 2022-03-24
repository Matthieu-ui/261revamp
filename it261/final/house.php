<?php
//people.php
//people-view.php
//config file
//credentials
// don't forget, this needs to be UPLOADED onto your server, will not work on localhost

include('config.php');
include('includes/header.php');

//for your big database assignment, your header include would go right here

// we need to grab our table and assign it to a variable
?>
<div id="wrapper">
    <h4><?php echo $title ?></h4>


    <?php


$sql = 'SELECT  * FROM houseList';

//we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//create variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement

if(mysqli_num_rows($result) > 0) {
//the while loop will return the array
while($row = mysqli_fetch_assoc($result)) {
    echo '<h5>'.$row['house_name'].'</h5>';
    echo '<br>';
    echo '<b>For more information about '.$row['house_location'].', please click <a href="house-view.php?id='.$row['house_id'].'"> here!</a></b>';
    echo '<hr>';
    echo '<ul>';
    echo '<li>Price:'.$row['house_price'].'</li>';
    echo '<li>Listed:'.$row['house_listed'].'</li>';

    echo '</ul>';
    echo '<hr>';
}//close while loop

}else {
    echo 'Houston, we have a problem';

}//close if statement

mysqli_free_result($result);
mysqli_close($iConn);

?>



    <?php
include('includes/footer.php');