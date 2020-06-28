function CheckInternet() {
    if (navigator.onLine) {
        document.getElementById("InternetIconCheck").style.color = '#7CFC00';
    } else {
        document.getElementById("InternetIconCheck").style.color = '#ff0000';
        startTimerInternet();
    }
}

function CheckMemory() {
    var CheckMemoryUrl = new Request("/CheckDeviceStatus");
    fetch(CheckMemoryUrl).then(function (response) {
        if (Between(response.status, 200, 299)) {
            document.getElementById("StorageIconCheck").style.color = '#7CFC00';
            if (document.getElementById("lblhrServer").innerHTML != '00' && document.getElementById("lblminServer").innerHTML != '00' && document.getElementById("lblsecServer").innerHTML != '00') {
                stopTimerServer();
            }
            document.getElementById("lblhrServer").innerHTML = '00';
            document.getElementById("lblminServer").innerHTML = '00';
            document.getElementById("lblsecServer").innerHTML = '00';

        }
        if (Between(response.status, 400, 499)) {
            document.getElementById("StorageIconCheck").style.color = '#ff0000'; //rosu
            if (document.getElementById("lblhrServer").innerHTML == '00' && document.getElementById("lblminServer").innerHTML == '00' && document.getElementById("lblsecServer").innerHTML == '00') {
                startTimerServer();
            }
        }
        if (Between(response.status, 500, 599)) {
            document.getElementById("StorageIconCheck").style.color = '#ffc107';
            if (document.getElementById("lblhrServer").innerHTML == '00' && document.getElementById("lblminServer").innerHTML == '00' && document.getElementById("lblsecServer").innerHTML == '00') {
                startTimerServer();
            }
        }

    }).catch(function () {
        document.getElementById("StorageIconCheck").style.color = '#67afff'; //albastru
    })
}

setInterval(function () {
    CheckInternet();
    CheckMemory();
}, 3000);


//#region InternetTimer

function timerInternet() {
    var time2 = {
        sec: 00,
        min: 00,
        hr: 00
    };
    var interval = null;

    function init(_hr, _min, _sec) {
        time2["hrInternet"] = _hr ? _hr : 0;
        time2["minInternet"] = _min ? _min : 0;
        time2["secInternet"] = _sec ? _sec : 0;
        printAll();
    }

    function printAll() {
        print("secInternet");
        print("minInternet");
        print("hrInternet");
    }

    function update(str) {
        time2[str]++;
        time2[str] = time2[str] % 60;
        if (time2[str] == 0) {
            str == "secInternet" ? update("minInternet") : update("hrInternet");
        }
        print(str);
    }

    function print(str) {
        var _time2 = time2[str].toString().length == 1 ? "0" + time2[str] : time2[str];
        document.getElementById("lbl" + str).innerHTML = _time2;
    }

    function startTimerInternet() {
        init();
        if (interval) stopTimer();
        interval = setInterval(function () {
            update("secInternet");
        }, 1000);
    }

    return {
        'start': startTimerInternet,
        'init': initTimerInternet
    }
};
var timeInternet = new timerInternet();

function initTimerInternet() {
    timeInternet.init(0, 0, 0);
}

function startTimerInternet() {
    timeInternet.start();
}


//#endregion

//#region ServerTimer

function timerServer() {
    var time2 = {
        sec: 00,
        min: 00,
        hr: 00
    };
    var interval = null;

    function init(_hr, _min, _sec) {
        time2["hrServer"] = _hr ? _hr : 0;
        time2["minServer"] = _min ? _min : 0;
        time2["secServer"] = _sec ? _sec : 0;
        printAll();
    }

    function printAll() {
        print("secServer");
        print("minServer");
        print("hrServer");
    }

    function update(str) {
        time2[str]++;
        time2[str] = time2[str] % 60;
        if (time2[str] == 0) {
            str == "secServer" ? update("minServer") : update("hrServer");
        }
        print(str);
    }

    function print(str) {
        var _time2 = time2[str].toString().length == 1 ? "0" + time2[str] : time2[str];
        document.getElementById("lbl" + str).innerHTML = _time2;
    }

    function startTimerServer() {
        init();
        if (interval) stopTimer();
        interval = setInterval(function () {
            update("secServer");
        }, 1000);
    }

    return {
        'start': startTimerServer,
        'init': initTimerServer
    }
};
var timeServer = new timerServer();

function initTimerServer() {
    timeServer.init(0, 0, 0);
}

function startTimerServer() {
    timeServer.start();
}

function stopTimerServer() {
    timeServer.stop();
}


//#endregion

//#region Functions

function Between(x, min, max) {
    return x >= min && x <= max;
}
//#endregion

//#region DropDownSecurityt

$('#OpenSecurityDropDown').on('click', function (e) {
    simple_showpopup_security("SecurityPopup", e);
});


function simple_showpopup_security(id, evt) {
    var _pnl = $("#" + id);
    _pnl.fadeIn("fast");
    _pnl.css({
        "right": 20,
        "top": 50
    });


    $(document).on("mouseup", function (e) {
        var popup = $("#" + id);
        if (!popup.is(e.target) && popup.has(e.target).length == 0) {
            popup.fadeOut("fast");
            $(this).off(e);
        }
    });
}

$("#SecurityPopup").hide();
//#endregion
