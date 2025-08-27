<?php

namespace App\Policies;

use App\Models\User;
use App\Models\LegalCase;

class CasePolicy
{
    public function publish(User $user, LegalCase $case)
    {
        return $user->lawyerProfile && 
               $user->memberships()->where('org_id', $case->org_id)->exists();
    }
    
    public function update(User $user, LegalCase $case)
    {
        return $user->id === $case->created_by;
    }
}
