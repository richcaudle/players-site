<div class="container home">
  <div class="row">
    <div class="col-xs-12 carousel">
      <!-- Next production text is provided by widget -->
        <?php if ( is_active_sidebar( 'home-banner' ) ) : ?>
		      <?php dynamic_sidebar( 'home-banner' ); ?>
          <?php else: ?>
        <img src="images/placeholder-banner.jpg" />
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-4 feature aboutus">
      <a class="cta" href="history">
        <span class="title">About Us</span>
        <span class="follow">&gt;</span>
      </a>
    </div>
    <div class="col-xs-4 feature joinus">
      <a class="cta" href="join-us">
        <span class="title">Join Us</span>
        <span class="follow">&gt;</span>
      </a>
    </div>
    <div class="col-xs-4 feature findus">
      <a class="cta" href="contact-us">
        <span class="title">Find Us</span>
        <span class="follow">&gt;</span>
      </a>
    </div>
  </div>
</div>
