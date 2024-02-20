<?php

namespace App\Repositories\Eloquent;

use App\Models\Profile;
use App\Repositories\Interface\ProfileInterface;

class EloquentProfile implements ProfileInterface
{
    public function index()
    {
        return Profile::paginate();
    }

    public function store(array $data)
    {
        return Profile::create($data);
    }

    public function show(Profile $profile)
    {
        return Profile::find($profile);
    }

    public function update(array $data, $id)
    {
        return Profile::find($id)->update($data);
    }

    public function destroy(Profile $profile)
    {
        return $profile->delete();
    }
}
