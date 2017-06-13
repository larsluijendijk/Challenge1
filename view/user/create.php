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
	Gebruikersnaam:
	<input type="text" id="username" name="username">
	Wachtwoord: 
	<input type="text" id="password" name="password">
	<input type="submit" name="submit">
	</form>
    </table>
    <a href="<?= URL ?>user/users">Users</a>
</div>
<body>
<table>

</body>
</html>