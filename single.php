<?php
get_header();
?>

<article>

<?php
if (have_posts()) {

  while (have_posts()) {

    the_post();
    get_template_part('template-parts/content', 'article');
  }
}
?>

</article>

<?php
get_footer();
?>