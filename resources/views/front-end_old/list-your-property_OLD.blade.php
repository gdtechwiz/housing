    <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    @include('front-end/layouts/head')
</head>
<body>
    @include('front-end/layouts/menu')
    <!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
           <div class="multistep_registration"> 
                    <!-- multistep form -->
                    <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Account Setup</li>
                        <li>Social Profiles</li>
                        <li>Personal Details</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Create your account</h2>
                        <h3 class="fs-subtitle">This is step 1</h3>
                        <input type="text" name="email" placeholder="Email" />
                        <input type="password" name="pass" placeholder="Password" />
                        <input type="password" name="cpass" placeholder="Confirm Password" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Social Profiles</h2>
                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                        <input type="text" name="twitter" placeholder="Twitter" />
                        <input type="text" name="facebook" placeholder="Facebook" />
                        <input type="text" name="gplus" placeholder="Google Plus" />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Personal Details</h2>
                        <h3 class="fs-subtitle">We will never sell it</h3>
                        <input type="text" name="fname" placeholder="First Name" />
                        <input type="text" name="lname" placeholder="Last Name" />
                        <input type="text" name="phone" placeholder="Phone" />
                        <textarea name="address" placeholder="Address"></textarea>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                    </fieldset>
                    </form>
            </div>
        </div>
    </div>
    @include("front-end/layouts/footer");		
    <script type="text/javascript" src="{{ asset('front-end/js/multistep_registration.js') }}"></script>
</body>
