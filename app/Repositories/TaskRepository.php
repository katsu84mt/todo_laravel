<?php

namespace App\Repositories;

use App\Models\user;

class TaskRepository
{
    /**
     * 指定のユーザーの全佐取得
     * 
     * @param User $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}