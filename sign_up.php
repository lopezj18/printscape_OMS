<?php
require_once("header.php");
include("process-sign-up.php");
require_once("functions-lib.php");
?>
<script src="js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="js/phonenumber-function.js" type="text/javascript"></script>
<style type="text/css">
h1 {margin-bottom: 0px; line-height: 28px;}
h2{padding:10px 10px 0 0; font-size:18px; width:100%; text-align:right;}
a:link{color:#9fa615;}
a:visited{color:#9fa615;}
a:hover{color:white;}
a:active{color:white;}
</style>
<h2><a href="login.php">Log In</a></h2>
<form class="sign_up_form" action="process-submit-order.php" method="POST" enctype="multipart/form-data">
	 <div>
     <h1>Create your Customer Account</h1>
    <p><input type="hidden" placeholder="" name="newuser_id"></p>
    <p><input type="text" placeholder="Username" name="username" required></p>
    <p><input type="text" placeholder="Password" name="password" maxlength="15" required></p>
    <p><input type="text" placeholder="Confirm Your Password" name="repeatepassword" maxlength="15" required></p>
    <p><input type="text" placeholder="First Name" name="first_name" required></p>
    <p><input type="text" placeholder="Last Name" name="last_name" required></p>
    <p><input type="email" placeholder="Email" name="email" required></p>
    <p><input type="text" placeholder="Company Name" name="company_name" required></p>
    <p><input type="text" placeholder="Address Line 1" name="address_1" required></p>
    <p><input type="text" placeholder="Address Line 2" name="address_2"></p>
    <p><input type="text" placeholder="City" name="city" required></p>
    <p><select name="state" required>
    		<option value="">Select A State</option>
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
    <p><input type="text" id="zipCode" placeholder="Zip Code" name="zip" required></p>
    <p><input type="tel" id="phoneExt" placeholder="Phone Number (Ext# Optional)" name="phone_number" required></p>
   
	<p><input type="submit" name="submit" class="btn"></p>
    </div>
</form>

<?php
include("footer.php");
?>