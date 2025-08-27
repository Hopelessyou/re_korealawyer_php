<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QnaQuestion extends Model
{
    use SoftDeletes;
    
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['title', 'body', 'author_user_id', 'status'];
    
    public function author()
    {
        return $this->belongsTo(User::class, 'author_user_id');
    }
    
    public function answers()
    {
        return $this->hasMany(QnaAnswer::class, 'question_id');
    }
    
    public function acceptedAnswer()
    {
        return $this->belongsTo(QnaAnswer::class, 'accepted_answer_id');
    }
}
