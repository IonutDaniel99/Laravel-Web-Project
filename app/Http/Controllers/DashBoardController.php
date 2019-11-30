<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;

class DashBoardController extends Controller
{

    public function index()
    {

        /* EVERYTHING ABOUT APIS */
        $client = new Client();
        $res = $client->request('POST', 'https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyBDZXSOQThl5bVvvTghv2uo2iLcUJFSve8', ['location']);
        $GoogleLocalizationApi = json_decode($res->getBody(), true);
        $Latitude = $GoogleLocalizationApi["location"]["lat"];
        $Longitude = $GoogleLocalizationApi["location"]["lng"];
        $Accuracy = $GoogleLocalizationApi["accuracy"];
        $GoogleApi = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/elevation/json?locations=' . $Latitude . ',' . $Longitude . '&key=AIzaSyBDZXSOQThl5bVvvTghv2uo2iLcUJFSve8'), true);
        $WeatherApi = json_decode(file_get_contents('http://api.openweathermap.org/data/2.5/weather?lat=' . $Latitude . '&lon=' . $Longitude . '&units=metric&appid=415e98b29c83c05e95f993f2eb58df27'), true);
        $WeatherApiHourly = json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/forecast?lat=' . $Latitude . '&lon=' . $Longitude . '&appid=415e98b29c83c05e95f993f2eb58df27&units=metric'), true);
        $Data = json_decode(file_get_contents('https://api.ipdata.co/?api-key=c2d1544540f219cc68dbfcfce1eadd6779d8187478c257b52179e931'), true);
        $CityData = json_decode(file_get_contents('https://ipinfo.io/?token=e0b00bfba21a07'), true);
        $Moon = new \Solaris\MoonPhase();

        /* Thing For First Row ... DATE AND TIME*/

        $Date = Carbon::now()->format('Y/m/d');
        $Month = Carbon::now()->format('M');
        $NextMonth = Carbon::now()->addMonthsNoOverflow(1)->format('M');
        $Day = Carbon::now()->format('D');
        $DaysThisMonth = Carbon::now()->daysInMonth;
        $DaysUntilNext = $DaysThisMonth - Carbon::now()->format('d');

        $AmPm = Carbon::now()->format('A');
        $sun_info = date_sun_info(strtotime($Date), $Latitude, $Longitude);
        $Sunrise = date("H:i", $sun_info["sunrise"]);
        $Sunset = date("H:i", $sun_info["sunset"]);
        $DayLength = ($sun_info["sunset"] - $sun_info["sunrise"]) / 3600 % 24 . ':' . ($sun_info["sunset"] - $sun_info["sunrise"]) / 60 % 60;
        $NightLength = ($sun_info["sunset"] - strtotime($DayLength)) / 3600 % 24 . ':' . ($sun_info["sunset"] - strtotime($DayLength)) / 60 % 60;;

        $month = Carbon::now()->format('m');
        switch ($month) {
            case '01':
                break;
            case '02':
                # code...
                break;
            case '03':
                # code...
                break;
            case '04':
                # code...
                break;
            case '05':
                # code...
                break;
            case '06':
                # code...
                break;
            case '07':
                $EventName = "Untold 2019";
                $Location = "Cluj-Napoca/Cluj";
                $StartEDay = "Aug/1-4";
                $TicketPrice = "75 €";
                break;
            case '08':
                $EventName = "Untold 2019";
                $Location = "Cluj-Napoca/Cluj";
                $StartEDay = "Aug/1-4";
                $TicketPrice = "75 €";
                break;
            case '09':
                $EventName = "ComicCon 2019";
                $Location = "Cluj-Napoca/Cluj";
                $StartEDay = "Oct/18-20";
                $TicketPrice = "30 €";
                break;
            case '10':
                $EventName = "Null";
                $Location = "Null";
                $StartEDay = "Null";
                $TicketPrice = "Null";
                break;
            case '11':
                $EventName = "Null";
                $Location = "Null";
                $StartEDay = "Null";
                $TicketPrice = "Null";
                break;
            case '12':
                $EventName = "Null";
                $Location = "Null";
                $StartEDay = "Null";
                $TicketPrice = "Null";
                break;
            default:
                $EventName = "Null";
                $Location = "Null";
                $StartEDay = "Null";
                $TicketPrice = "Null";
                break;
        };

        /* Thing For 2nd Row ... Location and GPS*/

        $CountryName = $Data["country_name"];
        $CityMoneyUsed = $Data["currency"]["code"];
        $CityCountyCode = $Data["region_code"];
        $CityLat = number_format($Latitude, 2); //Round Google Lat to 2 numbers after dot
        $CityLong = number_format($Longitude, 2); //Round Google Long to 2 numbers after dot
        $YourIp = $CityData["ip"]; //Your Ip
        $CityName = $WeatherApi["name"]; //HighAccuracy
        $CityNameISP = iconv('UTF-8', 'ASCII//TRANSLIT', $CityData["city"]); //ISP LOCATION
        $CityPopulation = 300;
        $CityArea = 400;
        $CityFlag  = strtolower($CityData["country"]);
        $CityCounty = $CityData["region"];
        $CityElev = floor($GoogleApi["results"][0]["elevation"]);
        $CityPrec = round($Accuracy / 1000) + rand(0, 10);
        $CityStatus = $GoogleApi["status"];

        /* Thing For Weather Row ... Weather,Sun,Moon */
        $MaxTempToday = floor($WeatherApi["main"]["temp_max"]) + 3;
        $MinTempToday = floor($WeatherApiHourly["list"][2]["main"]["temp_min"]);
        $WeatherTemperature = $WeatherApi["main"]["temp"];
        $WeatherTempMin = floor($WeatherApi["main"]["temp_min"]);
        $WeatherTempMax = floor($WeatherApi["main"]["temp_max"]);
        $WeatherDesciprtion = mb_convert_case($WeatherApi["weather"][0]["description"], MB_CASE_TITLE, "UTF-8");
        $WeatherIcon = $WeatherApi["weather"][0]["icon"];
        $WeatherPressure = $WeatherApi["main"]["pressure"];
        $WeatherHumidity = $WeatherApi["main"]["humidity"];
        $WeatherClouds = $WeatherApi["clouds"]["all"];
        $WeatherWind = $WeatherApi["wind"]["speed"];
        if ($WeatherApi["wind"]["deg"] == null) {
            $WeatherWindDeg = "Error";
            $WeatherWindDirection = "TBD";
        } else {
            $WeatherWindDeg = floor($WeatherApi["wind"]["deg"]);
            if ($WeatherWindDeg >= 0 && $WeatherWindDeg <= 22)
                $WeatherWindDirection = "N";
            elseif ($WeatherWindDeg >= 23 && $WeatherWindDeg <= 67)
                $WeatherWindDirection = "NE";
            elseif ($WeatherWindDeg >= 68 && $WeatherWindDeg <= 112)
                $WeatherWindDirection = "E";
            elseif ($WeatherWindDeg >= 113 && $WeatherWindDeg <= 157)
                $WeatherWindDirection = "SE";
            elseif ($WeatherWindDeg >= 158 && $WeatherWindDeg <= 202)
                $WeatherWindDirection = "S";
            elseif ($WeatherWindDeg >= 203 && $WeatherWindDeg <= 247)
                $WeatherWindDirection = "SW";
            elseif ($WeatherWindDeg >= 258 && $WeatherWindDeg <= 292)
                $WeatherWindDirection = "W";
            elseif ($WeatherWindDeg >= 293 && $WeatherWindDeg <= 337)
                $WeatherWindDirection = "NW";
            elseif ($WeatherWindDeg > 338 && $WeatherWindDeg <= 360)
                $WeatherWindDirection = "N";
        }

        $WeatherClouds = $WeatherApi["clouds"]["all"];
        $WeatherCountry = $WeatherApi["sys"]["country"];
        $WeatherNameStation = $WeatherApi["name"];

        /* HERE IS START HE MOON */
        $MoonDistanceEarth = floor($Moon->distance());
        $MoonDistanceSun = substr($Moon->sundistance(), 0, 3);
        $MoonPercent = floor($Moon->illumination() * 100);
        $MoonNextNew = gmdate('j', $Moon->next_new_moon());
        $MoonFullNew = gmdate('j', $Moon->next_full_moon());
        $MoonStage = $Moon->phase() < 0.5 ? 'Waxing' : 'Waning';
        $MoonPhaseName = $Moon->phase_name();

        /* END HERE */
        $Google = ['Latitude', 'Longitude'];
        $TimeCompact = ['AmPm', 'Sunrise', 'Sunset', 'DayLength', 'NightLength'];
        $DateCompact = ['Date', 'Month', 'Day', 'DaysThisMonth', 'NextMonth', 'DaysUntilNext'];
        $EventCompact = ['EventName', 'Location', 'StartEDay', 'TicketPrice'];
        $CityDetails = ['CityName', 'CityPopulation', 'CityArea', 'CityMoneyUsed', 'CityCounty', 'CityNameISP', 'CityCountyCode', 'CityLat', 'CityLong', 'CityElev', 'CityPrec', 'CityStatus', 'CityFlag', 'CountryName', 'YourIp'];
        $WeatherCompact = ['WeatherTemperature', 'WeatherPressure', 'WeatherHumidity', 'WeatherDesciprtion', 'WeatherWind', 'WeatherWindDeg', 'WeatherWindDirection', 'WeatherClouds', 'WeatherIcon', 'WeatherTempMax', 'WeatherTempMin', 'MaxTempToday', 'MinTempToday'];
        $MoonCompact = ['MoonDistanceEarth', 'MoonDistanceSun', 'MoonPercent', 'MoonPhaseName', 'MoonNextNew', 'MoonFullNew', 'MoonStage'];
        return view('/dashboard', compact($Google, $TimeCompact, $DateCompact, $EventCompact, $CityDetails, $WeatherCompact, $MoonCompact));
    }
}
