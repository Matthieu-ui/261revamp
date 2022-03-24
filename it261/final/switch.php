<?php
include('config.php');
include('includes/header.php'); ?>

</div> <!--end header inner-->
</header>
<div id="wrapper">
    
    <main>  
        <h1 class="switch_page_header"><?php echo $headline; ?></h1>
        <hr>
        <div class="house">  
            <h1><?php echo $house_address;?></h1>
            <hr>
            <h2>About this property</h2>
            <?php echo $about; ?>
            <h2>Coordinates</h2>
            <?php echo $coordinates; ?>
            <br>
        </div>
    </main>

    <aside>
        <img class="housePic" src="images/incredibleHomes<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <h2 class="house_links">Links to all the properties</h2>
        <ul id="daily_house">
            <li><a href="switch.php?today=Monday">Pole House</a></li>
            <li><a href="switch.php?today=Tuesday">The Cliff House</a></li>
            <li><a href="switch.php?today=Wednesday">Belle Grove Farm House</a></li>
            <li><a href="switch.php?today=Thursday">Oceanside Retreat</a></li>
            <li><a href="switch.php?today=Friday">Ktima House</a></li>
            <li><a href="switch.php?today=Saturday">Joshua Tree</a></li>
            <li><a href="switch.php?today=Sunday">Sun Valley Starship</a></li>
        </ul>
        
    </aside>
</div> <!--close wrapper-->
   
    <?php
    include('includes/footer.php'); 
   