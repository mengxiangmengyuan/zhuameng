<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');


AddonParser::addAddon('sp_portoteamadvanced','sp_portoteamadvanced_addon');
AddonParser::addAddon('sp_portoteamadvanced_item','sp_portoteamadvanced_item_addon');
 
 
 
function sp_portoteamadvanced_addon($atts, $content){
	
	global $sppbpTeamParam;	
	global $sppbTeamArray;
	$app = JFactory::getApplication();
	 
	$doc = JFactory::getDocument(); 
	
	$media_path =  JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portoteamadvanced/media/';
	
	$app = JFactory::getApplication();
	$doc->addStylesheet($media_path.'assets/style.css');
	$doc->addStylesheet($media_path.'assets/owl.carousel.min.css');
	$doc->addStylesheet( $media_path.'assets/owl.theme.default.min.css');
	$doc->addScript( $media_path.'owl.carousel.min.js');
	$doc->addStylesheet( $media_path.'magnific-popup/magnific-popup.min.css');
	$doc->addScript( $media_path.'magnific-popup/jquery.magnific-popup.min.js');
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
		"style" => '',
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

	$output .='<div class="center">'; 
	
	$output .='<div class="center">';
	
	if($title): 
		$output .='<h2 class="text-uppercase text-color-dark font-weight-bold m-none">'.$title.'</h2>';
	endif;
	
	if($description):
	$output .='<p class="text-md text-color-dark mb-xlg">'.$description.'</p>';
	endif;
	
	
	$id = '';
	//if($style == 'style1'){
	$id = 'portoteamadvancedstyle1-'.$dynamicid;
	if($style !='style3'){
	$output .='<div id="'.$id.'" class="owl-carousel owl-theme '.$class.'">';
	}elseif($style =='style3'){
		$output .='<div id="'.$id.'" class="row '.$class.'">';
	}
	foreach ($sppbTeamArray as $key=>$team) {
		
		if($style =='style3'){
			$output .='<div class="col-md-3 col-sm-6 ">
						<a href="#team-content-'.$key.'" class="popup-with-zoom-anim text-decoration-none">';
		}
			$output .=$team['team_sdetail'];
		
		if($style =='style3'){
			$output .='<div id="team-content-'.$key.'" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">';
			$output .= $team['team_ldetail'];
		}
	} 
	$output .='</div>'; 		
	$output .='</div>';
	$output .='</div>'; 
	 
 	if($style !='style3'){
	$output .='<script type="text/javascript">  
		var owlpt = jQuery("#'.$id.'");
		owlpt.owlCarousel({				 	 
		 
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
			},
			600:{
				items:1,			 
			},
			700:{
				items:2,
			 
			},
			1000:{
				items:'.$items.'			 
			}
    } 
			
		});  </script>';
		
	}
		if($style =='style3'){
		$output .='<script type="text/javascript">  
		
		jQuery(".popup-with-zoom-anim").magnificPopup({
		
	    type: "inline",

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: "auto",

		closeBtnInside: true,
		preloader: false,
 
		midClick: true,
		removalDelay: 300,
		mainClass: "my-mfp-zoom-in"
   
			});	
			
				</script>';
			
}
			 

	return $output;

}


