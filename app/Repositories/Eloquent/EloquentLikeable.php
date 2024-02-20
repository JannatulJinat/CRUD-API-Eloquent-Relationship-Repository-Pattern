<?php

namespace App\Repositories\Eloquent;

use App\Models\Likeable;
use App\Repositories\Interface\LikeableInterface;

class EloquentLikeable implements LikeableInterface
{
    public function index()
    {
        return Likeable::paginate();
    }

    public function store(array $data)
    {
        return Likeable::create($data);

    }

    public function show(Likeable $likeable)
    {
        return Likeable::find($likeable);
    }

    public function update(array $data, $id)
    {
        return Likeable::find($id)->update($data);
    }

    public function destroy(Likeable $likeable)
    {
        return $likeable->delete();
    }
}
