<div class="bgded overlay" style="background-image:url('backend/view/media/<?= $get_result3['history_bg'] ?>');">
 <section class="hoc container clear">
  <!-- ################################################################################################ -->
  <figure class="one_half first">
   <h6 class="heading">বিদ্যালয় এর সংক্ষিপ্ত ইতিহাস</h6>
   <ul class="nospace clear points">
    <li><a href="#"><i class="fas fa-university"></i></a>
     <h6 class="heading">সংক্ষিপ্ত ইতিহাস</h6>
     <p>
      <?= strip_tags(substr($get_result2['history'], 0, 10000)) . "..." ?>
     </p>
    </li>
    </li>
   </ul>
  </figure>
  <div class="one_half last"><a class="imgover" href="#"><img src="backend/view/media/<?= $get_result3['history_font'] ?>" alt=""></a></div>
 </section>
</div>