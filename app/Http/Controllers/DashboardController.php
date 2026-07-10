<?php

namespace App\Http\Controllers;

use App\Models\MonitoringLog;

class DashboardController extends Controller
{
    public function index()
    {
        $logs = MonitoringLog::latest('last_checked')->get();

        return view('dashboard', compact('logs'));
    }
}
