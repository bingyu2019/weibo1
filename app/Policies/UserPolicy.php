<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    // 当前用户等于当前登录用户
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    // 是管理员，不能删除自己
    public function destroy(User $currentUser,User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }

    // 自己不能关注自己
    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !== $user->id;
    }

}
