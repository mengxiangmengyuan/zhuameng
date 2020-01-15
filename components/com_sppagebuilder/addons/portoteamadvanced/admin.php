<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content',
		'addon_name'=>'sp_portoteamadvanced',
		'title'=>JText::_('Porto Team Advanced' ),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FSS_DESC'),
		'attr'=>array(
			'admin_label'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				), 
				'title'=>array(
				'type'=>'text', 
				'title'=> 'Title',
				 'desc'=> 'Enter the title',
				'std'=>'Our Team',
				), 			     
			 
			 'description'=>array(
				'type'=>'textarea', 
				'title'=> 'Description',
				'desc'=> 'Enter the description',
				'std'=>'',
				), 
				
				'items'=>array(
				'type'=>'number', 
				'title'=>'Enter number of item',
				'desc'=>'',
				'std'=> 1
				),
				
			'loop'=>array(
				'type'=>'select', 
				'title'=> 'Enable Loop',
				'desc'=> '',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			
			'mouseDrag'=>array(
				'type'=>'select', 
				'title'=>'Enable Mouse Drag',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			'autoplay'=>array(
				'type'=>'select', 
				'title'=>'Autoplay',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			'autoplay_interval'=>array(
				'type'=>'text', 
				'title'=>'Set autoplay interval',
				'desc'=>'',
				'placeholder'=>'5000',
				'std'=>5000
				),		
			'nav'=>array(
				'type'=>'select', 
				'title'=>'Show Navigation',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			
			'dots'=>array(
				'type'=>'select', 
				'title'=>'Show Pagination',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			'style'=>array(
				'type'=>'select', 
				'title'=>'Style',
				'desc'=>'',
				'values'=>array(
					'style1'=>'Photography',
					'style2'=>'Consulting',
					'style3'=>'Finance',					 
					),
				'std'=> 'style1'
				),
			'enable_social_links'=>array(
					'type'=>'select',
					'title'=>'Show Social icons' ,
					'desc'=>'',
					'values'=>array(
						1=>JText::_('JYES'),
						0=>JText::_('JNO'),
					),
					'std'=>1,
				),
						
		 
						
		'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_portoteamadvanced_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'name'=>array(
						'type'=>'text', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE_DESC'),
						'std'=>'John Doe',
						),					
					'designation'=>array(
						'type'=>'text', 
						'title'=>'Designation',
						'desc'=>'',
						'std'=>' ',
						),
					'desc'=>array(
						'type'=>'editor', 
						'title'=>'About the team member',
						'desc'=>'',
						'std'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.',
						),
					'avatar'=>array(
						'type'=>'media', 
						'title'=>'Team member image',
						'desc'=>'',
						),
					 
				 'facebook'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_FACEBOOK'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_FACEBOOK_DESC'),
					'placeholder'=>'http://www.facebook.com/joomshaper',
					'std'=>'http://www.facebook.com/joomshaper',
				),

				'twitter'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_TWITTER'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_TWITTER_DESC'),
					'placeholder'=>'http://twitter.com/joomshaper',
					'std'=>'http://twitter.com/joomshaper',
				),

				'google_plus'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_GOOGLE_PLUS'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_GOOGLE_PLUS_DESC'),
					'placeholder'=>'http://plus.google.com/+Joomshapers',
					'std'=>'http://plus.google.com/+Joomshapers',
				),

				'youtube'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_YOUTUBE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_YOUTUBE_DESC'),
				),

				'linkedin'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_LINKEDIN'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_LINKEDIN_DESC'),
				),

				'pinterest'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_PINTEREST'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_PINTEREST_DESC'),
				),

				'flickr'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_FLICKR'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_FLICKR_DESC'),
				),

				'dribbble'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_DRIBBBLE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_DRIBBBLE_DESC'),
				),

				'behance'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_BEHANCE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_BEHANCE_DESC'),
				),

				'instagram'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_INSTAGRAM'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PERSON_INSTAGRAM_DESC'),
				),
				 
								 
					),
				),	
		 
									 
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			)
		)
	);
