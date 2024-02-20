<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\Interface\PostInterface;

class EloquentPost implements PostInterface
{
    public function index()
    {
        return Post::paginate();
    }

    public function create()
    {
    }

    public function store(array $data)
    {
        $post = Post::create($data);
        if ($data['tags'])
            $post->tags()->sync($data['tags']);
        if ($data['likes'])
            $post->tags()->sync($data['likes']);

        return $post;

    }

    public function show(Post $post)
    {
        return Post::find($post);
    }

    public function edit()
    {
    }

    public function update(array $data, $id)
    {
        $post = Post::find($id);
        $post->likes()->sync($data['likes']);
        $post->tags()->sync($data['tags']);
        $post->update($data);
        return $post;
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
