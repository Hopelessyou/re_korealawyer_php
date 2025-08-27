<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['email', 'password', 'name', 'locale', 'status', 'meta'];
    
    protected $casts = [
        'meta' => 'array',
    ];
    
    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
    
    public function lawyerProfile()
    {
        return $this->hasOne(LawyerProfile::class, 'user_id');
    }
}
