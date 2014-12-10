<section class="author-info">
  <h1 class="author-title">작성자 정보</h1>
  <div class="author-avatar pull-left">
    <?php akaiv_retina_image( 'author', 'png', get_the_author_meta( 'display_name' ) ); ?>
  </div><!-- .author-avatar -->
  <p class="author-description">
    <span class="author-name"><?php echo get_the_author(); ?></span>
    <span class="author-website">(<a href="http://simcheolhwan.com" target="_blank">http://simcheolhwan.com</a>)</span>
  </p>
  <p class="author-bio">
    <a href="http://akaiv.com" target="_blank">(주)아카이브</a> 대표. 기록광.
  </p>
  <ul class="author-works list-inline">
    <li><i class="fa fa-bookmark"></i> <a href="http://ref.akaiv.com" target="_blank">디자인 레퍼런스 아카이브</a></li>
    <li><i class="fa fa-bookmark"></i> <a href="http://tech.akaiv.com" target="_blank">기술 지식 아카이브</a></li>
    <li><i class="fa fa-bookmark"></i> <a href="http://startup.akaiv.com" target="_blank">스타트업 필독 글 아카이브</a></li>
  </ul>
</section><!-- .author-info -->
