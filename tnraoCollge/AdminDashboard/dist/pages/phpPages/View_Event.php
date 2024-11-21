<?php include("config.php"); ?>

<?php
error_reporting(0);
$sql = "SELECT * FROM `eventdata`";
$result = mysqli_query($conn, $sql);

if ($_GET['event_id']) {
    $e_id = $_GET['event_id'];
  
    $sql2 = "DELETE FROM `eventdata` WHERE ID = '$e_id'";
  
    $result2 = mysqli_query($conn, $sql2);
  
    if ($result2) {
    
      header("Location:../../pages/phpPages/View_Event.php");
    }
  }
?>

<?php include 'header.php'; ?>
<?php include 'aSide.php'; ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">All Event List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Event Management</li>
                    <li class="breadcrumb-item active" aria-current="page">All Events</li>
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
                                    <h4 class="card-title">All Events List</h4>
                                    <hr>
                                    <a href="Add_Event.php">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Add New <span class="ms-1"><i class="fa fa-plus"></i></span>
                                        </button>
                                    </a>
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col-12 grid-margin">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Title</th>
                                                                        <th>Image</th>
                                                                        <th>Description</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php while ($info = $result->fetch_assoc()): ?>
                                                                        <tr>
                                                                            <td><?php echo htmlspecialchars($info['ID']); ?>
                                                                            </td>
                                                                            <td><?php echo htmlspecialchars($info['event_title']); ?>
                                                                            </td>
                                                                            <td class="py-3">
                                                                                <img class="img-fluid"
                                                                                    style="width: 500px !important; height: 100px !important;border-radius: 0%;"
                                                                                    src="../../assets/images/EventImgs/<?php echo htmlspecialchars($info['event_img']); ?>"
                                                                                    alt="Event Image">
                                                                            </td>
                                                                            <td class="custom-width"
                                                                                style="width: 500px !important; height: 100px !important; text-overflow: ellipsis !important; white-space: normal !important;">
                                                                                <?php echo htmlspecialchars($info['event_discription']); ?>
                                                                            </td>
                                                                            <td>
                                                                                <a
                                                                                    href="../../pages/phpPages/Upddate_Event.php?event_id=<?= urlencode($info['ID']) ?>"><i
                                                                                        class="fa fa-pencil fa-lg p-2 m-1 bg-gradient-success rounded text-dark"></i></a>
                                                                                <a href="../../pages/phpPages/View_Event.php?event_id=<?= urlencode($info['ID']) ?>"
                                                                                    onclick="return confirm('Are You Sure To Delete This Event');"><i
                                                                                        class="fa fa-minus-circle fa-lg p-2 m-1 bg-gradient-danger text-reddit rounded"></i>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endwhile; ?>
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>