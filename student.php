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
            <tr>
             <td>১</td>
             <td>শাকিল হোসেন</td>
             <td>সপ্তম</td>
             <td>
              <img src="images/home/a (1).png ?>" alt="Teacher Photo" style="max-width: 50px;width:100%">
             </td>
             <td>
              <div style="margin-right: 5px;">
               <form action="">
                <a href="student-profile.php" class="btn btn-warning btn-sm">View</a>
               </form>
              </div>
             </td>
            </tr>
            <tr>
             <td>২</td>
             <td>সেলিম আকন্দ </td>
             <td>প্রথম</td>
             <td>
              <img src="images/home/a (5).png ?>" alt="Teacher Photo" style="max-width: 50px;width:100%">
             </td>
             <td>
              <div style="margin-right: 5px;">
               <form action="">
                <a href="student-profile.php" class="btn btn-warning btn-sm">View</a>
               </form>
              </div>
             </td>
            </tr>
            <tr>
             <td>৩</td>
             <td>করিম শেখ </td>
             <td>দ্বিতীয়</td>
             <td>
              <img src="images/home/a (4).png ?>" alt="Teacher Photo" style="max-width: 50px;width:100%">
             </td>
             <td>
              <div style="margin-right: 5px;">
               <form action="">
                <a href="student-profile.php" class="btn btn-warning btn-sm">View</a>
               </form>
              </div>
             </td>
            </tr>
            <tr>
             <td>৪ </td>
             <td>আবু বক্কর</td>
             <td>সপ্তম</td>
             <td>
              <img src="images/home/a (2).png ?>" alt="Teacher Photo" style="max-width: 50px;width:100%">
             </td>
             <td>
              <div style="margin-right: 5px;">
               <form action="">
                <a href="student-profile.php" class="btn btn-warning btn-sm">View</a>
               </form>
              </div>
             </td>
            </tr>
            <tr>
             <td>৫</td>
             <td>করিম হোসেন</td>
             <td>নবম</td>
             <td>
              <img src="images/home/a (3).png ?>" alt="Teacher Photo" style="max-width: 50px;width:100%">
             </td>
             <td>
              <div style="margin-right: 5px;">
               <form action="">
                <a href="student-profile.php" class="btn btn-warning btn-sm">View</a>
               </form>
              </div>
             </td>
            </tr>
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

<!-- 

<?php

include_once('backend/controller/config.php');
$sql = "SELECT * FROM teacher ORDER BY reg_date DESC ";
$result = mysqli_query($conn, $sql);
$count = 0;
$cant_remove = 0;
$cant_remove1 = 0;
if (mysqli_num_rows($result) > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
  $count++;
  $id = $row['id'];
  $create_at = date('d-m-Y', strtotime($row['reg_date']));
?>
  <tr>
   <td><?php echo $count; ?></td>
   <td><?php echo $row['full_name']; ?></td>
   <td><?php echo $row['title']; ?></td>
   <td><?php echo $row['phone']; ?></td>
   <td><img src="backend/view/teacher/<?php echo $row['image_name']; ?>" alt="Teacher Photo" style="max-width: 50px;width:100%"></td>
   <td>
    <div style="display: flex;">
     <!-- ------ view button --------  -->
<div style="margin-right: 5px;">
 <form action="">
  <a href="student-profile.php" class="btn btn-warning btn-sm">View</a>
 </form>
</div>

</div>
</td>
</tr>
<?php }
} ?> -->