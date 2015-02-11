<?php // adduser.php
// start with the PHP code
$username = $password= $firstname = $lastname = "";
if (isset($_POST['id'])) $id = $_POST['id'];
else $id = "(Not entered)";

if (isset($_POST['username']))
	$username = fix_string($_POST['username']);
if (isset($_POST['password']))
	$password = fix_string($_POST['password']);
if (isset($_POST['firstname']))
	$firstname = fix_string($_POST['firstname']);
if (isset($_POST['lastname']))
	$lastname = fix_string($_POST['lastname']);	
if (isset($_POST['fail']))
	$fail = fix_string($_POST['fail']);

function validate($fail){
$fail = validate_username($username);
$fail .=validate_password($password);
$fail .=validate_firstname($firstname);
$fail .=validate_lastname($lastname);

echo "<html><head><title>An Example Form</title>";
if ($fail == ""){
	echo "</head><body>Form data successfully validated: $username, $password, $firstname, $lastname.</body><html>";
	// 
	
	exit;
}
}
// 

echo <<<_END

<! -- The HTML section -->
<html><head><title>Add User Form</title>
<style>.signup{border: 1px solid #999999;
		font: normal 18px helvetica; color:#444444; }</style>
		<style>
			#object1{
				position 	:fixed;
				background	:pink;
				width		:100px;
				height		:500px;
				top			:100px;
				left		:0px;}
			
			#object2{
				position 	:relative;
				background	:lightblue;
				width		:500px;
				height		:100px;
				top			:-2px;
				left		:100px;}
			
			#object3{
				position 	:fixed;
				background	:silver;
				width		:100px;
				height		:100px;
				top			:100px;
				left		:236px;}
			
			#object4{
				position 	:relative;
				background	:lightgrey;
				width		:500px;
				height		:500px;
				top			:0px;
				left		:100px;}
		</style>		
			
		<script>
		function validate(form) {
		fail = validateUsername(form.username.value)
		fail += validatePassword(form.password.value)
		fail += validateFirstname(form.firstname.value)
		fail += validateLastname(form.lastname.value)
		if (fail == "") return true
		else {alert(fail); return false}
		}
		</script></head><body>
		<div id='object1'></div>
	<div id='object2'><h2>Sidiflex Model School, Karshi</h2></div>
		<div id='object4'>	<table class = "signup" border="0" cellpadding="10"
			cellspacing="15" gbcolor="#eeeeee">
		<th colspan="20" align="cemter">Add New User Form</th>

	
	<form method="post" action="adduser.php"
			onSubmit="return validate(this)">
			<tr><td>First Name</td><td><input type="text" maxlength="32" name="firstname" value="$firstname" /></td>
			</tr><tr><td>Last Name</td><td><input type="text" maxlength="32" name="lastname" value="$lastname" /></td>
			</tr><tr><td>Username</td><td><input type="text" maxlength="32" name="username" value="$username"/></td>
			</tr><tr><td>Password</td><td><input type="text" maxlength="32" name="password" value="$password"/></td>
			</tr><tr><td colspan="20" align="center">
				<input type="submit" value="Add User" /></td>
			</tr></form></table></div>
_END;
?>