<?php

namespace App\Http\Controllers;

use App\Http\Requests\Likeable\IndexRequest;
use App\Http\Requests\Likeable\StoreRequest;
use App\Http\Requests\Likeable\UpdateRequest;
use App\Http\Resources\LikeableResource;
use App\Models\Likeable;
use App\Repositories\Interface\LikeableInterface;

class LikeableController extends Controller
{
    protected $likeable;

    public function __construct(LikeableInterface $likeable)
    {
        $this->likeable = $likeable;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $likeables = $this->likeable->index($request->all());

        return LikeableResource::collection($likeables);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $likeable = $this->likeable->store($request->all());

        return new LikeableResource($likeable);
    }

    /**
     * Display the specified resource.
     */
    public function show(Likeable $likeable)
    {
        return new LikeableResource($likeable);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->likeable->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Likeable $likeable)
    {
        $this->likeable->destroy($likeable);

        return response()->json(null, 204);
    }
}
