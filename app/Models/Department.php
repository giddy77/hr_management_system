<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'manager_id',
        'location',
        'description',
    ];

    public function users()
    {
        $this->hasMany(User::class);
    }

    public function manager()
    {
       return $this->hasOne(User::class,'id','manager_id');
    }
}
