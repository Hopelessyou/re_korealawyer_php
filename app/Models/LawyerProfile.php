<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawyerProfile extends Model
{
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['user_id', 'license_no', 'verification_status', 'meta'];
    
    protected $casts = [
        'meta' => 'array',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
