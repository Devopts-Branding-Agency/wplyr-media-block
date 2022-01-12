<?php
// get the yt video link.
if ( ! $youtube_url = $data['wplyr_youtube_sources'] ) {
	$youtube_url = 'https://www.youtube.com/watch?v=MLpWrANjFbI';
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
	<div data-plyr-provider="youtube" data-plyr-embed-id="<?php echo $youtube_url; ?>"></div>
</div>