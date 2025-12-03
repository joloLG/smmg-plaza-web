<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail; // For Email

class AdminController extends Controller
{
    public function showAppointments() {
        $appointments = Appointment::all();
        // Prepare events for calendar (JSON format)
        $events = [];
        foreach($appointments as $appt) {
            $events[] = [
                'title' => $appt->full_name,
                'start' => $appt->appointment_date,
                'url'   => url('/admin/appointment_details/'.$appt->id),
                'color' => '#3788d8' // Blue color
            ];
        }
        return view('admin.appointments', ['events' => $events]);
    }

    public function appointmentDetails($id) {
        $appointment = Appointment::find($id);
        return view('admin.appointment_details', compact('appointment'));
    }

    public function manageUsers() {
        $users = User::where('usertype', 'user')->get();
        return view('admin.users', compact('users'));
    }

    public function sendEmail(Request $request, $id) {
        $user = User::find($id);
        
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => 'Visit Website',
            'actionurl' => url('/'),
            'endline' => 'Thank you'
        ];

        // NOTE: You must configure .env MAIL settings for this to work
        // Using raw mail function for simplicity in this example
        // Or check Laravel Notifications. Here is a basic implementation placeholder.
        
        // Mail::to($user->email)->send(new \App\Mail\WelcomeMail($details));

        return redirect()->back()->with('message', 'Email Sent (Simulation)');
    }
}