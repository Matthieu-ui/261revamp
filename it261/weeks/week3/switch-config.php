<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // see errors



// Begining of Homework 3

date_default_timezone_set('America/Los_Angeles'); //sets correct server time zone

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today) {

case 'Sunday' :
    $color = '<body style="background-color: whitesmoke"></body>';
    $planet = '<h2>EARTH</h2>';
    $pic = 'earth.gif';
    $alt = 'earth pixel art GIF';
    $description = '<p>Earth is the planet we live on, one of eight planets in our solar system and the only known place in the universe to support life.
    Earth is the third planet from the sun, after Mercury and Venus and before Mars. ... Earth is an oblate spheroid. This means it is spherical in shape,
    but not perfectly round.</p>';
    break;

case 'Monday' :
    $color = '<body style="background-color: darkbrown"></body>';
    $planet = '<h2>Mars</h2>';
    $pic = 'mars.gif';
    $alt = 'Mars pixel art GIF';
    $description = '<p>Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.
     In English, Mars carries the name of the Roman god of war and is often referred to as the "Red Planet".</p>';
    break;

case 'Tuesday' :
    $color = '<body style="background-color: goldenrod"></body>';
    $planet = '<h2>Mercury</h2>';
    $pic = 'mercury.gif';
    $alt = 'Mercury pixel art GIF';
    $description = "<p>Mercury is the smallest planet in our solar system. ... Along with Venus, Earth, and Mars, Mercury is one of the rocky planets.
    It has a solid surface that is covered with craters like our Moon. It has a thin atmosphere, and it doesn't have any moons.</p>";
    break;

case 'Wednesday' :
    $color = '<body style="background-color: tan"></body>';
    $planet = '<h2>Pluto</h2>';
    $pic = 'pluto.gif';
    $alt = 'Pluto pixel art Gif';
    $description = "<p>Pluto is a dwarf planet that lies in the Kuiper Belt, an area full of icy bodies and other dwarf planets out past Neptune.
    Pluto is very small, only about half the width of the United States and its biggest moon Charon is about half the size of Pluto.
    ... What's more, its path is quite tilted compared to the planets.</p>";
    break;

case 'Thursday' :
    $color = '<body style="background-color: orange"></body>';
    $planet = '<h2>Saturn</h2>';
    $pic = 'saturn.gif';
    $alt = 'Saturn pixel art GIF';
    $description = '<p>Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter.
    It is a gas giant with an average radius of about nine and a half times that of Earth. It only has one-eighth the average density of Earth;
    however, with its larger volume, Saturn is over 95 times more massive.</p>';
    break;

case 'Friday' :
    $color = '<body style="background-color: lightskyblue"></body>';
    $planet = '<h2>Sun</h2>';
    $pic = 'sun.gif';
    $alt = 'sun pixel art GIF';
    $description = '<p>Our Sun is a 4.5 billion-year-old star ... a hot glowing ball of hydrogen and helium at the center of our solar system.
    The Sun is about 93 million miles (150 million kilometers) from Earth, and without its energy, life as we know it could not exist here on our home planet.</p>';
    break;

case 'Saturday' :
    $color = '<body style="background-color: burlywood"></body>';
    $planet = '<h2>Uranus</h2>';
    $pic = 'uranus.gif';
    $alt = 'Uranus pixel art GIF';
    $description = '<p>Uranus is made of water, methane, and ammonia fluids above a small rocky center. Its atmosphere is made of hydrogen and helium like Jupiter and Saturn, but it also has methane.
    The methane makes Uranus blue. Uranus also has faint rings.</p>';
    break;

}
