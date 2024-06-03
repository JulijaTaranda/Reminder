<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;
use App\Jobs\SendReminder;

class ReminderController extends Controller
{
    //All reminders from database
    public function index() {
        $reminders = Reminder::all();
        return view('reminder.index', compact('reminders'));
    }

    //Reminder create form
    public function create() {
        return view('reminder.create');
    }

    //Store new created reminder to database
    public function store(Request $request) {

        // Input validation (data from Form)
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        //Store new reminder in db
        $reminder = Reminder::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);

        //Send reminder to be queued for task execution (email sending)
        SendReminder::dispatch($reminder)->onQueue('default');
        return redirect()->route('reminders.index');
        
    }
}
