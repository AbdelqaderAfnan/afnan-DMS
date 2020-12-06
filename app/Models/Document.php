<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'doc_type',
        'date_id',
        'doc_traffic',
        'profile_id',
        'subject',
        'priority_level',
        'status',
    ];
}
