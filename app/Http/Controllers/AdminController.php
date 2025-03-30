<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Incident;
use App\Models\IncidentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){


return view('admin.dashboard');

    }

}
