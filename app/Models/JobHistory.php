<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'department_id',
        'start_date',
        'end_date',
    ];


    public function user()
    {
        $this->belongsTo(User::class);
    }
}
