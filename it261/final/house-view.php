<?php

include('config.php');

//if isset $_GET['today'] <class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}else {
    header('Location: house.php');
}

$sql = 'SELECT * FROM houseList WHERE house_id ='.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//create a variable $result?
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    //now time for the while loop - and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)) {
        //we are not echoing, we are assigning our row first_name to $first_name
        $house_name = stripslashes($row['house_name']);
        $house_price = stripslashes($row['house_price']);
        $house_location = stripslashes($row['house_location']);
        $house_sqft = stripslashes($row['house_sqft']);
        $house_has  = stripslashes($row['house_has ']);
        $house_listed = stripslashes($row['house_listed']);
        $feedback = '';
    }
}else {
    $feedback = 'Something is not working!!';
}
include('includes/header.php');
// for the big assignment, you will now call out the header include


?>
<div id="wrapper">
    <h4><?php echo $house_location ;?></h4>
    <aside>
        <?php
                    if($feedback =='') {
                        echo '<img class="dbPhoto" src="images/houses/house'.$id.'.jpg" alt="'.$house_name.'">';
                
                    }
                    ?>
    </aside>

    <?php
                    if($feedback == '') {
                    echo '<ul>';
                    echo '<li><b>Location:</b> '.$house_location.'</li>';
                    echo '<li><b>Listed price:</b> '.$house_price.'</li>';
                    echo '<li><b>Square footage:</b> '.$house_sqft.'</li>';
                    echo '<li><b>Features:</b> '.$house_has.'</li>';
                    echo '<li><b>Date listed:</b> '.$house_listed.'</li>';
                    echo '</ul>';
                
                    echo 'Return back to the <a href="house.php">House listings page</a>';

                    }


                    ?>



</div>

<!--end wrapper-->

<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');