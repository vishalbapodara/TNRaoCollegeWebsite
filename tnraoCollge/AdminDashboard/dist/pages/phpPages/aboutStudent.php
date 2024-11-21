<?php include('config.php'); ?>

<?php include('header.php'); ?>
<?php include('aSide.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> View All Students </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Students</li>
          <li class="breadcrumb-item active" aria-current="page">All Students</li>
        </ol>
      </nav>
    </div>

    <div class="row">
      <?php
        // Fetch all students from the database
        $query = "SELECT * FROM studentdata";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm" style="min-height: 350px;">
                  <div class="card-body">
                    <h5 class="card-title">' . $row['first_name'] . ' ' . $row['last_name'] . '</h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>Gender:</strong> ' . $row['Gender'] . '</li>
                      <li class="list-group-item"><strong>Registration Date:</strong> ' . date('d M Y', strtotime($row['registration_date'])) . '</li>
                      <li class="list-group-item"><strong>Course:</strong> ' . $row['course_id'] . '</li>
                      <li class="list-group-item"><strong>City:</strong> ' . $row['City'] . '</li>
                      <li class="list-group-item"><strong>Email:</strong> ' . $row['Email'] . '</li>
                      <li class="list-group-item"><strong>Mobile No:</strong> ' . $row['mobile_number'] . '</li>
                      <li class="list-group-item"><strong>Parent Name:</strong> ' . $row['parent_name'] . '</li>
                      <li class="list-group-item"><strong>Parent Number:</strong> ' . $row['parent_number'] . '</li>
                      <li class="list-group-item"><strong>Address:</strong> ' . $row['Address'] . '</li>
                    </ul>
                  
                  </div>
                </div>
              </div>
            ';
          }
        } else {
          echo '<p>No students found.</p>';
        }
      ?>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
