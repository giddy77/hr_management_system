<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'trainer',
        'duration',
        'department_id',
        'cost',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function trainer()
    {
        return $this->belongsTo(User::class,'trainer','id');
    }
}
