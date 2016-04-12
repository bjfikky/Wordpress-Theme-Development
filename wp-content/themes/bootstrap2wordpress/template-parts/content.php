<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		
			<div class="post-details">
				<i class="fa fa-user"></i> <?php the_author();  ?>
				
				<i class="fa fa-clock-o"></i> <time> <?php the_date(); ?> </time>
				
				<i class="fa fa-folder-open"></i> <?php the_category(',');   ?>
				
				<i class="fa fa-tag"></i> <?php the_tags(' ',' ,', ' '); ?>			
				<div class="post-comment-badge">
				  <a href="<?php comments_link();  ?>"><i class="fa fa-comment"></i> <?php comments_number(0, 1, '%')   ?></a>
				</div><!-- post-comment-badge -->
			    
			    <?php edit_post_link(' <strong>EDIT</strong>', '<p><i class="fa fa-pencil"></i>', '</p>', '')  ?>	   <!--  ADDED TO LET ADMIN EDIT FROM WEBSITE IF LOGGED IN -->
			                  
			</div><!-- post-details -->

		
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
 	<?php if( has_post_thumbnail() ) {   ?>  <!-- CHECKS FOR FEATURED IMAGE -->
	
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div> <!-- post-image -->
	
	<?php } ?>
		
<!-- USE THIS LINE INSTEAD OF WHAT IS IN THE LECTURE (a change in new wordpress version). IT'S EASIER TOO! -->
	<?php
		if ( is_single() ) {
			echo '<div class="post-body">';
			the_content();
		} else {
			echo '<div class="post-excerpt">';
			the_excerpt();
		} ?>
		</div><!-- post-excerpt|body -->
	
</article><!-- #post-## -->




