 <?php get_header(); ?>
 <div class="company-firstview">
   <h1 class="company-firstview__catchcopy">
     Environment
   </h1>
   <p class="company-firstview__sbtitle2">働く環境</p>
 </div>
 <div class="trans">
   <nav class="trans-nav">
     <ul class="trans-nav__ul">
       <li class="trans-nav__list"><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
       <li class="trans-nav__list">></li>

       <li class="trans-nav__list"><a href="<?php echo esc_url(home_url('/recruit')); ?>/">採用情報</a></li>
       <li class="trans-nav__list">></li>

       <li class="trans-nav__list"><a href="<?php echo esc_url(home_url('/environment')); ?>/">働く環境</a></li>
     </ul>
   </nav>
 </div>
 <div class="environment">
   <div class="environment-ttl">
     働きやすい環境を全力で作る
   </div>
   <img class="news-serview-img" src="<?php echo get_template_directory_uri(); ?>/img/素材１.svg" alt="">
   <svg class="environment-line" xmlns="http://www.w3.org/2000/svg" width="943" height="1" viewBox="0 0 943 1">
     <line id="線_36" data-name="線 36" x2="943" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
   </svg>
   <p class="environment-conts">
     みんなが働きやすいと感じる環境を全力で作っていきます。<br>
     全員がベストを尽くし、成長できる研修制度と安心して働ける福利厚生を提案していきます。
   </p>
   <img class="enviroment-img" src="<?php echo get_template_directory_uri(); ?>/img/会議写真.jpeg" alt="">
 </div>
 </body>
 <?php get_footer(); ?>