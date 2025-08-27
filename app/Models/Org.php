<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['type', 'name', 'slug', 'meta'];
    
    protected $casts = [
        'meta' => 'array',
    ];
    
    public function members()
    {
        return $this->hasMany(Membership::class);
    }
    
    public function lawfirmProfile()
    {
        return $this->hasOne(LawfirmProfile::class, 'org_id');
    }
    
    public function cases()
    {
        return $this->hasMany(LegalCase::class, 'org_id');
    }
}
