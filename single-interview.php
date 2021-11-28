 <?php get_header(); ?>
 <div class="company-firstview">
   <h1 class="company-firstview__catchcopy">
     Interview
   </h1>
   <p class="company-firstview__sbtitle2">社員インタビュー</p>
 </div>
 <div class="trans">
   <nav class="trans-nav">
     <ul class="trans-nav__ul">
       <li class="trans-nav__list"><a href="/index.html">Top</a></li>
       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="/recruit.html">採用情報</a></li>
       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="/interview.html">インタビュー一覧</a></li>
       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="/interview2.html">社員インタビュー</a></li>
     </ul>
   </nav>
 </div>
 <div class="interview2">
   <div class="interview2-top">
     <img class="interview2-img" src="<?php echo $cfs->get('thumbnail'); ?>" alt="">
   </div>

   <div class="interview2-top__ttl">
     <?php echo $cfs->get('interview-name'); ?>
   </div>

   <div class="interview2-middle">
     <div class="interview2-middle__ttl">
       <?php echo $cfs->get('interview-title1'); ?>
     </div>
     <svg class="interview2-middle__line" xmlns="http://www.w3.org/2000/svg" width="1301" height="1" viewBox="0 0 1301 1">
       <line id="線_37" data-name="線 37" x2="1301" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>

     <div class="interview2-middle__conts">
       <?php echo $cfs->get('interview-content1'); ?>
     </div>
   </div>

   <div class="interview2-middle2">
     <div class="interview2-middle2__ttl">
       <?php echo $cfs->get('interview-title2'); ?>
     </div>

     <svg class="interview2-middle2__line" xmlns="http://www.w3.org/2000/svg" width="1301" height="1" viewBox="0 0 1301 1">
       <line id="線_37" data-name="線 37" x2="1301" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>

     <div class="interview2-middle2__conts">
       <?php echo $cfs->get('interview-content2'); ?>
     </div>
   </div>
   <div class="interview-botton">
     <svg class="interview-company__line" xmlns="http://www.w3.org/2000/svg" width="1322" height="1" viewBox="0 0 1322 1">
       <line id="線_14" data-name="線 14" x2="1322" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>
     <nav class="interview-botton__nav">
       <ul class="botton-nav__ul">
         <li class="botton-nav__list">
           <a href="<?php echo esc_url(home_url('/interview')); ?>"><img class="interview-botton__img" src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt=""></a>
         </li>

         <li class="botton-nav__list">
           <p class="interview-botton__name">戻る</p>
         </li>

         <li class="botton-nav__list">
           <a href="<?php echo esc_url(home_url('/')); ?>"><img class="interview-botton__img2" src="<?php echo get_template_directory_uri(); ?>/img/Home.svg" alt=""></a>
         </li>

         <li class="botton-nav__list">
           <p class="interview-botton__name2">ホーム</p>
         </li>

         <li class="botton-nav__list">
           <a href="<?php echo esc_url(home_url('/interview')); ?>"><img class="interview-botton__img3" src="<?php echo get_template_directory_uri(); ?>/img/Nest.svg" alt=""></a>
         </li>

         <li class="botton-nav__list">
           <p class="interview-botton__name3">進む</p>
         </li>
       </ul>
     </nav> 　
   </div>
 </div>
 </body>
 <?php get_footer(); ?>