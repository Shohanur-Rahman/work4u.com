<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\StudyCountry;
use App\StudyOffer;

class StudyCountryController extends Controller
{
    //

    public function country()
    {
    	try {

    		$countries = StudyCountry::all();
    		$country= null;
        	return view('admin.study.country', compact("country", "countries"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

    public function save_coutry(Request $request)
    {
    	try {

        	$country = new StudyCountry;
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
        	return redirect()->route('admin_study_country')->with('message', 'Country successfully added.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }

    }

    public function edit_country ($id)
    {
        try {

    		$country = StudyCountry::find($id);
    		$countries = StudyCountry::all();

        	return view('admin.study.country', compact("country", "countries"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

    public function admin_study_country_delete ($id)
    {
        try {

            $data = StudyCountry::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.study.country_delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function admin_study_country_delete_post($id)
    {
        try {

            $data = StudyCountry::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

           return redirect()->route('admin_study_country')->with('message', 'Country successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function update_coutry(Request $request, $id)
    {
    	try {

    		$country = StudyCountry::find($id);
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
        	return redirect()->route('admin_study_country')->with('message', 'Country successfully updated.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function user_country_list()
    {
        try {

            $countries = StudyCountry::all();
            return view('user.study.country', compact("countries"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function user_study_offeres($countryname, $id)
    {
        try {

            $countries = StudyCountry::all();
            $jobOffers = StudyOffer::where('country_id', $id)->get();
            return view('user.study.offerlist', compact("jobOffers","countryname", "countries"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }
}
