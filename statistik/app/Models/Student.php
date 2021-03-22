<?php

namespace App\Models;
use App\Http\Controllers\StudentsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nim', 'skor'];
}
