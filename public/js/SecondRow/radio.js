function RadioValueGet() {
    var x = document.getElementById("RadioStation").value;
    var audio = document.getElementById('PlayerRadio');
    var source = document.getElementById('PlayerRadio');
    var button = document.getElementById("PlayPauseButton");

    if (x == "Select...") {
        button.innerHTML = "highlight_off";
        button.disabled = true;
        source.src = '#';
        audio.pause();
        resetTimer();
        stopTimer();
    } else if (x == "RadioZu") {
        button.innerHTML = "pause";
        button.disabled = false;
        startTimer()
        source.src = '5.254.113.34:9123/radiozu.aacp';
        audio.play();
    } else if (x == "VirginRadio") {
        button.innerHTML = "pause";
        button.disabled = false;
        startTimer()
        source.src = 'astreaming.virginradio.ro:8000/virgin_aacp_64k';
        audio.play();
    } else if (x == "KissFm") {
        document.getElementById("PlayPauseButton").innerHTML = "pause";
        document.getElementById("PlayPauseButton").disabled = false;
        startTimer()
        source.src = 'https://live.kissfm.ro/kissfm.aacp';
        audio.play();
    } else if (x == "MunteniaFm") {
        button.innerHTML = "pause";
        button.disabled = false;
        startTimer()
        source.src = 'http://munteniafm.servemp3.com:8000/';
        audio.play();
    }
}


function PlayPause() {
    var button = document.getElementById("PlayPauseButton");
    var audio = document.getElementById("PlayerRadio");

    if (audio.paused) {
        button.innerHTML = "pause";
        audio.play();
        startTimer();
    } else {
        button.innerHTML = "play_arrow";
        audio.pause();
        stopTimer()
    };
}


function timer() {
    var time = {
        sec: 00,
        min: 00,
        hr: 00
    };
    var interval = null;

    function init(_hr, _min, _sec) {
        time["hrradio"] = _hr ? _hr : 0;
        time["minradio"] = _min ? _min : 0;
        time["secradio"] = _sec ? _sec : 0;
        printAll();
    }

    function printAll() {
        print("secradio");
        print("minradio");
        print("hrradio");
    }

    function update(str) {
        time[str]++;
        time[str] = time[str] % 60;
        if (time[str] == 0) {
            str == "secradio" ? update("minradio") : update("hrradio");
        }
        print(str);
    }

    function print(str) {
        var _time = time[str].toString().length == 1 ? "0" + time[str] : time[str];
        document.getElementById("lbl" + str).innerHTML = _time;
    }

    function startTimer() {
        init();
        if (interval) stopTimer();
        interval = setInterval(function () {
            update("secradio");
        }, 1000);
    }

    function stopTimer() {
        window.clearInterval(interval);
    }

    function resetInterval() {
        stopTimer();
        time["secradio"] = time["minradio"] = time["hrradio"] = 0;
        printAll();
        startTimer();
    }

    return {
        'start': startTimer,
        'stop': stopTimer,
        'reset': resetInterval,
        'init': init
    }
};

var time = new timer();

function initTimer() {
    time.init(0, 0, 0);
}

function startTimer() {
    time.start();
}

function stopTimer() {
    time.stop();
}

function resetTimer() {
    time.reset();
}
