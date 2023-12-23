<?php
session_start();
include_once("header.php");

include_once('backend/controller/config.php');
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $massage = mysqli_real_escape_string($conn, $_POST['massage']);

  $query = "INSERT INTO contact (name,email,subject,massage) VALUES ('$name', '$email', '$subject', '$massage' )";

  $run = mysqli_query($conn, $query);
  if ($run) {
    $_SESSION['status'] = 'Success';
    // header('location:contact.php');
    // echo "<script>window.location.href='contact.php';</script>";
  }

}
?>


<div id="breadcrumb" class="hoc clear">
  <h6 class="heading">Contact Us</h6>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</div>
<!-- ################################################################################################ -->
</div>

<!-- ###------- Dynamic notice section ----------- ### -->
<?php include_once('components/dynamic-notice.php') ?>
<!-- ###------- Dynamic notice section ----------- ### -->


<!-- ################################################################################################ -->


<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <!-- ################################################################################################ -->
      <h1>Our Location</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.12954624582!2d89.68226551454082!3d24.48096788423425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdc03437b86a4d%3A0x5cc8f632f81db526!2sSirajganj+Polytechnic+Institute%2C+Sirajganj!5e0!3m2!1sen!2sbd!4v1564485246514!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>

      <br><br>
      <h1 style="color: green; font-size: 30px; border-bottom: 2px solid ; text-align: center; text-transform: uppercase;">Send your massage</h1>
      <div class="frme">
        <div class="fromleft">
          <form action="" method="POST">
            Full Name
            <input type="text" name="name" placeholder="Enter Your Full Name" class="form-control" required> <br>
            Email
            <input type="email" name="email" placeholder="Enter Your Roll NO " class="form-control" required> <br>
            Subject
            <input type="text" name="subject" placeholder="Subject" required> <br>

            Massage
            <textarea name="massage" id="" cols="30" rows="10" placeholder="Enter Your Massage" required></textarea>
            <br>
            <button type="submit" name="submit">Submit</button>
          </form>
        </div>
        <div class="fromright">
          <h1>CONTACT DETAILS</h1>
          <hr>
          <p>বিদ্যালয় এর ঠিকানা: <?= $get_result['school_address'] ?></p>
          <i class="fas fa-phone"></i> <?= $get_result['school_number1'] ?><br>
          <i class="fas fa-phone"></i> <?= $get_result['school_number2'] ?><br>
          <i class="fa fa-envelope"></i> <?= $get_result['school_email'] ?></br>
          <i class="fa fa-envelope"></i> <?= $get_result['principal_email'] ?>
        </div>
      </div>
      <!-- ################################################################################################ -->


      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
  </main>
</div>
<!-- Bottom Background Image Wrapper -->

<?php include_once("footer.php") ?>