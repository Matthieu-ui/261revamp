<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title;  ?></title>
<link href="/css/skeleton.css" type="text/css" rel="stylesheet">

</head>

<body class="<?php echo $body;?>" >

    <header>
        <div class="header-inner" >
            <a href="index.php">
            <img id="logo" src="#" alt="logo">
            </a> 
       <nav>
            <ul>
               <?php
                echo my_nav($nav);
               ?>
            </ul>
       </nav>
       