function sp_portoteamadvanced_item_addon( $atts ){
	global $sppbpTeamParam;	
	global $sppbTeamArray;
	
	extract(spAddonAtts(array(
		"name" => '',
		"designation" => '',
		"avatar" => '',		 
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
			$social_icons  	.= '<ul class="social-icons">';
		

			if($facebook) 		$social_icons .= '<li class="social-icons-facebook"><a target="_blank" href="' . $facebook . '"><i class="fa fa-facebook"></i></a></li>';
			if($twitter) 		$social_icons .= '<li class="social-icons-twitter"><a target="_blank" href="' . $twitter . '"><i class="fa fa-twitter"></i></a></li>';
			if($google_plus) 	$social_icons .= '<li class="social-icons-google_plus"><a target="_blank" href="' . $google_plus . '"><i class="fa fa-google-plus"></i></a></li>';
			if($youtube) 		$social_icons .= '<li class="social-icons-youtube"><a target="_blank" href="' . $youtube . '"><i class="fa fa-youtube"></i></a></li>';
			if($linkedin) 		$social_icons .= '<li class="social-icons-linkedin"><a target="_blank" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a></li>';
			if($pinterest) 		$social_icons .= '<li class="social-icons-pinteres"><a target="_blank" href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a></li>';
			if($flickr) 		$social_icons .= '<li class="social-icons-flicker"><a target="_blank" href="' . $flickr . '"><i class="fa fa-flickr"></i></a></li>';
			if($dribbble) 		$social_icons .= '<li class="social-icons-dribble"><a target="_blank" href="' . $dribbble . '"><i class="fa fa-dribbble"></i></a></li>';
			if($behance) 		$social_icons .= '<li class="social-icons-behance"><a target="_blank" href="' . $behance . '"><i class="fa fa-behance"></i></a></li>';
			if($instagram) 		$social_icons .= '<li class="social-icons-instagram"><a target="_blank" href="' . $instagram . '"><i class="fa fa-instagram"></i></a></li>';

		 
			$social_icons 	.= '</ul>';
		}
	} 
	 
	 
	
	$div_id = str_replace(' ', '_', $name);
	if($style === 'style1'){	
		// style 1 for photography
			 
		$team_sdetail ='<div><span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers"><span class="thumb-info-wrapper">';
		$team_sdetail .='<a href="#">';								
		if($avatar):
		$team_sdetail .='<img src="'.$avatar.'" class="img-responsive" alt=""/>';
		endif;
											 
		$team_sdetail .='<span class="thumb-info-action font-color-light">';
		$team_sdetail .='<span class="thumb-info-title">'.$name;
		$team_sdetail .='<span class="thumb-info-subtitle">'.$designation;
		$team_sdetail .='</span>';
		$team_sdetail .='</span>';
		$team_sdetail .='</span>';
		$team_sdetail .='</a>';
		$team_sdetail .= $social_icons;
		$team_sdetail .='</span></span></div>';
	
	}elseif($style=='style2'){ 
		 	// style 2 for consulting
		$team_sdetail ='<div><div class="team-item"><a href="#" class="text-decoration-none"><span class="image-wrapper">';
		 if($avatar):
		$team_sdetail .='<img src="'.$avatar.'" class="img-responsive" alt=""/>';
		endif;
		$team_sdetail .='</span></a>';
		$team_sdetail .='<div class="team-infos">';
		$team_sdetail .='<div class="share">';
		$team_sdetail .='<i class="fa fa-share-alt"></i>';
		$team_sdetail .='<div class="share-icons background-color-light">';
		if($facebook) 		$team_sdetail .= ' <a target="_blank" href="' . $facebook . '"><i class="fa fa-facebook"></i></a>';
			if($twitter) 		$team_sdetail .= ' <a class="text-decoration-none"  target="_blank" href="' . $twitter . '"><i class="fa fa-twitter"></i></a>';
			if($google_plus) 	$team_sdetail .= ' <a class="text-decoration-none"  target="_blank" href="' . $google_plus . '"><i class="fa fa-google-plus"></i></a>';
			if($youtube) 		$team_sdetail .= ' <a class="text-decoration-none"  target="_blank" href="' . $youtube . '"><i class="fa fa-youtube"></i></a>';
			if($linkedin) 		$team_sdetail .= ' <a  class="text-decoration-none"  target="_blank" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>';
			if($pinterest) 		$team_sdetail .= ' <a  class="text-decoration-none"  target="_blank" href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a>';
			if($flickr) 		$team_sdetail .= ' <a class="text-decoration-none"  target="_blank" href="' . $flickr . '"><i class="fa fa-flickr"></i></a>';
			if($dribbble) 		$team_sdetail .= ' <a class="text-decoration-none"  target="_blank" href="' . $dribbble . '"><i class="fa fa-dribbble"></i></a>';
			if($behance) 		$team_sdetail .= ' <a class="text-decoration-none"  target="_blank" href="' . $behance . '"><i class="fa fa-behance"></i></a>';
			if($instagram) 		$team_sdetail .= ' <a class="text-decoration-none"  target="_blank" href="' . $instagram . '"><i class="fa fa-instagram"></i></a>';		
		 
		 $team_sdetail .='</div>';
	 
		$team_sdetail .='</div>';
		$team_sdetail .='<a href="#" class="text-decoration-none">';
		$team_sdetail .='<span class="team-member-name text-color-dark font-weight-semibold text-md">'.$name.'</span>';
		$team_sdetail .='<span class="team-member-desc font-weight-light">'.$designation.'</span>';
		$team_sdetail .='</a>';
		$team_sdetail .='</div>';
		$team_sdetail .='</div>';
		$team_sdetail .='</div>';		
	}elseif($style=='style3'){
		 	// style 3 for finance
		 
		$team_sdetail .='<span class="thumb-info custom-thumb-info-1 thumb-info-no-borders"> <span class="thumb-info-wrapper p-none">';
		 if($avatar):
		$team_sdetail .='<img src="'.$avatar.'" class="img-responsive" alt=""/>';
		endif;
									
		$team_sdetail .='</span>
									<span class="thumb-info-caption background-color-light">
										<span class="thumb-info-caption-text">
											<span class="thumb-info-caption-title text-uppercase text-color-dark font-weight-bold">'.$name.'</span>
											<p>'.$designation.'</p>
											<span class="custom-thumb-info-caption-plus background-color-primary text-color-light">+</span>
										</span>
									</span>
								</span>
							</a>'; 
							
	$team_ldetail .='<div class="row"><div class="col-md-4 col-sm-4">';
	if($avatar):
	$team_ldetail .='<img src="'.$avatar.'" class="img-responsive mb-lg" alt=""/>';
	endif;
	$team_ldetail .='<ul class="social-icons custom-social-icons center">';
		if($facebook) 		$team_ldetail .= '<li class="social-icons-facebook"><a target="_blank" href="' . $facebook . '"><i class="fa fa-facebook"></i></a></li>';
			if($twitter) 		$team_ldetail .= '<li class="social-icons-twitter"><a target="_blank" href="' . $twitter . '"><i class="fa fa-twitter"></i></a></li>';
			if($google_plus) 	$team_ldetail .= '<li class="social-icons-google_plus"><a target="_blank" href="' . $google_plus . '"><i class="fa fa-google-plus"></i></a></li>';
			if($youtube) 		$team_ldetail .= '<li class="social-icons-youtube"><a target="_blank" href="' . $youtube . '"><i class="fa fa-youtube"></i></a></li>';
			if($linkedin) 		$team_ldetail .= '<li class="social-icons-linkedin"><a target="_blank" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a></li>';
			if($pinterest) 		$team_ldetail .= '<li class="social-icons-pinteres"><a target="_blank" href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a></li>';
			if($flickr) 		$team_ldetail .= '<li class="social-icons-flicker"><a target="_blank" href="' . $flickr . '"><i class="fa fa-flickr"></i></a></li>';
			if($dribbble) 		$team_ldetail .= '<li class="social-icons-dribble"><a target="_blank" href="' . $dribbble . '"><i class="fa fa-dribbble"></i></a></li>';
			if($behance) 		$team_ldetail .= '<li class="social-icons-behance"><a target="_blank" href="' . $behance . '"><i class="fa fa-behance"></i></a></li>';
			if($instagram) 		$team_ldetail .= '<li class="social-icons-instagram"><a target="_blank" href="' . $instagram . '"><i class="fa fa-instagram"></i></a></li>';
	$team_ldetail .='</ul>';
	$team_ldetail .='</div>';
	$team_ldetail .='<div class="col-md-8 col-sm-8">';
	$team_ldetail .='<h2 class="font-weight-semibold text-color-dark mb-xs">'.$name.'</h2>';
	$team_ldetail .='<p class="custom-font-style-1 font-weight-semibold">'.$designation.'</p>';
	$team_ldetail .='<p class="font-size-sm custom-line-height-1">'.$desc.'</p>';
	$team_ldetail .='</div>';
	$team_ldetail .='</div>';
	$team_ldetail .='</div>';
	$team_ldetail .='</div>'; 
		
		}  
	
	$sppbTeamArray[] = array('team_ldetail'=>$team_ldetail,'team_sdetail' => $team_sdetail);
 
	
	 
}

 
