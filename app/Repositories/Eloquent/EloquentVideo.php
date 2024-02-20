<?php

namespace App\Repositories\Eloquent;

use App\Models\Video;
use App\Repositories\Interface\VideoInterface;

class EloquentVideo implements VideoInterface
{
    public function index()
    {
        return Video::paginate();
    }

    public function store(array $data)
    {
        $video = Video::create($data);
        $video->likes()->sync($data['likes']);

        return $video;
    }

    public function show(Video $video)
    {
        return Video::find($video);
    }

    public function update(array $data, $id)
    {
        return Video::find($id)->likes()->sync($data['reaction'])->update($data);
    }

    public function destroy(Video $video)
    {
        return $video->delete();
    }
}
