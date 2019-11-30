<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/FirstRow/radio.css">
    <link rel="stylesheet" href="/css/FirstRow/time.css">
    <link rel="stylesheet" href="/css/FirstRow/city.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/css/bootstrap-select.min.css">

<body>
    <nav class="navbar navbar-dark bg-dark" id="test">
        <a class="navbar-brand" href="#">
            Bootstrap...<span style="font-size:14px">
                Version 2019.11.30 (Started on 2019.10.13)
            </span>
        </a>
    </nav>
    <div class="container-fluid">
        <div class="row px-2">
            <div class="col-md-12 col-xl-3 ">
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
                                            <span id="PmAm" style=" text-transform: capitalize">{{$AmPm}}</span>
                                            <span id="GTM" style=" text-transform: capitalize">GMT+3</span>
                                        </div>
                                        <div class="col-5 col-sm-5 col-md-5 px-1" style="border-right:1px solid gray;">
                                            <span id="EventName">{{$EventName}}</span>
                                            <span id="EventLocation" style=" text-transform: capitalize">Place: {{$Location}}</span>
                                            <span id="StartEDay">{{$StartEDay}}</span>
                                            <span id="TicketPrice">Price: {{$TicketPrice}}</span>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2 px-1 text-md-center" style="border-right:1px solid gray;">
                                            <p class="p-0 m-0" id="Sunrise" style=" text-transform: capitalize">Sunrise: {{$Sunrise}}</p>
                                            <p class="p-0 m-0" id="Sunset" style=" text-transform: capitalize">Sunset:&nbsp; {{$Sunset}}</p>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2 px-1 text-center">
                                            <p class="p-0 m-0" id="Sunrise" style=" text-transform: capitalize">Day:&nbsp; {{$DayLength}}</p>
                                            <p class="p-0 m-0" id="Sunset" style=" text-transform: capitalize">Night: {{$NightLength}}</p>

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
                                                    <span id="DateDay">{{$Date}}</span>
                                                    <span id="DateInfo" style=" text-transform: capitalize">&nbsp; Year&nbsp;/{{$Month}}/&nbsp;{{$Day}}</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <span id="DaysThisMonth">Days:{{$DaysThisMonth}}</span>
                                                    <span id="DaysUntilNext" style=" text-transform: capitalize">Remain:{{$DaysUntilNext}}</span>
                                                    <span id="NextMonth">Next: {{$NextMonth}}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-5 col-sm-5 col-md-5 px-1 text-center" style="border-right:1px solid gray;">
                                            <span id="SeasonsIcons" class="text-center">
                                                <i class="material-icons">
                                                    brightness_5
                                                </i><i class="material-icons">
                                                    wb_sunny
                                                </i><i class="material-icons">
                                                    grain
                                                </i><i class="material-icons">
                                                    cloud_queue
                                                </i></span>

                                            <span id="Seasons" data-toggle="tooltip" title="Spring: 20 March - 20 June&#13;Summer: 20 June - 20 September&#13;Autumn: 20 Semtember - 20 December&#13;Winter: 20 December - 20 March">Spring | Summer | Autumn | Winter</span>

                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2 px-1 text-center" style="border-right:1px solid gray;">
                                            <a id="MoreInfoDateTime" href="https://www.timeanddate.com/worldclock/?query={{$CityName}}" target="_blank">More Info</a>
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
                                        <div id="FontSizeCity" class="text-sm-left text-nowrap">Humidity: {{$WeatherHumidity}} %</div>
                                        <div id="FontSizeCity" class="text-sm-left text-nowrap">Wind: {{$WeatherWind}} m</div>
                                        <div id="FontSizeCity" class="text-sm-left text-nowrap">&nbsp;&nbsp;┗&gt;Dir: {{$WeatherWindDeg}} ({{$WeatherWindDirection}}) </div>
                                        <div id="FontSizeCity" class="text-sm-left text-nowrap">Clouds: {{$WeatherClouds}} %</div>
                                        <div id="FontSizeCity" class="text-sm-left text-nowrap">Pressure: {{$WeatherPressure}} </div>
                                    </div>
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0 mt-0 pl-2 text-center" style="margin-left:8px">
                                    <img src="https://openweathermap.org/img/wn/{{$WeatherIcon}}.png" style="transform: scale(0.9);margin: -9px 0px -13px -4px;">
                                    <div style="font-size: 13px;margin-right: 3px;">{{$WeatherTemperature}}°C</div>
                                    <div style="font-size: 10px;margin-right: 4px;line-height: 0.9;margin-top: 3px;">{{$WeatherDesciprtion}}</div>
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 p-0 my-0 mr-0" style="margin-left:7px">
                                    <div class="row p-0 mt-1 mx-0" style="border-bottom:1px solid gray;max-height: 35px;">
                                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-0 m-0" style="max-height: 30px;">
                                            <img style="transform: scale(0.9);margin-left: -6px;margin-top: -11px;" src="https://openweathermap.org/img/wn/{{$WeatherIcon}}.png" alt="">
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 pl-1 pr-0 m-0">
                                            <p class="m-0" style="font-size:11px">Today</p>
                                            <p class="m-0" style="font-size:11px"> {{$MinTempToday}}°C / {{$MaxTempToday}}°C</p>
                                        </div>
                                    </div>
                                    <div class="row p-0 m-0">
                                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-0 m-0">
                                            <img style="transform: scale(0.9);margin-left: -6px;margin-top: -11px;" src="https://openweathermap.org/img/wn/04d.png" alt="">
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 pl-1 pr-0 m-0">
                                            <p class="m-0" style="font-size:11px">Tomorrow</p>
                                            <p class="m-0" style="font-size:11px"> {{$WeatherTempMin}}°C / {{$WeatherTempMin}}°C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0 m-0 text-center">
                                    <img src="https://openweathermap.org/img/wn/{{$WeatherIcon}}.png" style="transform: scale(0.9);margin: -9px 0px -13px -4px;">
                                    <div style="font-size: 13px;margin-right: 3px;">{{$MoonPercent}}%</div>
                                    <div style="font-size: 10px;margin-right: 4px;line-height: 0.9;margin-top: 3px;">{{$MoonPhaseName}}</div>
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 px-1 mt-1 text-right" style="margin-left: -15px;">
                                    <div id="FontSizeCity" class="text-sm-right">Earth Dist: {{$MoonDistanceEarth}}</div>
                                    <div id="FontSizeCity" class="text-sm-right">Sun Dist: {{$MoonDistanceSun}}*10<sup>6</sup> </div>
                                    <div id="FontSizeCity" class="text-sm-right">New Moon in: {{$MoonNextNew}}</div>
                                    <div id="FontSizeCity" class="text-sm-right">Full Moon in: {{$MoonFullNew}}</div>
                                    <div id="FontSizeCity" class="text-sm-right">Stage : {{$MoonStage}} @if($MoonStage == "Waning")↙@else↗@endif</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3 mt-xl-1 px-2" style="border-left:1px solid gray;border-right:1px solid gray;">
                <!-- DONNNNNNNNNNNNNNNNNNNNNNNNNNNNE -->
                <!-- City Details -->
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-12 col-lg-6 col-xl-12 px-2 mt-md-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 pl-1 mt-1 pr-0 text-left">
                                    <div id="FontSizeCity" class="text-sm-left">City: {{$CityName}}</div>
                                    <div id="FontSizeCity" class="text-sm-left">Pop.: {{$CityPopulation}}</div>
                                    <div id="FontSizeCity" class="text-sm-left">Area: {{$CityArea}}</div>
                                    @if($CityMoneyUsed != "EUR")
                                    <div id="FontSizeCity" class="text-sm-left">Money: <span style="font-size:9px"> {{$CityMoneyUsed}} / EURO </span></div>
                                    @else
                                    <div id="FontSizeCity" class="text-sm-left">Money: <span style="font-size:9px"> {{$CityMoneyUsed}} </span></div>
                                    @endif
                                    <div id="FontSizeCity" class="text-sm-left">County: {{$CityCounty}}({{$CityCountyCode}})</div>
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
                                                <div class=" col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 px-1 text-center " style="margin-top:5px" id="FontSizeCity"><a style="color: white;text-decoration: underline;margin-left: -2px;" href="https://whatismyipaddress.com/ip/ {{$YourIp}}">{{$YourIp}}</a></div>
                                                <div class=" col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-1 text-center"><a href="https://www.google.com/search?q={{$CountryName}}" target="_blank"><img style="margin-top:-5px;transform: scale(0.8)" src="https://ipdata.co/flags/ro.png"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="col-md-12 pb-2 pt-1 px-1 text-center">
                                            <div class="row">
                                                <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 ml-2 pr-0 pl-0 ml-0" style="border-left:1px solid gray;border-right:1px solid gray;margin-top: -1px;">
                                                    <a id="MoreInfoDateTime" href="https://{{$CityNameISP}}-city.map2web.eu/" target="_blank">More Info</a>
                                                </div>
                                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-1 btn-sm material-icons">arrow_downward</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-1 ml-1 pr-0 text-right">
                                    <div id="FontSizeCity" class="text-sm-right salam">Latitude: {{$CityLat}} </div>
                                    <div id="FontSizeCity" class="text-sm-right">Longitude: {{$CityLong}}</div>
                                    <div id="FontSizeCity" class="text-sm-right">Altitude: {{$CityElev}} m
                                    </div>
                                    <div id="FontSizeCity" class="text-sm-right">Accuracy: {{$CityPrec}} m</div>
                                    <div id="FontSizeCity" class="text-sm-right">Status:
                                        @if($CityStatus == "OK")
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
                            <!-- Radio -->
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-0 mx-0">
                                <div class="row justify-content-center mx-0 px-0 py-0">
                                    <div class="col-md-12 pb-1 px-1 px-md-2">
                                        <select class="dropdown-select pb-2" name="RadioStation" id="RadioStation" onchange="RadioValueGet()">
                                            <option value="Select...">Radio Station</option>
                                            <option value="RadioZu">Radio Zu / 88.3 FM</option>
                                            <option value="VirginRadio">Virgin Radio / 95.0 FM</option>
                                            <option value="KissFm">Kiss FM / 99.2 FM</option>
                                            <option value="MunteniaFm">Muntenia FM / 105.7 FM</option>
                                            <option value="RockFM">Rock FM / 105.7 FM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <audio id="player" src="#"></audio>
                                        <button id="PlayPauseButton" class="material-icons btn-sm btn-dark" onclick="PlayPause()" data-toggle="tooltip" title="Play!">play_arrow</button>
                                        <button class="material-icons btn-sm btn-dark" onclick="Volume()" data-toggle="tooltip" title="Volume!">volume_up</button>
                                        <button class="material-icons btn-sm btn-dark" data-toggle="tooltip" title="Details!">arrow_downward</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-2" style="border-left:1px solid gray;border-right:1px solid gray;">
                                <div class="border bg-dark pb-3">
                                    test
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-2">
                                <div class="border bg-dark pb-3">
                                    test
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-xl-3 mt-xl-1 px-2">test</div>
            <div class="col-md-12 col-xl-3 mt-xl-1 px-2">test</div>
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
                        <div class="col border bg-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu risus in est euismod iaculis pharetra quis lorem. Curabitur at quam vel est finibus iaculis a ac neque. Sed laoreet quis magna ac cursus. Sed ut maximus nisl, ac semper quam. In iaculis nulla eget pellentesque auctor. Aenean lectus nibh, convallis in venenatis tincidunt, sagittis vel sem. Donec eleifend risus sed tristique facilisis. Vivamus laoreet lacus ipsum. Sed pharetra, nibh at maximus eleifend, magna elit ultricies purus, nec maximus massa tellus ac augue. Cras mattis mattis euismod. In laoreet lectus mauris, quis hendrerit felis tincidunt in. Morbi id nulla tortor. Cras vehicula scelerisque leo tincidunt aliquet.</div>
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

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/js/bootstrap-select.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/FirstRow/clock.js"></script>
<script src="/js/FirstRow/radio.js"></script>
<script src="/js/FirstRow/city.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

</script>


</html>