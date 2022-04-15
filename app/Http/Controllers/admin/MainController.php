<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Collection;

class MainController extends Controller
{
    public function index()
    {

        $apps = Application::paginate(5);


       // $newAds =DB::table('applications')->orderBy('created_at','desc')->take(5)->get();
        return view( 'admin.main')->with(['applications' => $apps]);
    }
}
