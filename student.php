<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">Student</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Student</a></li>
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
     <h2>বিদ্যালয়ের সকল ছাত্র-ছাত্রি </h2>
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
            <th>শ্রেণি</th>
            <th>ছবি</th>
            <th>দেখুন</th>
           </thead>
           <tbody>
            	<?php

								include_once('backend/controller/config.php');
								$sql = "SELECT * FROM student1 s LEFT JOIN class_room c ON s.class_name = c.id ORDER BY created_at DESC ";
								$result = mysqli_query($conn, $sql);
								$count = 0;
								$cant_remove = 0;
								$cant_remove1 = 0;
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $count++;
                  $id = $row['id'];
                  $slug = $row['slug'];
                  $create_at = date('d-m-Y', strtotime($row['created_at']));
                  ?>
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $row['full_name']; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td><img src="backend/view/student/<?php echo $row['img']; ?>" alt="Teacher Photo" style="width: 50px;"></td>
                      <td><a href="student-profile.php?students=<?=$slug?>" class="btn btn-outline-primary btn-sm">View</a></td>

          <?php }
              }?>
           </tbody>
          </table>
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
