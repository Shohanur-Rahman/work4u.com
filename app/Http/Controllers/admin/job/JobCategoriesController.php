<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\JobCategories;

class JobCategoriesController extends Controller
{
    public function index()
    {
    	$countries = JobCategories::all();
		$country= null;
    	return view('admin.job.categories.index', compact("country", "countries"));
    }

    public function admin_save_category(Request $request)
    {
    	try {

        	$country = new JobCategories;
        	$country->name= $request->name;
        	$country->save();
        	return redirect()->route('admin_job_category')->with('message', 'Category successfully added.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function edit_category ($id)
    {
        try {

    		$country = JobCategories::find($id);
    		$countries = JobCategories::all();

        	return view('admin.job.categories.index', compact("country", "countries"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

    public function admin_delete_job_category($id)
    {
        try {

            $data = JobCategories::find($id);

            if ($data == null) {
                return view('user.not_found');
            }
            $randomText = Str::random(4);

            return view('admin.job.categories.delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function admin_delete_job_category_post($id)
    {
        try {

            $data = JobCategories::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

            return redirect()->route('admin_job_category')->with('message', 'Category successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function update_category(Request $request, $id)
    {
    	try {

    		$country = JobCategories::find($id);
    		$country->name= $request->name;
    		$country->save();
        	return redirect()->route('admin_job_category')->with('message', 'Category successfully updated.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }
}
