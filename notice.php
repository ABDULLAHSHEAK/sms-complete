<?php include_once("header.php");
// pagination start 
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$limit = 10;
$offset = ($page - 1) * $limit;

// pagination end ------------
?>

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
                      <ul style="padding: 0;">

                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr class="text-center">
                              <th scope="col">ক্রমিক</th>
                              <th scope="col">নোটিশ টাইটেল</th>
                              <th scope="col">প্রকাশের তারিখ</th>
                              <th scope="col">Action</th>
                            </tr>
                            <thead>
                            <tbody>
                              <?php
                              include_once('backend/controller/config.php');
                              $sql = "SELECT * FROM notice ORDER BY created_at DESC limit $limit offset $offset ";
                              $result = mysqli_query($conn, $sql);
                              if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                  $title = $row['title'];
                                  $slug = $row['slug'];
                                  $create_at = date('d-m-Y', strtotime($row['created_at']));
                              ?>

                                  <tr>
                                    <th><?= ++$offset ?></th>
                                    <td><?= $title ?></td>
                                    <div class="table-group" role="group">
                                      <td><?= $create_at ?></td>
                                      <td>
                                        <a href="view-notice.php?notice=<?= $slug ?>" class="btn btn-primary btn-sm">View</a>
                                      </td>
                                    </div>
                                  </tr>
                              <?php }
                              } ?>

                            </tbody>
                        </table>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // pagination code start  -->
            <?php
            $pagination = "SELECT * FROM notice";
            $p_query = mysqli_query($conn, $pagination);
            $count_post = mysqli_num_rows($p_query);
            $total_pages = ceil($count_post / $limit);
            if ($count_post > $limit) {
            ?>
              <ul class="pagination pt-5 pb-5">
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                ?>
                  <li class="page-item <?= ($i == $page) ? $active = 'active' : ''; ?>">
                    <a href="notice.php?page=<?= $i ?>" class="page-link"><?= $i ?></a>
                  </li>
                <?php } ?>
              </ul>
            <?php } ?>

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