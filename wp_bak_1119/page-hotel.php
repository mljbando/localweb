<?php
/*
Template Name: トップ：紋別の宿
*/
get_header(); ?>
<main id="about">
 <div class="container">

<section id="" class="">
<?php if(have_posts()): while(have_posts()): the_post();?>
<h3><?php the_title(); ?></h3>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</section>

 </div>
</main>
<?php get_footer(); ?>