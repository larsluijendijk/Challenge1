<?php
require_once("admin.php");
?>

<form method="post" action="<?= URL ?>user/createUserUpdate">
		<input type="hidden" name="id" value="<?= $user['id']; ?>">
	<p>Gebruikersnaam:</p>
	<input type="text" id="username" name="username" value="<?= $user['username']; ?>"> 
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

<a href="<?= URL ?>user/users">Users</a>
<?php
require_once("header.php");
?>