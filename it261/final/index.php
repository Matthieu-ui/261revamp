<?php //index.php
//this index page is the homepage of your wonderful website
//also, after creating thsi index.php page, you will not be able to access it unless you login as a user or register first, then login!

session_start();

include('config.php');


// if the user has not logged in correctly, they will be directed to the login page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must log in first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

// Notification message
// if successful, welcome the end user

if(isset($_SESSION['success'])) :?>



<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div>
<!--end div sucess-->
<?php endif ; 
if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
    <h3>Welcome!
        <?php echo $_SESSION['username'];?>
    </h3>
    <p><a href="index.php?logout='1'">Logout</a></p>
</div>
<!--end welcome-logout div -->
<?php endif;?>
</div>
<!--end header inner-->
</header>

<div id="wrapper">
    <h1 class="home_page_header"><?php echo $headline ?></h1>
    <p class="home_page_body">It seems to always be the final project that really pulls the skills I've learned together! This was a tough class! My focus wasn't 100% into it but the more I learn the more I wan't to stay fresh with some PHP skills!</p>

    <p>So WELCOME <?php echo $_SESSION['username'];?>, have a look around!</p>

    <!--your footer include will be placed at the bottom of the page -->
</div>
<!--end wrapper -->
<?php
include('includes/footer.php');