<?php get_header(); ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
    
    	<div id="column_w530">
        	
        	<?php
        	if( have_posts() ){
        	    
        	?>
        	
        	<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->
			
			
        	<?php  
        	  while( have_posts() ){
        	    
        	    the_post();
        	    ?>
        	    
        	    <div class="header_02"><?php the_title();?></div>
        	    <span><?php the_date(); ?></span>
        	    
        	    <?php the_content(); ?>
        	    
        	  <?php
        	  }
        	  
        	}
        	?>
        	
        	<div class="cleaner"></div>
        </div>
        
        <?php get_sidebar(); ?>
    
    	<div class="cleaner"></div>
    </div> <!-- end of content wrapper -->
</div> <!-- end of content wrapper -->

<?php get_footer(); ?>