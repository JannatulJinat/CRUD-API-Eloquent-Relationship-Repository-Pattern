<?php

namespace App\Repositories\Eloquent;

use App\Models\Collection;
use App\Repositories\Interface\CollectionInterface;

class EloquentCollection implements CollectionInterface
{
    public function index()
    {
        return Collection::paginate();
    }

    public function create()
    {

    }

    public function store(array $data)
    {
        return Collection::create($data);

    }

    public function show(Collection $collection)
    {
        return Collection::find($collection);
    }

    public function edit()
    {

    }

    public function update(array $data, $id)
    {
        return Collection::find($id)->update($data);
    }

    public function destroy(Collection $collection)
    {
        return $collection->delete();
    }
}
