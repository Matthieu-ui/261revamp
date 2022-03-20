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

        <label for="exp_level">Please select your Linux experience level:</label>
        <ul>
        <li><input type="radio" name="exp_level" value="novice" <?php if(isset($_POST['exp_level']) && $_POST['exp_level'] == 'novice') echo 'checked="checked"';?>>Novice</li>
        <li><input type="radio" name="exp_level" value="intermediate" <?php if(isset($_POST['exp_level']) && $_POST['exp_level'] == 'intermediate') echo 'checked="checked"';?>>Intermediate</li>
        <li><input type="radio" name="exp_level" value="expert" <?php if(isset($_POST['exp_level']) && $_POST['exp_level'] == 'expert') echo 'checked="checked"';?>>Expert</li>
        </ul>
        <span class="error"><?php echo $exp_level_Err;?></span>


        <label for="distros">Favorite Linux distro:</label>
        <ul>
        <li><input type="checkbox" name="distros[]" value="manjaro" <?php if(isset($_POST['distros']) && in_array('manjaro',$distros)) echo 'checked="checked"';?>>manjaro</li>
        <li><input type="checkbox" name="distros[]" value="arch" <?php if(isset($_POST['distros']) && in_array('arch',$distros)) echo 'checked="checked"';?>>arch</li>
        <li><input type="checkbox" name="distros[]" value="ubuntu" <?php if(isset($_POST['distros']) && in_array('ubuntu',$distros)) echo 'checked="checked"';?>>ubuntu</li>
        <li><input type="checkbox" name="distros[]" value="fedora" <?php if(isset($_POST['distros']) && in_array('fedora',$distros)) echo 'checked="checked"';?>>fedora</li>
        <li><input type="checkbox" name="distros[]" value="other" <?php if(isset($_POST['distros']) && in_array('other',$distros)) echo 'checked="checked"';?>>other</li>
        </ul>
        <span class="error"><?php echo $distros_Err;?></span>

        <label for="uses">Primary Use for distros:</label>
        <select name="uses">
        <option value="" <?php if(isset($_POST['uses']) && $_POST['uses'] == NULL) echo 'selected="unselected"';?>>Select One!</option>
        <option value="daily user" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'daily user') echo 'selected="unselected"';?>>daily user</option>

        <option value="software development" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'software development') echo 'selected="unselected"';?>>software development</option>
        <option value="data science" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'data science') echo 'selected="unselected"';?>>data science</option>
        <option value="other" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'other') echo 'selected="unselected"';?>>other</option>
        </select>
        <span class="error"><?php echo $uses_Err;?></span>

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