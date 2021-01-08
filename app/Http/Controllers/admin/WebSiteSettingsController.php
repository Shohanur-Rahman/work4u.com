<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\UserEmailController;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Mail;
use App\WebSiteSettings;

class WebSiteSettingsController extends Controller
{
    public function site_settings($value='')
    {
    	try {

            $siteSettings = WebSiteSettings::first();
            return view('admin.settings.site_settings', compact("siteSettings"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function save_site_settings(Request $request)
    {
    	try {

        	$settings = new WebSiteSettings();
        	$settings->admin_email= $request->admin_email;
        	$settings->company_address= $request->company_address;
        	$settings->mobile_number= $request->mobile_number;
        	$settings->company_email= $request->company_email;
        	$settings->support_numbers= $request->support_numbers;
        	$settings->office_time= $request->office_time;

        	$fileURL = "";

            if ($request->file('imgInp')) {
                $file = $request->file('imgInp');
                $filename = $file->getClientOriginalName();
                $mainFolder = Carbon::now()->format('F_Y');
                $subFolder = Carbon::now()->format('d');
                $destinationPath = public_path() .'/uploads/' . $mainFolder . "/" . $subFolder;
                $current_timestamp = Carbon::now()->timestamp;
                $serverPath = '/uploads/' . $mainFolder . "/" . $subFolder;



                if (!File::isDirectory($destinationPath)) {
                    File::makeDirectory($destinationPath, 0777, true);
                }




                $savingFileName = $current_timestamp . "_" . $file->getClientOriginalName();

                $file->move($destinationPath, $savingFileName);

                $fileURL = $serverPath . "/" . $savingFileName;
                $settings->logo_url = $fileURL;
            }


        	$settings->save();

        	return redirect()->route('site_settings')->with('message', 'Settings successfully changed.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }

    }


    public function update_site_settings(Request $request, $id)
    {
    	try {

        	$settings = WebSiteSettings::find($id);
        	$settings->admin_email= $request->admin_email;
        	$settings->company_address= $request->company_address;
        	$settings->mobile_number= $request->mobile_number;
        	$settings->company_email= $request->company_email;
        	$settings->support_numbers= $request->support_numbers;
        	$settings->office_time= $request->office_time;

        	$fileURL = "";

            if ($request->file('imgInp')) {
                $file = $request->file('imgInp');
                $filename = $file->getClientOriginalName();
                $mainFolder = Carbon::now()->format('F_Y');
                $subFolder = Carbon::now()->format('d');
                $destinationPath = 'uploads/' . $mainFolder . "/" . $subFolder;
                $current_timestamp = Carbon::now()->timestamp;

                if (!File::isDirectory($destinationPath)) {
                    //File::makeDirectory($destinationPath);
                    File::makeDirectory(public_path() . '/' . $destinationPath, 0777, true);
                }

                $savingFileName = $current_timestamp . "_" . $file->getClientOriginalName();

                $file->move($destinationPath, $savingFileName);

                $fileURL = $destinationPath . "/" . $savingFileName;
                $settings->logo_url = $fileURL;
            }

        	$settings->save();

        	return redirect()->route('site_settings')->with('message', 'Settings successfully changed.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }

    }


    public function about_us_settings()
    {
    	try {

            $siteSettings = WebSiteSettings::first();
            return view('admin.settings.about_settings', compact("siteSettings"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function save_about_settings(Request $request)
    {
    	try {

        	$settings = new WebSiteSettings();
        	$settings->about_us= $request->about_us;

        	$settings->save();

        	return redirect()->route('about_us_settings')->with('message', 'Settings successfully changed.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }

    }


    public function update_about_settings(Request $request, $id)
    {
    	try {

        	$settings = WebSiteSettings::find($id);
        	$settings->about_us= $request->about_us;

        	$settings->save();

        	return redirect()->route('about_us_settings')->with('message', 'Settings successfully changed.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }

    }


    public function others_settings()
    {
        try {

            $siteSettings = WebSiteSettings::first();
            return view('admin.settings.others_settings', compact("siteSettings"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function privacy_policy()
    {
        try {

            $siteSettings = WebSiteSettings::first();
            return view('admin.settings.privacy_policy', compact("siteSettings"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function terms_conditions()
    {
        try {

            $siteSettings = WebSiteSettings::first();
            return view('admin.settings.terms_conditions', compact("siteSettings"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function save_others_settings(Request $request)
    {
        try {

            $settings = new WebSiteSettings();
            $settings->facebook_link= $request->facebook_link;
            $settings->twitter_link= $request->twitter_link;
            $settings->linkdin_link= $request->linkdin_link;
            $settings->website_title= $request->website_title;
            $settings->website_tag= $request->website_tag;
            $settings->google_analytics_id= $request->google_analytics_id;
            $settings->seo_keywords= $request->seo_keywords;
            $settings->seo_description= $request->seo_description;
            $settings->important_news= $request->important_news;
            $settings->save();

            return redirect()->route('others_settings')->with('message', 'Settings successfully changed.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }

    }

    public function update_others_settings(Request $request, $id)
    {
        try {

            $settings = WebSiteSettings::find($id);
            $settings->facebook_link= $request->facebook_link;
            $settings->twitter_link= $request->twitter_link;
            $settings->linkdin_link= $request->linkdin_link;
            $settings->website_title= $request->website_title;
            $settings->website_tag= $request->website_tag;
            $settings->google_analytics_id= $request->google_analytics_id;
            $settings->seo_keywords= $request->seo_keywords;
            $settings->seo_description= $request->seo_description;
            $settings->important_news= $request->important_news;
            $settings->save();

            return redirect()->route('others_settings')->with('message', 'Settings successfully changed.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }

    }


     public function save_privacy_settings(Request $request)
    {
        try {

            $settings = new WebSiteSettings();
            $settings->privacy_policy= $request->privacy_policy;

            $settings->save();

            return redirect()->route('privacy_policy')->with('message', 'Settings successfully changed.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }

    }


    public function update_privacy_settings(Request $request, $id)
    {
        try {

            $settings = WebSiteSettings::find($id);
            $settings->privacy_policy= $request->privacy_policy;

            $settings->save();

            return redirect()->route('privacy_policy')->with('message', 'Settings successfully changed.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }

    }


    public function save_terms_settings(Request $request)
    {
        try {

            $settings = new WebSiteSettings();
            $settings->terms_conditions= $request->terms_conditions;

            $settings->save();

            return redirect()->route('terms_conditions')->with('message', 'Settings successfully changed.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }

    }


    public function update_terms_settings(Request $request, $id)
    {
        try {

            $settings = WebSiteSettings::find($id);
            $settings->terms_conditions= $request->terms_conditions;

            $settings->save();

            return redirect()->route('terms_conditions')->with('message', 'Settings successfully changed.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }

    }


}
