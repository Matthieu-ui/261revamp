<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title;  ?></title>
    <link href="css/skeleton.css" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5e77cc4ae9.js" crossorigin="anonymous"></script>

</head>

<body class="<?php echo $body;?>">
<div id="wrapper">
                <header>
                    <div class="header-inner">

                    


                        <nav>
                            <ul>
                            <a href="index.php"><i class="fa-brands fa-php fa-2xl"></i></a>
                                <?php
                echo my_nav($nav);
               ?>
                            </ul>
                        </nav>