<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayRoll extends Model
{
    use HasFactory;

    protected $fillable = [
        'gross_salary',
        'taxes',
        'Deductions',
        'net_amount',
        'YTD_net',
    ];
}
