<?php
require_once("header.php");
require_once("admin.php");
?>

<html>
<head>
<meta charset="utf-8">
</head>
<div class="containers">
	<form  method="post" action="<?= URL ?>user/createUser">
	<p>Gebruikersnaam:</p>
	<input type="text" id="username" name="username"> 
	<br/>
	<p>Wachtwoord:</p> 
	<input type="text" id="password" name="password"> 
	<br/>
	<p>Role:</p>
<select name="role">
  <option value="student">Student</option>
  <option value="admin">Admin</option>
</select>
<br/><br/>
	<input type="submit" name="submit">
</form>
</table>
    <a href="<?= URL ?>user/users">Users</a>
</div>
<body>
<table>

</body>
</html>