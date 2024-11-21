<?php include('config.php'); ?>

<?php
error_reporting(0);
$sql = "SELECT * FROM `teacherdata`";

$result = mysqli_query($conn, $sql);

if ($_GET['student_id']) {
  $s_id = $_GET['student_id'];

  $sql2 = "DELETE FROM `studentdata` WHERE student_id = '$s_id'";

  $result2 = mysqli_query($conn, $sql2);

  if ($result2) {
    header("Location:../../pages/phpPages/View_All_Student.php");

  }
}
?>


<?php
$sql = "SELECT studentdata.*, courses.course_name 
FROM studentdata 
JOIN courses ON studentdata.course_id = courses.course_id";

$result = mysqli_query($conn, $sql);

?>

<?php include('header.php'); ?>
<?php include('aSide.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">All Students List </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Students</li>
          <li class="breadcrumb-item active" aria-current="page">All Students</li>
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
                  <h4 class="card-title">All Students List</h4>
                  <hr>
                  <a href="Add_Student.php"> <button type="button" class="btn btn-outline-primary btn-sm">Add New <span
                        class="ms-1"><i class="fa fa-plus"></i></span></button> </a>
                  <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                      <thead>
                        <tr>
                          <th> Student Id </th>
                          <th> Name </th>
                          <th> Department </th>
                          <th> Mobile No </th>
                          <th> Email </th>
                          <th> Admission date </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        while ($info = $result->fetch_assoc()) {

                          ?>
                          <tr>
                            <td>
                              <?php
                              echo "{$info['student_id']}";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo "{$info['first_name']}  {$info['last_name']}";
                              ?>
                            </td>
                            <td>
                              <?php
                                echo "{$info['course_name']}";
                              ?>
                            </td>
                            <td> <?php
                            echo "{$info['mobile_number']}";
                            ?>
                            </td>
                            <td>
                              <?php
                              echo "{$info['Email']}";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo "{$info['registration_date']}";
                              ?>
                            </td>
                            <td  style="width: 150px !important;">
                              <a href="../../pages/phpPages/Update_Student.php?student_id=<?= urlencode($info['student_id']) ?>"><i
                                  class="fa fa-pencil fa-lg p-2 m-1 bg-gradient-success rounded text-dark"></i></a>
                              <a href="../../pages/phpPages/View_All_Student.php?student_id=<?= urlencode($info['student_id']) ?>"
                                onclick="return confirm('Are You Sure To Delete This Data');"><i
                                  class="fa fa-minus-circle fa-lg p-2 m-1 bg-gradient-danger text-reddit rounded"></i>
                              </a>
                            </td>
                          </tr>
                        <?php } ?>
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