<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userHome() {
        return view('user.home');
    }

    public function chatbot() {
        return view('user.chatbot');
    }

    public function appointment() {
        return view('user.appointment');
    }

    public function storeAppointment(Request $request) {
        $data = new Appointment;
        $data->user_id = Auth::user()->id;
        $data->full_name = $request->full_name;
        $data->address = $request->address;
        $data->appointment_date = $request->appointment_date;
        $data->concern = $request->concern;
        $data->save();

        return redirect()->back()->with('message', 'Appointment Request Successful');
    }

    public function history() {
        $appointments = Appointment::where('user_id', Auth::user()->id)->get();
        return view('user.history', compact('appointments'));
    }

    public function about() {
        return view('user.about');
    }
}