<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTag\IndexRequest;
use App\Http\Requests\PostTag\StoreRequest;
use App\Http\Requests\PostTag\UpdateRequest;
use App\Http\Resources\PostTagResource;
use App\Models\PostTag;
use App\Repositories\Interface\PostTagInterface;

class PostTagController extends Controller
{
    protected $postTag;

    public function __construct(PostTagInterface $postTag)
    {
        $this->postTag = $postTag;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $postTags = $this->postTag->index($request->all());

        return PostTagResource::collection($postTags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $postTag = $this->postTag->store($request->all());

        return new PostTagResource($postTag);
    }

    /**
     * Display the specified resource.
     */
    public function show(PostTag $postTag)
    {
        return new PostTagResource($postTag);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->postTag->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostTag $postTag)
    {
        $this->postTag->destroy($postTag);

        return response()->json(null, 204);
    }
}
