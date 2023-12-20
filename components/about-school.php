<div class="wrapper row3">
 <section id="services" class="hoc container clear">
  <div class="sectiontitle">
   <h1 class="heading pt-3">আমাদের সম্পর্কে কিছু কথা </h1>
  </div>
  <ul class="nospace group grid-3">
   <li class="one_third">
    <article><a href="#"><i class="fas fa-chess-king"></i></a>
     <h6 class="heading">
      সংক্ষিপ্ত ইতিহাস 
     </h6>
     <p>
      <?= strip_tags(substr($get_result2['history'], 0, 500)) . "..." ?>
     </p>
     <footer><a href="contact.php">Read More</a></footer>
    </article>
   </li>
   <li class="one_third">
    <article><a href="#"><i class="fas fa-archive"></i></a>
     <h6 class="heading">
      লক্ষ্য ও উদ্দেশ্য
     </h6>
     <p>
      <?= strip_tags(substr($get_result2['goal'], 0, 500)) . "..." ?>
     </p>
     <footer><a href="our-goal.php">Read More</a></footer>
    </article>
   </li>
   <li class="one_third">
    <article><a href="#"><i class="fas fa-backspace"></i></a>
     <h6 class="heading">
      আমাদের কথা
     </h6>
     <p>
      <?= strip_tags(substr($get_result2['talk'], 0, 500)) . "..." ?>
     </p>
     <footer><a href="our-talk.php">Read More</a></footer>
    </article>
   </li>
  </ul>
  <!-- ################################################################################################ -->
 </section>
</div>