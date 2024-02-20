<?php

namespace App\Repositories\Interface;

use App\Models\Like;

interface LikeInterface
{
    public function index();

    public function store(array $data);

    public function show(Like $like);

    public function update(array $data, $id);

    public function destroy(Like $like);
}
