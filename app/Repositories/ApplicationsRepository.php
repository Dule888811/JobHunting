<?php

namespace App\Repositories;

use App\Http\Requests\StorePostRequest;
use App\Models\Application;
use Illuminate\Support\Carbon;

class ApplicationsRepository implements ApplicationsInterface
{
        public function store(StorePostRequest  $request)
        {
            $app = new Application();
            $app->last_name = $request->last_name;
            $app->first_name = $request->first_name;
            $app->phone = $request->phone;
            $app->date_of_bird = $request->date_of_bird;
            $app->job = $request->job;
            $app->email = $request->email;
            $app->previous_experience = isset($_POST['previous_experience']) ? 1 : 0;
            $app->submited_date =Carbon::now()->format('Y-m-d');
            $app->save();
        }
}
