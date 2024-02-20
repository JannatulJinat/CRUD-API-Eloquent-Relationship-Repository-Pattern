<?php

namespace App\Http\Controllers;

use App\Http\Requests\Collection\IndexRequest;
use App\Http\Requests\Collection\StoreRequest;
use App\Http\Requests\Collection\UpdateRequest;
use App\Http\Resources\CollectionResource;
use App\Models\Collection;
use App\Repositories\Interface\CollectionInterface;

class CollectionController extends Controller
{
    protected $collection;

    public function __construct(CollectionInterface $collection)
    {
        $this->collection = $collection;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $collections = $this->collection->index($request->all());

        return CollectionResource::collection($collections);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $collection = $this->collection->store($request->all());

        return new CollectionResource($collection);
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return new CollectionResource($collection);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->collection->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $this->collection->destroy($collection);

        return response()->json(null, 204);
    }
}
