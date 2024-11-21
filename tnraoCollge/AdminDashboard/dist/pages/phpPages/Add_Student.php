<?php include('config.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fnm = $_POST['Firstname'];
  $lnm = $_POST['Lastname'];
  $gender = $_POST['Gender'];
  $rdate = date('Y-m-d', strtotime($_POST['RDate']));
  $course = $_POST['Course'];
  $city = $_POST['City'];
  $email = $_POST['Email'];
  $MoNO = $_POST['Mobileno'];
  $Pnm = $_POST['ParentName'];
  $Pno = $_POST['ParentNumber'];
  $addr = $_POST['Address'];


  $query = "INSERT INTO `studentdata`(`first_name`, `last_name`, `Gender`, `registration_date`, `course_id`, `City`, `Email`, `mobile_number`, `parent_name`, `parent_number`, `Address`) VALUES ('$fnm','$lnm','$gender','$rdate','$course','$city','$email','$MoNO','$Pnm','$Pno','$addr')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<Script type='text/javascript'>
      alert('Data Added successfully');
      </script>";
  } else {
    echo "<Script type='text/javascript'>
      alert('Error in Inserting data');
      </script>";
  }
}
?>

<?php include('header.php'); ?>
<?php include('aSide.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Add Students </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Students</li>
          <li class="breadcrumb-item active" aria-current="page">Add Students</li>
        </ol>
      </nav>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fill The Student Info</h4>
          <form class="form-sample" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- <p class="card-description">Basic Information </p> --><br><br><br>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Firstname" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Lastname" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="Gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Registration Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="RDate" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Course</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="Course" required>
                    <option value="">Select Course</option>
                      <?php
                      // Fetch valid course IDs from the database
                      $query = "SELECT course_id, course_name FROM courses";
                      $result = mysqli_query($conn, $query);      

                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['course_id'] . '">' . $row['course_name'] . '</option>';
                      }
                      ?>

                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">City</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="City" required />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="Email" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Mobile No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Mobileno" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Parent name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ParentName" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Parents Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ParentNumber" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Address</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" name="Address" required />
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
            <button type="submit" name="SubmitData" class="btn btn-gradient-primary me-2">Submit</button>
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