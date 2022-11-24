<?php
    $total_comments_count = get_comments_number();
?>

<div class="comments-wrapper">


    <div class="comments" id="comments">


        <div class="comments-header text-left">

            <h2 class="comment-reply-title">
                <?php if(have_comments()):?>
                    <?= $total_comments_count;?> Comments
                <?php else:?>
                    Leave A Comment
                <?php endif;?>
            </h2><!-- .comments-title -->

        </div><!-- .comments-header -->

        <div class="comments-inner">
            <?php
                wp_list_comments([
                    'avatar_size'   => 120,
                    'style'         => 'div'
                ]);
            ?>

        </div><!-- .comments-inner -->

    </div><!-- comments -->

    <hr class="" aria-hidden="true">
    <?php if(comments_open()):?>
        <?php
            
            comment_form([
                'class_form' => '',
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h2>'
            ]);    
        ?>
    <?php endif;?>

</div>