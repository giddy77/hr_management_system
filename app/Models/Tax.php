<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'frequenzy',
        'payer',
        'rate',
        'start_date',
        'end_date',
    ];
}
