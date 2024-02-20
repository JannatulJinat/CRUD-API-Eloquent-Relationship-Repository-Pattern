<?php

namespace App\Repositories\Interface;

use App\Models\PostTag;

interface PostTagInterface
{
    public function index();

    public function store(array $data);

    public function show(PostTag $post);

    public function update(array $data, $id);

    public function destroy(PostTag $post);
}
