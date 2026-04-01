/*
Theme Name: Morin Metro Theme
Author: Omorinsola Olumoh
Version: 1.0
Description: A page customization for the child theme.
*/

<?php get_header(); ?>

<main class="container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article style= "text-align: center, font-size: 14px, font-weight: 800px, margin:10px;">

            <h1><strong><?php the_title(); ?></strong></h1>

            <div class="page-content">
                <?php the_content(); echo get_the_date() ?> 
  
            </div>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No page content found.</p>

<?php endif; ?>

</main>

<?php get_footer(); ?>
