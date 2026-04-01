/*
Theme Name: Morin Metro Theme
Author: Omorinsola Olumoh
Version: 1.0
Description: A custom single page WordPress theme.
*/

<?php

?php get_header(); ?>

<div class="container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <h1><?php the_title(); ?></h1>

            <p class="post-meta" style="text-align: center, font-size: 14px, color: #purple:">
                By <?php the_author(); ?> | <?php echo get_the_date(); ?>
            </p>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-image" style="padding-bottom:10px, width: 100%, border-radius: 10px;">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>Sorry, this article could not be found.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>
