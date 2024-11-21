<!-- Navbar Start  -->
<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
  <a href="/Work/tnraoCollge/AdminDashboard/dist/pages/phpPages/dashboard.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                      <img class="img-fluid" src="../../assets/images/tnraologo.jpeg" alt="Icon" style="width: 40px; height: 40px;">
                    </div>
                    <h1 class="m-0 text-dark">T.N.Rao</h1>
                </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="search-field d-none d-md-block">
      <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <i class="input-group-text border-0 mdi mdi-magnify"></i>
          </div>
          <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
        </div>
      </form>
    </div>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
          aria-expanded="false">
          <div class="nav-profile-img">
            <img src="../../assets/images/faces/face1.jpg" alt="image">
            <span class="availability-status online"></span>
          </div>
          <div class="nav-profile-text">
            <?php if (isset($_SESSION['username'])) { ?>
              <p class="mb-1 text-black"><?= $_SESSION['username'] ?></p>
            <?php } else { ?>
              <p class="mb-1 text-black">David Greymaax</p>
            <?php } ?>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#">
            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Work/tnraoCollge/signout.php">
            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
        </div>
      </li>
      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="mdi mdi-email-outline"></i>
          <span class="count-symbol bg-warning"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <h6 class="p-3 mb-0">Messages</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
              <p class="text-gray mb-0"> 1 Minutes ago </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
              <p class="text-gray mb-0"> 15 Minutes ago </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
              <p class="text-gray mb-0"> 18 Minutes ago </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <h6 class="p-3 mb-0 text-center">4 new messages</h6>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
          data-bs-toggle="dropdown">
          <i class="mdi mdi-bell-outline"></i>
          <span class="count-symbol bg-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
          aria-labelledby="notificationDropdown">
          <h6 class="p-3 mb-0">Notifications</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="mdi mdi-calendar"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
              <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="mdi mdi-cog"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
              <p class="text-gray ellipsis mb-0"> Update dashboard </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="mdi mdi-link-variant"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
              <p class="text-gray ellipsis mb-0"> New admin wow! </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <h6 class="p-3 mb-0 text-center">See all notifications</h6>
        </div>
      </li>
      <li class="nav-item nav-logout d-none d-lg-block">
        <a class="nav-link" href="/Work/tnraoCollge/signout.php">
          <i class="mdi mdi-power"></i>
        </a>
      </li>
      <li class="nav-item nav-settings d-none d-lg-block">
        <a class="nav-link" href="#">
          <i class="mdi mdi-format-line-spacing"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
<!-- Navbar Ends Here -->

<!-- Side Bar Start  -->
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="../../assets/images/faces/face1.jpg" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
              <span class="font-weight-bold mb-2"><?= $_SESSION['username']  ?></span>
              <span class="text-secondary text-small">From Administrator</span>
            <?php endif; ?>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Work/tnraoCollge/AdminDashboard/dist/pages/phpPages/dashboard.php">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#StudentsDropdown" aria-expanded="false"
          aria-controls="StudentsDropdown">
          <span class="menu-title">Students</span>
          <i class="menu-arrow"></i>
          <i class="fa fa-users float-end"></i>
        </a>
        <div class="collapse" id="StudentsDropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="../../pages/phpPages/View_All_Student.php">All Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/phpPages/Add_Student.php">Add Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutStudent.php">About Students</a>
            </li>
          </ul>
        </div>
      </li>
      <?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin'): ?>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#PROFDropdown" aria-expanded="false"
          aria-controls="StudentsDropdown">
          <span class="menu-title">Professors</span>
          <i class="menu-arrow"></i>
          <i class="fa fa-user-o float-end"></i>
        </a>
        <div class="collapse" id="PROFDropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="../../pages/phpPages/View_All_Professor.php">All Professors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/phpPages/Add_Professors.php">Add Professors</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">About Professors</a>
            </li> -->
          </ul>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#CourseDropdown" aria-expanded="false"
          aria-controls="StudentsDropdown">
          <span class="menu-title">Courses</span>
          <i class="menu-arrow"></i>
          <i class="fa fa-graduation-cap float-end"></i>
        </a>
        <div class="collapse" id="CourseDropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="../../pages/phpPages/Courses.php">All Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Add_Course.php">Add Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutCourse.php">About Courses</a>
            </li>
          </ul>
        </div>
      </li>
      <?php endif ?>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#EventDropdown" aria-expanded="false"
          aria-controls="StudentsDropdown">
          <span class="menu-title">Event Management</span>
          <i class="menu-arrow"></i>
          <i class="fa fa-calendar float-start"></i>
        </a>
        <div class="collapse" id="EventDropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="../../pages/phpPages/View_Event.php">All Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/phpPages/Add_Event.php">Add Events</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <!-- SideBar End Here  -->