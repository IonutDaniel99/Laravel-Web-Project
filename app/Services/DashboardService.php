<?php

namespace App\Services;

use Carbon\Carbon;
use DateTime;
use GuzzleHttp\Client;
use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\DeviceParserAbstract;

class DashboardService
{
    protected $Latitude, $Longitude, $Accuracy, $GoogleApi, $WeatherApi, $WeatherApiHourly, $Data, $CityData, $GoogleNews;
    protected $GoogleMapsApis = 'AIzaSyBDZXSOQThl5bVvvTghv2uo2iLcUJFSve8';
    protected $OpenWeatherMap = 'c5c77630c832540a6691a564300fa4d4';
    protected $IpDataCo = 'c2d1544540f219cc68dbfcfce1eadd6779d8187478c257b52179e931';
    protected $NewsApi = '2334c88bcf65427c8739252543fdea8f';
    protected $IpInfoIO = 'e0b00bfba21a07';
    public function __construct()
    {
        $client = new Client();
        $res = $client->request('POST', 'https://www.googleapis.com/geolocation/v1/geolocate?key=' . $this->GoogleMapsApis, ['location']);
        $GoogleLocalizationApi = json_decode($res->getBody(), true);
        $this->Latitude = $GoogleLocalizationApi["location"]["lat"];
        $this->Longitude = $GoogleLocalizationApi["location"]["lng"];
        $this->Accuracy = $GoogleLocalizationApi["accuracy"];
        $this->GoogleApi = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/elevation/json?locations=' . $this->Latitude . ',' . $this->Longitude . '&key=' . $this->GoogleMapsApis), true);
        $this->WeatherApi = json_decode(file_get_contents('http://api.openweathermap.org/data/2.5/weather?lat=' . $this->Latitude . '&lon=' . $this->Longitude . '&units=metric&appid=' . $this->OpenWeatherMap), true);
        $this->WeatherApiHourly = json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/forecast?lat=' . $this->Latitude . '&lon=' . $this->Longitude . '&units=metric&appid=' . $this->OpenWeatherMap), true);
        $this->Data = json_decode(file_get_contents('https://api.ipdata.co/?api-key=' . $this->IpDataCo), true);
        $this->CityData = json_decode(file_get_contents('https://ipinfo.io/?token=' . $this->IpInfoIO), true);
        $CountryLowName  = strtolower($this->CityData["country"]);
        $this->GoogleNews = json_decode(file_get_contents('https://newsapi.org/v2/top-headlines?country=' . $CountryLowName . '&apiKey=' . $this->NewsApi), true); /* https://newsapi.org/s/google-news-api */
    }

