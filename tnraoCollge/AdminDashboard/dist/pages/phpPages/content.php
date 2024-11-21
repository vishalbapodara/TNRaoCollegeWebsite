<?php include 'config.php'; ?>

<?php
error_reporting(0);
$sql = "SELECT * FROM `teacherdata`";

$result = mysqli_query($conn, $sql);
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Total Students <i class="fa fa-users fa-lg float-end"></i>
            </h4>
            <h2 class="mb-5"> 1500</h2>
            <h6 class="card-text">Increased by 40%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">New students <i class="fa fa-user-o fa-lg float-end"></i>
            </h4>
            <h2 class="mb-5">250</h2>
            <h6 class="card-text">Increased by 10%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Total Courses <i class="fa fa-graduation-cap fa-lg float-end"></i>
            </h4>
            <h2 class="mb-5">10</h2>
            <h6 class="card-text">Increased by 5%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-warning card-img-holder text-white">
          <div class="card-body">
            <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Fees Collection <i class="fa fa-inr fa-lg float-end"></i>
            </h4>
            <h2 class="mb-5">95,541</h2>
            <h6 class="card-text">Increased by 5%</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-start">Exams And Students Performance</h4>
              <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-end">
              </div>
            </div>
            <canvas id="visit-sale-chart" class="mt-4"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Traffic Sources</h4>
            <div class="doughnutjs-wrapper d-flex justify-content-center">
              <canvas id="traffic-chart"></canvas>
            </div>
            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Teacher Table Start from Here -->
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Teachers List</h4>
            <div class="table-responsive">
              <table class="table">
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
                    
                  </tr>
                </thead>
                <tbody>
                  <?php

                  while ($info = $result->fetch_assoc()) {

                    ?>
                    <tr>
                      <td class="py-3"> <img src="<?php echo "{$info['image']}" ?>" alt="img" /> </td>
                      <td> <?php echo "{$info['first_name']} {$info['last_name']}" ?> </td>
                      <td> <?php echo "{$info['department']}" ?> </td>
                      <td> <?php echo "{$info['gender']}" ?> </td>
                      <td> <?php echo "{$info['education']}" ?> </td>
                      <td> <?php echo "{$info['mobile_no']}" ?> </td>
                      <td> <?php echo "{$info['email']}" ?> </td>
                      <td> <?php echo "{$info['joining_date']}" ?> </td>
                  
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
    <!-- Teacher Table Start from Here -->

    <div class="row">
      <div class="col-lg-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body p-0 d-flex">
            <div id="inline-datepicker" class="datepicker datepicker-custom"></div>
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-7 grid-margin stretch-card">  
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Recent Updates</h4>
            <div class="d-flex">
              <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                <i class="mdi mdi-account-outline icon-sm me-2"></i>
                <span>jack Menqu</span>
              </div>
              <div class="d-flex align-items-center text-muted font-weight-light">
                <i class="mdi mdi-clock icon-sm me-2"></i>
                <span>October 3rd, 2018</span>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6 pe-1">
                <img src="../../assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                <img src="../../assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
              </div>
              <div class="col-6 ps-1">
                <img src="../../assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                <img src="../../assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
              </div>
            </div>
            <div class="d-flex mt-5 align-items-top">
              <img src="../../assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
              <div class="mb-0 flex-grow">
                <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the
                  readable content of a page.</p>
              </div>
              <div class="ms-auto">
                <i class="mdi mdi-heart-outline text-muted"></i>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-dark">Todo List</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
              <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Show all Courses details </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked> Meeting with staff  </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>

                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Add new students details </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
               
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Call To Tirthraj sir! </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Project Status</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Name </th>
                    <th> Due Date </th>
                    <th> Progress </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> Herman Beck </td>
                    <td> May 15, 2015 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 2 </td>
                    <td> Messsy Adam </td>
                    <td> Jul 01, 2015 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%"
                          aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 3 </td>
                    <td> John Richards </td>
                    <td> Apr 12, 2015 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%"
                          aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 4 </td>
                    <td> Peter Meggik </td>
                    <td> May 15, 2015 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%"
                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 5 </td>
                    <td> Edward </td>
                    <td> May 03, 2015 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%"
                          aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 5 </td>
                    <td> Ronald </td>
                    <td> Jun 05, 2015 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%"
                          aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div> -->
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a
          href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
          class="mdi mdi-heart text-danger"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>