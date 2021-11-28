 <?php get_header(); ?>

 <div class="company-firstview">
   <h1 class="company-firstview__catchcopy">
     Contact
   </h1>
   <p class="company-firstview__sbtitle2">お問合わせ</p>
 </div>

 <div class="contact">
   <div class="contact-top">
     <h2 class="contact-ttl">
       フォームからのお問い合わせ
     </h2>
     <p class="contact-sbttl">
       記入内容の確認後、2~3営業日以内にご連絡させていただきます。
     </p>
     <svg class="contact-line" xmlns="http://www.w3.org/2000/svg" width="1403" height="1" viewBox="0 0 1403 1">
       <line id="線_41" data-name="線 41" x2="1403" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
     </svg>
   </div>

 </div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

     <?php the_content(); ?>
 <?php endwhile;
  endif; ?>


 <?php get_footer(); ?>