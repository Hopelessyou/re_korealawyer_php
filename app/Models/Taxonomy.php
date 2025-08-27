<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['type', 'name_ko', 'slug', 'parent_id', 'sort', 'meta'];
    
    protected $casts = [
        'meta' => 'array',
    ];
    
    public function parent()
    {
        return $this->belongsTo(Taxonomy::class, 'parent_id');
    }
    
    public function children()
    {
        return $this->hasMany(Taxonomy::class, 'parent_id');
    }
    
    public function taggings()
    {
        return $this->hasMany(Tagging::class);
    }
}
