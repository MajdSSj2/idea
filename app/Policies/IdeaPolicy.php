<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\idea;
use App\Models\User;

class IdeaPolicy
{

    public function workWith(User $user, idea $idea): bool
    {
        return $idea->user()->is($user);
    }
}
