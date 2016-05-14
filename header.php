<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width">

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js">
</script>
<![endif]-->
<script>(function(){document.documentElement.className='js'})();</script>

<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="templatemo_header_wrapper">
<!--  Free Web Templates by TemplateMo.com  -->
  <div id="templatemo_header">
    
   	<div id="site_logo"></div>
        
		<div id="templatemo_menu">
      		<div id="templatemo_menu_left"></div>
            <!--<ul>
                  <li><a href="#" class="current">Home</a></li>
                  <li><a href="http://www.templatemo.com/page/1">Templates</a></li>
                  <li><a href="http://www.templatemo.com/page/2">Layouts</a></li>
                  <li><a href="http://www.templatemo.com/page/3">Company</a></li>
                  <li><a href="#" class="last">Contact</a></li>
            </ul>    	-->
            <?php
            wp_nav_menu(array('theme_location'	=> 'top',
						'menu_id'	=> 'top-menu',
						'container'	=> 'nav',
						'container_class' => '',
						'menu_class'	=> 'theme-menu-class')
						);

            ?>
		</div> <!-- end of menu -->
    
    </div>  <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_banner_wrapper">
	<div id="templatemo_banner">
    
    	<div id="templatemo_banner_image">
        	<div id="templatemo_banner_image_wrapper">
            	<img src="<?php echo get_template_directory_uri()?>/images/templatemo_image_01.jpg" alt="image" />
            </div>
        </div>
        
        <div id="templatemo_banner_content">
        	<div class="header_01">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
            <p>Aliquam dignissim elementum est sit amet iaculis. Integer pretium ultricies risus, condimentum molestie odio euismod vitae. </p>
            <div class="button_01"><a href="#">Read more</a></div>
        </div>	
    
    	<div class="cleaner"></div>
    </div> <!-- end of banner -->
</div> <!-- end of banner wrapper -->