<?php
    //if name is not filled out - send message
    // if each inputs are not filled - send specific message

    // name. email. amout, price, efficiency\\
    // $_SERVER['REQUEST_METHOD']


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (empty($_POST['name'])) {
            echo 'please fill out your name <br>';
        }
        if (empty($_POST['miles'])) {
            echo 'please enter total amount of miles you plan to drive!<br>';
        }
        if (empty($_POST['speed'])) {
            echo 'please enter the average speed in which you are traveling<br>';
        }
        if (empty($_POST['hours'])) {
            echo 'please enter how many hours per day you will drive<br>';
        }
        if (empty($_POST['price'])) {
            echo 'please select the price of gas<br>';
        }
        if ($_POST['efficiency'] == NULL) {
            echo 'please select your vehicles fuel efficiency<br>';
        }

        

        if(isset(
            $_POST['name'],
            $_POST['miles'],
            $_POST['hours'],
            $_POST['price'],
            $_POST['efficiency'])
        ) {
            $name = $_POST['name'];
            $miles = intval($_POST['miles']);
            $hours = $_POST['hours'];
            $price = $_POST['price'];
            $efficiency = (int)$_POST['efficiency'];
    
            $averageSpeed = 65;
            if($efficiency == 0){
                $efficiency = 1;
            }
            $gallons = intval($miles) / intval($efficiency);
            $gasCost = $price * $gallons;
            if($hours == 0){
                $hours = 1;
            }
            $days = $miles / ($hours * $averageSpeed);
    
            if (($efficiency != 0) && ($efficiency != 1) && (!empty($name && $miles && $hours && $price))){
           
           
                $result = '


            
            <div class="results">
                <h2>Calculator Results</h2>
                <p>' . $name . ', you will be driving <b>' . $miles . ' miles</b></p>
                <p>Your vehicle has a fuel efficiency rating of <b>' . $efficiency . '</b> miles per gallon.
                </p>
                <p>Your total cost for gas will be <b>$' . ceil($gasCost) . ' dollars</b></p>
                <p>If you drive <b>' . $hours . ' hours a day</b> with an average speed of 65 mph, this
                    trip
                    will take you a total of <b>' . ceil($days) . ' day(s).</b></p>
            </div>
      
           
            '; }
         } //close isset
    
    
    
        }//server request
    
    ?>


<body>

    <div class="container">
        <div class="row">
            <aside class="one-half column">
                <h4 style="text-align: center;" ><b>Results</b><br>...</h4>
                <?php echo $result ?>
            </aside>

            <div class="one-half column">


                <form class="travel-calculator" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                    method="post">
                    <label>Name</label>
                    <input type="text" name="name"
                        value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

                    <label>Total miles driving?</label>
                    <input type="number" name="miles"
                        value="<?php if (isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">

                    <label>Speed</label>
                    <input type="number" name="speed"
                        value="<?php if (isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>">

                    <label>Hours driven per day</label>
                    <input type="number" name="hours"
                        value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">


                    <!-- canadian - .80 rubles - .013 pounds -11.37 euros - 1.14 yen - .0087 -->
                    <!-- if post price is set and if post currecny -->

                    <label>Price of gas</label>
                    <ul>
                        <li><input type="radio" name="price" value="3.00"
                                <?php  if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked" '  ;?>>$3.00
                        </li>
                        <li><input type="radio" name="price" value="3.50"
                                <?php  if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked" '  ;?>>$3.50
                        </li>
                        <li><input type="radio" name="price" value="4.00"
                                <?php  if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked" '  ;?>>$4.00
                        </li>

                    </ul>
                    <label>Fuel efficiency</label>
                    <select name="efficiency">

                        <option value="" NULL
                            <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected = "unselected" '  ;?>>
                            Select one </option>

                        <option value="40"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '40') echo 'selected = "selected" '; ?>>
                            Excellent ~ 40 MPG</option>

                        <option value="35"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '35') echo 'selected = "selected" '; ?>>
                            Good ~ 35 MPG</option>

                        <option value="25"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '25') echo 'selected = "selected" '; ?>>
                            Fair ~ 25 MPG</option>

                        <option value="15"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '15') echo 'selected = "selected" '; ?>>
                            Poor ~ 15 MPG</option>

                    </select>
                    <br>
                    <input type="submit" value="convert it">




                </form>

                <p><a href="">reset</a></p>



</body>

</html>