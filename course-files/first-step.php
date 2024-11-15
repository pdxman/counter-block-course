<?php

$context = array(
	'number' => 0,
);

?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="create-block"
	<?php echo wp_interactivity_data_wp_context($context); ?>
>
	<h2 data-wp-text="context.number"></h2>
	
</div>