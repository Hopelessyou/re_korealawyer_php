<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QnaAnswer extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['question_id', 'author_user_id', 'body', 'is_solution'];
    
    protected $casts = [
        'is_solution' => 'boolean',
    ];
    
    public function question()
    {
        return $this->belongsTo(QnaQuestion::class, 'question_id');
    }
    
    public function author()
    {
        return $this->belongsTo(User::class, 'author_user_id');
    }
}
