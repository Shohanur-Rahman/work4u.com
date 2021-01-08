<?php

namespace App\Http\Controllers\admin\immigration;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\UserEmailController;
use Illuminate\Http\Request;
use App\ImmigrationCategories;
use App\ImmigrationCountry;
use App\ImmigrationOffers;
use App\ImmigrationComments;
use App\ImmigrationApplications;
use Carbon\Carbon;
use File;
use Illuminate\Support\Facades\Mail;
use App\Notifications;
use Illuminate\Support\Str;
use App\Mail\JobsApplicationEmail; 

class ImmigrationOffersController extends Controller
{
    public function index()
    {
        try {

            $immigrations = ImmigrationOffers::all();

            return view('admin.immigration.offer.index', compact('immigrations'));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

     public function seeker_application()
    {
        try {
            $applications = ImmigrationApplications::all();
            return view('admin.immigration.applications.index', compact("applications"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


     public function review_immigration_application($id)
    {
        try {
            $application = ImmigrationApplications::find($id);
            if($application == null)
                 return view('user.not_found');

            return view('admin.immigration.applications.review', compact("application"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function approve_application($id)
    {
        try {
            $application = ImmigrationApplications::find($id);
            if($application == null)
                 return view('user.not_found');

             $application->is_approved=true;

              $application->save();


             

            $data = array(
                'seeker_name' => $application->seeker_name,
                'seeker_email' => $application->seeker_email,
                'from_name' => 'Work4u',
                'to_email' => 'shohanur.rahman57@gmail.com',
                'to_name' => 'Work4u',
                'application_subject' => 'Application in Review.',
                'application_message' => 'Your application in Review.',
                'job_name' => $application->job_name,
                'cv_url' => $application->cv_url,
            );


            $mailStatus  = Mail::to($data['seeker_email'])->send(new JobsApplicationEmail($data));

            return redirect()
                ->route('admin_immigration_seeker_application')
                ->with('message', 'Application Approved.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function deleted_immigration_application($id)
    {
        try {
            $application = ImmigrationApplications::find($id);
            if($application == null)
                 return view('user.not_found');
             
              $application->delete();
            return redirect()
                ->route('admin_immigration_seeker_application')
                ->with('message', 'Application Deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function add_immigration()
    {
    	try {

    		$categories = ImmigrationCategories::all();
    		$countries = ImmigrationCountry::all();

        	return view('admin.immigration.offer.create', compact('categories', 'countries') );

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }



     public function save_immigration(Request $request)
    {
        try {

            $country = new ImmigrationOffers();
            $country->name = $request->name;
            $country->submit_email = $request->submit_email;
            $country->is_published = $request->has('is_published');
            $country->country_id = $request->country_id;
            $country->category_id = $request->category_id;
            $country->age = $request->age;
            $country->summary = $request->summary;
            $country->educational_requirment = $request->educational_requirment;
            $country->ielts_requirment = $request->ielts_requirment;
            $country->apply_instruction = $request->apply_instruction;
            $country->extra_title1 = $request->extra_title1;
            $country->extra_description1 = $request->extra_description1;
            $country->extra_title2 = $request->extra_title2;
            $country->extra_description2 = $request->extra_description2;
            $country->extra_title3 = $request->extra_title3;
            $country->extra_description3 = $request->extra_description3;

            $country->save();

            return redirect()->route('admin_immigrations_offer')->with('message', 'Immigration successfully added.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }




    public function edit_immigration($id)
    {
        try {

            $categories = ImmigrationCategories::all();
            $countries = ImmigrationCountry::all();

            $offer = ImmigrationOffers::find($id);

            return view('admin.immigration.offer.edit', compact('categories', 'countries', 'offer') );

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function delete_immigration_offer($id)
    {
        try {

            $data = ImmigrationOffers::find($id);

             if ($data == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.immigration.offer.delete', compact('data', 'randomText') );

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function delete_immigration_offer_post($id)
    {
        try {

            $data = ImmigrationOffers::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

            return redirect()->route('admin_immigrations_offer')->with('message', 'Immigration successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function view_immigration($id)
    {
        try {

            $categories = ImmigrationCategories::all();
            $countries = ImmigrationCountry::all();

            $offer = ImmigrationOffers::find($id);

            return view('admin.immigration.offer.view', compact('categories', 'countries', 'offer') );

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function copy_immigration ($id)
    {
        try {

            $categories = ImmigrationCategories::all();
            $countries = ImmigrationCountry::all();

            $offer = ImmigrationOffers::find($id);

            return view('admin.immigration.offer.copy', compact('categories', 'countries', 'offer') );

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }




    public function update_immigration(Request $request, $id)
    {
        try {

            $country = ImmigrationOffers::find($id);
            $country->name = $request->name;
            $country->submit_email = $request->submit_email;
            $country->is_published = $request->has('is_published');
            $country->country_id = $request->country_id;
            $country->category_id = $request->category_id;
            $country->age = $request->age;
            $country->summary = $request->summary;
            $country->educational_requirment = $request->educational_requirment;
            $country->ielts_requirment = $request->ielts_requirment;
            $country->apply_instruction = $request->apply_instruction;
            $country->extra_title1 = $request->extra_title1;
            $country->extra_description1 = $request->extra_description1;
            $country->extra_title2 = $request->extra_title2;
            $country->extra_description2 = $request->extra_description2;
            $country->extra_title3 = $request->extra_title3;
            $country->extra_description3 = $request->extra_description3;

            $country->save();

            return redirect()->route('admin_immigrations_offer')->with('message', 'Immigration successfully updated.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



     public function user_immigrationm_countries()
    {
        try {

            $countries = ImmigrationCountry::all();
            return view('user.immigration.countries', compact("countries"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function user_immigration_offeres ($countryname, $id)
    {
        try {

            $countries = ImmigrationCountry::all();
            $jobOffers = ImmigrationOffers::where('country_id', $id)->get();
            return view('user.immigration.offerlist', compact("jobOffers","countryname", "countries"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }   
    }


    public function user_immigration_offeres_details ($countryname, $countryid, $id)
    {
        try {
            $offer = ImmigrationOffers::find($id);
            if ($offer == null) {
                return view('user.not_found');
            }
            $cmtQry = ['post_id' => $id, 'is_approved' => true, 'comment_id' => null];
            $comments = ImmigrationComments::where($cmtQry)
                ->orderBy('id', 'asc')
                ->get();
            return view('user.immigration.offerdetails', compact("offer", "countryname", "comments"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function user_immigration_offeres_application($countryname, $countryid, $id)
    {
        try {
            $offer = ImmigrationOffers::find($id);
            if ($offer == null) {
                return view('user.not_found');
            }
           
            return view('user.immigration.application', compact("offer", "countryname"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function send_application(Request $request)
    {
        try {

            $offer = ImmigrationOffers::where('id',$request->post_id)->firstOrFail();

            $application = new ImmigrationApplications();
            $application->post_id = $request->post_id;
            $application->seeker_name = $request->seeker_name;
            $application->seeker_email = $request->seeker_email;
            $application->application_subject = $request->application_subject;
            $application->application_message = $request->application_message;
            $application->is_approved = false;
            $fileURL = "";

            if ($request->file('cvFile')) {
                $file = $request->file('cvFile');
                $filename = $file->getClientOriginalName();
                $mainFolder = Carbon::now()->format('F_Y');
                $subFolder = Carbon::now()->format('d');
                $destinationPath = public_path() .'/uploads/' . $mainFolder . "/" . $subFolder;
                $current_timestamp = Carbon::now()->timestamp;
                $serverPath = '/uploads/' . $mainFolder . "/" . $subFolder;

                if (!File::isDirectory($destinationPath)) {
                    //File::makeDirectory($destinationPath);
                    File::makeDirectory($destinationPath, 0777, true);
                }

                $savingFileName = $current_timestamp . "_" . $file->getClientOriginalName();

                $file->move($destinationPath, $savingFileName);

                $fileURL = $serverPath . "/" . $savingFileName;
                $application->cv_url = $fileURL;
            }

            $application->save();

            $notify = new Notifications();
            $notify->post_id=$application->post_id;
            $notify->subject=$application->application_subject;
            $notify->from='study';
            $notify->type='application';
            $notify->title='New Application From Immigration';
            $notify->is_seen=false;
            $notify->save();

            $data = array(
                'seeker_name' => $application->seeker_name,
                'seeker_email' => $application->seeker_email,
                'from_name' => 'Work4u',
                'to_email' => 'shohanur.rahman57@gmail.com',
                'to_name' => 'Work4u',
                'application_subject' => $application->application_subject,
                'application_message' => $application->application_message,
                'job_name' => $application->job_name,
                'cv_url' => $fileURL,
            );

            $mailStatus  = Mail::to($offer->submit_email)->send(new JobsApplicationEmail($data));

            $controller = new UserEmailController;
            $controller->save_email($data);

            return redirect()
                ->route('user_immigrationm_countries')
                ->with('message', 'Application has been sent to employeer');
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }




}
