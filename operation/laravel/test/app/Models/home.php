<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class home extends Model
{
    use HasFactory,notifiable;
    protected $fillable=["name","age"];
    protected $table="datatable";
}
