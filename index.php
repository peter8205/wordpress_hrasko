<?php get_header()?>

    <?php /*
        echo '<pre>';
        print_r( $wp_query->request );//   mysql dotaz
        echo '</pre>';
        
        vypise sql dotaz na db
        SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID FROM wp_posts  WHERE 1=1  AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish' OR wp_posts.post_status = 'private')  ORDER BY wp_posts.post_date DESC LIMIT 0, 10
        */
        //
    ?> 

    <?php /*
        echo '<pre>';
        print_r( $wp_query->posts ); //  info o postoch / clankoch 
        echo '</pre>';
    
        vypise vsetky informacie o clanku co su v db 
        Array
(
    [0] => WP_Post Object
        (
            [ID] => 1
            [post_author] => 1
            [post_date] => 2021-05-22 09:58:21
            [post_date_gmt] => 2021-05-22 07:58:21
            [post_content] => 
Ahoj svet!

Vitajte vo WordPress. Toto je váš prvý článok. Upravte ho alebo zmažte a začnite písať.
            [post_title] => Ahoj svet!
            [post_excerpt] => 
            [post_status] => publish
            [comment_status] => open
            [ping_status] => open
            [post_password] => 
            [post_name] => ahoj-svet
            [to_ping] => 
            [pinged] => 
            [post_modified] => 2021-05-23 09:28:01
            [post_modified_gmt] => 2021-05-23 07:28:01
            [post_content_filtered] => 
            [post_parent] => 0
            [guid] => http://localhost/wordpress/?p=1
            [menu_order] => 0
            [post_type] => post
            [post_mime_type] => 
            [comment_count] => 1
            [filter] => raw
        )*/

    ?>


	<?php if(have_posts() ) : ?>
        <?php while( have_posts() ) : the_post() ?>
            
			<article <?php post_class() ?>>
				<h1><?php the_title() ?> </h1>
					<?php echo the_content() ?>
					<?php the_post_thumbnail() ?>
			</article>

        <?php endwhile ?>
    <?php else : ?>

    <?php endif?>




<?php get_footer()?>