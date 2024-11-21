<?php include('config.php'); ?>

<?php
// Handle deletion of a course
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM coursedata WHERE course_id = $delete_id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        echo "<script>alert('Course deleted successfully');</script>";
    } else {
        echo "<script>alert('Error in deleting course');</script>";
    }
}

// Handle course update form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateCourse'])) {
    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $course_description = $_POST['course_description'];
    $course_duration = $_POST['course_duration'];
    $course_fee = $_POST['course_fee'];

    $update_query = "UPDATE coursedata SET course_name='$course_name', course_description='$course_description', 
                     course_duration='$course_duration', course_fee='$course_fee' WHERE course_id = $course_id";
    
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        echo "<script>alert('Course updated successfully');</script>";
    } else {
        echo "<script>alert('Error in updating course');</script>";
    }
}
?>

<?php include('header.php'); ?>
<?php include('aSide.php'); ?>

<style>
    .course-card {
        height: 600px; /* Set this to the desired height */
        overflow: auto; /* This hides any content that exceeds the box height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .course-description {
        flex-grow: 1; /* This allows the description area to take the remaining space */
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> View All Courses </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Courses</li>
                    <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <?php
            // Fetch all courses from the database
            $query = "SELECT * FROM coursedata";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm course-card">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['course_name'] . '</h5>
                                    <p class="card-text course-description">' . $row['course_description'] . '</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Duration:</strong> ' . $row['course_duration'] . ' months</li>
                                        <li class="list-group-item"><strong>Fee:</strong> $' . $row['course_fee'] . '</li>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <small class="text-muted">Added on: ' . date('d M Y', strtotime($row['created_at'])) . '</small>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal' . $row['course_id'] . '">Update</button>
                                        <a href="?delete_id=' . $row['course_id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this course?\')">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Update Modal -->
                        <div class="modal fade" id="updateModal' . $row['course_id'] . '" tabindex="-1" aria-labelledby="updateModalLabel' . $row['course_id'] . '" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModalLabel' . $row['course_id'] . '">Update Course</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <input type="hidden" name="course_id" value="' . $row['course_id'] . '">
                                            <div class="mb-3">
                                                <label for="course_name" class="form-label">Course Name</label>
                                                <input type="text" class="form-control" name="course_name" value="' . $row['course_name'] . '" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="course_description" class="form-label">Course Description</label>
                                                <textarea class="form-control" name="course_description" rows="3" required>' . $row['course_description'] . '</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="course_duration" class="form-label">Course Duration (Months)</label>
                                                <input type="number" class="form-control" name="course_duration" value="' . $row['course_duration'] . '" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="course_fee" class="form-label">Course Fee ($)</label>
                                                <input type="number" class="form-control" name="course_fee" value="' . $row['course_fee'] . '" required>
                                            </div>
                                            <button type="submit" name="updateCourse" class="btn btn-success">Update Course</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
            } else {
                echo '<p>No courses found.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
