<?php
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
      <th>Exam</th>
      <th>Date</th>
      <th>Time</th>
      <th>Examinator</th>
    </tr>
    <?php foreach ($exams as $exam) { ?>


    <tr>
      <input type="hidden" value="<?= $exam['id']; ?>">
      <td><?= $exam['exam']; ?></td>
      <td><?= $exam['date']; ?></td>
      <td><?= $exam['time']; ?></td>
      <td><?= $exam['examinator']; ?></td>
    </tr> 
</table>
<?php } ?>

<?php
require_once("header.php");
?>
</body>
</html>
