<?php

namespace App\Repositories\Interface;

use App\Models\Tag;

interface TagInterface
{
    public function index();

    public function store(array $data);

    public function show(Tag $tag);

    public function update(array $data, $id);

    public function destroy(Tag $tag);
}
