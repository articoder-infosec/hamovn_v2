<div class="sow-masonry-grid"
	 data-layouts="<?php echo esc_attr( json_encode( $layouts ) ) ?>">
	<?php
	foreach($items as $item) {
		$src = wp_get_attachment_image_src( $item['image'], 'large' );
		$src = empty( $src ) ? '' : $src[0];
		$title = empty( $item['title'] ) ? '' : $item['title'];
		$url = empty( $item['url'] ) ? '' : $item['url'];
		$new_window = ! empty( $item['new_window'] );
		?>
		<div class="sow-masonry-grid-item" data-col-span="<?php echo esc_attr( $item['column_span'] ) ?>"
			 data-row-span="<?php echo esc_attr( $item['row_span'] ) ?>">
			<?php if( !empty( $url ) ) : ?>
			<a href="<?php echo sow_esc_url( $url ) ?>" <?php if( $new_window ) { ?>target="_blank" <?php } ?>>
			<?php endif; ?>

				<?php echo wp_get_attachment_image( $item['image'], 'large', false, array( 'title' => esc_attr( $title ) ) ); ?>

			<?php if( !empty( $url ) ) : ?>
			</a>
			<?php endif; ?>
		</div>
		<?php
	}
	?>

</div>
