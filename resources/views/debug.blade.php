<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug</title>
</head>

<body style="background-color: #000">
    <!-- © wdisseny -->
    <div id="contain_moon" style="text-align:center;">
        <div style="font-weight:bold"></div>
        <div style="background-image:radial-gradient(circle, rgba(0,25,90,.2) 40px ,rgba(0,25,90,.6) 35px, transparent 82px)"></div>
        <div></div>
        <div style="font-size:small"></div>
    </div>
    <script type="text/javascript">
        (function() {
            var d = new Date().getDate();
            var m = document.querySelectorAll("#contain_moon div");
            var a = new XMLHttpRequest();
            var url = "https://www.icalendar37.net/lunar/api/?lang=en&month=" + (new Date().getMonth() + 1) + "&year=" + (new Date().getFullYear()) + "&size=100&lightColor=rgb(255,255,255)&shadeColor=rgb(192,192,192)&t&LDZ=" + new Date(new Date().getFullYear(), new Date().getMonth(), 1) / 1000 + "";
            m[1].style.height = "100px";
            a.onreadystatechange = function() {
                if (a.readyState == 4 && a.status == 200) {
                    var b = JSON.parse(a.responseText);
                    m[1].innerHTML = b.phase[d].svg;
                    if (typeof moon_widget_loaded == "function") moon_widget_loaded(b)
                }
            };
            a.open("GET", url, true);
            a.send()
        })()
    </script>
</body>

</html>