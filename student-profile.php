<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">Student Profile</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Studnet Profile</a></li>
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
     <h2>ছাত্র-ছাত্রির প্রোফাইল </h2>
    </div>
    <div class="card-body">
     <section class="vh-100" style="background-color: #f4f5f7;">
      <div class="container py-5 h-100">
       <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-8 mb-4 mb-lg-0">
         <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            <img src="images/home/a (2).png" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
            <h5>আবু বক্কর</h5>
            <p>সপ্তম শ্রেণি </p>
            <i class="far fa-edit mb-5"></i>
           </div>
           <div class="col-md-8">
            <div class="card-body p-4">
             <div class="row">
              <div class="col-8">
               <h6>শিক্ষার্থির তথ্য</h6>
              </div>
              <div class="col-4">
               <a href="teacher.php" class="btn btn-primary btn-sm mb-3">
                back
               </a>
              </div>
             </div>
             <hr class="mt-0 mb-4">
             <div class="row pt-1">
              <div class="col-6 mb-3">
               <h6>ইমেইল</h6>
               <p class="text-muted">info@example.com</p>
              </div>
              <div class="col-6 mb-3">
               <h6>মোবাইল</h6>
               <p class="text-muted">123 456 789</p>
              </div>
             </div>
             <h6>কিছু কথা </h6>
             <hr class="mt-0 mb-4">
             <div class="row">
              <p>লরেম ইপ্সাম ডলর সিট আমেত, কনসেক্টেচুর অ্যাডিপিস্কিং এলিট। নানসি আল্ট্রিচিস ভ্যারিয়াস আউগিউ ইউ ফ্যাউসিবাস। ইন প্যালেনটেস্কিউ আউগিউ নন নিকিউ টেম্পর ট্রিস্টিক। নিউলা এ পিউরাস অরনারে, ম্যাটুস এনিম স্যাড, ম্যাক্সিমাস মি। ডোনেক পোর্টা রিউট্রাম ডিগনিসসিম।</p>
             </div>
             <div class="d-flex justify-content-start">
              <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
              <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
              <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
             </div>
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