<?php 
// see if this post has a video field
// if we find the video field, diplay the video
if ( $page->vimeourl() != '') :?>
	<?php echo "vimeo"; ?>
	<?php $url = $page->vimeourl(); ?>
	<div class="video">
	<?php echo vimeo($url); ?>
	</div>
<?php elseif ($page->youtubeurl() != '') :?>
	<?php echo "yt"; ?>
	<?php $url = $page->youtube(); ?>
	<div class="video">
	<?php echo youtube($url); ?>
	</div>
<? else: ?>
<?php

// find the portfolio page and get the children, shuffle them and limit to only 12 results.
$images = $page->images(); 

?>
	<ul class="rslides">
    <?php foreach($images AS $item): ?>
    <?php if ($item->name() != 'thumbnail'): ?>
   	<li><img src="<?php echo $item->url(); ?>" width="640px" height="320px"/></li>
    <?php endif; ?>
    <?php endforeach ?>      
	</ul>     
<?php endif; ?>
    
