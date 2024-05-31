<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;
use Carbon\Carbon;

class ReminderController extends Controller
{
    //All reminders from db
    public function index() {
        $reminders = Reminder::all();
        return view('reminder.index', compact('reminders'));
    }

    //Reminder create form
    public function create() {
        return view('reminder.create');
    }

    //Store new created remind
    public function store(Request $request) {

        // Form input validation
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|string',
            'reminder_time' => 'required|date|after:now',
        ]);

        //Store new remind in db
        Reminder::create([
            'email' => $request->email,
            'message' => $request->message,
            'reminder_time' => new Carbon($request->reminder_time),
        ]);

        return redirect()->route('reminders.index');
    }
}
