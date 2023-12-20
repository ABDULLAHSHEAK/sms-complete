<?php
include('backend/controller/config.php');
$get_query = "SELECT * FROM general_setting";
$get_run = mysqli_query($conn, $get_query);
$get_result = mysqli_fetch_assoc($get_run);

$get_query2 = "SELECT * FROM school_setting";
$get_run2 = mysqli_query($conn, $get_query2);
$get_result2 = mysqli_fetch_assoc($get_run2);

$get_query3 = "SELECT * FROM school_setting";
$get_run3 = mysqli_query($conn, $get_query3);
$get_result3 = mysqli_fetch_assoc($get_run3);


?>

<!DOCTYPE html>
<html lang="">

<head>
  <title><?= $get_result['site_title'] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="layout/styles/other.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- ------ icone ----------   -->
  <link rel="icon" type="image/x-icon" href="images/fav1.png">
</head>

<body id="top">
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">
        <ul class="nospace">
          <!-- -------- date and time ---------  -->
          <?php
          $current_date = date('d');
          $current_year = date('Y');
          $current_month = date('F');
          $current_day = date('l');
          $current_time = date('h:i A');

          echo $current_day . " , " . $current_date . " " . $current_month . " , " . $current_year . " || " . " <span id='clock'></span>";
          ?>
          </li>
          <li><i class="fas fa-university"></i>
            গণপ্রজাতন্ত্রী বাংলাদেশ সরকার
          </li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="contact.php" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
          <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ----------------- school information -----------------------  -->

  <div class="container p-3 mx-auto">
    <div class="row">
      <div class="col-lg-2 col-12 text-center">
        <img src="images/home/gov-bn.png" alt="gov-image" class="gov_img">
      </div>
      <div class="col-lg-8 col-12 text-center">
        <div class="block clear school_info">
          <h1><?= $get_result['school_name'] ?></h1>
          <h3><?= $get_result['school_address'] ?> - <strong> স্থাপিত - </strong> <?= $get_result['establish_year'] ?> </h3>
          <h3>ইআইআইএন নং- <?= $get_result['eiin_no'] ?>, স্কুল কোড নং- <?= $get_result['school_code'] ?></h3>
        </div>
      </div>
      <div class="col-lg-2 col-12 text-center">
        <img src="images/home/school-bn.png" alt="gov-image" class="gov_img">
      </div>
    </div>
  </div>
  <!-- menu bar code start -->
  <div class="bgded overlay padtop" style="background-image:url('images/demo/inst11.jpg');">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <h1><a href="index.php"><?= $get_result['menu_text'] ?></a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">হোম</a></li>
          </li>
          <li><a class="drop" href="#">পরিচালনা পরিষদ</a>
            <ul>
              <li><a class="" href="committee.php">পরিচালনা কমিটি</a>
              <li><a class="" href="committee.php">কর্মকর্তা</a>
              </li>
            </ul>
          </li>
          <li><a href="teacher.php">শিক্ষকমন্ডলী</a></li>
          <li><a href="student.php">শিক্ষার্থী</a>

          <li><a class="" href="notice.php">নোটিশ</a>
          <li><a href="#" class="drop">একাডেমি </a>
            <ul>
              <li><a href="class-routine.php">ক্লাস রুটিন</a></li>
              <li><a href="syllabus.php">সিলেবাস</a></li>
            </ul>
          </li>
          <li><a class="" href="result.php">ফলাফল</a>

          <li><a href="#" class="drop">গ্যালারি</a>
            <ul>
              <li><a href="photo-gellery.php">ফটো গ্যালারি</a></li>
              <li><a href="video-gellery.php">ভিডিও গ্যালারি</a></li>
            </ul>
          </li>
          </li>
          <li><a href="#" class="drop">আমাদের সম্পর্কে</a>
            <ul>
              <li><a href="history.php">সংক্ষিপ্ত ইতিহাস</a></li>
              <li><a href="our-goal.php">লক্ষ্য ও উদ্দেশ্য</a></li>
              <li><a href="our-talk.php">আমাদের কথা</a></li>
            </ul>
          </li>
          <li><a href="contact.php">যোগাযোগ</a></li>
      </nav>
    </header>