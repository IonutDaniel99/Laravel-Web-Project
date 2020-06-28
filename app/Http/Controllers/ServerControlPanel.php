<?php

namespace App\Http\Controllers;


class ServerControlPanel extends Controller
{

    public function ShutDown()
    {
        return shell_exec("/Xampp/xampp_stop.exe");
    }
}
