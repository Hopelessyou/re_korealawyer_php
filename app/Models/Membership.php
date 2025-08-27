<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['user_id', 'org_id', 'role_in_org', 'started_at', 'ended_at'];
    
    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function org()
    {
        return $this->belongsTo(Org::class);
    }
}
