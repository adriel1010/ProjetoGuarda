<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
                    
                 
                       
                    <style>
                        .arrumar{
                            font-size: 25px;
                            color: #000080;
                            text-decoration: none;
                            margin: 10px 0 0 0;
                        } 
                        #imagem{
                            float:left;
                            width: 150px; 
                            height: 180px;
                          
                           
                            
                        }
                        #mensagens{
                          float:left;
                          margin-left: 20px;  
                        }
                        #mensagem1{
                            font-size: 20px;
                            margin-left: 25px; 
                            margin-top: 20px;
                        }
                        #mensagem2{
                            font-size:40px; 
                            color:#000080;
                            margin-top: -30px;
                        }
                        #contatos{
                            
                            margin-top: 30px;
                            float:right; 
                            max-width:100%; 
                            height: 100px; 
                        }
                        #divTelEmail{
                           
                            float: left;
                        }
                        #divFaceYout{
                            float: right;
                            margin-left: 50px;
                        }
                        #imgimg{
                            width:100%;
                            height: 100%;
                            
                        }
                        
                    </style>
                    
                  <!--  <div id="imagem"> -->
                        <div id="imagem">
                        <img id="imgimg" src="<?php header_image(); ?>">
                        </div>
                    
                    <div id="mensagens">
                        <h2 id="mensagem1" class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                       
                        <h1 id="mensagem2" class="site-description"><?php bloginfo( 'description' ); ?></h1>
                        
                     </div>
                  
                      
                    <div id="contatos">
                        
                        <div id="divTelEmail"> 
                            <a class="arrumar"  href="#">(44)3423-1601</a> <br/>
                     
                             <a class="arrumar" href="#">eloiee@ibest.com.br</a> <br/>
                       
                        </div>
                        
                        <div id="divFaceYout">
                        <a class="arrumar" href="http://facebook.com"> Facebook</a> <br/>
                      
                        <a class="arrumar" href="http://youtube.com"> Youtube</a><br/>
                       </div>
                        
                        
                    </div>
                       
                   
		</hgroup>

          
           
            <nav  id="site-navigation" class="main-navigation" role="navigation">
                    
			<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			
                       
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		                   
                </nav><!-- #site-navigation -->

                
              
		<?php if ( get_header_image() ) : ?>
		
                    <?php endif; ?>
                    
                    
                    
                    
                    
                    
                    
                    
                  
	</header><!-- #masthead -->

	<div id="main" class="wrapper">