    public function Time_Date_Sector()
    {

        $Time_Info_Data["Today"] = new DateTime();
        $Time_Info_Data["Date"] = Carbon::now()->format('Y/m/d');
        $Time_Info_Data["TimeZone"] = Carbon::now()->timezone;
        $Time_Info_Data["Month"] = Carbon::now()->format('M');
        $Time_Info_Data["NextMonth"] = Carbon::now()->addMonthsNoOverflow(1)->format('M');
        $Time_Info_Data["Day"] = Carbon::now()->format('D');
        $Time_Info_Data["DayNumber"] = Carbon::now()->format('d');
        $Time_Info_Data["DaysThisMonth"] = Carbon::now()->daysInMonth;
        $Time_Info_Data["DaysUntilNext"] = $Time_Info_Data["DaysThisMonth"] - Carbon::now()->format('d');
        $Time_Info_Data["AmPm"] = Carbon::now()->format('A');
        $Time_Info_Data["sun_info"] = date_sun_info(strtotime($Time_Info_Data["Date"]), $this->Latitude, $this->Longitude);
        $Time_Info_Data["Sunrise"] = date("H:i", $Time_Info_Data["sun_info"]["sunrise"]);
        $Time_Info_Data["Sunset"] = date("H:i", $Time_Info_Data["sun_info"]["sunset"]);
        $Time_Info_Data["DayLength"] = ($Time_Info_Data["sun_info"]["sunset"] - $Time_Info_Data["sun_info"]["sunrise"]) / 3600 % 24 . ':' . ($Time_Info_Data["sun_info"]["sunset"] - $Time_Info_Data["sun_info"]["sunrise"]) / 60 % 60;
        $Time_Info_Data["NightLength"] = ($Time_Info_Data["sun_info"]["sunset"] - strtotime($Time_Info_Data["DayLength"])) / 3600 % 24 . ':' . ($Time_Info_Data["sun_info"]["sunset"] - strtotime($Time_Info_Data["DayLength"])) / 60 % 60;;

        $Time_Info_Data["spring"] = new DateTime('March 20');
        $Time_Info_Data["summer"] = new DateTime('June 20');
        $Time_Info_Data["fall"] = new DateTime('September 22');
        $Time_Info_Data["winter"] = new DateTime('December 21');

        $month = Carbon::now()->format('m');
        switch ($month) {
            case '01':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
            case '02':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
                break;
            case '03':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
                break;
            case '04':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
                break;
            case '05':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
                break;
            case '06':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
                break;
            case '07':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
                break;
            case '08':
                $Time_Info_Data["EventName"] = "Untold 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Aug/1-4";
                $Time_Info_Data["TicketPrice"] = "75 €";
                break;
            case '09':
                $Time_Info_Data["EventName"] = "ComicCon 2019";
                $Time_Info_Data["Location"] = "Cluj-Napoca/Cluj";
                $Time_Info_Data["StartEDay"] = "Oct/18-20";
                $Time_Info_Data["TicketPrice"] = "30 €";
                break;
            case '10':
                $Time_Info_Data["EventName"] = "Null";
                $Time_Info_Data["Location"] = "Null";
                $Time_Info_Data["StartEDay"] = "Null";
                $Time_Info_Data["TicketPrice"] = "Null";
                break;
            case '11':
                $Time_Info_Data["EventName"] = "Null";
                $Time_Info_Data["Location"] = "Null";
                $Time_Info_Data["StartEDay"] = "Null";
                $Time_Info_Data["TicketPrice"] = "Null";
                break;
            case '12':
                $Time_Info_Data["EventName"] = "Null";
                $Time_Info_Data["Location"] = "Null";
                $Time_Info_Data["StartEDay"] = "Null";
                $Time_Info_Data["TicketPrice"] = "Null";
                break;
            default:
                $Time_Info_Data["EventName"] = "Null";
                $Time_Info_Data["Location"] = "Null";
                $Time_Info_Data["StartEDay"] = "Null";
                $Time_Info_Data["TicketPrice"] = "Null";
                break;
        };

        return $Time_Info_Data;
    }

