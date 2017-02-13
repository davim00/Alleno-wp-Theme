<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alleno
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!--
<aside id="secondary" class="row widget-area" role="complementary">
	<div class="col-sm-4">
	  <?php //dynamic_sidebar( 'bottom-1' ); ?>
	</div>
	<div class="col-sm-4">
	  <?php// dynamic_sidebar( 'bottom-2' ); ?>
	</div>
	<div class="col-sm-4">
	  <?php// dynamic_sidebar( 'bottom-3' ); ?>
	</div>
</aside>--><!-- #secondary -->


<aside id="secondary" class="row widget-area" role="complementary">
	<div class="col-sm-12">
		 <?php dynamic_sidebar( 'bottom-1' ); ?>
	</div>
	<div class="col-sm-6">
	  <?php dynamic_sidebar( 'bottom-2' ); ?>
	</div>
	<div class="col-sm-6">
	  <?php dynamic_sidebar( 'bottom-3' ); ?>
	</div>
</aside><!-- #secondary -->
