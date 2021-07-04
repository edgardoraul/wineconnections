<?php get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
// echo "Nada por aquí";
endif;
get_footer();

?>