<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<ul class="side-nav m-0">
		<?php wp_list_categories( array(
			'title_li' => '<h4>' . __( 'Inne kategorie', 'textdomain' ) . '</h2>'
		) ); ?> 
	</ul>
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
