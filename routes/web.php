<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReminderController;

Route::get('/', [ReminderController::class, 'index'])->name('reminders.index');

Route::get('/reminders/create', [ReminderController::class, 'create'])->name('reminders.create');

Route::post('/reminders', [ReminderController::class, 'store'])->name('reminders.store');


//testing email sending
//Route::get('/send-test-email', [App\Http\Controllers\TestEmailController::class, 'sendTestEmail']);
