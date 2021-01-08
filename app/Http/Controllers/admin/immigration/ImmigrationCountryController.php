<?php

namespace App\Http\Controllers\admin\immigration;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\ImmigrationCountry;

class ImmigrationCountryController extends Controller
{
    public function index()
    {
        $countries = ImmigrationCountry::all();
        $country = null;
        return view('admin.immigration.countries.index', compact("country", "countries"));
    }


    public function save_coutry(Request $request)
    {
        try {

            $country = new ImmigrationCountry();
            $country->name = $request->name;
            $country->is_published = $request->has('is_published');
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
            return redirect()->route('admin_immigrations_countries')->with('message', 'Country successfully added.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function delete_imm_country($id)
    {
        try {

            $data = ImmigrationCountry::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.immigration.countries.delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function delete_imm_country_post($id)
    {
        try {

            $data = ImmigrationCountry::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

            return redirect()->route('admin_immigrations_countries')->with('message', 'Country successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function edit_country($id)
    {
        try {

            $country = ImmigrationCountry::find($id);
            $countries = ImmigrationCountry::all();

            return view('admin.immigration.countries.index', compact("country", "countries"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function update_coutry(Request $request, $id)
    {
        try {

            $country = ImmigrationCountry::find($id);
            $country->name = $request->name;
            $country->is_published = $request->has('is_published');
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
            return redirect()->route('admin_immigrations_countries')->with('message', 'Country successfully updated.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


}
