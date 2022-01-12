<?php
// get the attached video files.
if ( ! $video_sources = $data['wplyr_video_sources'] ) {
	$video_sources = [
		[
			'link' => WPLYR_URL . 'assets/video/blank.mp4',
			'size' => '240',
			'mime' => 'video/mp4'
		]
	];
}

// the poster image for the video.
$poster = isset( $data['wplyr_video_poster'] ) ? 'poster="' . $data['wplyr_video_poster'] . '"' : '';

// player options.
$player_options = isset( $data['wplyr_media_options'] ) ? $data['wplyr_media_options'] : [];
$player_options = join( ' ', $player_options );

// video captions.
$video_captions = $data['wplyr_video_captions'];

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
	<video controls <?php echo $player_options; ?> crossorigin playsinline <?php echo $poster; ?>>
		<?php foreach ( $video_sources as $video_source ) : ?>
			<source src="<?php echo $video_source['link']; ?>"
			        size="<?php echo $video_source['size']; ?>"
			        type="<?php echo $video_source['mime']; ?>">
		<?php endforeach; ?>
		<?php foreach ( $video_captions as $video_caption ) : ?>
			<track kind="captions" label="<?php echo $video_caption['label']; ?>"
			       src="<?php echo $video_caption['link']; ?>" srclang="<?php echo $video_caption['language']; ?>">
		<?php endforeach; ?>
	</video>
</div>