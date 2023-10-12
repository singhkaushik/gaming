<?php
// session_start(); 
if (isset($_SESSION['username'])) {
    $user_id = $_SESSION['username'];
	include('config.php');
	$sql="SELECT * FROM admin where username='$user_id'";
	$query = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$username = $row['name'];
		$useremail = $row['email'];
	}
} else {
    header("Location: index.php"); // Redirect the user to login
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="sidebar" id="sidebar">
      <div
        class="slimScrollDiv"
        style="position: relative; overflow: hidden; width: 100%; height: 442px"
      >
        <div
          class="sidebar-inner slimscroll"
          style="overflow: hidden; width: 100%; height: 442px"
        >
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="menu-title">
                <span>Main Menu</span>
              </li>
              <li class="submenu ">
                <a href="#" class="active subdrop"
                  ><i class="fas fa-dashboard"></i> <span> Dashboard</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: block">
                  <li>
                    <a href="./dashboard.php">Admin Dashboard</a>
                  </li>
                 <!--  <li>
                    <a href="./teacher_dashboard.php">Teacher Dashboard</a>
                  </li>
                  <li>
                    <a href="./student_dashboard.php">Student Dashboard</a>
                  </li> -->
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-graduation-cap"></i> <span> Students</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="./students.php"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Student List</a></li>
                  <!-- <li><a href="./student_details.php">Student View</a></li> -->
                  <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Student Add</a></li>
                  <!-- <li><a href="./edit_student.php">Student Edit</a></li> -->
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-chalkboard-teacher"></i>
                  <span> Teachers</span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="./teachers.php"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;Teacher List</a></li>
                  <li><a href="./all_bookedteacher.php"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;All Booked Teachers</a></li>
                  <!-- <li><a href="./edit_teacher.php">Teacher Edit</a></li> -->
                </ul>
              </li>
              
               <li class="submenu">
                <a href="#"
                  ><i class="fas fa-book-reader"></i> <span> Education</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="./exam.php"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;&nbsp;Examination</a></li>

                  <li><a href="./all_course.php"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;&nbsp;Courses</a></li>
                  <li><a href="./all_subject.php"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;&nbsp;Subject</a></li>
                  <li><a href="./sub_subject.php"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;&nbsp;Sub Subject</a></li>
                  <li><a href="./all_topic.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;&nbsp;Topics</a></li>
                </ul>
              </li>

             <!--  <li class="submenu">
                <a href="#"
                  ><i class="fas fa-building"></i> <span> Departments</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="./departments.php">Department List</a></li>
                  <li><a href="./add_department.php">Department Add</a></li>
                  <li><a href="./edit_department.php">Department Edit</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-book-reader"></i> <span> Subjects</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="./subjects.php">Subject List</a></li>
                  <li><a href="./add_subject.php">Subject Add</a></li>
                  <li><a href="./edit_subject.php">Subject Edit</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-clipboard"></i> <span> Invoices</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="./invoices.php">Invoices List</a></li>
                  <li><a href="invoice-grid.html">Invoices Grid</a></li>
                  <li><a href="add-invoice.html">Add Invoices</a></li>
                  <li><a href="edit-invoice.html">Edit Invoices</a></li>
                  <li><a href="view-invoice.html">Invoices Details</a></li>
                  <li>
                    <a href="invoices-settings.html">Invoices Settings</a>
                  </li>
                </ul>
              </li>
              <li class="menu-title">
                <span>Management</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-file-invoice-dollar"></i>
                  <span> Accounts</span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="fees-collections.html">Fees Collection</a></li>
                  <li><a href="expenses.html">Expenses</a></li>
                  <li><a href="salary.html">Salary</a></li>
                  <li><a href="add-fees-collection.html">Add Fees</a></li>
                  <li><a href="add-expenses.html">Add Expenses</a></li>
                  <li><a href="add-salary.html">Add Salary</a></li>
                </ul>
              </li>
              <li>
                <a href="holiday.html"
                  ><i class="fas fa-holly-berry"></i> <span>Holiday</span></a
                >
              </li>
              <li>
                <a href="fees.html"
                  ><i class="fas fa-comment-dollar"></i> <span>Fees</span></a
                >
              </li>
              <li>
                <a href="exam.html"
                  ><i class="fas fa-clipboard-list"></i>
                  <span>Exam list</span></a
                >
              </li>
              <li>
                <a href="event.html"
                  ><i class="fas fa-calendar-day"></i> <span>Events</span></a
                >
              </li>
              <li>
                <a href="time-table.html"
                  ><i class="fas fa-table"></i> <span>Time Table</span></a
                >
              </li>
              <li>
                <a href="library.html"
                  ><i class="fas fa-book"></i> <span>Library</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-newspaper"></i> <span> Blogs</span>
                  <span class="menu-arrow"></span>
                </a>
                <ul>
                  <li><a href="blog.html">All Blogs</a></li>
                  <li><a href="add-blog.html">Add Blog</a></li>
                  <li><a href="edit-blog.html">Edit Blog</a></li>
                </ul>
              </li>
              <li>
                <a href="settings.html"
                  ><i class="fas fa-cog"></i> <span>Settings</span></a
                >
              </li>
              <li class="menu-title">
                <span>Pages</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-shield-alt"></i>
                  <span> Authentication </span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="forgot-password.html">Forgot Password</a></li>
                  <li><a href="error-404.html">Error Page</a></li>
                </ul>
              </li>
              <li>
                <a href="blank-page.html"
                  ><i class="fas fa-file"></i> <span>Blank Page</span></a
                >
              </li>
              <li class="menu-title">
                <span>Others</span>
              </li>
              <li>
                <a href="sports.html"
                  ><i class="fas fa-baseball-ball"></i> <span>Sports</span></a
                >
              </li>
              <li>
                <a href="hostel.html"
                  ><i class="fas fa-hotel"></i> <span>Hostel</span></a
                >
              </li>
              <li>
                <a href="transport.html"
                  ><i class="fas fa-bus"></i> <span>Transport</span></a
                >
              </li>
              <li class="menu-title">
                <span>UI Interface</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fab fa-get-pocket"></i> <span>Base UI </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="alerts.html">Alerts</a></li>
                  <li><a href="accordions.html">Accordions</a></li>
                  <li><a href="avatar.html">Avatar</a></li>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="buttongroup.html">Button Group</a></li>
                  <li><a href="breadcrumbs.html">Breadcrumb</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li><a href="dropdowns.html">Dropdowns</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="images.html">Images</a></li>
                  <li><a href="lightbox.html">Lightbox</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modal.html">Modals</a></li>
                  <li><a href="offcanvas.html">Offcanvas</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="popover.html">Popover</a></li>
                  <li><a href="progress.html">Progress Bars</a></li>
                  <li><a href="placeholders.html">Placeholders</a></li>
                  <li><a href="rangeslider.html">Range Slider</a></li>
                  <li><a href="spinners.html">Spinner</a></li>
                  <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                  <li><a href="tab.html">Tabs</a></li>
                  <li><a href="toastr.html">Toasts</a></li>
                  <li><a href="tooltip.html">Tooltip</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="video.html">Video</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-box"
                  >
                    <path
                      d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"
                    ></path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                  </svg>
                  <span>Elements </span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="ribbon.html">Ribbon</a></li>
                  <li><a href="clipboard.html">Clipboard</a></li>
                  <li><a href="drag-drop.html">Drag &amp; Drop</a></li>
                  <li><a href="rating.html">Rating</a></li>
                  <li><a href="text-editor.html">Text Editor</a></li>
                  <li><a href="counter.html">Counter</a></li>
                  <li><a href="scrollbar.html">Scrollbar</a></li>
                  <li><a href="notification.html">Notification</a></li>
                  <li><a href="stickynote.html">Sticky Note</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li>
                    <a href="horizontal-timeline.html">Horizontal Timeline</a>
                  </li>
                  <li><a href="form-wizard.html">Form Wizard</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-bar-chart-2"
                  >
                    <line x1="18" y1="20" x2="18" y2="10"></line>
                    <line x1="12" y1="20" x2="12" y2="4"></line>
                    <line x1="6" y1="20" x2="6" y2="14"></line>
                  </svg>
                  <span> Charts </span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="chart-apex.html">Apex Charts</a></li>
                  <li><a href="chart-js.html">Chart Js</a></li>
                  <li><a href="chart-morris.html">Morris Charts</a></li>
                  <li><a href="chart-flot.html">Flot Charts</a></li>
                  <li><a href="chart-peity.html">Peity Charts</a></li>
                  <li><a href="chart-c3.html">C3 Charts</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-award"
                  >
                    <circle cx="12" cy="8" r="7"></circle>
                    <polyline
                      points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"
                    ></polyline>
                  </svg>
                  <span> Icons </span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                  <li><a href="icon-feather.html">Feather Icons</a></li>
                  <li><a href="icon-ionic.html">Ionic Icons</a></li>
                  <li><a href="icon-material.html">Material Icons</a></li>
                  <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                  <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                  <li><a href="icon-themify.html">Themify Icons</a></li>
                  <li><a href="icon-weather.html">Weather Icons</a></li>
                  <li><a href="icon-typicon.html">Typicon Icons</a></li>
                  <li><a href="icon-flag.html">Flag Icons</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-columns"></i> <span> Forms </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                  <li><a href="form-input-groups.html">Input Groups </a></li>
                  <li><a href="form-horizontal.html">Horizontal Form </a></li>
                  <li><a href="form-vertical.html"> Vertical Form </a></li>
                  <li><a href="form-mask.html"> Form Mask </a></li>
                  <li><a href="form-validation.html"> Form Validation </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-table"></i> <span> Tables </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="tables-basic.html">Basic Tables </a></li>
                  <li><a href="data-tables.html">Data Table </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><i class="fas fa-code"></i> <span>Multi Level</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li class="submenu">
                    <a href="javascript:void(0);">
                      <span>Level 1</span> <span class="menu-arrow"></span
                    ></a>
                    <ul>
                      <li>
                        <a href="javascript:void(0);"><span>Level 2</span></a>
                      </li>
                      <li class="submenu">
                        <a href="javascript:void(0);">
                          <span> Level 2</span> <span class="menu-arrow"></span
                        ></a>
                        <ul>
                          <li><a href="javascript:void(0);">Level 3</a></li>
                          <li><a href="javascript:void(0);">Level 3</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0);"> <span>Level 2</span></a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:void(0);"> <span>Level 1</span></a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
        <div
          class="slimScrollBar"
          style="
            background: rgb(204, 204, 204);
            width: 7px;
            position: absolute;
            top: 0px;
            opacity: 0.4;
            display: block;
            border-radius: 7px;
            z-index: 99;
            right: 1px;
            height: 154.998px;
          "
        ></div>
        <div
          class="slimScrollRail"
          style="
            width: 7px;
            height: 100%;
            position: absolute;
            top: 0px;
            display: none;
            border-radius: 7px;
            background: rgb(51, 51, 51);
            opacity: 0.2;
            z-index: 90;
            right: 1px;
          "
        ></div>
      </div>
    </div>
  </body>
  <script src="./assets/js/jquery-3.6.0.min.js"></script>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>

  <script src="./assets/js/feather.min.js"></script>

  <script src="./assets/js/jquery.slimscroll.min.js"></script>

  <script src="./assets/js/apexcharts.min.js"></script>
  <script src="./assets/js/chart-data.js"></script>

  <script src="./assets/js/script.js"></script>
</html>
