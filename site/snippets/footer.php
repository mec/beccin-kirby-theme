  <footer class="site"> 
    <span class="copyright"><?php echo kirbytext($site->copyright()) ?></span>
    <ul class="social">
    	<li>
    		<a href="http://pinterest.com/<?php echo html($site->pintrest()) ?>" target="_blank"><img src="<?php echo url('assets/images/pintrest-sqr.png') ?>" alt="Pinterest" width="30px" height="30px"/></a>
    	</li>
    	<li>
    		<a href="https://twitter.com/<?php echo html($site->twitter()) ?>" target="_blank"><img src="<?php echo url('assets/images/twitter-sqr.png') ?>" alt="Twitter" width="30px" height="30px"/></a>
    	</li>
    	<li>
    		<a href="<?php echo html($site->linkedin()) ?>" target="_blank"><img src="<?php echo url('assets/images/linkedin-sqr.png') ?>" alt="Linkedin" width="30px" height="30px"/></a>
    	</li>
    	<li>
    		<a href="http://instagram.com/<?php echo html($site->instagram()) ?>" target="_blank"><img src="<?php echo url('assets/images/instagram-sqr.png') ?>" alt="Instagram" width="30px" height="30px"/ width="30px" height="30px"></a>
    	</li>
    </ul>
  </footer>
  <script>
	  $(document).ready(function(){
	    // Target your .container, .wrapper, .post, etc.
	    $(".video").fitVids();
	  });
  </script>
</body>
</html>