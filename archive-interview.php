 <?php get_header(); ?>
 <div class="company-firstview">
   <h1 class="company-firstview__catchcopy">
     Interview
   </h1>
   <p class="company-firstview__sbtitle2">インタビュー</p>
 </div>
 <div class="trans">
   <nav class="trans-nav">
     <ul class="trans-nav__ul">
       <li class="trans-nav__list"><a href="/index.html">Top</a></li>
       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="/recruit.html">採用情報</a></li>
       <li class="trans-nav__list">></li>
       <li class="trans-nav__list"><a href="/interview.html">インタビュー一覧</a></li>
     </ul>
   </nav>
 </div>
 <div class="interview">
   <div class="interview-conts">
     <?php
      $args = array(
        'post_type' => 'interview', //カスタム投稿タイプを指定
        'posts_per_page' => 6, //表示する記事数
        'tax_query' => array(
          array(
            'taxonomy' => 'interview_custom', // タクソノミースラッグを指定
            'terms' => 'interview-list', //タームの記述
          ),
        ),
      );
      $the_query = new WP_Query($args); ?>
     <ul>
       <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
           <li>
             <div class="interview-img"><?php echo $cfs->get('picture'); ?></div>
             <a href="<?php the_permalink("interview2"); ?>">
               <div class="interview-ttl"><?php echo $cfs->get('interview-name'); ?></div>
             </a>
           </li>
         <?php endwhile; ?>
     </ul>
     <?php wp_reset_postdata(); ?>
   <?php else : ?>
   <?php endif; ?>
 </div>

 </body>

 <?php get_footer(); ?>