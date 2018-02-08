<?php

/*
print $filepath; 
print var_dump($pagenode);
print $pagenode->field_ulp_form_title[0]['value'];
print $pagenode->field_ulp_form_instructions[0]['value'];
print drupal_render($username); 
print drupal_render($password); 
print $pagenode->field_ulp_forgot_password_link[0]['value'];
print $pagenode->field_ulp_join_quote['value'];
print $pagenode->field_ulp_form_button_text[0]['value'];
print $pagenode->field_ulp_join_button;
*/
?>
<div id="ulp-container" style="background-image:url('<?php print $filepath; ?>');">	
     <div class="form-wrapper">
       <div id="ulp-form">
		<div id="ulp-form-login">
			<label id="ulp-form-login-title"><?php print $pagenode->field_ulp_form_title[0]['value']; ?></label><br/>
			<label id="ulp-form-login-instructions"><?php print $pagenode->field_ulp_form_instructions[0]['value']; ?></label><br/>
			<label>Username<span style="color: red;">*</span></label>
			<?php print drupal_render($name); ?>
                        <label>Password<span style="color: red;">*</span></label>
			<?php print drupal_render($pass); ?>
			<input class="ahbutton" id="ulp-form-login-button" type="submit" value="<?php print $pagenode->field_ulp_form_button_text[0]['value']; ?>" />
			<a id="ulp-form-login-forgot-password-link" href="<?php print $pagenode->field_ulp_forgot_password_link[0]['url']; ?>"><?php print $pagenode->field_ulp_forgot_password_link[0]['title']; ?></a>
		</div>
		<div id="ulp-form-join">
                        <label id="ulp-form-join-header">Become A Member</label>                               
                        <label id="ulp-form-join-quote"><?php print $pagenode->field_ulp_join_quote[0]['value']; ?></label><br/>
			<a class="ahbutton" id="ulp-form-join-button" href="<?php print $pagenode->field_ulp_join_button[0]['url']; ?>"><?php print $pagenode->field_ulp_join_button[0]['title']; ?></a>
		</div>
           <br clear="all" />
	</div>
     </div>
</div>