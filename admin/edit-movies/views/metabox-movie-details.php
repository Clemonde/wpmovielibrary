
		<div id="wpml-details" class="wpml-details">

			<div id="wpml-details-minor-publishing">

				<div id="wpml-details-publishing-actions">

					<div class="misc-pub-section">

						<span class="<?php echo ( WPML_Utils::is_modern_wp() ? 'dashicons dashicons-share-alt' : 'movie-status-icon' ) ?>"></span>
						<label for="movie-status"><?php _e( 'Status:', WPML_SLUG ); ?></label>
						<span id="movie-status-display"><?php $_status = WPML_Settings::get_available_movie_status(); $_status = ( '' != $movie_status ? $_status[ $movie_status ] : 'None' ); _e( $_status, WPML_SLUG ) ?></span>
						<a href="#movie-status" id="edit-movie-status" class="edit-movie-status hide-if-no-js"><?php _e( 'Edit', WPML_SLUG ); ?></a>

						<div id="movie-status-select" class="hide-if-js">
							<input type="hidden" name="hidden_movie_status" id="hidden-movie-status" value="movie-<?php echo $movie_status; ?>">
							<select name="wpml_details[movie_status]" id="movie-status">
								<option id="movie-default-status" value="<?php _e( 'None', WPML_SLUG ) ?>" <?php selected( '', $movie_status ); ?>></option>
<?php foreach ( WPML_Settings::get_available_movie_status() as $slug => $status ) : ?>
								<option id="movie-<?php echo $slug; ?>" value="<?php echo $slug; ?>" <?php selected( $slug, $movie_status ); ?>><?php _e( $status, WPML_SLUG ) ?></option>
<?php endforeach; ?>
							</select>
							<a href="#movie-status" id="save-movie-status" class="save-movie-status hide-if-no-js button"><?php _e( 'OK', WPML_SLUG ); ?></a>
							<a href="#movie-status" id="cancel-movie-status" class="cancel-movie-status hide-if-no-js"><?php _e( 'Cancel', WPML_SLUG ); ?></a>
						</div>

					</div><!-- .misc-pub-section -->

					<div class="misc-pub-section">
						<span class="<?php echo ( WPML_Utils::is_modern_wp() ? 'dashicons dashicons-editor-video' : 'movie-media-icon' ) ?>"></span>
						<label for="movie-media"><?php _e( 'Media:', WPML_SLUG ); ?></label>
						<span id="movie-media-display"><?php $_media = WPML_Settings::get_available_movie_media(); $_media = ( '' != $movie_media ? $_media[ $movie_media ] : 'None' ); _e( $_media, WPML_SLUG ) ?></span>
						<a href="#movie-media" id="edit-movie-media" class="edit-movie-media hide-if-no-js"><?php _e( 'Edit', WPML_SLUG ); ?></a>

						<div id="movie-media-select" class="hide-if-js">
							<input type="hidden" name="hidden_movie_media" id="hidden-movie-media" value="movie-<?php echo $movie_media; ?>">
							<select name="wpml_details[movie_media]" id="movie-media">
								<option id="movie-default-media" value="<?php _e( 'None', WPML_SLUG ) ?>" <?php selected( '', $movie_media ); ?>></option>
<?php foreach ( WPML_Settings::get_available_movie_media() as $slug => $media ) : ?>
								<option id="movie-<?php echo $slug; ?>" value="<?php echo $slug; ?>" <?php selected( $slug, $movie_media ); ?>><?php _e( $media, WPML_SLUG ) ?></option>
<?php endforeach; ?>
							</select>
							<a href="#movie-media" id="save-movie-media" class="save-movie-media hide-if-no-js button"><?php _e( 'OK', WPML_SLUG ); ?></a>
							<a href="#movie-media" id="cancel-movie-media" class="cancel-movie-media hide-if-no-js"><?php _e( 'Cancel', WPML_SLUG ); ?></a>
						</div>

					</div><!-- .misc-pub-section -->

					<div class="misc-pub-section">
						<span class="<?php echo ( WPML_Utils::is_modern_wp() ? 'dashicons dashicons-star-half' : 'movie-rating-icon' ) ?>"></span>
						<label for="movie-rating"><?php _e( 'Rating:', WPML_SLUG ); ?></label>
						<div id="movie-rating-display" class="hide-if-no-js stars-<?php echo $movie_rating_str; ?>"></div>
						<a href="#movie-rating" id="edit-movie-rating" class="edit-movie-rating hide-if-no-js"><?php _e( 'Edit', WPML_SLUG ); ?></a>

						<div id="movie-rating-select" class="hide-if-js">
							<input type="hidden" name="hidden_movie_rating" id="hidden-movie-rating" value="<?php echo $movie_rating; ?>">
							<input type="number" class="hide-if-js" id="movie-rating" name="wpml_details[movie_rating]" step="0.5" min="0.0" max="5.0" value="<?php echo $movie_rating; ?>"></input>
							<div class="movie-rating-block hide-if-no-js">
								<div id="stars" data-default-rating="<?php echo $movie_rating; ?>" data-rating="<?php echo $movie_rating; ?>" data-rated="false" class="stars stars-<?php echo $movie_rating_str; ?>">
									<div id="stars-labels" class="stars-labels">
										<span id="stars-label-0-5" class="stars-label"><?php _e( 'Junk', WPML_SLUG ) ?></span>
										<span id="stars-label-1-0" class="stars-label"><?php _e( 'Very bad', WPML_SLUG ) ?></span>
										<span id="stars-label-1-5" class="stars-label"><?php _e( 'Bad', WPML_SLUG ) ?></span>
										<span id="stars-label-2-0" class="stars-label"><?php _e( 'Not that bad', WPML_SLUG ) ?></span>
										<span id="stars-label-2-5" class="stars-label"><?php _e( 'Average', WPML_SLUG ) ?></span>
										<span id="stars-label-3-0" class="stars-label"><?php _e( 'Not bad', WPML_SLUG ) ?></span>
										<span id="stars-label-3-5" class="stars-label"><?php _e( 'Good', WPML_SLUG ) ?></span>
										<span id="stars-label-4-0" class="stars-label"><?php _e( 'Very good', WPML_SLUG ) ?></span>
										<span id="stars-label-4-5" class="stars-label"><?php _e( 'Excellent', WPML_SLUG ) ?></span>
										<span id="stars-label-5-0" class="stars-label"><?php _e( 'Masterpiece', WPML_SLUG ) ?></span>
									</div>
								</div>
							</div>
							<a href="#movie-media" id="save-movie-rating" class="save-movie-rating hide-if-no-js button"><?php _e( 'OK', WPML_SLUG ); ?></a>
							<a href="#movie-media" id="cancel-movie-rating" class="cancel-movie-rating hide-if-no-js"><?php _e( 'Cancel', WPML_SLUG ); ?></a>
						</div>

					</div><!-- .misc-pub-section -->
				</div>
				<div class="clear"></div>
			</div>

		</div>

		<div id="wpml-details-major-publishing-actions" class="hide-if-no-js">
			<div id="wpml-details-status"></div>
			<div id="wpml-details-major-publishing-action">
				<span class="spinner"></span>
				<input type="button" name="wpml_save" id="wpml_save" class="button button-secondary button-large" value="<?php _e( 'Save', WPML_SLUG ); ?>" accesskey="s">
				<input name="wpml_details_save" type="hidden" id="wpml_details_save" value="<?php _e( 'Save', WPML_SLUG ); ?>">
			</div>
			<div class="clear"></div>
		</div>