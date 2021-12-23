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
     </ul>
   </nav>
 </div>

 <div class="news2">
   <div class="news-coporate">
     <svg class="news-line" xmlns="http://www.w3.org/2000/svg" width="450" height="1" viewBox="0 0 450 1">
       <line id="線_42" data-name="線 42" x1="450" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>

     <h2 class="news-coporate__title">Corporate News</h2>

     <svg class="news-line2" xmlns="http://www.w3.org/2000/svg" width="450" height="1" viewBox="0 0 450 1">
       <line id="線_42" data-name="線 42" x1="450" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>
     <img class="news-serview-img" src="./img/素材１.svg" alt="">

     <?php
      $args = array(
        'post_type' => 'news', //カスタム投稿タイプを指定
        'posts_per_page' => 6, //表示する記事数
        'tax_query' => array(
          'taxonomy' => 'news_custom', // タクソノミースラッグを指定
          'terms' => 'corporate-news', //タームの記述
          ),
      );
      $the_query = new WP_Query($args ); ?>
     <ul>
       <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
           <li>
             <div class="news-coporate__day"><?php echo $cfs->get('news-day'); ?></div>
             <a href="<?php the_permalink(); ?>">
               <div class="news-coporate__ttl"><?php echo $cfs->get('news-ttl'); ?></div>
             </a>
           </li>
         <?php endwhile; ?>
     </ul>
     <?php wp_reset_postdata(); ?>
   <?php else : ?>
   <?php endif; ?>
   </div>


   <div class="news-service">
     <svg class="news-line" xmlns="http://www.w3.org/2000/svg" width="450" height="1" viewBox="0 0 450 1">
       <line id="線_42" data-name="線 42" x1="450" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>
     <h2 class="news-service__title">Service News</h2>
     <svg class="news-line2" xmlns="http://www.w3.org/2000/svg" width="450" height="1" viewBox="0 0 450 1">
       <line id="線_42" data-name="線 42" x1="450" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>
     <img class="news-serview-img2" src="./img/素材１.svg" alt="">

     <?php
      $args = array(
        'post_type' => 'news', //カスタム投稿タイプを指定
        'posts_per_page' => 6, //表示する記事数
        'tax_query' => array(
          array(
            'taxonomy' => 'news_custom', // タクソノミースラッグを指定
            'terms' => 'service-news', //タームの記述
          ),
        ),
      );
      $the_query = new WP_Query($args); ?>

     <ul>
       <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
           <li>
             <div class="news-service__day"><?php echo $cfs->get('news-day'); ?></div>
             <a href="<?php the_permalink(); ?>">
               <div class="news-service__ttl"><?php echo $cfs->get('news-ttl'); ?></div>
             </a>
           </li>
         <?php endwhile; ?>
     </ul>
     <?php wp_reset_postdata(); ?>
   <?php else : ?>
   <?php endif; ?>
   </div>
 </div>
 </body>

 <?php get_footer(); ?>