<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawfirmProfile extends Model
{
    protected $primaryKey = 'org_id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['org_id', 'intro', 'meta'];
    
    protected $casts = [
        'meta' => 'array',
    ];
    
    public function org()
    {
        return $this->belongsTo(Org::class);
    }
}
