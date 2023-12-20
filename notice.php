<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
  <h6 class="heading">Notice </h6>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Notice </a></li>
  </ul>
</div>
<!-- ################################################################################################ -->
</div>

<!-- ###------- Dynamic notice section ----------- ### -->
<?php include_once('components/dynamic-notice.php') ?>
<!-- ###------- Dynamic notice section ----------- ### -->

<!-- ----------- Main section Start ----------  -->
<div class="container">
  <div class="row">
    <div class="col-lg-9 main">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h2>বিদ্যালয়ের নোটিশ বোর্ড </h2>
        </div>
        <div class="card-body">
          <section class="content"> <!-- Start of table section -->
            <div class="row" id="table1"><!--MSK-000132-1-->
              <div class="col-md-12">
                <div class="box">
                  <div class="box-body table-responsive" style="overflow-x:auto;">
                    <!--MSK-00101-->
                    <div class="table">
                      <ol>
                        <?php
                        include_once('backend/controller/config.php');
                        $sql = "SELECT * FROM notice ORDER BY created_at DESC ";
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> <!-- End of table section -->

        </div>
      </div>
    </div>

    <!-- ----------- sidebar section start ----------  -->
    <?php include_once('components/sidebar.php') ?>
    <!-- ----------- sidebar section start  ----------  -->
  </div>
</div>


<?php include_once("footer.php"); ?>