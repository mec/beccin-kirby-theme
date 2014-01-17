<?php 
// see if this post has a video field
// if we find the video field, diplay the video
if ($post->vimeo()) :?>
	<?php $url = $post->vimeo(); ?>
	<div class="video">
	<?php echo vimeo($url); ?>
	</div>
<?php elseif ($post->youtube()) :?>
	<?php $url = $post->youtube(); ?>
	<div class="video">
	<?php echo youtube($url); ?>
	</div>
<? else: ?>
<?php

// find the portfolio page and get the children, shuffle them and limit to only 12 results.
$images = $post->images(); 

?>
	<ul class="rslides">
    <?php foreach($images AS $item): ?>
    <?php if ($item->name() != 'thumbnail'): ?>
   	<li><img src="<?php echo $item->url(); ?>"/></li>
    <?php endif; ?>
    <?php endforeach ?>      
	</ul>      
<?php endif; ?>