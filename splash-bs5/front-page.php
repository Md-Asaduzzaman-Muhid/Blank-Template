<?php get_header(); ?>


<section class="welcome-content py-30 py-md-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="section-title wow fadeInUp"><?php the_title();?></h1>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
