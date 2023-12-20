<!-- Left side column. contains the logo and sidebar -->
<?php 
if(!isset($_SESSION["index_number"])){
  echo "<script>window.location.href='login.php'</script>";
}
// if (!isset($_SERVER['HTTP_REFERER'])) {
//   // redirect them to your desired location
//   header('location:../index.php');
//   exit;
// }
?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <?php
    include_once('../controller/config.php');

    $index = $_SESSION["index_number"];

    $sql = "SELECT * FROM admin WHERE index_number='$index'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['i_name'];
    $image = $row['image_name'];

    ?>

    <div class="user-panel">
      <div class="pull-left image">
        <img src="../<?php echo $image; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $name; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN SECTION</li>
      <li class="active treeview">
        <a href="dashboard.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="admin_profile.php">
          <i class="fa fa-flag"></i> <span>My Profile</span>
        </a>
      </li>
      <li>
        <a href="all_users.php">
          <i class="fa fa-users"></i> <span>User</span>
        </a>
      </li>
      <li class="header">ACADEMY SECTION</li>
      <li>
        <a href="class_room.php">
          <i class="fa fa-list-ul"></i> <span>Classroom</span>
        </a>
      </li>
      <!-- --- notish ---  -->

      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments" aria-hidden="true"></i>
          <span>Notice</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="notices.php"><i class="fa fa-circle-o"></i> All Notices</a></li>
          <li><a href="add_notices.php"><i class="fa fa-circle-o"></i> Add Notice</a></li>
        </ul>
      </li>
      <!-- -- notish end ---  -->
      <!-- -------- add teacher start --------  -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Teacher</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="all_teacher.php"><i class="fa fa-circle-o"></i> All Teacher</a></li>
          <li><a href="teacher.php"><i class="fa fa-circle-o"></i> Add Teacher</a></li>
        </ul>
      </li>
      <!-- -------- add teacher end --------  -->
      <!-- -------- add students end --------  -->

      <li class="treeview">
        <a href="#">
          <i class="fa fa-graduation-cap"></i>
          <span>Student</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="all_student.php"><i class="fa fa-circle-o"></i> All Student</a></li>
          <li><a href="student.php"><i class="fa fa-circle-o"></i> Add Student</a></li>
        </ul>
      </li>
      <!-- -------- add student end --------  -->
      <!-- -------- add Committee start --------  -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
          <!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
          <span>Board of Directors</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="all_committee.php"><i class="fa fa-circle-o"></i> All Committee</a></li>
          <li><a href="committee.php"><i class="fa fa-circle-o"></i> Add Committee</a></li>
        </ul>
      </li>
      <!-- -------- add committee end --------  -->

      <!-- -------- academy start --------  -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i>
          <!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
          <span>Academy</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="all_routing.php"><i class="fa fa-circle-o"></i>Class Routing</a></li>
          <li><a href="all_syllabus.php"><i class="fa fa-circle-o"></i>Syllabus</a></li>
        </ul>
      </li>
      <!-- -------- academy end --------  -->

      <!-- ----------------- result section end -------------  -->
      <li>
        <a href="all_result.php">
          <i class="fa fa-certificate"></i> <span>Exam Result</span>
        </a>
      </li>
      <!-- ----------------- result section end -------------  -->
      <!-- -------- Gallery start --------  -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i>
          <!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
          <span>Gallery</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="photo_gallery.php"><i class="fa fa-circle-o"></i>Photo Gallery</a></li>
          <li><a href="video_gellery.php"><i class="fa fa-circle-o"></i>Vieo Gellery</a></li>
        </ul>
      </li> 
       <!-- -------- Setting start --------  -->
       <!-- -------- Setting start --------  -->
       <!-- -------- Setting start --------  -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gear"></i>
          <!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
          <span>Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="general-setting.php"><i class="fa fa-angle-right pull-left"></i>General Setting</a></li>
          <li><a href="school_setting.php"><i class="fa fa-angle-right pull-left"></i>School Setting</a></li>
          <li><a href="site_image.php"><i class="fa fa-angle-right pull-left"></i>Site Image</a></li>
          <li><a href="sidebar_setting.php"><i class="fa fa-angle-right pull-left"></i>Sidebar Image</a></li>
        </ul>
      </li>
      <!-- -------- Gallery end --------  -->
      <li>
        <a href="grade.php">
          <i class="fa fa-database"></i> <span>Grade</span>
        </a>
      </li>
      <li>
        <a href="subject.php">
          <i class="fa fa-book"></i> <span>Subject</span>
        </a>
      </li>
      <li>
        <a href="subject_routing.php">
          <i class="fa fa-th"></i> <span>Subject Routing</span>
        </a>
      </li>
      <li>
        <a href="timetable.php">
          <i class="fa fa-calendar-plus-o"></i> <span>Timetable</span>
        </a>
      </li>
      <li>
        <a href="student_payment.php">
          <i class="fa fa-money"></i> <span>Student Payment</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar-check-o"></i>
          <span>Attendance</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="add_attendance.php"><i class="fa fa-circle-o"></i> Add Attendance</a></li>
          <li><a href="student_attendance_history.php"><i class="fa fa-circle-o"></i>Student Attendance History </a></li>
          <li><a href="teacher_attendance_history.php"><i class="fa fa-circle-o"></i> Teacher Attendance History</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-certificate"></i>
          <span>Exam</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="exam.php"><i class="fa fa-circle-o"></i>Create Exam</a></li>
          <li><a href="exam_timetable.php"><i class="fa fa-circle-o"></i> Exam Timetable</a></li>
          <li><a href="student_exam_marks.php"><i class="fa fa-circle-o"></i>Student Exam Marks</a></li>
          <li><a href="student_exam_marks_history.php"><i class="fa fa-circle-o"></i>Student Exam Marks History</a></li>
        </ul>
      </li>
      <li>
        <a href="petty_cash.php">
          <i class="fa fa-yen"></i> <span>Petty Cash</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-facebook"></i>
          <span>Friends</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="add_friends.php"><i class="fa fa-circle-o"></i> Add Friends</a></li>
          <li><a href="my_friends.php"><i class="fa fa-circle-o"></i> My Friends</a>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i>
          <span>Event</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="my_events.php"><i class="fa fa-circle-o"></i> My Events</a></li>
          <li><a href="all_events.php"><i class="fa fa-circle-o"></i> All Events</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>