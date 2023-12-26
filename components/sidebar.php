<?php
include_once('backend/controller/config.php');
$get_query4 = "SELECT * FROM sidebar_setting";
$get_run4 = mysqli_query($conn, $get_query4);
$get_result4 = mysqli_fetch_assoc($get_run4);
?>

<div class="col-lg-3 main">
  <div class="card">
    <div class="card-body d-flex right-section">
      <div class="sidebar_head">
        <h6><?= $get_result4['president_name']; ?> - সভাপতি </h6>
        <img src="backend/view/media/<?= $get_result4['president_img']; ?>" alt="সভাপতি">
      </div>
      <div class="sidebar_head">
        <h6><?= $get_result4['principal_name']; ?> - প্রধান শিক্ষক </h6>
        <img src="backend/view/media/<?= $get_result4['principal_img']; ?>" alt="প্রধান শিক্ষক">
      </div>
      <div class="sidebar_head">
        <h6><?= $get_result4['sub_principal_name']; ?>- সহকারি শিক্ষক</h6>
        <img src="backend/view/media/<?= $get_result4['sub_principal_img']; ?>" alt="সহকারি শিক্ষক ">
      </div>

      <div id="important link" class="sidebar_head">
        <h6>গুরুত্তপূর্ন লিংক</h6>
        <ul>
          <li><a href="history.php">
              <span"><i aria-hidden="true" class="fas fa-link"></i> </span>
                বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস
            </a></li>
          <li><a href="our-goal.php">
              <span"><i aria-hidden="true" class="fas fa-link"></i> </span>
                লক্ষ্য ও উদ্দেশ্য
            </a></li>
          <li><a href="our-talk.php">
              <span"><i aria-hidden="true" class="fas fa-link"></i> </span>
                আমাদের কথা
            </a></li>
          <li><a href="committee.php">
              <span"><i aria-hidden="true" class="fas fa-link"></i> </span>
                পরিচালনা কমিটি
            </a></li>
          <li><a href="teacher.php">
              <span"><i aria-hidden="true" class="fas fa-link"></i> </span>
                শিক্ষক-মন্ডলি
            </a></li>
          <li><a href="notice.php">
              <span"><i aria-hidden="true" class="fas fa-link"></i> </span>
                নোটিশ বোর্ড
            </a></li>
          <li><a href="contact.php">
              <span"><i aria-hidden="true" class="fas fa-link"></i> </span>
                যোগাযোগ
            </a></li>
        </ul>
        <div id="teacher name" class="sidebar_head">
          <h6>জরুরী যোগাযোগ</h6>
          <img src="backend/view/media/<?= $get_result4['info_img'] ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>