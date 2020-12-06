<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_date extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_sent',
        'date_received',
        'date_edited',
        'expiration_date',
    ];
    
}
