<?php

namespace App\Repositories\Interface;

use App\Models\Likeable;

interface LikeableInterface
{
    public function index();

    public function store(array $data);

    public function show(Likeable $like);

    public function update(array $data, $id);

    public function destroy(Likeable $like);
}
