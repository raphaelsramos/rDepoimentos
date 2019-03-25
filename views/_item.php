<?php

	/***
	 *	Updated: 2018-05-04
	 */

	$_CPT = get_post_type();
	$_ID = get_the_ID();
	
?>					<div class="depoimento-item" id="depoimento-<?php echo $_ID ?>">
						<h4 class="depoimento-author"><?php the_title() ?></h4>
						<div class="depoimento-content">
<?php the_content() ?>
						</div>
					</div>
					<!-- /.depoimento-item -->
