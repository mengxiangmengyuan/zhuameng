<?php
/**
 * Porto 1.0 @package SP Page Builder
 * Template Name - Porto
 * @author Joomlabuff http://www.joomlabuff.com
 * @copyright Copyright (c) 2016 joomlabuff
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
// no direct access
defined('_JEXEC') or die;
AddonParser::addAddon('sp_testimonialporto','sp_testimonialporto_addon');
AddonParser::addAddon('sp_testimonialporto_item','sp_testimonialporto_item_addon'); 
function sp_testimonialporto_addon($atts, $content){ 
	global $sppbtestimonialportoParam;	 
	$doc = JFactory::getDocument();  
	$app = JFactory::getApplication();
	$doc->addStylesheet( JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/testimonialporto/media/assets/owl.carousel.min.css');
	$doc->addStylesheet( JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/testimonialporto/media/assets/owl.theme.default.min.css');
	$doc->addScript( JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/testimonialporto/media/owl.carousel.min.js');
 
	extract(spAddonAtts(array(
		"title" => '',
		"heading_selector" =>'h3',
		"style" => 'style1',
		"items" =>'',
		"margin" =>'30',
		"loop" =>'',
		"nav" =>'',
		"dots" =>'',
		"autoplay"=>'',
		"autoplay_interval"=>'',
		"arrows"=>'',
		"class"=>'',
		"dynamicid" =>'',
		 	
		), $atts));

	$sppbtestimonialportoParam['class'] = $class;
   $sppbtestimonialportoParam['layout_style'] = $style;
	$title = $title ? $title : '';
	$heading_selector = $heading_selector ? $heading_selector : 'h2';	
	$autoplay = ($autoplay) ?  'true' : 'false';
	$items = ($items) ? $items : 1;
	$loop = ($loop) ? 'true' : 'false';
	$nav = ($nav) ? 'true' : 'false';
	$dots = ($dots) ? 'true' : 'false';
	$margin = ($margin) ? $margin : '30';
 	$class  = ($class) ? 'owl-carousel owlc-'.$dynamicid.' owl-theme '. $class :  'owl-carousel owlc-'.$dynamicid.' owl-theme ';
  	$output ='';
	$output .='<div class="test">';
	$output .= ($title) ? '<'.$heading_selector.' class="sppb-addon-title">' . $title . '</'.$heading_selector.'>' : '';	
    $output .='<div  class="'.$class.'">';        
	$output .= AddonParser::spDoAddon($content);
	$output .= '</div>';   	
	$output .= '</div>';
	 
	$output .='<script type="text/javascript">  
		var owltp = jQuery(".owlc-'.$dynamicid.'");
		owltp.owlCarousel({				 	 
			margin:'.$margin.',
			loop:'.$loop.',
			mouseDrag:true,       
			startPosition:0,
			nav:'.$nav.',
			dots:'.$dots.',
			autoplay:'.$autoplay.',
			navText: ["",""],
			responsiveClass:true,
			responsive:{
			0:{
				items:1,
			},
			600:{
				items:1,
			},
			
			1000:{
				items:'.$items.',
				loop:false
			}
    }
		 
		}); 		 
	</script>';
 

	return $output;

}

function sp_testimonialporto_item_addon( $atts  ){
	
	global  $sppbtestimonialportoParam;

	extract(spAddonAtts(array(
		"title" => '',
		"desc" => '',
		"avatar" => '',
		"avatar_position" => 'top',
		"avatar_style" => '',
		'message' => '',
		"url" => '',
		"link_target" => '',
		), $atts));
		
	$class =  $sppbtestimonialportoParam['class'];													
	$layout_style =  $sppbtestimonialportoParam['layout_style'];
	
	$output ='';
	switch($layout_style):
	
	case 'style1':
	
	//**    Style 1  Starts   **/
	 
	$output  .= '<div class="owl-item testimonial testimonial-primary">';		 
	$output .='<blockquote>';
	$output .= $message;
	$output .='</blockquote>';
	$output .='<div class="testimonial-arrow-down"></div><div class="testimonial-author">';
	$output .='<div class="testimonial-author-thumbnail img-thumbnail">';
	if($avatar) $output .= '<img class="sppb-img-responsive sppb-avatar '. $avatar_style .'" src="'. $avatar .'" alt="">';
	$output .='</div>';
	$output .='<p><strong>'.$title.'</strong> <span>   '.$desc.'</span></p>';
	$output .='</div>';  
	$output  .= '</div>';
	
	//** Style 1 ends  **/
	
	break;
	
	
	case 'style2':
	
	//**    Style 2  Starts   **/
	
	$output .='<div class="col-md-13">';
	$output .='<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">';
	$output .='<div class="testimonial-author">';
	if($avatar) $output .= '<img class="sppb-img-responsive sppb-avatar img-circle '. $avatar_style .'" src="'. $avatar .'" alt="">';
	$output .='</div>';
	$output .='<blockquote>';
	$output .= $message;
	$output .='</blockquote>';											
	$output .='<div class="testimonial-author">';
	$output .='<p><strong>'.$title.'</strong> <span>   '.$desc.'</span></p>';
	$output .='</div>';
	$output .='</div>';										
	$output .='</div>';
	
	//**    Style 2  ends   **/
	break;
	
	case 'style3':
	
	//**    Style 3  Starts   **/
	 
	 
	$output .='<div class="col-md-12">';
	$output .='<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">';
	$output .='<blockquote>';
	$output .= $message;
	$output .='</blockquote>';
	$output .='<div class="testimonial-author">';
	$output .='<p><strong>'.$title.'</strong> <span>   '.$desc.'</span></p>';
	$output .='</div>';	
	$output .='</div>';  
	$output  .= '</div>';								
										
	 
	
	//** Style 3 ends  **/
	
	break;
	
	
 
	
	
	case 'style4':
	
	//**    Style 4  Starts   **/
	 
	$output  = '<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none col-md-8 col-md-offset-2 pt-xlg">';		 
	$output .='<div class="testimonial-quote">“</div>';
	$output .='<blockquote>';
	$output .= $message;
	$output .='</blockquote>';
	$output .='<div class="testimonial-author mt-xlg">';
	$output .='<p class="text-uppercase">';
	$output .='<strong>'.$title.'</strong>';
	$output .='</p>';
	$output .='</div>';	
	$output  .= '</div>'; 
								 
	
	//** Style 4 ends  **/
	
	break;
	
	
	
		case 'style5-animate':
	
	//**    Style 5  Starts   **/
	//$output ='<div class="col-md-4">';
	$output .='<div class="testimonial testimonial-style-2 appear-animation" data-appear-animation-delay="300">';
	$output .='<blockquote>';
	$output .= $message;
	$output .='</blockquote>';			
	$output .='<div class="testimonial-arrow-down"></div>';
	$output .='<div class="testimonial-author">';
	if($avatar) $output .= '<img class="sppb-img-responsive sppb-avatar '. $avatar_style .'" src="'. $avatar .'" alt=""/>';
	$output .='<p><strong>'.$title.'</strong> <span>   '.$desc.'</span></p>';
	$output .='</div>';
	$output .='</div>'; 
	//$output .='</div>'; 
	
	//** Style5 ends  **/
	
	break;
	
	
	case 'style6':
	
	//**    Style 6  Starts   **/
	 
 
	$output  .= '<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">';		 
	$output .='<blockquote>';
	$output .= $message;
	$output .='</blockquote>';
	$output .='<div class="testimonial-author">';
	$output .='<div class="testimonial-author-thumbnail">';
	if($avatar) $output .= '<img class="img-responsive '. $avatar_style .'" src="'. $avatar .'" alt="">';
	$output .='</div>';
	$output .='<p><strong>'.$title.'</strong> <span>   '.$desc.'</span></p>';
	$output .='</div>'; 
	$output  .= '</div>';
	//$output .='<div class="custom-inner-border"></div>'; 
	
	//** Style 6 ends  **/
	
	break;
	
	endswitch;
	return $output;

}
