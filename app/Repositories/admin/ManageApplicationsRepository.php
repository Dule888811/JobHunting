<?php

namespace App\Repositories\admin;

use App\Models\Application;
use App\Models\Search_params;
use Illuminate\Http\Request;

class ManageApplicationsRepository implements ManageApplicationsInterface
{
    public function search(Request $request)
    {
        $criterion = $request->criterion;
        $search = $request->search;
        $SearchCollection = collect([]);
        $applications = Application::all();
        foreach($applications as $application)
        {

            if($request->job == $application->job)
            {
                switch ($criterion) {
                    case "first_name":
                        if($search == $application->first_name)
                        {
                            $SearchCollection->push($application);
                        }
                        break;
                    case "last_name":
                        if($search == $application->last_name)
                        {
                            $SearchCollection->push($application);
                        }
                        break;
                    case "email":
                        if($search == $application->email)
                        {
                            $SearchCollection->push($application);
                        }
                        break;
                    case "phone":
                        if($search == $application->phone)
                        {
                            $SearchCollection->push($application);
                        }
                        break;
                }
            }
        }
        return $SearchCollection;
    }

    public function searchQuery(Request $request)
    {
        $searchParams = new Search_params();
        $searchParams->criterion = $request->criterion;
        $searchParams->job = $request->job;
        $searchParams->query = $request->search;
        $searchParams->save();
    }
}
