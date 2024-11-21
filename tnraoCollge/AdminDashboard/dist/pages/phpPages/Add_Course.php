<?php include('config.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Capture course details from the form
  $course_name = $_POST['CourseName'];
  $course_description = $_POST['CourseDescription'];
  $course_duration = $_POST['CourseDuration']; // Example: in months
  $course_fee = $_POST['CourseFee']; // Example: course fee

  // Insert query to add the course to the database
  $query = "INSERT INTO `coursedata`(`course_name`, `course_description`, `course_duration`, `course_fee`) 
            VALUES ('$course_name', '$course_description', '$course_duration', '$course_fee')";
  
  // Execute the query and check if the data was inserted successfully
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<script type='text/javascript'>
      alert('Course added successfully');
      </script>";
  } else {
    echo "<script type='text/javascript'>
      alert('Error adding course');
      </script>";
  }
}
?>

<?php include('header.php'); ?>
<?php include('aSide.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Add Course </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Courses</li>
          <li class="breadcrumb-item active" aria-current="page">Add Course</li>
        </ol>
      </nav>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fill the Course Info</h4>
          <form class="form-sample" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- Course Name -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Course Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="CourseName" required />
                  </div>
                </div>
              </div>
            </div>

            <!-- Course Description -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Course Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="CourseDescription" rows="4" required></textarea>
                  </div>
                </div>
              </div>
            </div>

            <!-- Course Duration -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Course Duration (Months)</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="CourseDuration" required />
                  </div>
                </div>
              </div>

              <!-- Course Fee -->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Course Fees</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="CourseFee" required />
                  </div>
                </div>
              </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="SubmitCourse" class="btn btn-gradient-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
