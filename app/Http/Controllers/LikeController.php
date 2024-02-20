<?php

namespace App\Http\Controllers;

use App\Http\Requests\Like\IndexRequest;
use App\Http\Requests\Like\StoreRequest;
use App\Http\Requests\Like\UpdateRequest;
use App\Http\Resources\LikeResource;
use App\Models\Like;
use App\Repositories\Interface\LikeInterface;

class LikeController extends Controller
{
    protected $like;

    public function __construct(LikeInterface $like)
    {
        $this->like = $like;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $likes = $this->like->index($request->all());

        return LikeResource::collection($likes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $like = $this->like->store($request->all());

        return new LikeResource($like);
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        return new LikeResource($like);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->like->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        $this->like->destroy($like);

        return response()->json(null, 204);
    }
}
