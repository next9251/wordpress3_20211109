 <?php get_header(); ?>
 <div class="company-firstview">
   <h1 class="company-firstview__catchcopy">
     Member
   </h1>
   <p class="company-firstview__sbtitle2">メンバー紹介</p>
 </div>

 <div class="trans">
   <nav class="trans-nav">
     <ul class="trans-nav__ul">
       <li class="trans-nav__list"><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>

       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="<?php echo esc_url(home_url('/about/')); ?>/">About</a></li>

       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="<?php echo esc_url(home_url('/member')); ?>/">メンバー紹介
         </a></li>
     </ul>
   </nav>
 </div>

 <div class="menber">
   <nav class="member-nav">
     <ul class="member-nav__ul">
       <li class="member-nav__list">
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">代表取締役CEO<br>
           山田太郎(Taro Yamada)</p>
       </li>
       <li>
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">COO<br>
           河本次郎(Jiro Komoto)</p>
       </li>
       <li>
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">Director<br>
           佐藤三郎(Saburou Satou)</p>
       </li>
     </ul>
     <ul class="member-nav__ul">
       <li class="member-nav__list">
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">Adviser<br>
           村本四郎(Sirou Muramoto)</p>
       </li>
       <li>
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">Engineer<br>
           市川吾郎(Goro Ichikawa)</p>
       </li>
       <li>
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">Engineer<br>
           黒川六郎(Rokurou Kurokawa)</p>
       </li>
     </ul>
     <ul class="member-nav__ul">
       <li class="member-nav__list">
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">Designer<br>
           赤城菜々(Nana Akagi)</p>
       </li>
       <li>
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">Partner<br>
           渋井初惠(Hatsue Sibui)</p>
       </li>
       <li>
         <img class="member-img" src="<?php echo get_template_directory_uri(); ?>/img/証明写真.svg" alt="">
         <p class="member-name">Art Director<br>
           櫻井九郎(Kurou Sakurai)</p>
       </li>
     </ul>
   </nav>
 </div>
 </body>
 <?php get_footer(); ?>