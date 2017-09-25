<?php
/**
* Template Name: Home Template
*/
?>
<!-- Instantiate WordPress Query Object for Projects -->
<?php
 $args = array('post_type' => 'project');
 $projects_query = new WP_Query($args);
?>


<?php 
/**
 * Template Name: Home Template
 */
?>
<section class="home-banner">
    <?php // Always start your WP Loop ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php // can use this for my banner image ?>
        <?php // the featured image attached to all Posts / Pages are rendered using the_post_thumbnail function ?>
        <?php the_post_thumbnail(); ?>
        <?php // the content in the WYSIWYG Editor ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</section>



