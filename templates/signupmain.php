<div style="padding: 0px 5px 0px 5px;">




<script>
function formValidator()
{
	/*
	var field_signup_email = document.theForm.field_signup_email;
	var field_signup_username = document.theForm.field_signup_username;
	var field_signup_password_1 = document.theForm.field_signup_password_1;
	var field_signup_password_2 = document.theForm.field_signup_password_2;
	*/

	var signup_button = document.getElementById("signupbutton");

	signup_button.disabled='true';
	signup_button.value='Please wait...';
}
</script>

<div class="tableSubTitle">Sign Up</div>

Please enter your account information below. All fields are required.<br><br>
<table width="100%" cellpadding="5" cellspacing="0" border="0">
<form method="post" onsubmit="return formValidator();" action="signup.php">

	<tbody>
	<tr>
		<td align="right"><span class="label">User Name:</span></td>
		<td><input type="text" size="20" maxlength="20" name="username" value=""></td>
	</tr>
	<tr>
		<td align="right"><span class="label">Password:</span></td>
		<td><input type="password" size="20" maxlength="20" name="password" value=""></td>
	</tr>
	<tr>
		<td align="right"><span class="label">Retype Password:</span></td>
		<td><input type="password" size="20" maxlength="20" name="confirm_password" value=""></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><br>- I certify I am over 13 years old.
		<br>- I agree to the <a href="terms.php" target="_blank">terms of use</a> and <a href="privacy.php" target="_blank">privacy policy</a>.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input name="signupsubmit" id="signupsubmit" type="submit" value="Sign Up"></td>
	</tr>
	</form>
	
	<tr>
		<td>&nbsp;</td>
		<td><?php echo $username_err; ?></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><?php echo $password_err; ?></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><?php echo $confirm_password_err; ?></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><br>Or, <a href="/">return to the homepage</a>.</td>
	</tr>
</tbody></table>