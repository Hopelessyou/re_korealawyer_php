<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagging extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['taxonomy_id', 'resource_type', 'resource_id', 'weight'];
    
    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }
}
