<?php
require_once("header.php");
require_once("includes.php");
?>


<html>
<head>
<meta charset="utf-8">
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<body>
<table>
    <tr>
      <th>Users</th>
    </tr>
        
    <tr>

    <?php foreach ($users as $user) { ?>
      <input type="hidden" value="<?= $user['id']; ?>">
      <td><?= $user['username']; ?></td>
    <?php } ?>
    
    </tr> 
</table>

<a href="../login/view"><p>Back</p></a>
</body>
</html>
