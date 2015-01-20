<?php 

// find the portfolio page and get the children, shuffle them and limit to only 12 results.
$open  = $pages->find('portfolio');
$items = ($open) ? $open->children()->visible()->shuffle()->limit(12) : false; 
?>
<?php if($items && $items->count()): ?>
    <?php foreach($items AS $item): ?>
    <?php $thumb = $item->files()->find('thumbnail.png')->url(); ?>
    <div class="block-project">
    	<a href="<?php echo $item->url() ?>" class="block-link">
    		<img src="<?php echo $thumb; ?>" class="project"/>
    	</a>
    </div>
    <?php endforeach ?>            
<?php endif ?>
