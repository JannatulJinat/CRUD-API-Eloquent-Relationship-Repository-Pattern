<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tag\IndexRequest;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Repositories\Interface\TagInterface;

class TagController extends Controller
{
    protected $tag;

    public function __construct(TagInterface $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $tags = $this->tag->index($request->all());

        return TagResource::collection($tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $tag = $this->tag->store($request->all());

        return new TagResource($tag);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $post)
    {
        return new TagResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->tag->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $this->tag->destroy($tag);

        return response()->json(null, 204);
    }
}
