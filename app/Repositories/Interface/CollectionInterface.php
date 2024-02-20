<?php

namespace App\Repositories\Interface;

use App\Models\Collection;

interface CollectionInterface
{
    public function index();

    public function store(array $data);

    public function show(Collection $collection);

    public function update(array $data, $id);

    public function destroy(Collection $collection);
}
