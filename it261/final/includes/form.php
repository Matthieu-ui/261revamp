<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
        <span class="error"><?php echo $first_name_Err;?></span>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
        <span class="error"><?php echo $last_name_Err;?></span>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <span class="error"><?php echo $email_Err;?></span>

        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx"  value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
        <span class="error"><?php echo $phone_Err;?></span>

        <label for="home_owner">Are you a Homeowner?</label>
        <ul>
        <li><input type="radio" name="home_owner" value="yes" <?php if(isset($_POST['home_owner']) && $_POST['home_owner'] == 'yes') echo 'checked="checked"';?>>yes</li>
        <li><input type="radio" name="home_owner" value="no" <?php if(isset($_POST['home_owner']) && $_POST['home_owner'] == 'no') echo 'checked="checked"';?>>No</li>
        <li><input type="radio" name="home_owner" value="other" <?php if(isset($_POST['home_owner']) && $_POST['home_owner'] == 'other') echo 'checked="checked"';?>>Other</li>
        </ul>
        <span class="error"><?php echo $home_owner_Err;?></span>


        <label for="youOwn">Do you plan on owning a home in Seattle, WA?</label>
        <ul>
        <li><input type="checkbox" name="youOwn[]" value="yes" <?php if(isset($_POST['youOwn']) && in_array('yes',$youOwn)) echo 'checked="checked"';?>>yes</li>
        <li><input type="checkbox" name="youOwn[]" value="no" <?php if(isset($_POST['youOwn']) && in_array('no',$youOwn)) echo 'checked="checked"';?>>no</li>
        <li><input type="checkbox" name="youOwn[]" value="never" <?php if(isset($_POST['youOwn']) && in_array('never',$youOwn)) echo 'checked="checked"';?>>never</li>
        <li><input type="checkbox" name="youOwn[]" value="someday" <?php if(isset($_POST['youOwn']) && in_array('someday',$youOwn)) echo 'checked="checked"';?>>someday</li>
        <li><input type="checkbox" name="youOwn[]" value="other" <?php if(isset($_POST['youOwn']) && in_array('other',$youOwn)) echo 'checked="checked"';?>>other</li>
        </ul>
        <span class="error"><?php echo $youOwn_Err;?></span>

        <label for="market">Thoughts on the housing market in 2022</label>
        <select name="market">
        <option value="" <?php if(isset($_POST['market']) && $_POST['market'] == NULL) echo 'selected="unselected"';?>>Select One!</option>
  

        <option value="it is bad!" <?php if(isset($_POST['market']) && $_POST['market'] == 'it is bad!') echo 'selected="unselected"';?>>it is bad!</option>
        <option value="it makes sense..." <?php if(isset($_POST['market']) && $_POST['market'] == 'it makes sense...') echo 'selected="unselected"';?>>it makes sense...</option>
        <option value="I may never own property," <?php if(isset($_POST['market']) && $_POST['market'] == 'I may never own property,') echo 'selected="unselected"';?>>I may never own property,</option>
        <option value="other" <?php if(isset($_POST['market']) && $_POST['market'] == 'other') echo 'selected="unselected"';?>>other</option>
        </select>
        <span class="error"><?php echo $market_Err;?></span>

        <label for="comments"></label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
        <span class="error"><?php echo $comments_Err;?></span>

        <label for="privacy">Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>>I agree</li>
            </ul>
            <span class="error"><?php echo $privacy_Err;?></span>

        <input type="submit" value="Send it">
        <p><a href="">Reset</a></p>

        </fieldset>