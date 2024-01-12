<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    // public function index(){
    //     return view('personnel_dashboard.index');
    // }

    public function duty_schedule(){
        return view('personnel_dashboard.duty_schedule');
    }

    public function incident_report(){
        return view('personnel_dashboard.incident_report');
    }

    public function notifications(){
        return view('personnel_dashboard.notifications');
    }
}
