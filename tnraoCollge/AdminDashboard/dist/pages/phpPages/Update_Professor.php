<?php include('config.php'); ?>

<?php 
    $id = $_GET['teacher_id'];
  
    
    $sql = "SELECT * FROM `teacherdata` WHERE `teacher_id` = '$id'";
    
    $result = mysqli_query($conn, $sql);
    $info = $result->fetch_assoc();
 
    if(isset($_POST['UpdateData'])){
          $fnm = $_POST['Firstname'];
          $lnm = $_POST['Lastname'];
          $email = $_POST['Email'];
          $jdate = date('Y-m-d',strtotime($_POST['Jdate']));
          $department = $_POST['Department'];
          $gender = $_POST['Gender'];
          $bdate = date('Y-m-d',strtotime($_POST['Bdate']));
          $MoNo = $_POST['Mobileno'];
          $addr = $_POST['Address'];

          $file = $_FILES['image']['name'];        /* Get the uploaded file's name */
          $dst = "../../assets/images/samples/". $file;    /* Create the destination path for the file */
          $dst_db = "../../assets/images/samples/".$file;                 /* Create a database-friendly path for the file */
          move_uploaded_file($_FILES['image']['tmp_name'], $dst);      /* Move the uploaded file to the destination directory */

          $edu = $_POST['education'];
          

            if($file){
          $query = "UPDATE `teacherdata` SET `first_name`='$fnm',`last_name`='$lnm',`email`='$email',`joining_date`='$jdate',`department`='$department',`gender`='$gender',`birth_date`='$bdate',`mobile_no`='$MoNo',`address`='$addr',`image`='$dst_db',`education`='$edu' WHERE `teacher_id` = '$id'";
        }

        else{
        $query = "UPDATE `teacherdata` SET `first_name`='$fnm',`last_name`='$lnm',`email`='$email',`joining_date`='$jdate',`department`='$department',`gender`='$gender',`birth_date`='$bdate',`mobile_no`='$MoNo',`address`='$addr',`education`='$edu' WHERE `teacher_id` = '$id'";
        }
          $result = mysqli_query($conn, $query);

          if($result){
                  echo "<Script type='text/javascript'>
                  alert('Data Update successfully');
                  </script>";

                  header("Location:../../pages/phpPages/View_All_Professor.php");
                }
            
                else{
                  echo "Error in Update Data";
                }
    }

?>
<?php include ('header.php'); ?>
<?php include ('aSide.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Update Professor </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Professor</li>
          <li class="breadcrumb-item active" aria-current="page">Update Professor</li>
        </ol>
      </nav>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fill The Professor Info</h4>
          <form class="form-sample" method="post" enctype="multipart/form-data" action="#">
            <!-- <p class="card-description">Basic Information </p> --><br><br><br>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Firstname" value="<?php echo "{$info['first_name']}" ?>" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Lastname" value="<?php echo "{$info['last_name']}" ?>" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="Email" required value="<?php echo "{$info['email']}" ?>"/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Joining Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="Jdate" value="<?php echo "{$info['joining_date']}" ?>"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Department</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Department" value="<?php echo "{$info['department']}" ?>"/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Gender" value="<?php echo "{$info['gender']}" ?>"/>
                  </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="Bdate" value="<?php echo "{$info['birth_date']}" ?>"/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Mobile No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Mobileno" required value="<?php echo "{$info['mobile_no']}" ?>"/>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Address</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="Address" required value="<?php echo "{$info['address']}" ?>"/>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
              <div class="form-group row">
              <label class="col-md-8 col-form-label flabel" for="file-input" style=" margin-bottom: 0;">Uploaded image</label>
              <div class="col-sm-6">
                <div class="file-input-container">
                  <input type="file" id="file-input" name="image"/>
                  <img src="<?php echo "{$info['image']}" ?>" alt="">
                </div>
                </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Upload New Image</label>
                  <div class="col-md-12">
                    <input type="file" class="form-control" name="image"/>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Education</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="education" required value="<?php echo "{$info['education']}" ?>"/>
                  </div>
                </div>
              </div>
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
include ('footer.php');
?>
