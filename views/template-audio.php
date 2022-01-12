<?php
// get the attached video files.
if ( ! $audio_sources = $data['wplyr_audio_sources'] ) {
	$audio_sources = [
		[
			'link' => WPLYR_URL . 'assets/audio/blank.mp3',
			'mime' => 'audio/mp3'
		]
	];
}

// player options.
$player_options = isset( $data['wplyr_media_options'] ) ? $data['wplyr_media_options'] : [];
$player_options = join( ' ', $player_options );

// default player class
$player_class = [ 'wplyr-player' ];

// player class type.
$player_class[] = 'wplyr-player-' . $data['wplyr_type'];

// player class Gutenberg class.
$player_class[] = isset( $attributes['className'] ) ? $attributes['className'] : '';

// merge the class.
$player_class = join( ' ', $player_class );
?>

<div class="<?php echo $player_class; ?>">
	<audio <?php echo $player_options; ?> crossorigin>
		<?php foreach ( $audio_sources as $audio_source ) : ?>
			<source src="<?php echo $audio_source['link']; ?>"
			        type="<?php echo $audio_source['mime']; ?>">
		<?php endforeach; ?>
	</audio>
</div>