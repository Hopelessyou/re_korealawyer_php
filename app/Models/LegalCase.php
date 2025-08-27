<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    protected $table = 'cases';
    
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'title', 'summary', 'body', 'org_id', 'status', 
        'outcome_type', 'published_at', 'created_by', 'meta'
    ];
    
    protected $casts = [
        'published_at' => 'datetime',
        'meta' => 'array',
    ];
    
    public function lawfirm()
    {
        return $this->belongsTo(Org::class, 'org_id');
    }
    
    public function lawyers()
    {
        return $this->belongsToMany(User::class, 'case_lawyers', 'case_id', 'lawyer_user_id')
                    ->withPivot('role');
    }
    
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
