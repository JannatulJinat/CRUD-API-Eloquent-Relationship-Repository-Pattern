<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interface\UserInterface;

class EloquentUser implements UserInterface
{
    public function index()
    {
        return User::paginate();
    }

    public function store(array $data)
    {
        return User::create($data);
    }

    public function show(User $user)
    {
        return User::find($user);
    }

    public function update(array $data, $id)
    {
        return User::find($id)->update($data);
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }

    /**
     * Search All resources
     *
     * @param array $searchCriteria
     * @param bool $withTrashed
     * @return mixed
     */

}
