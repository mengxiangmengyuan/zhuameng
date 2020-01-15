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
AddonParser::addAddon('sp_portoteam','sp_portoteam_addon');
AddonParser::addAddon('sp_portoteam_item','sp_portoteam_item_addon');
 
function sp_portoteam_addon($atts, $content){
	
	global $sppbpTeamParam;	
	global $sppbTeamArray;
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument(); 
	$media_path =  JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portoteam/media/';
	
	$app = JFactory::getApplication();
	$doc->addStylesheet($media_path.'assets/owl.carousel.min.css');
	$doc->addStylesheet( $media_path.'assets/owl.theme.default.min.css');
	$doc->addScript( $media_path.'owl.carousel.min.js');
	$doc->addScript( $media_path.'/script.js');
   extract(spAddonAtts(array(	 
		"title" => '',
		"description" =>'',		
		"items" =>'',
		"loop" =>'',
		"nav" =>'',
		"dots" =>'',
		"autoplay"=>'',
		"autoplay_interval"=>'',
		"arrows"=>'',
		"style" => 'style1',
		"enable_social_links" =>'',
		"social_position" =>'',
		"class"=>'',
		"dynamicid" =>'',
		 	
		), $atts));


	$title = $title ? $title : '';
	$description = $description ? $description : '';
	$autoplay = ($autoplay) ?  'true' : 'false';
	$items = ($items) ? $items : 1;
	$loop = ($loop) ? 'true' : 'false';
	$nav = ($nav) ? 'true' : 'false';
	$dots = ($dots) ? 'true' : 'false';
	$enable_social_links = ($enable_social_links) ? 'true' : 'false';
	
	
	$sppbpTeamParam['class'] = $class;
	 $sppbpTeamParam['social_position'] = $social_position;
	 $sppbpTeamParam['enable_social_links'] = $enable_social_links;  
	 $sppbpTeamParam['style'] = $style;  
	 
	AddonParser::spDoAddon($content);
	 $output =''; 

	$output .='<div class="row">';
	
	if($style =='style1'){
		foreach ($sppbTeamArray as $key=>$team) {
			$output .=$team['team_ldetail'];
		}
	}
	
	$output .='<div class="col-md-12 center">';
	
	if($title): 
		$output .='<h2 class="mb-none mt-xl font-weight-semibold">'.$title.':</h2>';
	endif;
	
	if($description):
	$output .='<p class="lead mb-xlg">'.$description.'</p>';
	endif;
	
	$output .='<div id="portoteam-'.$dynamicid.'" class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs">';
	foreach ($sppbTeamArray as $key=>$team) {
		$output .=$team['team_sdetail'];
	}
	
   
	$output .='</div>'; 	
	
	$output .='</div>';
	$output .='</div>'; 
	 $output .= '</div>';   	
 
	$output .='<script type="text/javascript">  
		var owlpt = jQuery("#portoteam-'.$dynamicid.'");
		owlpt.owlCarousel({				 	 
			margin:30,
			loop:'.$loop.',
			mouseDrag:true,       
			startPosition:0,
			navText: ["",""],
			nav:'.$nav.',
			dots:'.$dots.',
			autoplay:'.$autoplay.',
			responsiveClass:true,
			responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:false
			},
			700:{
				items:2,
				nav:false
			},
			1000:{
				items:'.$items.',
				nav:false,
				loop:false
			}
    }
			
			
			
		}); 	
			 
	</script>';
	return $output;

}