    public function Weather_Sector()
    {
        $Weather_Info_Data["MaxTempToday"] = floor($this->WeatherApi["main"]["temp_max"]) + 3;
        $Weather_Info_Data["MinTempToday"] = floor($this->WeatherApiHourly["list"][2]["main"]["temp_min"]);
        $Weather_Info_Data["WeatherTemperature"] = $this->WeatherApi["main"]["temp"];
        $Weather_Info_Data["WeatherTempMin"] = floor($this->WeatherApi["main"]["temp_min"]);
        $Weather_Info_Data["WeatherTempMax"] = floor($this->WeatherApi["main"]["temp_max"]);
        $Weather_Info_Data["WeatherDescription"] = mb_convert_case($this->WeatherApi["weather"][0]["description"], MB_CASE_TITLE, "UTF-8");
        $Weather_Info_Data["WeatherIcon"] = $this->WeatherApi["weather"][0]["icon"];
        $Weather_Info_Data["WeatherPressure"] = $this->WeatherApi["main"]["pressure"];
        $Weather_Info_Data["WeatherHumidity"] = $this->WeatherApi["main"]["humidity"];
        $Weather_Info_Data["WeatherClouds"] = $this->WeatherApi["clouds"]["all"];
        $Weather_Info_Data["WeatherWind"] = $this->WeatherApi["wind"]["speed"];
        if (isset($this->WeatherApi["wind"]["deg"])) {
            $Weather_Info_Data["WeatherWindDeg"] = floor($this->WeatherApi["wind"]["deg"]);
            if ($Weather_Info_Data["WeatherWindDeg"] >= 0 && $Weather_Info_Data["WeatherWindDeg"] <= 22)
                $Weather_Info_Data["WeatherWindDirection"] = "N";
            elseif ($Weather_Info_Data["WeatherWindDeg"] >= 23 && $Weather_Info_Data["WeatherWindDeg"] <= 67)
                $Weather_Info_Data["WeatherWindDirection"] = "NE";
            elseif ($Weather_Info_Data["WeatherWindDeg"] >= 68 && $Weather_Info_Data["WeatherWindDeg"] <= 112)
                $Weather_Info_Data["WeatherWindDirection"] = "E";
            elseif ($Weather_Info_Data["WeatherWindDeg"] >= 113 && $Weather_Info_Data["WeatherWindDeg"] <= 157)
                $Weather_Info_Data["WeatherWindDirection"] = "SE";
            elseif ($Weather_Info_Data["WeatherWindDeg"] >= 158 && $Weather_Info_Data["WeatherWindDeg"] <= 202)
                $Weather_Info_Data["WeatherWindDirection"] = "S";
            elseif ($Weather_Info_Data["WeatherWindDeg"] >= 203 && $Weather_Info_Data["WeatherWindDeg"] <= 247)
                $Weather_Info_Data["WeatherWindDirection"] = "SW";
            elseif ($Weather_Info_Data["WeatherWindDeg"] >= 248 && $Weather_Info_Data["WeatherWindDeg"] <= 292)
                $Weather_Info_Data["WeatherWindDirection"] = "W";
            elseif ($Weather_Info_Data["WeatherWindDeg"] >= 293 && $Weather_Info_Data["WeatherWindDeg"] <= 337)
                $Weather_Info_Data["WeatherWindDirection"] = "NW";
            elseif ($Weather_Info_Data["WeatherWindDeg"] > 338 && $Weather_Info_Data["WeatherWindDeg"] <= 360)
                $Weather_Info_Data["WeatherWindDirection"] = "N";
        } else {
            $Weather_Info_Data["WeatherWindDeg"] = "Error";
            $Weather_Info_Data["WeatherWindDirection"] = "TBD";
        }

        $Moon = new \Solaris\MoonPhase();
        $Weather_Info_Data["WeatherClouds"] = $this->WeatherApi["clouds"]["all"];
        $Weather_Info_Data["WeatherCountry"] = $this->WeatherApi["sys"]["country"];
        $Weather_Info_Data["WeatherNameStation"] = $this->WeatherApi["name"];
        $Weather_Info_Data["MoonDistanceEarth"] = substr($Moon->distance(), 0, 2);
        $Weather_Info_Data["MoonDistanceSun"] = substr($Moon->sundistance(), 0, 3);
        $Weather_Info_Data["MoonPercent"] = floor($Moon->illumination() * 100);
        $Weather_Info_Data["MoonNextNew"] = gmdate('j', $Moon->next_new_moon());
        $Weather_Info_Data["MoonFullNew"] = gmdate('j', $Moon->next_full_moon());
        $Weather_Info_Data["MoonStage"] = $Moon->phase() < 0.5 ? 'Waxing' : 'Waning';
        $Weather_Info_Data["MoonPhaseName"] = $Moon->phase_name();

        return $Weather_Info_Data;
    }

