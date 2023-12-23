<?php include('../controller/config.php'); ?>
<?php
// session_start();
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
// $post_publis_alert = "";
$file_error = '';
if (isset($_POST['add_notice'])) {
    $notice_title = $_POST['title'];
    $slug = str_replace(' ', '-', $_POST['title']);
    $get_file_name = $_FILES['pdf']['name'];
    $tempName = $_FILES['pdf']['tmp_name'];
    $fileNameParts = explode('.', $_FILES['pdf']['name']);
    $fileExt = end($fileNameParts);
    $extension = array('pdf');

    if (in_array($fileExt, $extension)) {
        $current_time = date('Y-m-d-H-i-s');
        $filename = $current_time . '_' . $get_file_name;
        $upload = 'notices/' . $filename;
        $query = "INSERT INTO notice (title,slug,file) VALUES ('$notice_title','$slug','$filename')";
        $run = mysqli_query($conn, $query);
        if ($run) {
            move_uploaded_file($tempName, $upload);
            // $post_publis_alert = "Notice Added Succesfully";
            $_SESSION['run'] = 'succesfully';
            header('Location: add_notices.php'); // Redirect should occur before any output
            // session_destroy('$alert');
        } else {
            echo "error";
        }
    } else {
        $file_error = "File must be a PDF.";
    }
}



?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>


<!-- ----------- breadcrumb -------------------   -->
<!-- ----------- breadcrumb -------------------   -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Notice
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add Notice</a></li>
        </ol>
    </section>
    <!-- ----------- breadcrumb -------------------   -->
    <!-- ----------- breadcrumb -------------------   -->

    <section class="content">
        <div class="row">
            <div class="col-md-10">
                <div class="panel"><!--panel bg-maroon-->
                    <div class="panel-heading bg-aqua-active">

                        <div class="row">
                            <div class="col-lg-10">
                                <h3 class="text-white">Notice Add</h3>

                            </div>
                            <div class="col-lg-2">
                                <h3>
                                    <a href="notices.php" class="btn btn-success">View
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body"><!--panel-body -->


                        <div class="box box-primary">
                            <!-- //MSK-00097 form start -->
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group" id="divName">
                                        <!-- <h4><?php echo  $post_publis_alert ?></h4> -->
                                        <label for="title">Title*</label>
                                        <input type="text" class="form-control" id="title" placeholder="Notice Title" name="title" autocomplete="off" required>
                                    </div>
                                    <div class="form-group" id="divStudentCount">
                                        <label for="">Notice* (PDF File Only)</label>
                                        <input type="file" class="form-control" id="title" name="pdf" autocomplete="off" accept="pdf" required></input>
                                        <h4 style="color: red;"><?php echo $file_error; ?></h4>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" id="btnSubmit" name="add_notice">Submit</button>
                                </div>
                            </form>
                        </div><!-- /.box -->

                    </div>
                </div><!--/. panel-->
            </div>
        </div><!--/.row -->
    </section><!-- /.section -->

</div>


<?php include_once('footer.php'); ?>