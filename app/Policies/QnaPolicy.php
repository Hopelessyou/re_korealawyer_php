<?php

namespace App\Policies;

use App\Models\User;
use App\Models\QnaQuestion;

class QnaPolicy
{
    public function accept(User $user, QnaQuestion $q)
    {
        return $user->id === $q->author_user_id;
    }
}
