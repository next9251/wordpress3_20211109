 <?php get_header(); ?>
 <div class="company-firstview">
   <h1 class="company-firstview__catchcopy">
     News
   </h1>
   <p class="company-firstview__sbtitle2">ニュース</p>
 </div>

 <div class="trans">
   <nav class="trans-nav">
     <ul class="trans-nav__ul">
       <li class="trans-nav__list"><a href="/index.html">Top</a></li>
       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="/news.html">News</a></li>
       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="/news2.html">記事</a></li>
     </ul>
   </nav>
 </div>

 <div class="news-article">
   <div class="news-article__date">
     <?php echo $cfs->get('news-day'); ?>
   </div>
   <div class="news-article__title">
     <?php echo $cfs->get('news-ttl'); ?>
   </div>
 </div>

 <svg class="company-line2" xmlns="http://www.w3.org/2000/svg" width="1322" height="1" viewBox="0 0 1322 1">
   <line id="線_14" data-name="線 14" x2="1322" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
 </svg>
 <div class="news-article__content">
   <?php echo $cfs->get('news-cont'); ?>
 </div>

 <svg class="company-line2" xmlns="http://www.w3.org/2000/svg" width="1322" height="1" viewBox="0 0 1322 1">
   <line id="線_14" data-name="線 14" x2="1322" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
 </svg>

 <div class="news-botton">
   <nav class="news-botton__nav">
     <ul class="botton-nav__ul">
       <li class="botton-nav__list">
         <a href="<?php echo esc_url(home_url('/news')); ?>"><img class="news-botton__img" src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt=""></a>

       </li>

       <li class="botton-nav__list">
         <p class="news-botton__name">戻る</p>
       </li>

       <li class="botton-nav__list">
         <a href="<?php echo esc_url(home_url('/')); ?>"><img class="news-botton__img2" src="<?php echo get_template_directory_uri(); ?>/img/Home.svg" alt=""></a>
       </li>

       <li class="botton-nav__list">
         <p class="news-botton__name2">ホーム</p>
       </li>

       <li class="botton-nav__list">
         <a href="<?php echo esc_url(home_url('/news')); ?>"><img class="news-botton__img3" src="<?php echo get_template_directory_uri(); ?>/img/Nest.svg" alt=""></a>
       </li>

       <li class="botton-nav__list">
         <p class="news-botton__name3">進む</p>
       </li>

     </ul>
   </nav>
   　
 </div>
 </body>
 <?php get_footer(); ?>