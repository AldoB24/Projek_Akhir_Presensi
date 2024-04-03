<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboardd');
    }

    public function jumlah()
    {
        return view('admin.jumlah');
    }

    public function tepatwaktu()
    {
        return view('admin.tepatwaktu');
    }

    public function terlambat()
    {
        return view('admin.terlambat');
    }

    public function izin()
    {
        return view('admin.izin');
    }
}
