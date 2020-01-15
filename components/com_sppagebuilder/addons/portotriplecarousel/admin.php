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
		'addon_name'=>'sp_portotriplecarousel',
		'category'=>'General',
		'title'=>'Porto Triple carousel',
		'desc'=>'',
		'attr'=>array(
			'general' => array(
				'admin_label'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),

				'title'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
					'std'=>  ''
				),
					
			'loop'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_LOOP'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_LOOP_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			
			'mouseDrag'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_MOUSEDRAG'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_MOUSEDRAG_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			'autoplay'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AUTOPLAY'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AUTOPLAY_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			'autoplay_interval'=>array(
				'type'=>'text', 
				'title'=>'Autoplay interval',
				'desc'=>'',
				'placeholder'=>'5000',
				'std'=>5000
				),		
			'nav'=>array(
				'type'=>'select', 
				'title'=> 'Show navigation',
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_ARROWS_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			
			'dots'=>array(
				'type'=>'select', 
				'title'=> 'Show pagination',
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_PAGINATION_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				), 
 
 
				'count'=>array(
					'type'=>'select',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENTS_COUNT'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENTS_COUNT_DESC'),
					'values'=>array(
						'1'=>1,
						'2'=>2,
						'3'=>3,
						'4'=>4,
						'5'=>5,
						'6'=>6,
					),
					'std'=>'6',
				),
 

				'class'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
					'std'=>''
				),

				// Repeatable Items
				'sp_portotriplecarousel_header'=>array(
					'title'=>'Header',
					'attr'=>array(
						'title'=>array(
							'type'=>'text',
							'title'=>'Title',
							'desc'=>'',
							'std'=>''
						),

						'image'=>array(
							'type'=>'media',
							'title'=>'Image',
							'desc'=>'',
							'format'=>'image'
						),
						'url'=>array(
							'type'=>'text',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL_DESC'),
							'std'=>'',
							'placeholder'=>'http://',
						),
					),
					),
				'sp_portotriplecarousel_body'=>array(
					'title'=>'Body',
					'attr'=>array(
						'title'=>array(
							'type'=>'text',
							'title'=>'Title',
							'desc'=>'',
							'std'=>''
						),

						'image'=>array(
							'type'=>'media',
							'title'=>'Image',
							'desc'=>'',
							'format'=>'image'
						),
						'url'=>array(
							'type'=>'text',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL_DESC'),
							'std'=>'',
							'placeholder'=>'http://',
						),
					),
					),
					'sp_portotriplecarousel_footer'=>array(
					'title'=>'footer',
					'attr'=>array(
						'title'=>array(
							'type'=>'text',
							'title'=>'Title',
							'desc'=>'',
							'std'=>''
						),

						'image'=>array(
							'type'=>'media',
							'title'=>'Image',
							'desc'=>'',
							'format'=>'image'
						),
						'url'=>array(
							'type'=>'text',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL_DESC'),
							'std'=>'',
							'placeholder'=>'http://',
						),
					),
				),
			),
		),
	)
);
