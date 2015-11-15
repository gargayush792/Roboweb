
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login Form</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/user/form.css" type="text/css" />
</head>

<body>
<div class="logo" id="logo-wrap">
<h1>Sign In</h1>
</div>

<div class="form" id="loginform-wrap">

<form action=""  accept-charset="UTF-8" method="post" id="loginform" enctype="multipart/form-data">

<fieldset id="login">
<legend>Enter your credentials</legend>

<div class="form-item" id="username-wrap">
<label for="username">Username or Email address <span class="form-required">*</span></label>
<input type="text" name="username" id="username" maxlength="50" required="required" autofocus="autofocus" />
<div class="description">Login with either your username or Email ID</div>
</div>

<div class="form-item" id="pass-wrap">
<label for="pass">Password <span class="form-required">*</span></label>
<input type="password" name="pass" id="pass"  maxlength="128" required="required" />
<div class="description">The password field is case-sensitive</div>
</div>

<div class="form-item" id="persistent-login-wrap">
<label class="option" for="persistent-login"><input type="checkbox" name="persistent_login" id="persistent-login" value="1" checked="checked" />Remember Me</label>
</div>

</fieldset>
 
<input type="submit" name="login-form" id="login-form" value="Login" class="form-button" />
<input type="button" name="forgot-form" id="forgot-form" value="Forgot Password" class="form-button" />
</form>
</div>
</body>

</html>
