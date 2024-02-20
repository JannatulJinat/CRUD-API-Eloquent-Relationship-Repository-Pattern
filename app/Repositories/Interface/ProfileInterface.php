<?php

namespace App\Repositories\Interface;

use App\Models\Profile;

interface ProfileInterface
{
    public function index();

    public function store(array $data);

    public function show(Profile $profile);

    public function update(array $data, $id);

    public function destroy(Profile $profile);
}
