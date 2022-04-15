<?php

namespace App\Repositories\admin;

use Illuminate\Http\Request;

interface ManageApplicationsInterface
{
    public function search(Request $request);
    public function searchQuery(Request $request);
}
