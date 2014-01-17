<?php 
	$images = $page->images()->limit(4); 
	
	//setup the counter, we count the number of images and if < 4 add in blank blocks
	$image_counter = 0;
?>
<?php foreach($images as $image) : ?>
	<div class="block-0">
	 	     <img src="<?php echo $image->url(); ?>" width="160px" height="160px"/>
	</div>
	<?php $image_counter++; ?>
<?php endforeach; ?> 
<?php $blank_blocks = $image_counter % 4; if ($blank_blocks == 0) $blank_blocks = 4;?>
		<?php switch($blank_blocks) { 
			case 1:
				echo '<div class="light-blue block-0"></div>';
				break;
			case 2:
				echo '<div class="mid-blue block-0"></div>';
				echo '<div class="light-blue block-0"></div>';
				break;
			case 3:
				echo '<div class="dark-blue block-0"></div>';
				echo '<div class="mid-blue block-0"></div>';
				echo '<div class="light-blue block-0"></div>';
				break;
			case 4:
				echo '<div class="very-light-blue block-0"></div>';
				echo '<div class="dark-blue block-0"></div>';
				echo '<div class="mid-blue block-0"></div>';
				echo '<div class="light-blue block-0"></div>';
				break;
		}
		?>
