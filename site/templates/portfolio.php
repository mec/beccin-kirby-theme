<?php snippet('header') ?>


<div class="grid main">
<?php 
	// load the projects in
	// we need them early as the navigation is rendered before the actual content.
	$projects = $page->children()->visible()->flip()->paginate(12);
?>
<div class="grid-unit-a">
	<div  class="dark-blue block-2 ">
		<div class="block-content">
			<h1>&ndash;<br><?php echo html($page->title()) ?></h1>
		</div>
	</div>
	<div class="desktop-nav">
	    <div class="mid-blue block-1">
	    	<div class="block-content">
	    		<?php if($projects->pagination()->hasPrevPage()) : ?>
		    		<div class="portfolio-nav previous active"><a href="<?php echo $projects->pagination()->prevPageURL(); ?>"><</a></div>
		    	<?php else : ?>
		    		<div class="portfolio-nav previous in-active"><</div>
		    	<?php endif; ?>
	    	</div>
			</div>
	  <div class="light-blue block-1">
	 	 <div class="block-content">
	 	     	<?php if($projects->pagination()->hasNextPage()) : ?>
		    		<div class="portfolio-nav next active"><a href="<?php echo $projects->pagination()->nextPageURL(); ?>">></a></div>
		    	<?php else : ?>
		    		<div class="portfolio-nav next in-active">></div>
		    	<?php endif; ?>
	 	 </div>
	  </div>
	</div>
</div>

<div class="grid-unit-b">
	<?php foreach($projects AS $project): ?>
    	<?php $thumb = $project->files()->find('thumbnail.png')->url(); ?>
    	<div class="block-project">
    		<a href="<?php echo $project->url() ?>">
    			<img src="<?php echo $thumb; ?>" class="project"/>
    		</a>
    	</div>
    <?php endforeach ?>	
</div>

	<div class="mobile-nav">
	    <div class="mid-blue block-1">
	    	<div class="block-content">
	    		<?php if($projects->pagination()->hasPrevPage()) : ?>
		    		<div class="portfolio-nav previous active"><a href="<?php echo $projects->pagination()->prevPageURL(); ?>"><</a></div>
		    	<?php else : ?>
		    		<div class="portfolio-nav previous in-active"><</div>
		    	<?php endif; ?>
	    	</div>
	  </div>
	  <div class="light-blue block-1">
	 	 <div class="block-content">
	 	     	<?php if($projects->pagination()->hasNextPage()) : ?>
		    		<div class="portfolio-nav next active"><a href="<?php echo $projects->pagination()->nextPageURL(); ?>">></a></div>
		    	<?php else : ?>
		    		<div class="portfolio-nav next in-active">></div>
		    	<?php endif; ?>
	 	 </div>
	  </div>
	</div>

<?php snippet('footer') ?>
