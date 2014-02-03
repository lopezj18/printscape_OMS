<?php
require_once("header.php");
require_once("functions-lib.php");
require_once("require-process.php");
?>
<style type="text/css">
h2{padding:10px 10px 0 0; font-size:18px; width:100%; text-align:right;}
a:link{color:#9fa615;}
a:visited{color:#9fa615;}
a:hover{color:white;}
a:active{color:white;}
</style>
<h2><a href="login.php">Log In</a></h2>
<form class="submit_order" action="process-submit-order.php" method="POST" enctype="multipart/form-data">
	 <div>
     <h1>Create your Customer Account</h1>
    <p><input type="text" placeholder="Username" name="username">
    <span class="error">* <?php echo $usernameErr;?></span></p>
    
    <p><input type="text" placeholder="Password" name="password"></p>
    <p><input type="text" placeholder="First Name" name="first_name"></p>
    <p><input type="text" placeholder="Last Name" name="last_name"></p>
    <p><input type="text" placeholder="Company Name" name="company_name"></p>
    <p><input type="email" placeholder="Email" name="email"></p>
    <p><input type="text" placeholder="Address Line 1" name="address_1"></p>
    <p><input type="text" placeholder="Address Line 2" name="address_2"></p>
    <p><input type="number" placeholder="City" name="city"></p>
    <p><select name="state">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select></p>
    <p><textarea rows="8" cols="33"  maxlength="150" type="text" placeholder="Special Instructions (Please Limit Your Instructions)" name="special_instructions"></textarea></p>
	<p><input type="submit" class="btn"></p>
    </div>
</form>

<?php
include("footer.php");
?>