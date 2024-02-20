<?php

namespace App\Repositories\Interface;

use App\Models\Video;

interface VideoInterface
{
    public function index();

    public function store(array $data);

    public function show(Video $video);

    public function update(array $data, $id);

    public function destroy(Video $video);
}
