<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'mhsnim';
    protected $fillable = ['mhsnim', 'mhsnama', 'mhstgllahir'];
}
