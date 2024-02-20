<?php

namespace App\Repositories\Eloquent;

use App\Models\Affiliation;
use App\Repositories\Interface\AffiliationInterface;

class EloquentAffiliation implements AffiliationInterface
{
    public function index()
    {
        return Affiliation::paginate();
    }

    public function create()
    {

    }

    public function store(array $data)
    {
        return Affiliation::create($data);

    }

    public function show(Affiliation $affiliation)
    {
        return Affiliation::find($affiliation);
    }

    public function edit()
    {

    }

    public function update(array $data, $id)
    {
        return Affiliation::find($id)->update($data);
    }

    public function destroy(Affiliation $affiliation)
    {
        return $affiliation->delete();
    }
}
