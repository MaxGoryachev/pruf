<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pruf
 */
?>
<div class="col-12 pages-section">
    <div class="row">
        <h2 class="header-center col-12"><?php the_title(); ?></h2>
        <div class="entry-thumbnail col-lg-4">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('blog-thumbnails');
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/600x400.png" alt="img">
            <?php }; ?>
        </div>
        <div class="entry-meta col-lg-8">
            <?php the_content(); ?>
        </div>
    </div>
</div>

