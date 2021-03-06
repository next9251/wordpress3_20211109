 <?php get_header(); ?>
 <div class="firstview">
   <h1 class="firstview__catchcopy">
     Commit to the growth for everyone
   </h1>
   <h2 class="firstview__sbtitle">
     全ての人の成長にコミットする
   </h2>
 </div>

 <div class="about">
   <div>
     <h2 class="about-ttl">About</h2>
     <div class="about-ttl__sb">Technology × Coaching</div>
     <p class="about-ttl__cont">株式会社estraはデジタル化が遅れている教育業界に<br class="br-pc">最新のテクノロジーを導入することによって教育のDXを実現します。<br>
       独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、<br class="br-pc">
       一人ひとりに合わせた最適な教育を提供します。<br>
       スクリーン リーダーのサポートが有効になっています。</p>
     <a class="about-ttl__trans" href="<?php echo esc_url(home_url('/about')); ?>/">詳しくはこちら</a>
   </div>
   <div>
     <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/img/素材１.svg" alt="">
   </div>
 </div>

 <div class="service">
   <h2 class="service-ttl">Service</h2>
   <div class="service-top">
     <div>
       <img class="service-img" src="<?php echo get_template_directory_uri(); ?>/img/素材１.svg" alt="">
     </div>
     <div class="service-sb">
       <h2 class="service-sb__title1">
         ０１<br>フリーランス特化型プログラミングスクール<br>「COACHTECH」
       </h2>
       <p class="service-sb__content">
         COACHTECH(コーチテック)はフリーランス特化型の<br class="br-pc">
         オンラインコーチングプログラミングスクールです。<br>
         プログラミング未経験の方でも、「独自の学習ノウハウ」で<br class="br-pc">
         フリーランスエンジニアを目指すことができます。
       </p>
       <a class="service-sb__trans" href="<?php echo esc_url(home_url('/service')); ?>/">詳しくはこちら</a>
     </div>
   </div>
   <div class="service-top">
     <div class="service-sb2">
       <h2 class="service-sb__title2">
         ０２<br>教育機関向け業務効率化支援ツール<br>「Stageee」
       </h2>
       <p class="service-sb__content2">
         Stageee(ステージー)はコーチングに特化した業務効率化支援ツールです。<br>
         Web会議、面談予約、チャット、学習計画作成、学習状況の把握、<br class="br-pc">教材管理、指導報告書作成といったコーチングにおいて必要な機能が<br class="br-pc">1つにまとまった業務効率化を支えるSaaS。
       </p>
       <a class="service-sb__trans2" href="<?php echo esc_url(home_url('/service')); ?>/">詳しくはこちら</a>
     </div>
     <div>
       <img class="service2-img" src="<?php echo get_template_directory_uri(); ?>/img/素材１.svg" alt="">
     </div>
   </div>
 </div>
 <div class="news">
   <h2 class="news-ttl">News</h2>
   <div class="news-sb">
     <p class="news-sb__contents">
       Estra 新代々木オフィス昨年12月に移転しました
     </p>
     <a class="news-sb__trans" href="<?php echo esc_url(home_url('/news')); ?>/">一覧ページはこちら　＞</a>
   </div>
 </div>

 <div class="recruit">
   <div class="recruit-ttl">
     <a href="<?php echo esc_url(home_url('/recruit')); ?>/"> Recruit<br>– 採用情報 –</a>
   </div>
   <p class="recruit-content">
     全員がリスクを恐れずにチャレンジし、<br>社員一人一人が活躍できる環境をみんなで作り上げる
   </p>
 </div>
 </body>
 <?php get_footer(); ?>