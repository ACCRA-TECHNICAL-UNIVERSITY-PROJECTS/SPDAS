<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('personnel_dashboard.index');
    }

    public function staff_management(){
        return view('admin_dashboard.staff_management');
    }

    public function duty_allocation(){
        return view('admin_dashboard.duty_allocation');
    }

    public function admin_records(){
        return view('admin_dashboard.records');
    }
}
