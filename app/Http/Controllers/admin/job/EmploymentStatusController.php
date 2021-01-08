<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\EmploymentStatus;

class EmploymentStatusController extends Controller
{
    public function index()
    {
    	$countries = EmploymentStatus::all();
		$country= null;
    	return view('admin.job.employment.index', compact("country", "countries"));
    }

    public function admin_save_employment(Request $request)
    {
    	try {

        	$country = new EmploymentStatus;
        	$country->name= $request->name;
        	$country->save();
        	return redirect()->route('admin_job_employment')->with('message', 'Employment status successfully added.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function edit_employment ($id)
    {
        try {

    		$country = EmploymentStatus::find($id);
    		$countries = EmploymentStatus::all();

        	return view('admin.job.employment.index', compact("country", "countries"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function delete_job_employment_status($id)
    {
        try {

            $data = EmploymentStatus::find($id);
            if ($data == null) {
                return view('user.not_found');
            }
            $randomText = Str::random(4);

            return view('admin.job.employment.delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function delete_job_employment_status_post($id)
    {
        try {

            $data = EmploymentStatus::find($id);
            if ($data == null) {
                return view('user.not_found');
            }
            $data->delete();

            return redirect()->route('admin_job_employment')->with('message', 'Employment status successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function update_employment(Request $request, $id)
    {
    	try {

    		$country = EmploymentStatus::find($id);
    		$country->name= $request->name;
    		$country->save();
        	return redirect()->route('admin_job_employment')->with('message', 'Employment status successfully updated.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }
}
