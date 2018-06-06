<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;

class ReplyPolicy extends Policy
{
    public function update(User $user, Reply $Reply)
    {
        // return $Reply->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Reply $Reply)
    {
        return true;
    }
}
