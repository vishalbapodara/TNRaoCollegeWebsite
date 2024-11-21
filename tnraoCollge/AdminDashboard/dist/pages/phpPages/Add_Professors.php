<!-- <?php include ('config.php'); ?> -->

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $fnm = $_POST['Firstname'];
  $lnm = $_POST['Lastname'];
  $email = $_POST['Email'];
  $jdate = date('Y-m-d',strtotime($_POST['Jdate']));
  $department = $_POST['department'];
  $gender = $_POST['Gender'];
  $bdate = date('Y-m-d',strtotime($_POST['Bdate']));
  $MoNO = $_POST['Mobileno'];
  $addr = $_POST['Address'];

  $file = $_FILES['image']['name'];        /* Get the uploaded file's name */
  $dst = "../../assets/images/samples/". $file;    /* Create the destination path for the file */
  $dst_db = "../../assets/images/samples/".$file;                 /* Create a database-friendly path for the file */
  move_uploaded_file($_FILES['image']['tmp_name'], $dst);      /* Move the uploaded file to the destination directory */

  $education = $_POST['education'];



  $query = "INSERT INTO `teacherdata`(`first_name`, `last_name`, `email`, `joining_date`, `department`, `gender`, `birth_date`, `mobile_no`, `address`, `image`, `education`) 
  VALUES ('$fnm','$lnm','$email','$jdate','$department','$gender','$bdate','$MoNO','$addr','$dst_db','$education')";
    $result = mysqli_query($conn, $query);

  if($result){
    echo "<Script type='text/javascript'>
    alert('Data Added successfully');
    </script>";
  }

  else{
    echo "<Script type='text/javascript'>
    alert('Error in Inserting data');
    </script>";
  }
}
?>

<?php include ('header.php'); ?>
<?php include ('aSide.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Add Professor </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Professor</li>
          <li class="breadcrumb-item active" aria-current="page">Add Professor</li>
        </ol>
      </nav>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fill The Professor Info</h4>
          <form class="form-sample" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="Email" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Joining Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="Jdate" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Department</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="department">
                      <option value="BCA">BCA</option>
                      <option value="BBA">BBA</option>
                      <option value="B.COM">B.com</option>
                      <option value="BED">BED</option>
                      <option value="MSCit">MSCit</option>
                      <option value="MCA">MCA</option>
                    </select>
                  </div>
                </div>
              </div>
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
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="Bdate" />
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
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Address</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="Address" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Upload Image</label>
                  <div class="col-md-12">
                    <input type="file" class="form-control" name="image" required />
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-md-12">
              <div class="form-group row">
              <label class="col-md-8 col-form-label flabel" for="file-input" style=" margin-bottom: 0;">Upload Photo</label>
              <div class="col-sm-12">
                <div class="file-input-container">
                  <input type="file" id="file-input" name="image"/>
                  <label for="file-input" class="file-input-label">
                    <span class="file-input-text">Upload Image Here</span>
                    <span class="file-input-icon"></span>
                  </label>
                </div>
                </div>
                </div>
              </div>
            </div> -->

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Education</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="education" required />
                  </div>
                </div>
              </div>
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
include ('footer.php');
?>