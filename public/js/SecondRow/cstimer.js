function timerCs() {
    var time2 = {
        sec: 00,
        min: 00,
        hr: 00
    };
    var interval = null;

    function init(_hr, _min, _sec) {
        time2["hrcs"] = _hr ? _hr : 0;
        time2["mincs"] = _min ? _min : 0;
        time2["seccs"] = _sec ? _sec : 0;
        printAll();
    }

    function printAll() {
        print("seccs");
        print("mincs");
        print("hrcs");
    }

    function update(str) {
        time2[str]++;
        time2[str] = time2[str] % 60;
        if (time2[str] == 0) {
            str == "seccs" ? update("mincs") : update("hrcs");
        }
        print(str);
    }

    function print(str) {
        var _time2 = time2[str].toString().length == 1 ? "0" + time2[str] : time2[str];
        document.getElementById("lbl" + str).innerHTML = _time2;
    }

    function startTimer() {
        init();
        if (interval) stopTimer();
        interval = setInterval(function () {
            update("seccs");
        }, 1000);
    }

    return {
        'start': startTimer
    }
};
var timeCs = new timerCs();

function initTimer2() {
    timeCs.init(0, 0, 0);
}

function startTimer2() {
    timeCs.start();
}
