<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DateTime;
use GuzzleHttp\Client;
use App\Services\DashboardService;

class DashBoardController extends Controller
{

    protected $DashboardService;
    public function __construct(DashboardService $DashboardService)
    {
        $this->DashboardService = $DashboardService;
    }

    public function index()
    {

        //return $this->DashboardService->Time_Date_Sector();
        return view("/dashboard", [

            'Time_Info_Data' => $this->DashboardService->Time_Date_Sector(),
            'Weather_Info_Data' => $this->DashboardService->Weather_Sector(),
            'Localization_Info_Data' => $this->DashboardService->Localization_Sector(),
            'Network_Info_Data' => $this->DashboardService->Radio_Timers_Networks_Sector(),
            'System_Info_Data' => $this->DashboardService->System_Sector()
        ]);
    }
}
