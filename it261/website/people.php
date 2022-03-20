<?php
//people.php
//people-view.php
//config file
//credentials
// don't forget, this needs to be UPLOADED onto your server, will not work on localhost

include('./config.php');
include('./includes/dailyheader.php');

//for your big database assignment, your header include would go right here

// we need to grab our table and assign it to a variable
?>
<main>
    <div class="container">
        <div class="row">
            <div class="full column">
                <h4>Horror Movie DB</h4>


                <?php


$sql = 'SELECT  * FROM people';

//we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//create variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement

if(mysqli_num_rows($result) > 0) {
//the while loop will return the array
while($row = mysqli_fetch_assoc($result)) {
    echo '<h6>For more information about '.$row['first_name'].', please click <a href="people-view.php?id='.$row['people_id'].'"> here!</a></h>';
    echo '<ul>';
    echo '<li>'.$row['first_name'].'</li>';
    echo '<li>'.$row['last_name'].'</li>';

   

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
include('./includes/dailyfooter.php');
?>