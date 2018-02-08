<?php

/*
print $filepath; 
print var_dump($pagenode);
print $pagenode->field_vrp_header[0]['value'];
print $pagenode->field_vrp_sub_header[0]['value'];
print $pagenode->field_vrp_form_title[0]['value'];
print $pagenode->field_vrp_form_instructions[0]['value'];
print drupal_render($username); 
print drupal_render($password); 
print $pagenode->field_vrp_forgot_password_link[0]['value'];
print $pagenode->field_vrp_join_header[0]['value'];
print $pagenode->field_vrp_join_sub_header[0]['value'];
print $pagenode->field_vrp_form_button_text[0]['value'];
print $pagenode->field_vrp_join_button;
*/
?>

<div id="vrp-container" style="background-image:url('<?php print $filepath; ?>');">
    <div class="form-wrapper">
	<div id="vrp-header">
		<label id="vrp-header-header"><?php print $pagenode->field_vrp_header[0]['value']; ?></label>
		<label id="vrp-header-subheader"><?php print $pagenode->field_vrp_sub_header[0]['value']; ?></label>
	</div>
	<div id="vrp-form">
		<div id="vrp-form-login">
			<label id="vrp-form-login-title"><?php print $pagenode->field_vrp_form_title[0]['value']; ?></label><br/>
			<label id="vrp-form-login-instructions"><?php print $pagenode->field_vrp_form_instructions[0]['value']; ?></label><br/>
                        <label>Username<span style="color: red;">*</span></label>
			<?php print drupal_render($name); ?>
                        <label>Password<span style="color: red;">*</span></label>
			<?php print drupal_render($pass); ?>
			<input class="ahbutton" id="vrp-form-login-button" type="submit" value="<?php print $pagenode->field_vrp_form_button_text[0]['value']; ?>" />
			<a id="vrp-form-login-forgot-password-link" href="<?php print $pagenode->field_vrp_forgot_password_link[0]['url']; ?>"><?php print $pagenode->field_vrp_forgot_password_link[0]['title']; ?></a>                        
		</div>
		<div id="vrp-form-join">
			<label id="vrp-form-join-header"><?php print $pagenode->field_vrp_join_header[0]['value']; ?></label><br/>
			<label id="vrp-form-join-sub-header"><?php print $pagenode->field_vrp_join_sub_header[0]['value']; ?></label>
			<a class="ahbutton" id="vrp-form-hideaway-button" href="<?php print $pagenode->field_vrp_join_button[0]['url']; ?>"><?php print $pagenode->field_vrp_join_button[0]['title']; ?></a><br/><br/><br/>
                        <a class="ahbutton" id="vrp-form-join-button" href="<?php print $pagenode->field_vrp_join_button[1]['url']; ?>"><?php print $pagenode->field_vrp_join_button[1]['title']; ?></a>
		</div>
                <br clear="all" />
	</div>
   </div>
</div>