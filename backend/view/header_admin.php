<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><strong>SMS</strong></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><strong>School Management System </strong></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning"><?php echo "00"; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have <?php echo "00" ?> notifications</li>
                <li>
                </li>
                <li class="footer"><a href="#">Comming Soon</a></li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>

            <!-- Notifications -->
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu" id="friend_request">
              <a href="#" class="dropdown-toggle" title="Comming Soon">
                <i class="fa fa-user-plus"></i>
                <span class="label label-success">1</span>
              </a>
            </li>


            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu" id="unread_msg">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 messages</li>

                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">

                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="" class="user-image" alt="User Image">
                <span class="hidden-xs">name</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="" class="img-circle" alt="User Image">

                  <p>
                    <?php echo 'admin' ?>
                    <?php
                    // $date = strtotime($row['reg_date']);
                    echo '<small>' . "Member since " . date('M' . '.' . ' Y') . '</small>';
                    ?>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="admin_profile.php" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="row" id="fProfile">

    </div>
    <div id="viewDuePayment">

    </div>
    <div id="viewAllNotification">

    </div>
    <div id="stdProfile">

    </div>
    <div id="showEvent2">

    </div>


    <style>
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

      .modal-content1 {
        position: absolute;
        left: 25%;
      }
    </style>