var image = document.getElementById("WindowsIcon");
var system = document.getElementById("OsSpan").innerHTML;
document.getElementById("ScreenResolution").innerHTML = screen.width + "x" + screen.height;

switch (system) {
    case "Windows 10":
        image.src = "dashboardicons/Windows_10.png";
        break;
    case "Windows 8.1":
        image.src = "dashboardicons/Windows_81.png";
        break;
    case "Windows 8":
        image.src = "dashboardicons/Windows_80.png";
        break;
    case "Windows 7":
        image.src = "dashboardicons/Windows_7.png";
        break;
    case "Windows Vista":
        image.src = "dashboardicons/Windows_Vista.png";
        break;
    case "Windows XP":
        image.src = "dashboardicons/Windows_Xp.png";
        break;
    default:
        image.src = "dashboardicons/warning.png";
        break;
}
