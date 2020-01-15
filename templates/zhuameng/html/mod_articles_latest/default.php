<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) {

	$attrbs 		= json_decode($item->attribs);
	$images 		= json_decode($item->images);
	$intro_image 	= '';

	if(isset($attrbs->spfeatured_image) && $attrbs->spfeatured_image != '') {

		$intro_image = $attrbs->spfeatured_image;
		$basename = basename($intro_image);
		$list_image = JPATH_ROOT . '/' . dirname($intro_image) . '/' . JFile::stripExt($basename) . '_medium.' . JFile::getExt($basename);
		if(file_exists($list_image)) {
			$medium_image = JURI::root(true) . '/' . dirname($intro_image) . '/' . JFile::stripExt($basename) . '_medium.' . JFile::getExt($basename);
		}

	} elseif(isset($images->image_intro) && !empty($images->image_intro)) {
		$medium_image = $images->image_intro;
	}

?>
	<div itemscope itemtype="http://schema.org/Article">
		<?php if (!empty($medium_image)) {?>
			<div class="img-responsive article-list-img">
				<img src="<?php echo $medium_image;?>" alt="">
			</div>
		<?php } ?>
		<a href="<?php echo $item->link; ?>" class="finance-news-title" itemprop="url">
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
		</a>
		
	</div>
<?php } ?>
</div>
