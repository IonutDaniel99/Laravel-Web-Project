$('#OpenVolumeDropDown').on('click', function (e) {
    simple_showpopup_volume("VolumePopup", e);
});

$('#OpenVolumeDropDownButton').on('click', function (e) {
    simple_showpopup_volume("VolumePopup", e);
});

function simple_showpopup_volume(id, evt) {
    var _pnl = $("#" + id);
    _pnl.fadeIn("fast");
    _pnl.css({
        "left": -70,
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

$("#VolumePopup").hide();



/* / / / / / / / / / RADIO / / / / / / / / / / / / */
$("#PlayerRadioDiv").slider({
    min: 0,
    max: 100,
    value: 0,
    range: "min",

    slide: function (event, ui) {
        setText(ui.value);
        setVolume(ui.value / 100);
    }
});

function setText(myVolume) {
    var RadioTextPercent = document.getElementById('RadioVolumePercent');
    RadioTextPercent.innerHTML = myVolume + "%";
}

function setVolume(myVolume) {
    var AudioSource = document.getElementById('PlayerRadio');
    AudioSource.volume = myVolume;
}



