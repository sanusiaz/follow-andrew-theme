
    <?php 
        get_header();
    ?>
   
		<article class="content px-3 py-5 p-md-5">
           
            <div id="posts_contents" class="font-Poppins py-20">
                <?php if(have_posts()): ?>
                    <?php
                        while(have_posts())
                        {
                            the_post();

                            get_template_part( 'template-parts/content', 'archive' );
                        }
                    ?>

                <?php endif;?>
            </div>
	    </article>

         <!-- Pagination links -->
         <?= the_posts_pagination(  );?>
	   
        <?php get_footer()?>