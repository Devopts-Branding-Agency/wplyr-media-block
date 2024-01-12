// select all player classes
function initWPlyr() {
    // get the immediate child of the .wplyr-player class
    const players = document.querySelectorAll('.wplyr-player > *:not(.plyr)');

    // iterate over all the found instances
    [].forEach.call(players, player => {
        // check if player already initialised
        if (!player.classList.contains('plyr')) {
            // initialise Plyr
            new Plyr(player, {
                volume: 0.7,
                captions: {
                    active: true,
                },
                tooltips: {
                    controls: true,
                    seek: true,
                },
                iconUrl: wplyr.iconUrl,
                controls: wplyr.controls,
                settings: wplyr.settings,
                blankVideo: wplyr.blankVideo,
                seekTime: parseInt(wplyr.seekTime)
            })
        }
    })
}

// call the initWPlyr() function every 100ms
setInterval(function () {
    initWPlyr()
}, 10)
