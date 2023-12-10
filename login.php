<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">Login</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Login</a></li>
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
    <div class="card-body">
     <div class="card-header bg-primary text-white">
      <h1>শিক্ষার্থী লগইন</h1>
     </div>
     <section class="vh-100" style="background-color: #f4f5f7;">
      <div class="container py-5 h-100">
       <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-8 mb-4 mb-lg-0">
         <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            <img src="images/teacher_section.png" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
            <h5>আপনার আকাউন্ট এ লগইন করুন </h5>
            <i class="far fa-edit mb-5"></i>
           </div>
           <div class="col-md-8">
            <div class="card-body p-4">
             <form action="">
              <label for="email">আপনার ইমেইল দিন </label>
              <input type="email" class="form-control" placeholder="Email"> <br/>

              <label for="email">আপনার পাসওয়ার্ড দিন </label>
              <input type="password" class="form-control" placeholder="Password"> <br />
              <input type="button" class="btn btn-primary form-control" value="লগইন">
             </form>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </section>
    </div>
   </div>
  </div>

  <!-- ----------- sidebar section start ----------  -->
  <?php include_once('components/sidebar.php') ?>
  <!-- ----------- sidebar section start  ----------  -->
 </div>
</div>


<?php include_once("footer.php"); ?>