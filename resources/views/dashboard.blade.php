<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="dashboardicons/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/NavBar/SystemChecks.css">
    <link rel="stylesheet" href="/css/NavBar/VolumeThemesOthers.css">

    <link rel="stylesheet" href="/css/FirstRow/radio.css">
    <link rel="stylesheet" href="/css/FirstRow/time.css">
    <link rel="stylesheet" href="/css/FirstRow/city.css">
    <title>Test1</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/css/bootstrap-select.min.css">
</head>

<body onload="startTimer2()">
    <nav class="navbar-dark bg-dark" style="padding:0.5rem 1rem">
        <div class="row">
            <div class="col-10" style="margin: auto;">
                <div class="row">
                    <div class="col-4">test</div>
                    <div class="col-4">
                        <div class="row">
                            <div class="VolumeDiv" style="display: contents;">
                                <div class="col-md-4" id="OpenVolumeDropDown" style="text-align: center;">
                                    <span style="border-bottom:1px solid gray;cursor: pointer;position: relative;bottom: 6px;">Volume <span class="material-icons" style="position: relative;height: 12px;top: 5px;">
                                            arrow_drop_down
                                        </span>
                                    </span>
                                </div>
                                <div id="VolumePopup" class="defa-context-panel" style="padding-top:15px;">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 text-center" id="VolumeFirstRow" style="border-right: 1px solid green;">
                                                <span class="material-icons">
                                                    volume_off
                                                </span>
                                            </div>
                                            <div class="col-6 text-center" id="VolumeFirstRow" style="border-left: 1px solid green;">
                                                <span class="material-icons">
                                                    volume_up
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-bottom:2px solid gray; margin: 0px 5px"></div>
                                    <div class="col-12">
                                        <div class="row" id="VolumeSliderRow">
                                            <div class="col-3 text-center" id="VolumeSliderPadding">Radio</div>
                                            <div class="col-7" id="VolumeSliderPadding">
                                                <div id="PlayerRadioDiv">
                                                    <div id="PlayerRadioDivVolume"></div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center" id="VolumeSliderPadding" style="margin-left: 10px;">
                                                <p id="RadioVolumePercent">0%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row" id="VolumeSliderRow">
                                            <div class="col-3 text-center" id="VolumeSliderPadding">Radio</div>
                                            <div class="col-7" id="VolumeSliderPadding">----------------</div>
                                            <div class="col-2 text-center" id="VolumeSliderPadding">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row" id="VolumeSliderRow">
                                            <div class="col-3 text-center" id="VolumeSliderPadding">Radio</div>
                                            <div class="col-7" id="VolumeSliderPadding">----------------</div>
                                            <div class="col-2 text-center" id="VolumeSliderPadding">100%</div>
                                        </div>
                                    </div>
                                    <div style="border-bottom:2px solid gray; margin: 0px 5px"></div>
                                    <div class="col-12">
                                        <div class="row" id="VolumeSliderRow">
                                            <div class="col-3 text-center" id="VolumeSliderPadding">Radio</div>
                                            <div class="col-7" id="VolumeSliderPadding">----------------</div>
                                            <div class="col-2 text-center" id="VolumeSliderPadding">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="text-align: center;">test</div>
                            <div class=" col-4" style="text-align: center;">test</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class=row>
                            <div class="col-4 text-nowrap text-center" style="font-size:0.8rem">
                                <div class="col-12">Current Session</div>
                                <div class="col-12"><span id="lblhrcs">00</span>:<span id="lblmincs">00</span>:<span id="lblseccs">00</span></div>
                            </div>
                            <div class="col-4 text-nowrap text-center" style="font-size:0.8rem">
                                <div class="col-12">Internet Down</div>
                                <div class="col-12"><span id="lblhrInternet">00</span>:<span id="lblminInternet">00</span>:<span id="lblsecInternet">00</span></div>
                            </div>
                            <div class="col-4 text-nowrap text-center" style="font-size:0.8rem">
                                <div class="col-12">Server Down</div>
                                <div class="col-12"><span id="lblhrServer">00</span>:<span id="lblminServer">00</span>:<span id="lblsecServer">00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="border-left: 2px solid darkgray;">
                <div class="row">
                    <div class="col-2"><span class="material-icons SystemChecks" id="InternetIconCheck">
                            language
                        </span></div>
                    <div class="col-2"><span class="material-icons SystemChecks" id="StorageIconCheck">
                            sd_storage
                        </span></div>
                    <div class="col-2"><span class="material-icons SystemChecks" id="SystemChecks">
                            memory
                        </span></div>
                    <div class="col-2 "><span class="material-icons SystemChecks SecurityHover" id="OpenSecurityDropDown">
                            security
                        </span></div>
                    <span style=" border-right: 1px solid darkgray;border-left: 1px solid darkgray;margin: 0px -1px 0px 15px;"></span>
                    <div class="col-2" style="margin:auto 0"><span class="material-icons ShutDownButton" onclick="ShutDownFunction()" id="ShutDownId">
                            power_settings_new
                        </span></div>
                    <div class="defa-context-panel-security" id="SecurityPopup">test</div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="row px-2">
                    <div class="col-md-12 col-xl-4 ">
                        <div class="row ">
                            <!-- Time Row Border -->
                            <!-- DONNNNNNNNNNNNNNNNNNNNNNNNNNNNE -->
                            <div class="col-12 col-sm-4 col-md-12 col-lg-6 col-xl-12 px-1 mt-md-1 h-50">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12  pb-1 pt-2" style="border-bottom:1px solid gray;">
                                            <div class="row">
                                                <div class="col-2 col-sm-2 col-md-2 px-0 text-center">
                                                    <span id="time" class="text-sm-left text-xl-center">--:--:--</span>
                                                </div>
                                                <div class="col-1 col-sm-1 col-md-1 text-left" style="border-right:1px solid gray;">
                                                    <span id="PmAm" style=" text-transform: capitalize">{{$Time_Info_Data["AmPm"]}}</span>
                                                    <span id="GTM" style=" text-transform: capitalize">GMT+3</span>
                                                </div>
                                                <div class="col-5 col-sm-5 col-md-5 px-1" style="border-right:1px solid gray;">
                                                    <span id="EventName">{{$Time_Info_Data["EventName"]}}</span>
                                                    <span id="EventLocation" style=" text-transform: capitalize">Place: {{$Time_Info_Data["Location"]}}</span>
                                                    <span id="StartEDay">{{$Time_Info_Data["StartEDay"]}}</span>
                                                    <span id="TicketPrice">Price: {{$Time_Info_Data["TicketPrice"]}}</span>
                                                </div>
                                                <div class="col-2 col-sm-2 col-md-2 px-1 text-right" style="border-right:1px solid gray;">
                                                    <p class="p-0 m-0" id="Sunrise" style=" text-transform: capitalize">Sunrise: {{$Time_Info_Data["Sunrise"]}}</p>
                                                    <p class="p-0 m-0" id="Sunset" style=" text-transform: capitalize">Sunset:&nbsp; {{$Time_Info_Data["Sunset"]}}</p>
                                                </div>
                                                <div class="col-2 col-sm-2 col-md-2 px-1 text-right">
                                                    <p class="p-0 m-0" id="Sunrise" style=" text-transform: capitalize">Day:&nbsp; {{$Time_Info_Data["DayLength"]}}</p>
                                                    <p class="p-0 m-0" id="Sunset" style=" text-transform: capitalize">Night: {{$Time_Info_Data["NightLength"]}}</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 pb-1 pt-1">
                                            <div class="row">
                                                <div class="col-4 col-sm-4 col-md-4 px-md-3" style="border-right:1px solid gray;">
                                                    <div class="row">
                                                        <div class="col-md-8 px-0">
                                                            <span id="DateDay">{{$Time_Info_Data["Date"]}}</span>
                                                            <span id="DateInfo" style=" text-transform: capitalize">&nbsp; Year&nbsp;/{{$Time_Info_Data["Month"]}}/&nbsp;{{$Time_Info_Data["Day"]}}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span id="DaysThisMonth">Days:{{$Time_Info_Data["DaysThisMonth"]}}</span>
                                                            <span id="DaysUntilNext" style=" text-transform: capitalize">Remain:{{$Time_Info_Data["DaysUntilNext"]}}</span>
                                                            <span id="NextMonth">Next:{{$Time_Info_Data["NextMonth"]}}</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-5 col-sm-5 col-md-5 px-1 text-center" style="border-right:1px solid gray;">
                                                    <span id="SeasonsIcons" class="text-center">
                                                        @if($Time_Info_Data["Today"] >= $Time_Info_Data["spring"] && $Time_Info_Data["Today"] < $Time_Info_Data["summer"]) <i class="material-icons" style="color:#afffa8;">brightness_5</i>
                                                            @else
                                                            <i class="material-icons">brightness_5</i>
                                                            @endif

                                                            @if($Time_Info_Data["Today"] >= $Time_Info_Data["summer"] && $Time_Info_Data["Today"] < $Time_Info_Data["fall"]) <i class="material-icons" style="color:#ffd700;">wb_sunny</i>
                                                                @else
                                                                <i class="material-icons">wb_sunny</i>
                                                                @endif

                                                                @if($Time_Info_Data["Today"] >= $Time_Info_Data["fall"] && $Time_Info_Data["Today"] < $Time_Info_Data["winter"]) <i class="material-icons" style="width:15px; color:#ff7070;">graint</i>
                                                                    @else
                                                                    <i class="material-icons" style="width:15px;">graint</i>
                                                                    @endif

                                                                    @if($Time_Info_Data["Today"] >= $Time_Info_Data["winter"] && $Time_Info_Data["Today"] < $Time_Info_Data["spring"]) <i class="material-icons" style="color:#3392ff;">cloud_queue</i>
                                                                        @else
                                                                        <i class="material-icons">cloud_queue</i>
                                                                        @endif
                                                    </span>

                                                    <span id="Seasons" data-toggle="tooltip" title="Spring: 20 March - 20 June&#13;Summer: 20 June - 20 September&#13;Autumn: 20 Semtember - 20 December&#13;Winter: 20 December - 20 March">
                                                        @if($Time_Info_Data["Today"] >= $Time_Info_Data["spring"] && $Time_Info_Data["Today"] < $Time_Info_Data["summer"]) <span style="color:#afffa8;">Spring </span> | Summer | Autumn | Winter
                                                    @elseif ($Time_Info_Data["Today"] >= $Time_Info_Data["summer"] && $Time_Info_Data["Today"] < $Time_Info_Data["fall"]) Spring | <span style="color:#ffd700;">Summer</span> | Autumn | Winter
                                                        @elseif ($Time_Info_Data["Today"] >= $Time_Info_Data["fall"] && $Time_Info_Data["Today"] < $Time_Info_Data["winter"]) Spring | Summer | <span style="color:#ff7070;">Autumn</span> | Winter
                                                            @elseif ($Time_Info_Data["Today"] >= $Time_Info_Data["winter"] && $Time_Info_Data["Today"] < $Time_Info_Data["spring"]) Spring | Summer | Autumn | <span style="color:#3392ff;">Winter </span>
                                                                @endif
                                                                </span>
                                                </div>
                                                <div class="col-2 col-sm-2 col-md-2 px-1 text-center" style="border-right:1px solid gray;">
                                                    <a id="MoreInfoDateTime" href="https://www.timeanddate.com/worldclock/?query={{$Localization_Info_Data['CityName']}}" target="_blank">More Info</a>
                                                </div>
                                                <div class="col-1 col-sm-1 col-md-1 px-2 btn-sm material-icons">arrow_downward
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Weather -->
                            <div class="col-12 col-sm-4 col-md-12 col-lg-6 col-xl-12 px-1 mt-md-1 text-left">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 px-0 mt-1 pl-1">
                                            <div class="text-left">
                                                <div id="FontSizeCity" class="text-sm-left text-nowrap">Humidity: {{$Weather_Info_Data["WeatherHumidity"]}} %</div>
                                                <div id="FontSizeCity" class="text-sm-left text-nowrap">Wind: {{$Weather_Info_Data["WeatherWind"]}} m</div>
                                                <div id="FontSizeCity" class="text-sm-left text-nowrap">&nbsp;&nbsp;┗&gt;Dir: {{$Weather_Info_Data["WeatherWindDeg"]}} ({{$Weather_Info_Data["WeatherWindDirection"]}}) </div>
                                                <div id="FontSizeCity" class="text-sm-left text-nowrap">Clouds: {{$Weather_Info_Data["WeatherClouds"]}} %</div>
                                                <div id="FontSizeCity" class="text-sm-left text-nowrap">Pressure: {{$Weather_Info_Data["WeatherPressure"]}} </div>
                                            </div>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0 mt-0 pl-2 text-center" style="margin-left:8px">
                                            <img src="https://openweathermap.org/img/wn/{{$Weather_Info_Data['WeatherIcon']}}.png" style="transform: scale(0.9);margin: -9px 0px -13px -4px;">
                                            <div style="font-size: 13px;margin-right: 3px;">{{$Weather_Info_Data["WeatherTemperature"]}}°C</div>
                                            <div style="font-size: 10px;margin-right: 4px;line-height: 0.9;margin-top: 3px;">{{$Weather_Info_Data["WeatherDescription"]}}</div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 p-0 my-0 mr-0" style="margin-left:7px">
                                            <div class="row p-0 mt-1 mx-0" style="border-bottom:1px solid gray;max-height: 35px;">
                                                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-0 m-0" style="max-height: 30px;">
                                                    <img style="transform: scale(0.9);margin-left: -6px;margin-top: -11px;" src="https://openweathermap.org/img/wn/{{$Weather_Info_Data['WeatherIcon']}}.png" alt="">
                                                </div>
                                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 pl-1 pr-0 m-0">
                                                    <p class="m-0" style="font-size:11px">Today</p>
                                                    <p class="m-0" style="font-size:11px"> {{$Weather_Info_Data["MinTempToday"]}}°C / {{$Weather_Info_Data["MaxTempToday"]}}°C</p>
                                                </div>
                                            </div>
                                            <div class="row p-0 m-0">
                                                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-0 m-0">
                                                    <img style="transform: scale(0.9);margin-left: -6px;margin-top: -11px;" src="https://openweathermap.org/img/wn/04d.png" alt="">
                                                </div>
                                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 pl-1 pr-0 m-0">
                                                    <p class="m-0" style="font-size:11px">Tomorrow</p>
                                                    <p class="m-0" style="font-size:11px"> {{$Weather_Info_Data["WeatherTempMin"]}}°C / {{$Weather_Info_Data["WeatherTempMin"]}}°C</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0 m-0 text-center">
                                            <div id="contain_moon" style="text-align:center;">
                                                <div style="font-weight:bold"></div>
                                                <div style="padding: 5px;background-image: radial-gradient(circle, rgba(255, 255, 255, 0.69) -10px, #006dff00 21px, #2C2F33 87px);"></div>
                                            </div>
                                            <div style="font-size: 13px;">{{$Weather_Info_Data["MoonPercent"]}}%</div>
                                            <div style="font-size: 10px;line-height: 0.9;">{{$Weather_Info_Data["MoonPhaseName"]}}</div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 px-1 mt-1 text-right" style="margin-left: -15px;">
                                            <div id="FontSizeCity" class="text-sm-right">Earth Dist: {{$Weather_Info_Data["MoonDistanceEarth"]}}*10<sup>4</sup></div>
                                            <div id="FontSizeCity" class="text-sm-right">Sun Dist: {{$Weather_Info_Data["MoonDistanceSun"]}}*10<sup>6</sup> </div>
                                            <div id="FontSizeCity" class="text-sm-right">New Moon in: {{$Weather_Info_Data["MoonNextNew"]}}</div>
                                            <div id="FontSizeCity" class="text-sm-right">Full Moon in: {{$Weather_Info_Data["MoonFullNew"]}}</div>
                                            <div id="FontSizeCity" class="text-sm-right">Stage : {{$Weather_Info_Data["MoonStage"]}} @if($Weather_Info_Data["MoonStage"] == "Waning")↙@else↗@endif</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4 mt-xl-1 px-2" style="border-left:1px solid gray;border-right:1px solid gray;">
                        <!-- DONNNNNNNNNNNNNNNNNNNNNNNNNNNNE -->
                        <!-- City Details -->
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-12 col-lg-6 col-xl-12 px-2 mt-md-0">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 pl-1 mt-1 pr-0 text-left">
                                            <div id="FontSizeCity" class="text-sm-left">City: {{$Localization_Info_Data["CityName"]}}</div>
                                            <div id="FontSizeCity" class="text-sm-left">Pop.: {{$Localization_Info_Data["CityPopulation"]}}</div>
                                            <div id="FontSizeCity" class="text-sm-left">Area: {{$Localization_Info_Data["CityArea"]}}</div>
                                            @if($Localization_Info_Data["CityMoneyUsed"] != "EUR")
                                            <div id="FontSizeCity" class="text-sm-left">Money: <span style="font-size:9px"> {{$Localization_Info_Data["CityMoneyUsed"]}} / EURO </span></div>
                                            @else
                                            <div id="FontSizeCity" class="text-sm-left">Money: <span style="font-size:9px"> {{$Localization_Info_Data["CityMoneyUsed"]}} </span></div>
                                            @endif
                                            <div id="FontSizeCity" class="text-sm-left">County: {{$Localization_Info_Data["CityCounty"]}}({{$Localization_Info_Data["CityCountyCode"]}})</div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-0">
                                            <div class="row">
                                                <div class="col-md-12 pb-2 pt-1 px-0 text-center" style="border-bottom:1px solid gray;">
                                                    <input type="button" class="btn-sm btn-dark" id="GoogleButton" onclick="GoogleButton()" />
                                                    <input type="button" class="btn-sm btn-dark" id="MapsButton" onclick="MapsButton()" />
                                                    <input type="button" class="btn-sm btn-dark" id="WikiButton" onclick="WikiButton()" />
                                                </div>
                                                <div class="col-md-12 pb-2 pt-1 px-0 text-center">
                                                    <input type="button" class="btn-sm btn-dark" id="MoovitButton" onclick="BookingButton()" />
                                                    <input type="button" class="btn-sm btn-dark" id="TripAdvisorButton" onclick="TripAdvisorButton()" />
                                                    <input type="button" class="btn-sm btn-dark" id="AirBnbButton" onclick="AirBnbButton()" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-1 pr-1" style="margin-right:-0.75rem!important;">
                                            <div class="row">
                                                <div class="col-md-12 pb-1 pt-2 text-center" style="border-bottom:1px solid gray;">
                                                    <div class="row">
                                                        <div class=" col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 px-1 text-center " style="margin-top:5px" id="FontSizeCity"><a style="color: white;text-decoration: underline;margin-left: -2px;" href="https://whatismyipaddress.com/ip/{{$Localization_Info_Data['YourIp']}}">{{$Localization_Info_Data['YourIp']}}</a></div>
                                                        <div class=" col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-1 text-center"><a href="https://www.google.com/search?q={{$Localization_Info_Data['CountryName']}}" target="_blank"><img style="margin-top:-5px;transform: scale(0.8)" src="https://ipdata.co/flags/{{$Localization_Info_Data['CityFlag']}}.png"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                <div class="col-md-12 pb-2 pt-1 px-1 text-center">
                                                    <div class="row">
                                                        <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 ml-2 pr-0 pl-0 ml-0" style="border-left:1px solid gray;border-right:1px solid gray;margin-top: -1px;">
                                                            <a id="MoreInfoDateTime" href="https://{{$Localization_Info_Data['CityNameISP']}}-city.map2web.eu/" target="_blank">More Info</a>
                                                        </div>
                                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-1 btn-sm material-icons">arrow_downward</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-1 ml-1 pr-0 text-right">
                                            <div id="FontSizeCity" class="text-sm-right salam">Latitude: {{$Localization_Info_Data["CityLat"]}} </div>
                                            <div id="FontSizeCity" class="text-sm-right">Longitude: {{$Localization_Info_Data["CityLong"]}}</div>
                                            <div id="FontSizeCity" class="text-sm-right">Altitude: {{$Localization_Info_Data["CityElev"]}} m
                                            </div>
                                            <div id="FontSizeCity" class="text-sm-right">Accuracy: {{$Localization_Info_Data["CityPrec"]}} m</div>
                                            <div id="FontSizeCity" class="text-sm-right">Status:
                                                @if($Localization_Info_Data["CityStatus"] == "OK")
                                                Good
                                                @else
                                                Error
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-12 col-lg-6 col-xl-12 px-4 mt-md-2">
                                <div class="row text-center mt-md-1">
                                    <!-- Timers -->
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-2" style="font-size:0.8rem;">
                                        <div class="div-12">Radio: <span id="lblhrradio">00</span>:<span id="lblminradio">00</span>:<span id="lblsecradio">00</span></div>
                                        <div class="div-12">Other: xx/xx/xx</div>
                                        <div class="div-12">Others: 00:00:00</div>
                                    </div>
                                    <!-- Radio -->
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-0 mx-0" style="border-left:1px solid gray;border-right:1px solid gray;">
                                        <div class="row justify-content-center mx-0 px-0 py-0">
                                            <div class="col-md-12 pb-1 px-1 px-md-2">
                                                <select class="dropdown-select pb-2" name="RadioStation" id="RadioStation" onchange="RadioValueGet()">
                                                    <option value="Select...">Radio Station</option>
                                                    <option value="RadioZu">Radio Zu</option>
                                                    <option value="VirginRadio">Virgin Radio</option>
                                                    <option value="KissFm">Kiss FM</option>
                                                    <option value="MunteniaFm">Muntenia FM</option>
                                                    <option value="RockFM">Rock FM</option>
                                                </select>

                                            </div>
                                            <div class="col-md-12 px-0">
                                                <audio id="PlayerRadio" src="#"></audio>
                                                <button id="PlayPauseButton" class="material-icons btn-sm btn-dark" onclick="PlayPause()" data-toggle="tooltip" title="Play!">play_arrow</button>
                                                <button class="material-icons btn-sm btn-dark" onclick="Volume()" data-toggle="tooltip" title="Volume!">volume_up</button>
                                                <button class="material-icons btn-sm btn-dark" data-toggle="tooltip" title="Details!">arrow_downward</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-2" style="font-size: 0.8rem">
                                        <div class="div-12">Type: {{$Network_Info_Data['Type']}}</div>
                                        <div class="div-12">Signal: {{$Network_Info_Data['Signal']}}</div>
                                        <div class="div-12">Name: {{$Network_Info_Data['Name']}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6 col-xl-3 mt-xl-1 px-2">
                        <div class="col-12 px-0" style="margin: 6px 0px 6px 0px;">
                            <div class="row">
                                <div class="col-6 pr-0" id="FontSizeCity">
                                    <div>Type: {{$System_Info_Data["clientInfo"]["type"]}} -> {{$System_Info_Data["clientInfo"]["name"]}}</div>
                                    <div>Os: <span id="OsSpan">{{$System_Info_Data["os"]["name"]}} {{$System_Info_Data["os"]["version"]}}</span> {{$System_Info_Data["os"]["platform"]}}</div>
                                    <div>UpTime: {{$System_Info_Data["Time"]["Days"]}}d / {{$System_Info_Data["Time"]["Hours"]}}h / {{$System_Info_Data["Time"]["Minutes"]}}m ({{$System_Info_Data["Time"]["CurrentTime"]}})</div>
                                    <div>Server Name: {{$System_Info_Data["server_name"]}}</div>
                                </div>
                                <div class="col-2 px-0 d-flex justify-content-center" style="border-right:1px solid gray">
                                    <img src="" style="width:40px;height:40px;margin-top:10px;" id="WindowsIcon">
                                </div>
                                <div class="col-4 text-right pl-0" id="FontSizeCity">
                                    <div>Rezolution <span id="ScreenResolution"></span></div>
                                    <div>ISP: {{$Network_Info_Data["ISP"]}}</div>
                                    <div>AP Pass: {{$Network_Info_Data['Password']}}</div>
                                    <div>Connected Devices: {{$Network_Info_Data['getConnectedDevice']}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">test</div>


                    </div>


                    <div class="col-6 col-xl-1 mt-xl-1 px-2">test</div>
                </div>
                <div class="row px-2">
                    <div class="col-md-8 ">
                        <div class="row">
                            <div class="col-md-8 px-1 mt-2">
                                <div class="border bg-dark" id="height450">
                                    <div id="map"></div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1 mt-2">
                                <div class="border bg-dark" id="height450"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="row">
                            <div class="col px-1 mt-2">
                                <div class="col border bg-dark">Lorem . In iaculis nulla eget pellentesque auctor. Aenean lectus nibh, convallis in venenatis tincidunt, sagittis vel sem. Donec eleifend risus sed tristique facilisis. Vivamus laoreet lacus ipsum. Sed pharetra, nibh at maximus eleifend, magna elit ultricies purus, nec maximus massa tellus ac augue. Cras mattis mattis euismod. In laoreet lectus mauris, quis hendrerit felis tincidunt in. Morbi id nulla tortor. Cras vehicula scelerisque leo tincidunt aliquet.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col px-1 mt-2">
                                <div class="col border bg-dark">Curabitur at quam vel est finibus iaculis a ac neque. Sed laoreet quis magna ac cursus. Sed ut maximus nisl, ac semper quam. In iaculis nulla eget pellentesque auctor. Aenean lectus nibh, convallis in venenatis tincidunt, sagittis vel sem. Donec eleifend risus sed tristique facilisis. Vivamus laoreet lacus ipsum. Sed pharetra, nibh at maximus eleifend, magna elit ultricies purus, nec maximus massa tellus ac augue. Cras mattis mattis euismod. In laoreet lectus mauris, quis hendrerit felis tincidunt in. Morbi id nulla tortor. Cras vehicula scelerisque leo tincidunt aliquet.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2 px-1 mt-2">
                                <div class="border bg-dark" id="height250">Custom column padding</div>
                            </div>
                            <div class="col-md-3 px-1 mt-2">
                                <div class="border bg-dark" id="height250">Custom column padding</div>
                            </div>
                            <div class="col-md-1 px-1 mt-2">
                                <div class="border bg-dark" id="height250">div</div>
                            </div>
                            <div class="col-md-5 px-1 mt-2">
                                <div class="border bg-dark" id="height250">div</div>
                            </div>
                            <div class="col-md-1 px-1 mt-2">
                                <div class="border bg-dark" id="height250">div</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2" style="border-left:1px solid red;">test</div>
        </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/js/bootstrap-select.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="/js/NavBar/Volume.js"></script>
<script src="/js/NavBar/SystemChecks.js"></script>
<script src="/js/NavBar/ServerControlPanel.js"></script>
<script src="/js/FirstRow/clock.js"></script>
<script src="/js/SecondRow/cstimer.js"></script>
<script src="/js/SecondRow/city.js"></script>
<script src="/js/SecondRow/radio.js"></script>
<script src="/js/SecondRow/planet_phase.js"></script>
<script src="/js/ThirdRow/Server.js"></script>

</body>


</html>