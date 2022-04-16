<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Application;
use App\Models\User;
use App\Repositories\ApplicationsInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
class ApplicationsController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
        private $apps;

        public function __construct(ApplicationsInterface $apps)
        {
            $this->apps = $apps;
        }





        protected function create(StorePostRequest  $request)
        {
        $true = true;
        $applications = Application::all();
        foreach($applications as $application)
        {
            if($application->job == $request->job && $application->email == $request->email)
            {

                $app = [
                    'first_name' => $application->first_name,
                    'last_name' => $application->last_name ,
                    'email' => $application->email,
                    'date_of_bird'=> $application->date_of_bird,
                    'phone' => $application->phone,
                    'job' => $application->job,
                    'previous_experience' => $application->previous_experience,
                    'submited_date' =>  $application->submited_date,
                ];
                $massage = 'you have already applied';
                return view('welcome', compact(['app','massage']));
                $true = false;
                break;
            }
        }
        if($true)
        {
            $this->apps->store($request);
        $massage = 'you have successfully applied';
            return view('welcome', compact('massage'));

        }
    }


}
