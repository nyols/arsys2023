<?php

namespace App\Models\Tdl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['todotext'];
    protected $table = 'arsys_todo';
}
