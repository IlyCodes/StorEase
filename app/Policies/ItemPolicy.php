<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Item $item)
    {
        return $user->id === $item->user_id;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Item $item)
    {
        return $user->id === $item->user_id;
    }

    public function delete(User $user, Item $item)
    {
        return $user->id === $item->user_id;
    }
}
