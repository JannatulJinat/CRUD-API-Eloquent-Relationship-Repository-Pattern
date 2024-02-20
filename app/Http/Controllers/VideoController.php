<?php

namespace App\Http\Controllers;

use App\Http\Requests\Video\IndexRequest;
use App\Http\Requests\Video\StoreRequest;
use App\Http\Requests\Video\UpdateRequest;
use App\Http\Resources\VideoResource;
use App\Models\Video;
use App\Repositories\Interface\VideoInterface;

class VideoController extends Controller
{
    protected $video;

    public function __construct(VideoInterface $video)
    {
        $this->video = $video;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $videos = $this->video->index($request->all());

        return VideoResource::collection($videos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $video = $this->video->store($request->all());

        return new VideoResource($video);
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return new VideoResource($video);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {

        $this->video->update($request->all(), $id);

        return response()->json([
            'msg' => 'Data is updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $this->video->destroy($video);

        return response()->json(null, 204);
    }
}
