<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'alt_phone',
        'date_joined',
        'address',
        'staff_no',
        'emp_status',
        'nationality',
        'status',
        'role',
        'manager_id',
        'review_id',
        'photo',
        'age',
        'gender',
        'department_id',
        'position_id',
        'job_id',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', //passwords are hashed using bcrypt algorithm SHA-256
    ];

    public function job()
    {
        $this->belongsTo(Job::class);
    }

    public function department()
    {
        $this->belongsTo(Department::class);
    }

    public function salary()
    {
        $this->hasOne(Salary::class);
    }

    public function position()
    {
        $this->hasOne(Position::class);
    }
}
