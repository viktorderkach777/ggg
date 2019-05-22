
<?php include_once('connection_database.php'); ?>

<?php include_once("header.php") ?>

<table class="table">
<?php
//$sss = 11;
$res = $connect->query("SELECT Id,Name,Description FROM tbl_roles");
$num = 1;
while ($row = $res->fetch_assoc()) {
echo "
<tr>
<td>{$num}</td>
<td>" . $row['Name'] . "</td>
<td>{$row['Description']}</td>
</tr>
";
$num++;
}
?>
</table>


<?php include_once("footer.php") ?>