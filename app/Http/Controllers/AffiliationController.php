<?php

namespace App\Http\Controllers;

use App\Http\Requests\Affiliation\IndexRequest;
use App\Http\Requests\Affiliation\StoreRequest;
use App\Http\Requests\Affiliation\UpdateRequest;
use App\Http\Resources\AffiliationResource;
use App\Models\Affiliation;
use App\Repositories\Interface\AffiliationInterface;

class AffiliationController extends Controller
{
    protected $affiliation;

    public function __construct(AffiliationInterface $affiliation)
    {
        $this->affiliation = $affiliation;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $affiliations = $this->affiliation->index($request->all());

        return AffiliationResource::collection($affiliations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $affiliation = $this->affiliation->store($request->all());

        return new AffiliationResource($affiliation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Affiliation $affiliation)
    {
        return new AffiliationResource($affiliation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->affiliation->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Affiliation $affiliation)
    {
        $this->affiliation->destroy($affiliation);

        return response()->json(null, 204);
    }
}
