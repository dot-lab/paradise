<?php get_header(); ?>
    <div id="main">
      <article>
        <h1>Works</h1>
        <h2>Coloring</h2>
        <?php $args = array(
          'category_name' => 'coloring'
        );
          $query = new WP_Query($args); ?>
        <?php if($query->have_posts()) : ?>
            <div class="coloring">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
              <div class="post">
                <?php $image = get_field('coloring_image'); ?>
                <img src="<?php echo $image['sizes']['thumbnail'];?>" alt="<?php get_field('coloring_title');?>">
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else :?>
          <p>投稿がみつかりません。</p>
        <?php endif;?>
      </article>
    </div>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>