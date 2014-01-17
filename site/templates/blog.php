<?php snippet('header') ?>

<div class="grid main">
<?php 
	if(param('tag')) {

		  $posts = $page->children()
		                    ->visible()
		                    ->filterBy('tags', param('tag'), ',')
		                    ->flip()
		                    ->paginate(3);
	} else {

		  $posts = $page->children()
		                    ->visible()
		                    ->flip()
		                    ->paginate(3);
	}
?>
<div class="grid-unit-a">
	<div  class="mid-blue block-2 ">
		<div class="block-content">
			<h1>&ndash;<br><?php echo html($page->title()) ?></h1>
		</div>
	</div>
  <div class="desktop-nav">
    <div class="dark-blue block-1">
    	<div class="block-content">
    		<?php if($posts->pagination()->hasNextPage()) : ?>
	    		<span class="large active"><a href="<?php echo $posts->pagination()->nextPageURL(); ?>"><<br>older<br>posts</a></span>
	    	<?php else : ?>
	    		<span class="large in-active"><<br>older<br>posts</span>
	    	<?php endif; ?>
	    	
    	</div>
  </div>

  <div class="light-blue block-1">
 	 <div class="block-content">
 	 		<?php if($posts->pagination()->hasPrevPage()): ?>
	    		<span class="large active"><a href="<?php echo $posts->pagination()->prevPageURL(); ?>">><br>newer<br>posts</a></span>
	    	<?php else : ?>
	    		<span class="large in-active">><br>newer<br>posts</a></span>
	    	<?php endif; ?> 
 	 </div>
  </div>
  
 </div>
  <div class="tags">
	  <?php $tagcloud = tagcloud($pages->find('blog'), array('limit' => 20)) ?>
	  	<h3>Tags</h3>
		<ul class="tags">
			<?php foreach($tagcloud as $tag): ?>
				<li><a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a></li>
			<?php endforeach ?>
		</ul> 
  </div>
</div>

<div class="grid-unit-b">	

    	<?php foreach($posts as $post): ?>

		  <article class="post">
		  	<?php snippet('blog-media', array('post' => $post)) ?>
		  	<div class="page">
		  		&ndash;<br>
		  		<?php echo $post->date('d / m / Y'); ?>
		  		<h2><?php echo html($post->title()) ?></h2>
		  		<p><?php echo excerpt($post->text(), 300) ?></p>
		  		<a href="<?php echo $post->url() ?>">Read more&hellip;</a>
		    </div>
		  </article>

  <?php endforeach ?>
  	</div>
<div class="mobile-nav">  	
  	    <div class="dark-blue block-1">
    	<div class="block-content">
    		<?php if($posts->pagination()->hasNextPage()) : ?>
	    		<span class="large active"><a href="<?php echo $posts->pagination()->nextPageURL(); ?>"><<br>older<br>posts</a></span>
	    	<?php else : ?>
	    		<span class="large in-active"><<br>older<br>posts</span>
	    	<?php endif; ?>
	    	
    	</div>
  </div>
  <div class="light-blue block-1">
 	 <div class="block-content">
 	 		<?php if($posts->pagination()->hasPrevPage()): ?>
	    		<span class="large active"><a href="<?php echo $posts->pagination()->prevPageURL(); ?>">><br>newer<br>posts</a></span>
	    	<?php else : ?>
	    		<span class="large in-active">><br>newer<br>posts</a></span>
	    	<?php endif; ?> 
 	 </div>
  </div>
</div>
<?php snippet('footer') ?>
