<?php

namespace App\Repositories\Interface;

use App\Models\Series;

interface SeriesInterface
{
    public function index();

    public function store(array $data);

    public function show(Series $series);

    public function update(array $data, $id);

    public function destroy(Series $series);
}
