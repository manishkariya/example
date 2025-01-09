<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class homemodel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable= ["taskname","taskdetails"];
    protected $table="addtask";
}

