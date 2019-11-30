function RadioValueGet() {
    var x = document.getElementById("RadioStation").value;
    var audio = document.getElementById('player');
    var source = document.getElementById('player');

    if (x == "Select...") {
        source.src = '#';
        audio.pause();
    } else if (x == "RadioZu") {
        source.src = 'http://5.254.113.34:9123/radiozu.aacp';
        audio.play();
    } else if (x == "VirginRadio") {
        source.src = 'http://astreaming.virginradio.ro:8000/virgin_aacp_64k';
        audio.play();
    } else if (x == "KissFm") {
        source.src = 'http://80.86.106.143:9128/kissfm.aacp';
        audio.play();
    } else if (x == "MunteniaFm") {
        source.src = 'http://munteniafm.servemp3.com:8000/;';
        audio.play();
    } else {
        source.src = 'http://80.86.106.143:9128/rockfm.aacp';
        audio.play();
    }

}

function PlayPause() {

    var audio = document.getElementById("player");
    var button = document.getElementById("PlayPauseButton");

    button.addEventListener("click", function () {
        if (audio.paused) {
            audio.play();
            document.getElementById("PlayPauseButton").innerHTML = "play_arrow";
        } else {
            audio.pause();
            document.getElementById("PlayPauseButton").innerHTML = "pause";
        }
    });
}
