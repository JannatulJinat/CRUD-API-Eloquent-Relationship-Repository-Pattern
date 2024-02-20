<?php

namespace App\Repositories\Eloquent;

use App\Models\Like;
use App\Repositories\Interface\LikeInterface;

class EloquentLike implements LikeInterface
{
    public function index()
    {
        return Like::paginate();
    }

    public function store(array $data)
    {
        return Like::create($data);

    }

    public function show(Like $like)
    {
        return Like::find($like);
    }

    public function update(array $data, $id)
    {
        return Like::find($id)->update($data);
    }

    public function destroy(Like $like)
    {
        return $like->delete();
    }
}
