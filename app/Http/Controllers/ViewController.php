<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function dashboard()
    {
        return view('HR_Apps.website.dashboard');
    }

    public function Inven()
    {
        return view('Inventory_Apps.website.dashboardInven');
    }

    public function profile()
    {
        return view('HR_Apps.website.myProfile');
    }

    public function editProfile()
    {
        return view('HR_Apps.website.editProfile');
    }

    public function tableEmployeeData()
    {
        return view('.HR_Apps.kepegawaian.tableEmployeeData');
    }

}
