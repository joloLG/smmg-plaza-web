<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index() {
        if(Auth::id()) {
            $usertype = Auth::user()->usertype;

            if($usertype == 'user') {
                // User Dashboard
                return view('user.home');
            } else if($usertype == 'admin') {
                // Admin Dashboard: Count Users and Appointments
                $total_users = User::where('usertype', 'user')->count();
                $total_appointments = Appointment::count();
                
                return view('admin.home', compact('total_users', 'total_appointments'));
            }
        }
        // Redirect to login if not authenticated
        return redirect()->back(); 
    }
}