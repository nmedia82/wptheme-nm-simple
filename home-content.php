<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
    
    	<div id="column_w530">
        	
        	<?php
        	if( have_posts() ){
        	  
        	  while( have_posts() ){
        	    
        	    the_post();
        	    ?>
        	    
        	    <div class="header_02"><?php the_title();?></div>
        	    <span><?php the_date(); ?></span>
        	    
        	    <?php the_excerpt(); ?>
        	    
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