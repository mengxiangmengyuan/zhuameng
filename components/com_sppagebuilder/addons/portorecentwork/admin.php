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

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content',
		'addon_name'=>'sp_portorecentwork',
		'title'=>JText::_('Porto Recent work'),
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
				'std'=>'Recent Work',
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
		 
						
				'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_portorecentwork_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'work_link'=>array(
						'type'=>'text', 
						'title'=>'Enter the link to image',
						'desc'=>'',
						'std'=>'',
						),
					'work_image'=>array(
						'type'=>'media', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_DESC'),
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
