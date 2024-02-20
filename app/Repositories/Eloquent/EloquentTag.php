<?php

namespace App\Repositories\Eloquent;

use App\Models\Tag;
use App\Repositories\Interface\TagInterface;

class EloquentTag implements TagInterface
{
    public function index()
    {
        return Tag::paginate();
    }

    public function store(array $data)
    {
        return Tag::create($data);
    }

    public function show(Tag $tag)
    {
        return Tag::find($tag);
    }

    public function update(array $data, $id)
    {
        return Tag::find($id)->update($data);
    }

    public function destroy(Tag $tag)
    {
        return $tag->delete();
    }
}
