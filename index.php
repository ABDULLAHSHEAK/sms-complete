<?php
include_once("header.php"); 
?>
<div id="pageintro" class="hoc clear">
  <!-- ################################################################################################ -->
  <article>
    <h3 class="heading"><?= $get_result['school_name'] ?></h3>
    <p>
      Government of the People's Republic of Bangladesh.</p>
    <footer>
      <ul class="nospace inline pushright">
        <li><a class="btn inverse" href="#">নোটিশ</a></li>
        <li><a class="btn inverse" href="#">যোগাযোগ</a></li>
      </ul>
    </footer>
  </article>
  <!-- ################################################################################################ -->
</div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group grid-3">
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/s.jpg" alt=""></a>
            <figcaption><a href="#">সভাপতি</a></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/p.jpg" alt=""></a>
            <figcaption><a href="#">প্রধান শিক্ষক</a></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/sub.jpg" alt=""></a>
            <figcaption><a href="#">সহকারি শিক্ষক </a></figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <br>

    <!-- ###------- notice section ----------- ### -->
    <?php include_once('components/notice.php') ?>
    <!-- ###------- notice section ----------- ### -->

  </main>
</div>
<!--######################################################################################## -->

<!-- ###------- school-history section ----------- ### -->
<?php include_once('components/school-history.php') ?>
<!-- ###------- school-history section ----------- ### -->

<!--######################################################################################## -->

<!-- ###------- card-link section ----------- ### -->
<?php include_once('components/card-link.php') ?>
<!-- ###------- card-link section ----------- ### -->

<!--######################################################################################## -->

<!-- ------------- about school text ---------------  -->
<?php include_once('components/about-school.php') ?>
<!-- ------------- about school text ---------------  -->

<!--####################################################################################### -->

<!-- ###------- principal-talk section ----------- ### -->
<?php include_once('components/principal-talk.php') ?>
<!-- ###------- principal-talk section ----------- ### -->
<!-- ################################################################################################ -->

<!-- ###------- link section ----------- ### -->
<?php include_once('components/link.php') ?>
<!-- ###------- link section ----------- ### -->

<!-- ################################################################################################ -->
<!-- Footer Section start -->
<?php include_once("footer.php"); ?>