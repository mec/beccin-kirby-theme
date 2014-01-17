<?php snippet('header') ?>
<div class="grid main">
<div class="grid-unit-a">
	<div  class="mid-blue block-2 ">
		<div class="block-content">
			<h1>&ndash;<br><?php echo html($page->title()) ?></h1>
		</div>
	</div>
	<div class="dark-blue block-1 block">
	    	<?php 
    		// protect email address by endcoding to html entities
    		$str = $site->email();
    		$str = mb_convert_encoding($str , 'UTF-32', 'UTF-8');
    		$t = unpack("N*", $str);
    		$t = array_map(function($n) { return "&#$n;"; }, $t);
    		$email_string = implode("", $t);
    	?>
    	<a href="mailto:<?php echo $email_string; ?>">
    		<div class="block-content">
	    		<span class="large">&ndash;<br>Email<br>me</span>
	    	</div>
    	</a>
  </div>
  <div class="light-blue block-1 block">
 	   	<a href="https://twitter.com/<?php echo html($site->twitter()) ?>" target="_blank">

	 	 <div class="block-content">
		 	 <span class="large">&ndash;<br>Follow<br>me</span>
		 	 <img src="<?php echo url('assets/images/twitter.png') ?>" class="twitter-bird"/>
		 </div>
	</a>
  </div>

</div>

<div class="grid-unit-b">
  	<article class="post">

	<?php snippet('blog-media', array('post' => $page)) ?>
		<div class="page">
  		&ndash;
	  	<?php echo kirbytext($page->text()) ?>
	  	<a href="<?php echo url('blog') ?>">&larr; Blog</a>
		</div>
  	</article>
</div>

<?php snippet('footer') ?>
