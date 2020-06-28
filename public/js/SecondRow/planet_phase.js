var d = new Date().getDate();
var m = document.querySelectorAll("#contain_moon div");
var a = new XMLHttpRequest();
var url = "https://www.icalendar37.net/lunar/api/?lang=en&month=" + (new Date().getMonth() + 1) + "&year=" + (new Date().getFullYear()) + "&size=25&lightColor=rgb(255,255,255)&shadeColor=rgb(45,45,45)&t&LDZ=" + new Date(new Date().getFullYear(), new Date().getMonth(), 1) / 1000 + "";
a.onreadystatechange = function () {
    if (a.readyState == 4 && a.status == 200) {
        var b = JSON.parse(a.responseText);
        m[1].innerHTML = b.phase[d].svg;
        if (typeof moon_widget_loaded == "function") moon_widget_loaded(b)
    }
};
a.open("GET", url, true);
a.send()
