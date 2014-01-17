<?php snippet('header') ?>

<div class="grid main">
<div class="grid-unit-a">
	<div  class="dark-blue block-2 ">
		<div class="block-content">
			<h1>&ndash;<br><?php echo html($page->title()) ?></h1>
		</div>
	</div>
	<div class="mid-blue block-1 block">
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
		<?php snippet('project-media', array('project' => $page)) ?>
		<div class="page">	
		<span class="the-dash">&ndash;</span>
		<span class="slide-controls"></span>
			<div class="project-body">
				<?php echo kirbytext($page->text()) ?>
				<a href="<?php echo url('portfolio') ?>">&larr; Portfolio</a>
			</div>
		</div>
</div>

<script>
  $(function() {
    $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: true,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "<",   // String: Text for the "previous" button
  nextText: ">",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: ".slide-controls",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
  });
</script>

<?php snippet('footer') ?>

