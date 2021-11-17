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
     <?php echo get_the_date('Y-m-d'); ?>
   </div>
   <div class="news-article__title">
     <?php the_title(); ?>
     Estra 新代々木オフィス昨年12月に移転しました
   </div>
 </div>

 <svg class="company-line2" xmlns="http://www.w3.org/2000/svg" width="1322" height="1" viewBox="0 0 1322 1">
   <line id="線_14" data-name="線 14" x2="1322" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
 </svg>
 <div class="news-article__content">
   こんにちは！株式会社etsra人事部の山蔭です。<br>
   今estraの募集みてどうしようかな、どんな会社なのかな？と思っている方！<br>
   弊社で働くイメージを持って頂くためにも、オフィスをご紹介します！<br>
   代々木にある弊社オフィスは昨年12月に移転したばかりでとても綺麗です！<br>私も気に入ってるので、良かったら見てみてください！<br>

   【エントランス】到着した方は、こちらにて受付をお願いします！<br>
   【受付】では、受付します！<br>
   【会議室】ここで経営会議、部署会議などみんなで集まり会議の場として使用しています！<br>
   【メインルーム】弊社ではフリーアドレススタイルなので、どこ座ってもOKです！<br>
   【休憩スペース】みんなでよく息抜きがてらおしゃべりします！<br>
   【集中ルーム】ここはオンライン面談や集中したい時にみんな使用してます！<br>
   【会議スペース】メインルームでみんなで会議もしちゃう時もあります！<br>

   以上、オフィス紹介でした！estraで働くイメージはつきましたでしょうか？<br>気になった方は是非ご連絡くださいね！<br>
 </div>

 <svg class="company-line2" xmlns="http://www.w3.org/2000/svg" width="1322" height="1" viewBox="0 0 1322 1">
   <line id="線_14" data-name="線 14" x2="1322" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
 </svg>

 <div class="news-botton">
   <nav class="news-botton__nav">
     <ul class="botton-nav__ul">
       <li class="botton-nav__list">
         <a href="/news.html"><img class="news-botton__img" src="./img/prev.svg" alt=""></a>
         <a href="リンク先"></a>
       </li>

       <li class="botton-nav__list">
         <p class="news-botton__name">戻る</p>
       </li>

       <li class="botton-nav__list">
         <a href="/news.html"><img class="news-botton__img2" src="./img/Home.svg" alt=""></a>
       </li>

       <li class="botton-nav__list">
         <p class="news-botton__name2">ホーム</p>
       </li>

       <li class="botton-nav__list">
         <a href="/news.html"><img class="news-botton__img3" src="./img/Nest.svg" alt=""></a>
       </li>

       <li class="botton-nav__list">
         <p class="news-botton__name3">進む</p>
       </li>

     </ul>
   </nav>
   　
 </div>
 </body>
 <?php get_footer(); ?>