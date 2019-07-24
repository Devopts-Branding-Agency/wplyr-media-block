<?php
// get the yt video link.
if ( ! $vimeo_url = $data['wplyr_vimeo_sources'] ) {
	// bail out if ids not set.
	return;
}

// default player class
$player_class = [ 'wplyr-player plyr__video-embed' ];

// player class type.
$player_class[] = 'wplyr-player-' . $data['wplyr_type'];

// player class Gutenberg class.
$player_class[] = isset( $attributes['className'] ) ? $attributes['className'] : '';

// merge the class.
$player_class = join( ' ', $player_class );
?>

<div class="<?php echo $player_class; ?>">
	<div data-plyr-provider="vimeo" data-plyr-embed-id="<?php echo $vimeo_url; ?>"></div>
</div>
