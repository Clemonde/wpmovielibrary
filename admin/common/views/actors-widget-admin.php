	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', WPML_SLUG ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<p>
		<input id="<?php echo $this->get_field_id( 'list' ); ?>" name="<?php echo $this->get_field_name( 'list' ); ?>" type="checkbox" value="1" <?php checked( $list, 1 ); ?> /> 
		<label for="<?php echo $this->get_field_id( 'list' ); ?>"><?php _e( 'Show as dropdown', WPML_SLUG ); ?></label><br />
		<input id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="checkbox" value="1" <?php checked( $count, 1 ); ?> /> 
		<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Show movies count', WPML_SLUG ); ?></label><br />
		<input id="<?php echo $this->get_field_id( 'css' ); ?>" name="<?php echo $this->get_field_name( 'css' ); ?>" type="checkbox" value="1" <?php checked( $css, 1 ); ?> /> 
		<label for="<?php echo $this->get_field_id( 'css' ); ?>"><?php _e( 'Custom Style (only for dropdown)', WPML_SLUG ); ?></label>
	</p>