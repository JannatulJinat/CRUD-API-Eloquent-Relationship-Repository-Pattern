<?php

namespace App\Repositories\Interface;

use App\Models\Affiliation;

interface AffiliationInterface
{
    public function index();

    public function store(array $data);

    public function show(Affiliation $affiliation);

    public function update(array $data, $id);

    public function destroy(Affiliation $affiliation);
}
