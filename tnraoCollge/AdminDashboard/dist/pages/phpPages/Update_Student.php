<?php include('config.php'); ?>

<?php
$id = $_GET['student_id'];


$sql = $sql = "SELECT studentdata.*, courses.course_name 
FROM studentdata 
JOIN courses ON studentdata.course_id = courses.course_id
WHERE studentdata.student_id = $id";

$result = mysqli_query($conn, $sql);
$info = $result->fetch_assoc();

$course_sql = "SELECT course_id, course_name FROM courses"; // Assuming you have a table named courses
$course_result = mysqli_query($conn, $course_sql);

if (isset($_POST['UpdateData'])) {
  $fnm = $_POST['Firstname'];
  $lnm = $_POST['Lastname'];
  $gender = $_POST['Gender'];
  $rdate = date('Y-m-d', strtotime($_POST['RDate']));
  $course = $_POST['Course'];
  $city = $_POST['City'];
  $email = $_POST['Email'];
  $MoNo = $_POST['Mobileno'];
  $Pnm = $_POST['ParentName'];
  $Pno = $_POST['ParentNumber'];
  $addr = $_POST['Address'];

  $query = "UPDATE `studentdata` SET `first_name`='$fnm',`last_name`='$lnm',`Gender`='$gender',`registration_date`='$rdate',`course_id`='$course',`City`='$city',`Email`='$email',`mobile_number`='$MoNo',`parent_name`='$Pnm',`parent_number`='$Pno',`Address`='$addr' WHERE `student_id` = '$id'";

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<Script type='text/javascript'>
                  alert('Data Update successfully');
                  </script>";

    header("Location:../../pages/phpPages/View_All_Student.php");
  } else {
    echo "Error in Update Data";
  }
}

?>

<?php include('header.php'); ?>
<?php include('aSide.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Update Students </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Students</li>
          <li class="breadcrumb-item active" aria-current="page">Update Student</li>
        </ol>
      </nav>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Update The Student Info</h4>
          <form class="form-sample" action="#" method="post">
            <!-- <p class="card-description">Basic Information </p> --><br><br><br>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Firstname"
                      value="<?php echo "{$info['first_name']}"; ?>" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Lastname"
                      value="<?php echo "{$info['last_name']}"; ?>" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Gender" value="<?php echo "{$info['Gender']}" ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Registration Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy"
                      value="<?php echo "{$info['registration_date']}"; ?>" name="RDate" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Course</label>
                  <div class="col-sm-9">
                  <select class="form-control" name="Course" required>
          <?php while ($course = mysqli_fetch_assoc($course_result)) { ?>
            <option value="<?= $course['course_id'] ?>" <?= ($course['course_id'] == $info['course_id']) ? 'selected' : '' ?>>
              <?= $course['course_name'] ?>
            </option>
          <?php } ?>
        </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">City</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="City" value="<?php echo "{$info['City']}"; ?>"
                      required />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="Email" value="<?php echo "{$info['Email']}"; ?>"
                      required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Mobile No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Mobileno"
                      value="<?php echo "{$info['mobile_number']}"; ?>" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Parent name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ParentName"
                      value="<?php echo "{$info['parent_name']}"; ?>" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Parents Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ParentNumber"
                      value="<?php echo "{$info['parent_number']}"; ?>" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Address</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" name="Address" value="<?php echo "{$info['Address']}"; ?>"
                      required />
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-select">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
                          </div>
                        </div> -->
            </div>
            <button type="submit" name="UpdateData" class="btn btn-gradient-primary me-2">Update</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->

<?php
include('footer.php');
?>