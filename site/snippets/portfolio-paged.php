<?php 

// find the open/active page on the first level
//$open  = $pages->findOpen();
//$items = ($open) ? $open->children()->visible()->paginate(12) : false; 

$articles = $page->children()->visible()->paginate(12);
?>
    <?php foreach($articles AS $item): ?>
    <?php $thumb = $item->files()->find('thumbnail.png')->url(); ?>
    <div class="block-project"><a href="<?php echo $item->url() ?>" class="block-link"><img src="<?php echo $thumb; ?>" width="160px" height="160px" class="project"/></a></div>
    <?php endforeach ?>            
