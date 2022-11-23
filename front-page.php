
    <?php 
        get_header();
    ?>
   
		<article class="content px-3 py-5 p-md-5">

            <?php if(have_posts()): ?>
	            <?php while(have_posts()): ?>

                    <!-- Posts -->
                    <?php the_post(); ?>

                    <!-- Contents -->
                    <?php the_content(); ?>

                    <!-- The Tags -->
                    <?php the_tags(); ?>
                <?php endwhile; ?>

            <?php endif;?>
	    </article>
	   
        <?php get_footer()?>