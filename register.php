
<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>My intern assignment</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Full Name</label>
    <input type="text" name="full_name" value="<?php echo $full_name; ?>">

	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
  <div class="input-group">
    <label for="mobile">Mobile No.</label>
    <input type="text" name="mobile" value="<?php $mobile ?>">
  </div>
  <div class="input-group">
    <label for="plan">Plan</label>
    <select class="input-group" name="plan">
      <option value="standard">standard</option>
      <option value="advance">advance</option>
      <option value="pro">pro</option>
    </select>
  </div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
