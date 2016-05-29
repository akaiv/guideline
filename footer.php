</div>

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container">
    <nav class="nav-footer">
      <ul class="list-inline">
        <li><a href="<?php echo home_url( 'about' ); ?>">소개</a></li>
        <li><a href="<?php echo home_url( 'feedback' ); ?>">피드백</a></li>
      </ul>
    </nav>
    <div class="site-info clearfix">
      <p class="pull-left">
        <a href="http://akaiv.com/" target="_blank">아카이브</a>
        &copy; <?php echo date( 'Y', current_time( 'timestamp' ) ); ?>
      </p>
      <p class="pull-right">
        <a class="link-admin" href="<?php echo esc_url(get_admin_url()); ?>" target="_blank"><i class="fa fa-fw fa-terminal"></i></a>
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
