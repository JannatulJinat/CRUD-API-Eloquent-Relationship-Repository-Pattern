<?php

namespace App\Http\Controllers;

use App\Http\Requests\Series\IndexRequest;
use App\Http\Requests\Series\StoreRequest;
use App\Http\Requests\Series\UpdateRequest;
use App\Http\Resources\SeriesResource;
use App\Models\Series;
use App\Repositories\Interface\SeriesInterface;

class SeriesController extends Controller
{
    protected $series;

    public function __construct(SeriesInterface $series)
    {
        $this->series = $series;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $multipleSeries = $this->series->index($request->all());

        return SeriesResource::collection($multipleSeries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $series = $this->series->store($request->all());

        return new SeriesResource($series);
    }

    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {
        return new SeriesResource($series);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->series->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        $this->series->destroy($series);

        return response()->json(null, 204);
    }
}
