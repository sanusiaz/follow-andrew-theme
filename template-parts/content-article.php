<div class="container">

    <header class="content-header">
        <div class="meta mb-3">
            <span class="date">Published <?= the_date('D M Y');?></span>
            <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?= comments_number();?></a></span>
        </div>
    </header>
    
    <!-- Featured images -->
    <figure class="blog-banner">
        <a href="#">
            <?php if(has_post_thumbnail()):?>
                <img class="img-fluid w-80 h-80" src="<?= the_post_thumbnail_url();?>" alt="<?= the_title();?>">
            <?php else:?>
                <img class="img-fluid w-80 h-80" src="https://via.placeholder.com/400" alt="Some title">
            <?php endif;?>
        </a>
        <figcaption class="mt-2 text-center image-caption">
            Image Credit: <a href="#" target="_blank">URL Here</a>
        </figcaption>
    </figure>
    <?php the_content();?>
    <?php comments_template();?>
</div>