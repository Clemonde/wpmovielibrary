<?php
extract( $instance );
?>
	<p>
		<label for="<?php echo $widget->get_field_id( 'title' ); ?>"><h4 class="wpml-widget-title"><?php _e( 'Title', WPML_SLUG ); ?></h4></label> 
		<input class="widefat" id="<?php echo $widget->get_field_id( 'title' ); ?>" name="<?php echo $widget->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<p>
		<label for="<?php echo $widget->get_field_id( 'description' ); ?>"><h4 class="wpml-widget-title"><?php _e( 'Description', WPML_SLUG ); ?></h4></label> 
		<textarea class="widefat" id="<?php echo $widget->get_field_id( 'description' ); ?>" name="<?php echo $widget->get_field_name( 'description' ); ?>"><?php echo esc_textarea( $description ); ?></textarea>
	</p>
	<p>
		<label><input name="<?php echo $widget->get_field_name( 'media_only' ); ?>" type="radio" value="1" <?php checked( $media_only, 1 ); ?> onclick="document.getElementById('_media_only_<?php echo $widget->get_field_id( 'media_only' ); ?>').style.display='block';document.getElementById('_movies_only_<?php echo $widget->get_field_id( 'media_only' ); ?>').style.display='none';" /> <?php _e( 'Show Media only', WPML_SLUG ); ?></label>
		<label><input name="<?php echo $widget->get_field_name( 'media_only' ); ?>" type="radio" value="0" <?php checked( $media_only, 0 ); ?> onclick="document.getElementById('_media_only_<?php echo $widget->get_field_id( 'media_only' ); ?>').style.display='none';document.getElementById('_movies_only_<?php echo $widget->get_field_id( 'media_only' ); ?>').style.display='block';" /> <?php _e( 'Show Movies', WPML_SLUG ); ?></label>
	</p>
	<p>
		<input id="<?php echo $widget->get_field_id( 'list' ); ?>" name="<?php echo $widget->get_field_name( 'list' ); ?>" type="checkbox" value="1" <?php checked( $list, 1 ); ?> onclick="if(this.checked){document.getElementById('_list_only_<?php echo $widget->get_field_id( 'css' ); ?>').style.display='block'}else{document.getElementById('_list_only_<?php echo $widget->get_field_id( 'css' ); ?>').style.display='none'}" /> 
		<label for="<?php echo $widget->get_field_id( 'list' ); ?>"><?php _e( 'Display as dropdown', WPML_SLUG ); ?></label>
	</p>
	<p id="_list_only_<?php echo $widget->get_field_id( 'css' ); ?>" class="<?php if ( 1 !== $list ) echo 'hide-if-js'; ?>">
			<input id="<?php echo $widget->get_field_id( 'css' ); ?>" name="<?php echo $widget->get_field_name( 'css' ); ?>" type="checkbox" value="1" <?php checked( $css, 1 ); ?> /> 
			<label for="<?php echo $widget->get_field_id( 'css' ); ?>"><?php _e( 'Custom Style (only for dropdown)', WPML_SLUG ); ?></label><br />
	</p>
	<div id="_media_only_<?php echo $widget->get_field_id( 'media_only' ); ?>" class="<?php if ( 1 !== $media_only ) echo 'hide-if-js'; ?>">
		<p>
			<!--<input id="<?php echo $widget->get_field_id( 'show_icons' ); ?>" name="<?php echo $widget->get_field_name( 'show_icons' ); ?>" type="checkbox" value="1" <?php checked( $show_icons, 1 ); ?> /> 
			<label for="<?php echo $widget->get_field_id( 'show_icons' ); ?>"><?php _e( 'Show icons', WPML_SLUG ); ?></label><br />-->
		</p>
	</div>
	<div id="_movies_only_<?php echo $widget->get_field_id( 'media_only' ); ?>" class="<?php if ( 0 !== $media_only ) echo 'hide-if-js'; ?>">
		<p>
			<label for="<?php echo $widget->get_field_id( 'type' ); ?>"><h4 class="wpml-widget-title"><?php _e( 'Media', WPML_SLUG ); ?></h4></label>
			<select id="<?php echo $widget->get_field_id( 'type' ); ?>" name="<?php echo $widget->get_field_name( 'type' ); ?>" class="widefat">
			<?php foreach ( WPML_Settings::get_available_movie_media() as $slug => $title ) : ?>
				<option value="<?php echo $slug ?>" <?php selected( $type, $slug ) ?>><?php echo $title ?></option>
			<?php endforeach; ?>
			</select>
		</p>
		<p>
			<input id="<?php echo $widget->get_field_id( 'thumbnails' ); ?>" name="<?php echo $widget->get_field_name( 'thumbnails' ); ?>" type="checkbox" value="1" <?php checked( $thumbnails, 1 ); ?> /> 
			<label for="<?php echo $widget->get_field_id( 'thumbnails' ); ?>"><?php _e( 'Show thumbnails', WPML_SLUG ); ?></label><br />
		</p>
	</div>