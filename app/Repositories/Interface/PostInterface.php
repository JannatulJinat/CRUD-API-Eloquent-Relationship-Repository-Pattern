<?php

namespace App\Repositories\Interface;

use App\Models\Post;

interface PostInterface
{
    public function index();

    public function store(array $data);

    public function show(Post $post);

    public function update(array $data, $id);

    public function destroy(Post $post);
}
