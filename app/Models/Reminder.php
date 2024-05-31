<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'message', 'reminder_time'];
    public $timestamps = false;// Отключение использования временных меток для создания и обновления
}
