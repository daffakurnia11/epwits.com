<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'fundraising',
        'sponsorship',
        'epc',
        'snow',
        'big_event',
        'technical',
        'itdev',
        'media',
        'creative',
        'public_relation',
        'secretarial',
    ];
}
