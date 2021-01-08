<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\UserEmailController;
use Carbon\Carbon;
use File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\JobOffers;
use App\JobBenefites;
use App\JobCountries;
use App\JobCategories;
use App\EmploymentStatus;
use App\JobEmploymentStatusMap;
use App\JobBenefiteMaper;
use App\JobOfferComments;
use App\JobOfferApplication;
use App\Notifications;
use App\Mail\JobsApplicationEmail; 

class JobOffersController extends Controller
{
    public function admin_all_job()
    {
    	try {

        	$offers = JobOffers::all();
	    	return view('admin.job.offer.index', compact("offers"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function create_job()
    {
    	try {

        	$countries = JobCountries::all();
        	$employmentStatus = EmploymentStatus::all();
        	$categories = JobCategories::all();
        	$JobBenefites = JobBenefites::all();
	    	return view('admin.job.offer.create', compact("countries", "employmentStatus","categories","JobBenefites"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

    public function admin_save_job(Request $request)
    {
    	try {

        	$offer = new JobOffers;
        	$offer->name= $request->name;
            $offer->submit_email= $request->submit_email;
        	$offer->is_published= $request->has('is_published');
        	$offer->is_entry_level= $request->has('is_entry_level');
        	$offer->is_mid_level= $request->has('is_mid_level');
        	$offer->is_top_level= $request->has('is_top_level');
        	$offer->hot_job_title= $request->hot_job_title;
        	$offer->company_name= $request->company_name;
        	$offer->experience_required= $request->experience_required;
        	$offer->no_of_vacancy= $request->no_of_vacancy;
        	$offer->deadline_date= $request->deadline_date;
        	$offer->country_id= $request->country_id;
        	$offer->category_id= $request->category_id;
        	$offer->salary_range= $request->salary_range;
        	$offer->job_context= $request->job_context;
        	$offer->special_instruction= $request->special_instruction;
        	$offer->apply_procedure= $request->apply_procedure;
        	$offer->job_responsibility= $request->job_responsibility;
        	$offer->aditional_salary_info= $request->aditional_salary_info;
        	$offer->educational_requirment= $request->educational_requirment;
        	$offer->company_information= $request->company_information;
        	


            

        	$offer->save();

        	$emStatus = $request->input('employment_status');


            $test ="";
            if($emStatus){
            	foreach ($emStatus as $item) {
            		$maper = new JobEmploymentStatusMap();
            		$maper->job_id= $offer->id;
            		$maper->status_id=$item;
            		$maper->save();
            	}
            }

            //return response()->json($test );

        	$jobBenefit = $request->input('job_benefit');

            if($jobBenefit){
        		foreach ($jobBenefit as $item) {
            		$maper = new JobBenefiteMaper();
            		$maper->job_id= $offer->id;
            		$maper->benefite_id=$item;
            		$maper->save();
            	}
            }

        	

        	return redirect()->route('admin_all_job')->with('message', 'Job successfully added.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }



    public function copy_job_offer($id)
    {
        try {

            $countries = JobCountries::all();
            $employmentStatus = EmploymentStatus::all();
            $categories = JobCategories::all();
            $JobBenefites = JobBenefites::all();
            $jobOffer = JobOffers::find($id);

            if($jobOffer == null)
                 return view('user.not_found');

            return view('admin.job.offer.copy', compact("countries", "employmentStatus","categories","JobBenefites", "jobOffer"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function edit_job($id)
    {
        try {

            $countries = JobCountries::all();
            $employmentStatus = EmploymentStatus::all();
            $categories = JobCategories::all();
            $JobBenefites = JobBenefites::all();
            $jobOffer = JobOffers::find($id);

            if($jobOffer == null)
                 return view('user.not_found');

            return view('admin.job.offer.edit', compact("countries", "employmentStatus","categories","JobBenefites", "jobOffer"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function admin_delete_job($id)
    {
        try {

            $data = JobOffers::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.job.offer.delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function admin_delete_job_post($id)
    {
        try {

            $data = JobOffers::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

            return redirect()->route('admin_all_job')->with('message', 'Job successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function admin_view_job($id)
    {
        try {

            $countries = JobCountries::all();
            $employmentStatus = EmploymentStatus::all();
            $categories = JobCategories::all();
            $JobBenefites = JobBenefites::all();
            $offer = JobOffers::find($id);

            if($offer == null)
                 return view('user.not_found');

            return view('admin.job.offer.view', compact("countries", "employmentStatus","categories","JobBenefites", "offer"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function admin_edit_job(Request $request, $id)
    {
        try {

            $offer = JobOffers::find($id);
            $offer->name= $request->name;
            $offer->submit_email= $request->submit_email;
            $offer->is_published= $request->has('is_published');
            $offer->is_entry_level= $request->has('is_entry_level');
            $offer->is_mid_level= $request->has('is_mid_level');
            $offer->is_top_level= $request->has('is_top_level');
            $offer->hot_job_title= $request->hot_job_title;
            $offer->company_name= $request->company_name;
            $offer->experience_required= $request->experience_required;
            $offer->no_of_vacancy= $request->no_of_vacancy;
            $offer->deadline_date= $request->deadline_date;
            $offer->country_id= $request->country_id;
            $offer->category_id= $request->category_id;
            $offer->salary_range= $request->salary_range;
            $offer->job_context= $request->job_context;
            $offer->special_instruction= $request->special_instruction;
            $offer->apply_procedure= $request->apply_procedure;
            $offer->job_responsibility= $request->job_responsibility;
            $offer->aditional_salary_info= $request->aditional_salary_info;
            $offer->educational_requirment= $request->educational_requirment;
            $offer->company_information= $request->company_information;
            
            $offer->save();


            $existingEmploymentStatusMaper = JobEmploymentStatusMap::where('job_id', $id)
               ->get();

           JobEmploymentStatusMap::destroy($existingEmploymentStatusMaper->toArray());

            $emStatus = $request->input('employment_status');

            if($emStatus){
                foreach ($emStatus as $item) {
                    $maper = new JobEmploymentStatusMap();
                    $maper->job_id= $offer->id;
                    $maper->status_id=$item;
                    $maper->save();
                }
            }

            //return response()->json($test );

            $existingBenefitMaper = JobBenefiteMaper::where('job_id', $id)
               ->get();

           JobBenefiteMaper::destroy($existingBenefitMaper->toArray());


            $jobBenefit = $request->input('job_benefit');

            if($jobBenefit){
                foreach ($jobBenefit as $item) {
                    $maper = new JobBenefiteMaper();
                    $maper->job_id= $offer->id;
                    $maper->benefite_id=$item;
                    $maper->save();
                }
            }

            

            return redirect()->route('admin_all_job')->with('message', 'Job successfully updated.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function user_job_offeres($countryname, $id)
    {
        try {

            $countries = JobCountries::all();
            $jobOffers = JobOffers::where('country_id', $id)->get();
            return view('user.job.offerlist', compact("jobOffers","countryname", "countries"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }   
    }

    public function user_job_offeres_details($countryname, $countryid, $id)
    {
        try {
            $offer = JobOffers::find($id);
            if ($offer == null) {
                return view('user.not_found');
            }
            $cmtQry = ['post_id' => $id, 'is_approved' => true, 'comment_id' => null];
            $comments = JobOfferComments::where($cmtQry)
                ->orderBy('id', 'asc')
                ->get();
            return view('user.job.offerdetails', compact("offer", "countryname", "comments"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function user_job_offeres_application($countryname, $countryid, $id)
    {
        try {
            $offer = JobOffers::find($id);
            if ($offer == null) {
                return view('user.not_found');
            }
           
            return view('user.job.application', compact("offer", "countryname"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function send_application(Request $request)
    {
        try {

            
            $offer = JobOffers::where('id',$request->post_id)->firstOrFail();

            

            $application = new JobOfferApplication();
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
            $notify->title='New Application From Study';
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
                ->route('user_job_countries')
                ->with('message', 'Application has been sent to employeer');
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }



    public function seeker_application()
    {
        try {
            $applications = JobOfferApplication::all();
            return view('admin.job.applications.index', compact("applications"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function review_job_application($id)
    {
        try {
            $application = JobOfferApplication::find($id);
            if($application == null)
                 return view('user.not_found');

            return view('admin.job.applications.review', compact("application"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function approve_application($id)
    {
        try {
            $application = JobOfferApplication::find($id);
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
                ->route('job_seeker_application')
                ->with('message', 'Application Approved.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function deleted_job_application($id)
    {
        try {
            $application = JobOfferApplication::find($id);
            if($application == null)
                 return view('user.not_found');
             
              $application->delete();
            return redirect()
                ->route('job_seeker_application')
                ->with('message', 'Application Deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

}
