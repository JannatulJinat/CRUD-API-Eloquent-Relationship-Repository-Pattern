<?php

namespace App\Repositories\Interface;

use App\Models\User;

interface UserInterface
{
    public function index();

    public function store(array $data);

    public function show(User $user);

    public function update(array $data, $id);

    public function destroy(User $user);
}
