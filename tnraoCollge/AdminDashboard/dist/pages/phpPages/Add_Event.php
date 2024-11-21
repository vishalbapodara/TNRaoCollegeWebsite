<?php include('config.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];

  $file = time() . "_" . $_FILES['image']['name'];  /* Create a database-friendly path for the file */

  $dst = "../../assets/images/EventImgs/" . $file;    /* Create the destination path for the file */
  move_uploaded_file($_FILES['image']['tmp_name'], $dst);

  $discription = $_POST['discription'];
  $category = $_POST['category'];

  $query = "INSERT INTO `eventdata`(`event_title`, `event_img`, `event_discription`,`category`) VALUES ('$title','$file','$discription','$category')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<Script type='text/javascript'>
    alert('Data Added Succsefully');
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
      <h3 class="page-title"> Add Event Details For Website </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Event Management</li>
        </ol>
      </nav>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fill The Event Details</h4>
          <form class="form-sample" method="post" enctype="multipart/form-data"
            action="#">
            <!-- <p class="card-description">Basic Information </p> --><br><br><br>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Event Title</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="title" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Upload Thumbnail For Event</label>
                  <div class="col-md-12">
                    <input type="file" class="form-control" name="image" required />
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Category</label>
                  <div class="col-md-12">
                    <select class="form-select" name="category">
                      <option>Select Category</option>
                      <option value="expert series">expert series</option>
                      <option value="outreach programs">outreach programs</option>
                      <option value="contribution to community">contribution to community</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="exampleFormControlTextarea1" class="form-label">Event Discription</label>
                  <div class="col-md-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                      name="discription"></textarea>
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
include('footer.php');
?>