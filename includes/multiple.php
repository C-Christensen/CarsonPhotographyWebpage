<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "de.o.santos@seaatlecentral.edu";  //place your/your client's email address here
$toName = "Jim Carson"; //place your client's name here
$website = "Jim Carson Photography";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include_once 'credentials.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2><?=$heading2?></h2>
        <p>Thank you for your for your inquiry!</p>
        <p>I will be in touch as soon as possible.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="contact-wrapper">
	<div>
		<label for="full-name">
			Name: <input type="text" id="full-name" name="Name" required="required" title="Full name is required" tabindex="10" size="44" />
		</label>
	</div>
	<div>	
		<label for="email">
			Email: <input type="email" id="email" name="Email" required="required" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
        
    <div>
      <p>Date: <input type="text" id="datepicker"></p>  
    </div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<fieldset>
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> Wedding Pictures <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Latest News <br />
			<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Quote <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
		</fieldset>
	</div>
    <div>
<!--        <fieldset>-->
            <label for="services">Select a service</label>
            <select name="service" id="services">
                <option selected="selected">Choose one option</option>
                <option>Elopement</option>
                <option>Mini-Wedding</option>
                <option >Wedding</option>
            </select>
<!--        </fieldset>-->
    </div>
	<div>	
		<label for="comments">
			Comments:<br /><textarea name="Comments" id="comments" cols="36" rows="4" title="Please, enter your comment here!" tabindex="60"></textarea>
		</label>
	</div>	
	<div><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </div>
    </form>
	<!-- END HTML FORM -->
    <script
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<script>
  $( function() {
    $( document ).tooltip();
  } );
  </script>
<?php
}
?>
