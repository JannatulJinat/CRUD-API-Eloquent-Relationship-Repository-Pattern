<?php

namespace App\Repositories\Eloquent;

use App\Models\Series;
use App\Repositories\Interface\SeriesInterface;

class EloquentSeries implements SeriesInterface
{
    public function index()
    {
        return Series::paginate();
    }

    public function store(array $data)
    {
        return Series::create($data);
    }

    public function show(Series $series)
    {
        return Series::find($series);
    }

    public function update(array $data, $id)
    {
        return Series::find($id)->update($data);
    }

    public function destroy(Series $series)
    {
        return $series->delete();
    }
}
