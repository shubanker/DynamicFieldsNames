<?php
session_start();
require_once 'DynamicFields.php';
$dynamicFields=new DynamicFields();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>::Dynamic Fields Demo::</title>
</head>
<body>
	<h1>Dynamic Form Fields</h1>
	<div>
		<pre><?php if (!empty($_POST)){
			print_r($_POST);
			}?>
		</pre>
	</div>
	<form action="" method="post">
		First Name:<input type="text" name="<?php echo $dynamicFields->EncryptFormName("name[]")?>"/><br>
		Last Name:<input type="text" name="<?php echo $dynamicFields->EncryptFormName("name[]")?>"/><br>
		Password:<input type="password" name="<?php echo $dynamicFields->EncryptFormName("password")?>"/><br>
		Email:<input type="email" name="<?php echo $dynamicFields->EncryptFormName("email")?>"/><br>
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>