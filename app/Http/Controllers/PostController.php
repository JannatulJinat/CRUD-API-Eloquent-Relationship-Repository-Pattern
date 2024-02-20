<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\IndexRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Repositories\Interface\PostInterface;

class PostController extends Controller
{
    protected $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $posts = $this->post->index($request->all());

        return PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // $request->validate([
        //     'tags' => 'required',
        // ]);
        $post = $this->post->store($request->all());
        return new PostResource($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {

        $this->post->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->post->destroy($post);

        return response()->json(null, 204);
    }
}
