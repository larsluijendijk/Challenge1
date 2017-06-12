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
<table border="1">
    <tr>
      <th>Users</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
        


    <?php foreach ($users as $user) { ?>
        <tr>
      <input type="hidden" value="<?= $user['id']; ?>">
      <td><?= $user['username']; ?></td>
      <td><a href="">Edit</a></td>
      <td><a href="">Delete</a></td>
        </tr> 
    <?php } ?>
    

</table>

<a href="../exam/index"><p>Back</p></a>
</body>
</html>
