<?php include "header.php"; ?>
<form action="add.php" method="post">
Employee ID: <input type="number" name="eid"><br>
Name: <input type="text" name="ename"><br>
Role: <input type="text" name="erole"><br>
Hourly Pay: <input type="number" step="0.01" name="epay">
<input type="submit">
</form>
<?php include "footer.php"; ?>