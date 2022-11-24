
    <?php 
        get_header();
    ?>
   
		<article class="content px-3 py-5 p-md-5">
            <?php if(has_post_thumbnail()):?>
            <!-- Featured Images -->
            <div class="block w-full h-max m-auto place-content-center place-items-center">
                <div class="w-full md:w-[600px] object-cover h-80 lg:w-[900px] bg-[url('<?= the_post_thumbnail_url();?>')] bg-cover bg-no-repeat bg-center bg-gray-700 bg-blend-overlay" style="background-image: url('<?= the_post_thumbnail_url();?>');" >

                <caption class="font-semibold text-lg font-Poppins">
                    <?= the_post_thumbnail_caption();?>
                </caption>
            </div>
            <?php endif;?>

            <div id="posts_contents" class="font-Poppins py-20">
                <?php if(have_posts()): ?>
                    <?php
                        while(have_posts())
                        {
                            the_post();
                            the_content();
                        }
                    ?>

                <?php endif;?>
            </div>
	    </article>
	   
        <?php get_footer()?>