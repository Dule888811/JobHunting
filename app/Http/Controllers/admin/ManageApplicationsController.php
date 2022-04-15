<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Search_params;
use App\Repositories\admin\ManageApplicationsInterface;
use App\Repositories\admin\ManageApplicationsRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ManageApplicationsController extends Controller
{
    private $mangeApps;
    public function __construct(ManageApplicationsInterface $mangeApps)
    {
        $this->mangeApps = $mangeApps;
    }


    public function approve($id)
    {

        DB::table('applications')
            ->where('id', $id)
            ->update(['status' => 1]);
        return back();
    }

    public function deny($id)
    {
        DB::table('applications')
            ->where('id', $id)
            ->update(['status' => 0]);
        return back();
    }

    public function delete(Application $app)
    {
        $app->delete();

        return back();
    }

    public function search(Request $request)
    {
        $this->mangeApps->searchQuery($request);
        $SearchCollection = $this->mangeApps->search( $request);
        return view('admin.search')->with('SearchCollection', $SearchCollection);

    }
}
