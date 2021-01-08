<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\JobBenefites;

class JobBenfefitesController extends Controller
{
    //
    public function index()
    {
    	$countries = JobBenefites::all();
		$country= null;
    	return view('admin.job.benefite.index', compact("country", "countries"));
    }


    public function delete_admin_job_benefit($id)
    {
        try {

            $data = JobBenefites::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.job.benefite.delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function delete_admin_job_benefit_post($id)
    {
        try {

            $data = JobBenefites::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

           return redirect()->route('admin_job_benefits')->with('message', 'Compensation & Benefit successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function admin_save_benefite(Request $request)
    {
    	try {

        	$country = new JobBenefites;
        	$country->name= $request->name;
        	$country->save();
        	return redirect()->route('admin_job_benefits')->with('message', 'Compensation & Benefit successfully added.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function edit_benefite ($id)
    {
        try {

    		$country = JobBenefites::find($id);
    		$countries = JobBenefites::all();

        	return view('admin.job.benefite.index', compact("country", "countries"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

    public function update_benefite(Request $request, $id)
    {
    	try {

    		$country = JobBenefites::find($id);
    		$country->name= $request->name;
    		$country->save();
        	return redirect()->route('admin_job_benefits')->with('message', 'Compensation & Benefit successfully updated.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }
}
