<?php

namespace App\Repositories;

use App\Http\Requests\StorePostRequest;

interface ApplicationsInterface
{
    public function store(StorePostRequest $request);
}
