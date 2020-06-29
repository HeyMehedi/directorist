<?php
/**
 * @author  AazzTech
 * @since   7.0
 * @version 7.0
 */
?>
<div class="related_single_carousel" style="margin: 0 10px;">
	<div class="atbd_single_listing atbd_listing_card">
		<article class="atbd_single_listing_wrapper <?php echo esc_attr( $listings->loop_wrapper_class() ); ?>">
			
			<?php if ( $listings->display_preview_image ): ?>
				<figure class="atbd_listing_thumbnail_area">
					<?php $listings->loop_grid_thumbnail_template();?>
				</figure>
			<?php endif; ?>

			<div class="atbd_listing_info">
				<?php
				$listings->loop_top_content_template();
				$listings->loop_grid_bottom_content_template();
				?>
			</div>
			
		</article>
	</div>
</div>