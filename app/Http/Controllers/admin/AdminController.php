<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    //
    public function index()
    {
    	
        return view('admin.dashboard');
    }



    public function get_comments_by_date()
    {
    	try {

		     /*$studyComments = DB::table('study_offer_comments as w')
                ->select(array(DB::Raw('sum(w.id) as totalcomments'),DB::Raw('DATE(w.created_at) new_date')))
                ->groupBy('new_date')
                ->get();*/

                $studyComments = DB::table('study_offer_comments as s')
                ->select(array(DB::Raw('sum(s.id) as studycomments'),DB::Raw('DATE(s.created_at) study_date')))
                ->groupBy('study_date');

                $totalcomments = DB::table('job_offer_comments as j')
                ->select(array(DB::Raw('sum(j.id) as jobcomments'),DB::Raw('DATE(j.created_at) job_date')))
                ->groupBy('job_date')
                ->union($studyComments)
                ->get();

		     return response()->json($totalcomments);

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

    public function icons()
    {
        return view('admin.icons');
    }
}