function sp_portoteam_item_addon( $atts ){
	global $sppbpTeamParam;	
	global $sppbTeamArray;
	// print_r($sppbpTeamParam); exit;
	extract(spAddonAtts(array(
		"name" => '',
		"designation" => '',
		"avatar" => '',
		"avatar1" => '',
		"avatar2" => '',
		'desc'   => '',
		"facebook"     => '',
		"twitter"      => '',
		"google_plus"  => '',
		"youtube"      => '',
		"linkedin"     => '',
		"pinterest"    => '',
		"flickr" 	   => '',
		"dribbble"	   => '',
		"behance" 	   => '',
		"instagram"	   =>'',
		"dynamicid" =>'',
		 	
		), $atts));
			
	$social_position =	$sppbpTeamParam['social_position'];
    $enable_social_links = $sppbpTeamParam['enable_social_links'];
    $style = $sppbpTeamParam['style'];   
	
	$team_sdetail ='';
	$team_ldetail ='';	
	$social_icons = '';

	if($enable_social_links){
		if($facebook || $twitter || $google_plus || $youtube || $linkedin || $pinterest || $flickr || $dribbble || $behance || $instagram) {
			$social_icons  	.= '<span class="thumb-info-social-icons mt-sm pb-none">';
		

			if($facebook) 		$social_icons .= '<a target="_blank" href="' . $facebook . '"><i class="fa fa-facebook"></i></a>';
			if($twitter) 		$social_icons .= '<a target="_blank" href="' . $twitter . '"><i class="fa fa-twitter"></i></a>';
			if($google_plus) 	$social_icons .= '<a target="_blank" href="' . $google_plus . '"><i class="fa fa-google-plus"></i></a>';
			if($youtube) 		$social_icons .= '<a target="_blank" href="' . $youtube . '"><i class="fa fa-youtube"></i></a>';
			if($linkedin) 		$social_icons .= '<a target="_blank" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>';
			if($pinterest) 		$social_icons .= '<a target="_blank" href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a>';
			if($flickr) 		$social_icons .= '<a target="_blank" href="' . $flickr . '"><i class="fa fa-flickr"></i></a>';
			if($dribbble) 		$social_icons .= '<a target="_blank" href="' . $dribbble . '"><i class="fa fa-dribbble"></i></a>';
			if($behance) 		$social_icons .= '<a target="_blank" href="' . $behance . '"><i class="fa fa-behance"></i></a>';
			if($instagram) 		$social_icons .= '<a target="_blank" href="' . $instagram . '"><i class="fa fa-instagram"></i></a>';

		 
			$social_icons 	.= '</span>';
		}
	} 
	 
	 
	
	$div_id = str_replace(' ', '_', $name);
	if($style == 'style1'){
			
	 $team_sdetail .='<div class="pr-sm pl-sm">';	 
	 
	$team_sdetail .='<a href="#'.$div_id.'" data-ajax-on-page class="text-decoration-none" onClick="getMyTeam(this);">';
	$team_sdetail .='<span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">';
	$team_sdetail .='<span class="thumb-info-wrapper m-none">';
	
	if($avatar):
	$team_sdetail .='<img src="'.$avatar.'" class="img-responsive" alt=""/>';
	endif;
	
	$team_sdetail .='</span>';
	$team_sdetail .='<span class="thumb-info-caption p-md pt-xlg pb-xlg">';
	$team_sdetail .='<span class="custom-thumb-info-title">';
	$team_sdetail .='<span class="custom-thumb-info-type font-weight-light text-md">'.$designation.'</span>';
	$team_sdetail .='<span class="custom-thumb-info-inner font-weight-semibold text-lg">'.$name.'</span>';
	$team_sdetail .='<i class="icon-arrow-right-circle icons font-weight-semibold text-lg "></i>';
	$team_sdetail .='</span>';
	$team_sdetail .='</span>';
	$team_sdetail .='</span>';
	$team_sdetail .='</a>';
	$team_sdetail .=$social_icons;
	$team_sdetail .='</div>';
	
	
		

	$team_ldetail .='<div class="ajax-box mb-lg"  id="'.$div_id.'" style="display:none;">';
	$team_ldetail .='<div class="bounce-loader">';
	$team_ldetail .='<div class="bounce1"></div>';
	$team_ldetail .='<div class="bounce2"></div>';
	$team_ldetail .='<div class="bounce3"></div>';
	$team_ldetail .='</div>';
	
	
	$team_ldetail .='<div id="porfolioAjaxBoxContentMedical" class="ajax-box-content">';
	$team_ldetail .='<hr class="solid">';
	$team_ldetail .='<div class="mt-xlg mb-xl pt-xs">';
	$team_ldetail .='<div class="col-md-4">';	
	$team_ldetail .='<div  class="owl-carousel owl-theme"  id="'.$div_id.'_carousel">';	
	$team_ldetail .='<div>';	
	$team_ldetail .='<span class="img-thumbnail no-borders">';
	$team_ldetail .='<img src="'.$avatar1.'" class="img-responsive" alt=""/>';
	$team_ldetail .='</span>';
	$team_ldetail .='</div>';
	
	$team_ldetail .='<div>';
	$team_ldetail .='<span class="img-thumbnail no-borders">';
	$team_ldetail .='<img src="'.$avatar2.'" class="img-responsive" alt=""/>';
	$team_ldetail .='</span>';
	$team_ldetail .='</div>';	
	$team_ldetail .='</div>'; /* Owl ends */	
	$team_ldetail .='</div>'; /* Col-md-4 */															
 
	$team_ldetail .='<div class="col-md-8">';
	
	$team_ldetail .='<h3 class="font-weight-bold mt-sm">'.$name.'</h3>';
	$team_ldetail .='<h5 class="mt-sm mb-xs">'.$designation.'</h5>'; 

   if($social_position=='before'): $team_ldetail .= $social_icons; endif;

	if($desc): $team_ldetail  .= '<div class="sppb-person-introtext">' . $desc . '</div>'; endif;

    if($social_position=='after'): $team_ldetail .= $social_icons; endif; 

	$team_ldetail .='</div>';
    $team_ldetail .='</div>';
	$team_ldetail .='<hr class="solid">';	
	$team_ldetail .='</div>';
	 
	
	$team_ldetail .='</div>';
	
	
	$team_ldetail .='<script type="text/javascript">  
		
		jQuery("#'.$div_id.'_carousel").owlCarousel({				 	 
			items:1,			
			loop:true,			
			dots:true,
			autoplay:true,
			navText: ["",""],
			responsiveClass:true,
			 responsive:{
			0:{
				items:1,				 
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				 
				loop:false
			}
    }
			
		}); 	
			 
	</script>';
	
	}elseif($style =='style2'){
		
		
		$team_sdetail .='<div class="center mb-lg">';
		$team_sdetail .='<a href="#">';
		$team_sdetail .='<img src="'.$avatar.'" class="img-responsive" alt=""/>';
		$team_sdetail .='</a>';
		$team_sdetail .='<h4 class="mt-md mb-none">'.$name.'</h4>';
		$team_sdetail .='<p class="mb-none">'.$designation.'</p>';
		$team_sdetail .=$social_icons;
		$team_sdetail .='</p>';
		$team_sdetail .='</div>';		
	}



 
	$sppbTeamArray[] = array('team_ldetail'=>$team_ldetail,'team_sdetail' => $team_sdetail);
	 
	
}

 
