<?php include_once("header.php");

// pagination start 
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$limit = 3;
$offset = ($page - 1) * $limit;

// pagination end ------------

?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
  <h6 class="heading">Committees </h6>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Committees </a></li>
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
          <h2>বিদ্যালয়ের সকল পরিচালনা কমিটি & কর্মচারি </h2>
        </div>
        <div class="card-body">
          <section class="content"> <!-- Start of table section -->
            <div class="row" id="table1"><!--MSK-000132-1-->
              <div class="col-md-12">
                <div class="box">
                  <div class="box-body table-responsive" style="overflow-x:auto;">
                    <!--MSK-00101-->
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <th>SL</th>
                        <th>নাম</th>
                        <th>পদবী</th>
                        <th>মোবাইল</th>
                        <th>ছবি</th>
                        <th>বিস্তারিত দেখুন</th>
                      </thead>
                      <tbody>
                        <?php

                        include_once('backend/controller/config.php');
                        $sql = "SELECT * FROM committee ORDER BY reg_date DESC limit $limit offset $offset";
                        $result = mysqli_query($conn, $sql);
                        $count = 0;
                        $cant_remove = 0;
                        $cant_remove1 = 0;
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $slug = $row['slug'];
                            $create_at = date('d-m-Y', strtotime($row['reg_date']));
                        ?>
                            <tr>
                              <td><?= ++$offset ?></td>
                              <td><?php echo $row['full_name']; ?></td>
                              <td><?php echo $row['title']; ?></td>
                              <td><?php echo $row['phone']; ?></td>
                              <td><img src="backend/view/committee/<?php echo $row['image_name']; ?>" alt="Teacher Photo" style="max-width: 50px;width:100%"></td>
                              <td>
                                <div style="display: flex;">
                                  <!-- ------ view button --------  -->
                                  <div style="margin-right: 5px;">
                                    <form action="">
                                      <a href="committe-profile.php?committe=<?= $slug ?>" class="btn btn-warning btn-sm">View</a>
                                    </form>
                                  </div>

                                </div>
                              </td>
                            </tr>
                        <?php }
                        } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- // pagination code start  -->
            <?php
            $pagination = "SELECT * FROM committee";
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
                    <a href="committee.php?page=<?= $i ?>" class="page-link"><?= $i ?></a>
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