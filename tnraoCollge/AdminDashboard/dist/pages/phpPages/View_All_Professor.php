<?php include 'config.php'; ?>

<?php 
error_reporting(0); 
    $sql = "SELECT * FROM `teacherdata`";

    $result = mysqli_query($conn, $sql);

    if($_GET['teacher_id']){
        $t_id =$_GET['teacher_id'];

        $sql2 = "DELETE FROM `teacherdata` WHERE teacher_id = '$t_id'";

        $result2 = mysqli_query($conn,$sql2);

        if($result2){
            header("Location:../../pages/phpPages/View_All_Professor.php");
           
        }
    }
?>

<?php include 'header.php'; ?>
<?php include 'aSide.php'; ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">All Professor List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Professor</li>
                    <li class="breadcrumb-item active" aria-current="page">All Professor</li>
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
                                    <h4 class="card-title">All Professor List</h4>
                                    <hr>
                                    <a href="Add_Professors.php"> <button type="button"
                                            class="btn btn-outline-primary btn-sm">Add New <span class="ms-1"><i
                                                    class="fa fa-plus"></i></span></button> </a>
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col-12 grid-margin">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th> </th>
                                                                        <th class="data-size"> Name </th>
                                                                        <th class="data-size"> Department </th>
                                                                        <th> Gender </th>
                                                                        <th> Education </th>
                                                                        <th> Mobile </th>
                                                                        <th> Email </th>
                                                                        <th> Joinig Date </th>
                                                                        <th> Action </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    
                                                                    while($info=$result->fetch_assoc()){
    
                                                                    ?>
                                                                    <tr>
                                                                        <td class="py-3">  <img src="<?php echo "{$info['image']}" ?>" alt="img" />  </td>
                                                                        <td> <?php echo "{$info['first_name']} {$info['last_name']}" ?> </td>
                                                                        <td> <?php echo "{$info['department']}" ?> </td>
                                                                        <td> <?php echo "{$info['gender']}" ?> </td>
                                                                        <td> <?php echo "{$info['education']}" ?> </td>
                                                                        <td>    <?php echo "{$info['mobile_no']}" ?>  </td>
                                                                        <td> <?php echo "{$info['email']}" ?> </td>
                                                                        <td> <?php echo "{$info['joining_date']}" ?> </td>
                                                                        <td>
                                                                        <a href="../../pages/phpPages/Update_Professor.php?teacher_id=<?= urlencode($info['teacher_id']) ?>"><i class="fa fa-pencil fa-lg p-2 m-1 bg-gradient-success rounded text-dark"></i></a>
                                                                        <a href="../../pages/phpPages/View_All_Professor.php?teacher_id=<?= urlencode($info['teacher_id']) ?>" onclick="return confirm('Are You Sure To Delete This Data');"><i class="fa fa-minus-circle fa-lg p-2 m-1 bg-gradient-danger text-reddit rounded"></i> </a>
                                                                         </td>
                                                                    </tr>
                                                                    <?php  
                                                                    }
                                                                    ?>
                                                                 

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


                    <?php include 'footer.php'; ?>
                 