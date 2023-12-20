<!-- ------------- dynamic notice ------------   -->
<?php include_once("dynamic-notice.php"); ?>
<!-- ------------- dynamic notice ------------   -->

<br> <br>
<!-- ################################################################################################ -->

<div class="table">
  <h2>নোটিশ বোর্ড</h2>
  <ol>
    <?php
    include_once('backend/controller/config.php');
    $sql = "SELECT * FROM notice ORDER BY created_at DESC LIMIT 8 ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $slug = $row['slug'];
        $create_at = date('d-m-Y', strtotime($row['created_at']));
    ?>
        <li>
          <i class="fas fa-check" style="color:green"></i>
          <?= $title ?>
          <span><?= "( " . $create_at . " )" ?></span>
          <span>
            <a href="view-notice.php?notice=<?= $slug ?>">দেখুন</a>
          </span>
        </li>
    <?php }
    } ?>
  </ol>
  <h3> <a href="notice.php">সকল নোটিশ</a></h3>
</div>