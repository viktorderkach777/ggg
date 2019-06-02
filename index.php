<?php
 include_once('connection_database.php');
$showRecordPerPage = 3;

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT * FROM users";
$allEmpResult = mysqli_query($connect, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee / $showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT id, username, email, picture
FROM `users` LIMIT $startFrom, $showRecordPerPage";
$empResult = mysqli_query($connect, $empSQL);
?>

<?php include_once("header.php"); ?>

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <h1 class="text-center">PHP Pagination</h1>
        <table class="table table-striped table-condensed table-bordered table-rounded">
            <thead>
                <tr class="text-center">
                    <th width="10%">Id</th>
                    <th width="30%">Name</th>
                    <th width="30%">Email</th>
                    <th width="30%">Icon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($emp = mysqli_fetch_assoc($empResult)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $emp['id']; ?></th>
                        <td><?php echo $emp['username']; ?></td>
                        <td><?php echo $emp['email']; ?></td>
                        <td><?php echo $emp['picture']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="container" class="text-center" style="margin-left:30%">
            <br><br>
            <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                    <?php if ($currentPage != $firstPage) { ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
                                <span aria-hidden="true">First</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($currentPage >= 2) { ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
                    <?php } ?>
                    <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
                    <?php if ($currentPage != $lastPage) { ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
                                <span aria-hidden="true">Last</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>


<?php include_once("footer.php") ?>