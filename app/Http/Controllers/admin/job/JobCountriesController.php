<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\JobCountries;
use Illuminate\Support\Facades\File;

class JobCountriesController extends Controller
{
    //
    public function index()
    {
    	$countries = JobCountries::all();
		$country= null;
    	return view('admin.job.country.countries', compact("country", "countries"));
    }

    public function admin_save_country(Request $request)
    {
    	try {

        	$country = new JobCountries;
        	$country->name= $request->name;
        	$country->is_published= $request->has('is_published');

            $fileURL = "";

            if ($request->file('imgInp')) {
                $file = $request->file('imgInp');
                $filename = $file->getClientOriginalName();
                $mainFolder = Carbon::now()->format('F_Y');
                $subFolder = Carbon::now()->format('d');
                $destinationPath = 'uploads/' . $mainFolder . "/" . $subFolder;
                $current_timestamp = Carbon::now()->timestamp;


                if (!File::isDirectory(public_path($destinationPath))) {
                    File::makeDirectory($destinationPath, 0777, true);
                }

                $savingFileName = $current_timestamp . "_" . $file->getClientOriginalName();

                $file->move(public_path($destinationPath), $savingFileName);

                $fileURL = $destinationPath . "/" . $savingFileName;
                $country->flag = $fileURL;
            }
        	$country->save();
        	return redirect()->route('admin_job_countries')->with('message', 'Country successfully added.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function edit_job_country($id)
    {
        try {

    		$country = JobCountries::find($id);
    		$countries = JobCountries::all();

        	return view('admin.job.country.countries', compact("country", "countries"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

    public function delete_job_country($id)
    {
        try {

            $data = JobCountries::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.job.country.delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function delete_job_country_post($id)
    {
        try {

            $data = JobCountries::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

            return redirect()->route('admin_job_countries')->with('message', 'Country successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function update_coutry(Request $request, $id)
    {
    	try {

    		$country = JobCountries::find($id);
    		$country->name= $request->name;
        	$country->is_published= $request->has('is_published');

            $fileURL = "";

            if ($request->file('imgInp')) {
                $file = $request->file('imgInp');
                $filename = $file->getClientOriginalName();
                $mainFolder = Carbon::now()->format('F_Y');
                $subFolder = Carbon::now()->format('d');
                $destinationPath = 'uploads/' . $mainFolder . "/" . $subFolder;
                $current_timestamp = Carbon::now()->timestamp;


                if (!File::isDirectory(public_path($destinationPath))) {
                    File::makeDirectory($destinationPath, 0777, true);
                }

                $savingFileName = $current_timestamp . "_" . $file->getClientOriginalName();

                $file->move(public_path($destinationPath), $savingFileName);

                $fileURL = $destinationPath . "/" . $savingFileName;
                $country->flag = $fileURL;
            }

    		$country->save();
        	return redirect()->route('admin_job_countries')->with('message', 'Country successfully updated.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function user_job_countries()
    {
        try {

            $countries = JobCountries::all();
            return view('user.job.countries', compact("countries"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


}
