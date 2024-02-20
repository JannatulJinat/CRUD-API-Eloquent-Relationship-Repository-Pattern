<?php

namespace App\Repositories\Eloquent;

use App\Models\PostTag;
use App\Repositories\Interface\PostTagInterface;

class EloquentPostTag implements PostTagInterface
{
    public function index()
    {
        return PostTag::paginate();
    }

    public function create()
    {

    }

    public function store(array $data)
    {
        return PostTag::create($data);

    }

    public function show(PostTag $postTag)
    {
        return PostTag::find($postTag);
    }

    public function edit()
    {

    }

    public function update(array $data, $id)
    {
        return PostTag::find($id)->update($data);
    }

    public function destroy(PostTag $postTag)
    {
        return $postTag->delete();
    }
}
