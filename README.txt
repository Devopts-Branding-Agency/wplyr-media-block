=== WPlyr Media Block ===
Contributors: jeetsaha86
Donate link: https://www.paypal.me/devopts/20
Tags: gutenberg,html5,video,youtube,vimeo,block,mp3 player,self-hosted,player
Requires at least: 5.2.0
Tested up to: 6.4.2
Stable tag: trunk
Requires PHP: 7.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

WPlyr is an easy-to-use Gutenberg block which implements [Plyr](https://plyr.io/) - A simple, lightweight and accessible HTML5, YouTube and Vimeo media player that supports modern browsers.

== Description ==

WPlyr is an easy-to-use Gutenberg block which implements [Plyr](https://plyr.io/) - A simple, lightweight and accessible HTML5, YouTube and Vimeo media player that supports modern browsers.

### Demo
Visit the [plugin demo](https://wplyr.wecodify.co/) to see it in action.

### Features
**Multi Formats**
Support for the major formats, HTML Video & Audio, YouTube & Vimeo. HTML5 Video supports MP4, WebM and OGV formats and HTML5 Audio supports MP3, OGG and WAV formats.

**Video Resolution**
The HTML5 video player supports multiple resolution source selection and playback. Viewers can set the playback resolution on the fly from the player's settings interface.

**Easy Interface**
The plugin combines all the features into a single Gutenberg block allowing you to change the source and output with just a couple of clicks.

**Closed Captions**
Full support for VTT captions and multiple caption tracks. Multi-lingual caption track is automatically selected from the viewer device's default language.

**Controls**
10+ controls for the media player can be configured from the plugin's setting interface. By default, the player includes controls for speed, fast-forward/skip, volume, captions, duration, video resolution selection, picture-in-picture feature, fullscreen, airplay and download.

**Customization**
You can modify the player color from the plugin's setting interface to match your website's color scheme.

**Clean HTML5**
Uses the correct semantic elements. `<input type="range">` for volume and `<progress>` for progress and well, `<button>`s for buttons. There's no `<span>` or `<a href="#">` button hacks.

**Responsive**
Adapts to every and all resolutions and modern devices.

### Browser Support

Safari ✓
Mobile Safari ✓¹
Firefox ✓
Chrome ✓
Opera ✓
Edge ✓
IE11 ✓²

1. Volume controls are also disabled as they are handled device wide.
2. Support extended via the use of polyfills.

== Installation ==

1. To install WPlyr Media Block, use the plugin manager in the WordPress administration. Go to *Plugins » Add New* and search for *WPlyr Media Block*.
2. Install and activate the plugin.
3. To configure the features and color scheme of the player, use the plugin's settings screen which can be found under *Settings » WPlyr*.
4. To add the block to a post or page use the block addition interface to find *WPlyr Media*.

== Frequently Asked Questions ==

= Which browsers are currently supported? =

WPlyr supports the last 2 versions of most modern browsers. For details, please refer to the browser support chart in the plugin description.


== Screenshots ==

1. WPlyr Media Block - HTML5 Video settings
2. WPlyr Media Block - HTML5 Audio settings
3. WPlyr Media Block - YouTube settings
4. WPlyr Media Block - Vimeo settings
5. WPlyr Media Block - Gutenberg block preview
6. WPlyr Media Block - Plugin settings interface

== Changelog ==
= 1.3.0 =
[Added] Enabled support for toggling preview mode
[Tweak] Updated the Carbon Fields library to v3.6.3
[Tweak] Updated the Plyr JS library to v3.7.8
[Tweak] Rebranded the plugin owner
[Removed] ReviewMe feature inside the plugin was throwing PHP warning, so it was scrapped

= 1.2.0 =
[Added] Integrated support for video monetization with vi.ai
[Tweak] Updated the Carbon Fields library to v3.3.2
[Tweak] Updated the Plyr JS library to v3.6.7

= 1.1.0 =
* [Tweak] Updated the Carbon Fields library to v3.2.3.
* [Removed] Massive speed boost to player load by removing legacy SCSS compiler method in favor of using CSS variables instead.

= 1.0.1 =
* [Compatibility] Updated for WordPress 5.4
 
= 1.0.0 =
* Initial release!

== Upgrade Notice ==
Not Available