<?php
/**
 * Porto 1.0 @package SP Page Builder
 * Template Name - Porto
 * @author Joomlabuff  http://www.joomlabuff.com
 * @copyright Copyright (c) 2016 joomlabuff
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
// no direct access
defined('_JEXEC') or die;
SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content',
		'addon_name'=>'sp_portoconcept',
		'title'=>JText::_('Porto Concept'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FSS_DESC'),
		'attr'=>array(
			'admin_label'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				), 
			'block_1'=>array(
				'type'=>'text', 
				'title'=> 'Block 1',
				 'desc'=> 'Enter the title',
				'std'=>'Strategy',
				), 
				
			'block_1_image'=>array(
				'type'=>'media', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_DESC'),
				), 
			
			'block_2'=>array(
				'type'=>'text', 
				'title'=> 'Block 2',
				'desc'=> 'Enter the title',
				'std'=>'Planning',
				),  
				
			'block_2_image'=>array(
				'type'=>'media', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_DESC'),
				),  
			 
			 'block_3'=>array(
				'type'=>'text', 
				'title'=> 'Block 3',
				'desc'=> 'Enter the title',
				'std'=>'Build',
				), 
			
			'block_3_image'=>array(
				'type'=>'media', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_DESC'),
				), 
			
						
				'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_portoconcept_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE_DESC'),
						'std'=>'John Doe',
						),
					'c_image'=>array(
						'type'=>'media', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_DESC'),
					),
				),
			),	
			'block_4'=>array(
				'type'=>'text', 
				'title'=> 'Block 4',
				'desc'=> 'Enter the title',
				'std'=>'and so much more...',
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
