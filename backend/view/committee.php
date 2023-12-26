<?php
include_once("../model/add_committee.php");
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>
    .msk-col-md-4 {
        width: 28%;
    }

    .modal {
        overflow-y: auto;
    }

    .form-control-feedback {

        pointer-events: auto;

    }

    .msk-set-width-tooltip+.tooltip>.tooltip-inner {

        min-width: 180px;
    }

    .msk-set-color-tooltip+.tooltip>.tooltip-inner {

        min-width: 180px;
        background-color: red;
    }

    .msk-image-error {
        border: 1px solid #f44336;

    }

    .msk-fade {

        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }

        to {
            top: 0;
            opacity: 1
        }
    }

    @keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }

        to {
            top: 0;
            opacity: 1
        }
    }

    @media only screen and (max-width: 500px) {

        #divGender1,
        #divPhone1,
        #divEmail1 {

            width: 75%;

        }

    }
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Board of Directors
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Committees</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row" id="test123">
            <!-- left column -->
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h4 style="color:red;font-weight:bold"><?= $teacher_alert ?></h4>
                        <div class="row">
                            <div class="col-lg-10">
                                <h3 class="text-white">Add Board of Directors(Committee)</h3>

                            </div>
                            <div class="col-lg-2">
                                <h3>
                                    <a href="all_committee.php" class="btn btn-success btn-sm">View
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <!-- form start //MSK-00097-->
                    <form role="form" action="" method="POST" enctype="multipart/form-data" id="form1" class="form-horizontal">
                        <div class="box-body">
                            <!-- -------- Full Name -------------  -->
                            <div class="form-group" id="divFullName"> <!-- full name -->
                                <div class="col-xs-3">
                                    <label>Full Name*</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Enter full name" name="full_name" id="full_name" autocomplete="off" required>
                                </div>
                            </div>
                            <!-- ----------------------- title -----------  -->
                            <div class="form-group" id="divIName">
                                <div class="col-xs-3">
                                    <label>Committee Title*</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Ex: Bangla Teacher" name="title" id="i_name" autocomplete="off" required>
                                </div>
                            </div>
                            <!-- -------- about -------------  -->
                            <div class="form-group" id="divAddress">
                                <div class="col-xs-3">
                                    <label>About Committee*</label>
                                </div>
                                <div class="col-xs-9">
                                    <!-- <input type="text" class="form-control" placeholder="Enter address" name="address" id="address" autocomplete="off">  -->
                                    <textarea placeholder="Enter About Teacher" name="about" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <!-- -------- gender -------------  -->
                            <div class="form-group" id="divGender">
                                <div class="col-xs-3">
                                    <label>Gender*</label>
                                </div>
                                <div class="col-xs-4" id="divGender1">
                                    <select name="gender" class="form-control" id="gender" required>
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <!-- -------- Number -------------  -->
                            <div class="form-group" id="divPhone">
                                <div class="col-xs-3">
                                    <label>Phone Number* </label>
                                </div>
                                <div class="col-xs-4" id="divPhone1">
                                    <input type="tel" class="form-control" placeholder="123-456-7890" name="phone" id="phone" autocomplete="off" required>
                                </div>
                            </div>
                            <!-- -------- email -------------  -->
                            <div class="form-group tt2 " id="divEmail">
                                <div class="col-xs-3">
                                    <label>Email(Optional)</label>
                                </div>
                                <div class="col-xs-6" id="divEmail1">
                                    <input type="text" class="form-control" placeholder="Enter valid email address" name="email" id="email" autocomplete="off">
                                </div>
                            </div>
                            <!-- -------- photo -------------  -->
                            <div class="form-group" id="divPhoto">
                                <div class="col-xs-3">
                                    <label>Photo*(jpg,png,jpeg file Only)</label>
                                </div>
                                <div class="col-xs-3" id="divPhoto1" style="height:150px;">
                                    <img id="output" style="width:130px;height:150px;" />
                                    <h4><?= $file_error ?></h4>
                                    <input required type="file" name="img" id="fileToUpload" style="margin-top:7px;" />
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="submit">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- End of form section -->
</div>


<?php include_once('footer.php'); ?>