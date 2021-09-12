<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nrp',
        'email',
        'line_id',
        'motivation',
        'screenshot',
        'cv',
        'portfolio',
    ];
}
