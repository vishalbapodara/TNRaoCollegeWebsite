<?php include('config.php'); ?>

<?php
error_reporting(0);
$sql = "SELECT * FROM `courses`";
$result = mysqli_query($conn, $sql);
?>

<?php include('header.php'); ?>
<?php include('aSide.php'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">All Courses </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Course</li>
                    <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">All Courses List</h4>
                                    <hr>
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th> Course Id </th>
                                                    <th> Course Name </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php while ($info = $result->fetch_assoc()): ?>
                                                    <tr>
                                                        <td>
                                                            <?= "{$info['course_id']}"; ?>
                                                        </td>
                                                        <td>
                                                            <?= "{$info['course_name']}"; ?>
                                                        </td>
                                                    </tr>
                                                <?php endwhile ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->

<?php
include('footer.php');
?>