    public function Localization_Sector()
    {
        $Localization_Info_Data["CountryName"] = $this->Data["country_name"];
        $Localization_Info_Data["CityMoneyUsed"] = $this->Data["currency"]["code"];
        $Localization_Info_Data["CityCountyCode"] = $this->Data["region_code"];
        $Localization_Info_Data["CityLat"] = number_format($this->Latitude, 2); //Round Google Lat to 2 numbers after dot
        $Localization_Info_Data["CityLong"] = number_format($this->Longitude, 2); //Round Google Long to 2 numbers after dot
        $Localization_Info_Data["YourIp"] = $this->CityData["ip"]; //Your Ip
        $Localization_Info_Data["CityName"] = $this->CityData["city"]; //HighAccuracy
        $Localization_Info_Data["CityNameISP"] = iconv('UTF-8', 'ASCII//TRANSLIT', $this->CityData["city"]); //ISP LOCATION
        $Localization_Info_Data["CityPopulation"] = 300;
        $Localization_Info_Data["CityArea"] = 400;
        $Localization_Info_Data["CityFlag"]  = strtolower($this->CityData["country"]);
        $Localization_Info_Data["CityCounty"] = $this->CityData["region"];
        $Localization_Info_Data["CityElev"] = floor($this->GoogleApi["results"][0]["elevation"]);
        $Localization_Info_Data["CityPrec"] = round($this->Accuracy / 1000) + rand(0, 10);
        $Localization_Info_Data["CityStatus"] = $this->GoogleApi["status"];


        return $Localization_Info_Data;
    }

    public function Radio_Timers_Networks_Sector()
    {
        $shell_script = shell_exec('netsh wlan show interfaces');
        $shell_script = explode("\n", $shell_script);
        $Network_Data['Name'] = substr($shell_script[8], strpos($shell_script[18], ":") + 1);
        $Network_Data['Type'] = substr($shell_script[3], strpos($shell_script[18], ":") + 1);
        $Network_Data['Signal'] = substr($shell_script[18], strpos($shell_script[18], ":") + 1);
        $Network_Data = str_replace(' ', '', $Network_Data);
        $Network_Data["ISP"] = $this->Data["asn"]["name"];
        if ($Network_Data['Type'] == "Wi-Fi") {
            $getApPassword = shell_exec("NETSH WLAN SHOW PROFILE " . $Network_Data['Name'] . " KEY=CLEAR");
            $getApPassword = explode("\n", $getApPassword);
            $Network_Data['Password'] = substr($getApPassword[69], strpos($getApPassword[69], ":") + 1);
        } else {
            $Network_Data['Password'] = "Cable!!!";
        }
        $Network_Data['getConnectedDevice'] = substr_count(shell_exec("arp -a"), '192.168.');

        return $Network_Data;
    }

    public function System_Sector()
    {
        $uptime = exec('Z:\Xampp\htdocs\dc0beea186c5f5c2110bedbeccc5a7aa\public\executable\uptime.exe /d');
        $uptime = explode(": ", $uptime);
        $uptime = explode(", ", $uptime[1]);
        DeviceParserAbstract::setVersionTruncation(DeviceParserAbstract::VERSION_TRUNCATION_NONE);
        $userAgent = $_SERVER['HTTP_USER_AGENT']; // change this to the useragent you want to parse
        $dd = new DeviceDetector($userAgent);
        $dd->parse();
        $System_Data['bot'] = $dd->getBot();
        $System_Data['clientInfo'] = array_map('ucfirst', $dd->getClient()); // holds information about browser, feed reader, media player, ...
        $System_Data['os'] = $dd->getOs();
        $System_Data['device'] = $dd->getDeviceName();
        $System_Data['brand'] = $dd->getBrandName();
        $System_Data['model'] = $dd->getModel();
        $System_Data['server_name'] = php_uname("n");
        $System_Data["Time"]["Days"] = preg_replace("/[^0-9]/", '', $uptime[0]);
        $System_Data["Time"]["Hours"] = preg_replace("/[^0-9]/", '', $uptime[1]);
        $System_Data["Time"]["Minutes"] = preg_replace("/[^0-9]/", '', $uptime[2]);
        $System_Data["Time"]["CurrentTime"] = date('H:i');
        return $System_Data;
    }
}
