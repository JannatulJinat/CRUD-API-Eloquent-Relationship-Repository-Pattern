<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Resources\ProfileResource;
use App\Http\Requests\Profile\IndexRequest;
use App\Http\Requests\Profile\StoreRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Repositories\Interface\ProfileInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ProfileController extends Controller
{
    protected $profile;

    public function __construct(ProfileInterface $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $profiles = $this->profile->index($request->all());

        return ProfileResource::collection($profiles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $profile = $this->profile->store($request->all());

        return new ProfileResource($profile);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return new ProfileResource($profile);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->profile->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $this->profile->destroy($profile);

        return response()->json(null, 204);
    }
}
