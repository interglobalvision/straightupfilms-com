<?php get_header(); ?>
  <!-- main content -->
  <section id="films-carousel">
    <div id="carousel">
      <div class="slides-container">
      <?php
      $featured = query_posts('post_type=branded&posts_per_page=-1&order=ASC&orderby=menu_order');
      $i = 0;
      foreach( $featured as $post ) : setup_postdata($post);
      $meta = get_post_meta($post->ID);
      ?>

      <div
      <?php
        post_class('item');
        if (!empty($meta['_cmb_trailer'])) {echo 'data-vimeo="' . $meta['_cmb_trailer'][0] . '" ';};
        echo 'data-title="' . get_the_title() . '" ';
        if (!empty($meta['_cmb_title'])) {echo 'data-title="' . $meta['_cmb_title'][0] . '" ';};
        if (!empty($meta['_cmb_director'])) {echo 'data-director="' . $meta['_cmb_director'][0] . '" ';};
      ?>
        id="carousel-<?php the_ID(); ?>"
        style="background-image: url('<?php echo $meta['_cmb_carousel_image'][0]?>')">
          <div class="holder">
            <div class="held">

              <div class="carousel-title">
                <a href class="noopacity js-branded-overlay-trigger"><?php the_title(); ?></a>
              </div>

            </div>
          </div>
      </div>

    <?php
      $i++;
      endforeach;
      wp_reset_postdata();
    ?>
      </div>

      <nav class="slides-navigation">
        <a id="carousel-prev" class="carousel-nav pointer prev"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-left.svg"></a>
        <a id="carousel-next" class="carousel-nav pointer next"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right.svg"></a>
      </nav>

    </div>
  </section>

  <section id="main-content" class="grid-container cf">

    <div id="branded-copy" class="align-center executive size-mid">

    <?php
      $brandedCopy = get_page_by_title('Branded');
      echo $brandedCopy->post_content;
    ?>

    </div>

  <!-- end main-content -->

  </section>

  <div id="branded-modal">

    <div id="branded-modal-nav">
      <div class="container">
        <nav class="cf">
        	<div class="half">
            <a href="<?php echo site_url(); ?>">SU,F.</a>
        	</div>
        	<div class="half align-right">
            <a href id="branded-modal-close">&times;</a>
        	</div>
        </nav>
      </div>
    </div>

    <a id="branded-modal-nav-prev" class="pointer prev"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-left.svg"></a>
    <a id="branded-modal-nav-next" class="pointer next"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right.svg"></a>

    <div id="branded-modal-inner">
      <div class="holder">
        <div class="held">
          <div class="container">
            <div id="branded-modal-video-wrapper"></div>
            <h3 id="branded-modal-title" class="align-center t1"></h3>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>