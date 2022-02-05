<div id="wrapper">
    <h6>Todays Lesson!</h6>

    <?php



    if (isset($_GET['today'])) {
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }



    // switch

    switch ($today) {

        case 'Sunday':
            $lessonName = '<h4>Basic PHP Syntax</h4>' .
                '<p>A PHP script can be placed anywhere in the document.

                A PHP script starts with <?php and ends with ?>:</p>';
            $code = '
    <pre><code>
            < ?php
            // PHP code goes here
            ? >
             </code></pre>';
            break;

        case 'Monday':
            $lessonName = '<h4>PHP Case Sensitivity</h4>' .
                '<p>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not
        case-sensitive.

        In the example below, all three echo statements below are equal and legal:</p>';
            $code = "
    <pre><code> 
            < !DOCTYPE html>
            < html>
            < body>
            
            < ?php
            ECHO 'Hello World!';
            echo 'Hello World!';
            EcHo 'Hello World!';
            ? >
            
            < /body>
            < /html> 
            </code></pre>";
            break;

        case 'Tuesday':
            $lessonName = '<h4>Creating (Declaring) PHP Variables</h4>' .
                '<p>In PHP, a variable starts with the $ sign, followed by the name of the variable:</p>';
            $code = '
    <pre><code>
            < ?php
            $txt = "Hello world!";
            $x = 5;
            $y = 10.5;
            ? > 
            </code></pre>';
            break;

        case 'Wednesday':
            $lessonName = '<h4>strlen() - Return the Length of a String</h4>' .
                '<p>The PHP strlen() function returns the length of a string.</p>';
            $code = '
    <pre><code>
            < ?php
            echo strlen("Hello world!"); // outputs 12
            ? > 
            </code></pre>';
            break;

        case 'Thursday':
            $lessonName = '<h4>PHP Constants</h4>' .
                '<p>A constant is an identifier (name) for a simple value. The value cannot be changed during the script.</p>

    <p>A valid constant name starts with a letter or underscore (no $ sign before the constant name).</p>';
            $code = '
    <pre><code>
        < ?php
        define("GREETING", "Welcome to Matthieufelker.io!");
        echo GREETING;    
        ? > 

        This would display: Welcome to Matthieufelker.io! 
        </code></pre>';
            break;

        case 'Friday':

            $lessonName = '<h4>The PHP switch Statement</h4>' .
                '<p>Use the switch statement to select one of many blocks of code to be executed.</p>';
            $code = '

    <pre><code>
    switch (n) {
        case label1:
            code to be executed if n=label1;
            break;
        case label2:
            code to be executed if n=label2;
            break;
        case label3:
            code to be executed if n=label3;
            break;
            ...
        default:
            code to be executed
            if n is different from all labels;
        } 
              </code></pre>';
            break;

        case 'Saturday':

            $lessonName = '<h4>PHP while Loop</h4>' .
                '<p>The while loop - Loops through a block of code as long as the specified condition is true.</p>';
            $code = '
    <pre><code>
< ?php

$x = 1;

while($x <= 5) {
    echo "The number is: $x";
    $x++;}
? > 
            </code></pre>';
            break;
    }

    ?>

    <aside style="margin-top: 10px;">
        <h1><?php ''; ?></h1>
   
      
        <ul id="dailyMushroom">
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
        </ul>

    </aside>


    <?php
    echo $lessonName;
    echo $code;

    ?>




</div>
<!--end wrapper-->