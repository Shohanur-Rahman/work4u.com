<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\UserEmailController;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\StudyCountry;
use App\StudyOffer;
use App\StudyOfferComments;
use App\StudyOfferApplication;
use App\Notifications;
use Illuminate\Support\Str;
use App\Mail\JobsApplicationEmail; 

class StudyOfferController extends Controller
{
    //
    public function index()
    {
        try {
            $studyOffers = StudyOffer::all();
            return view('admin.study.offeres', compact("studyOffers"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function seeker_application()
    {
        try {
            $applications = StudyOfferApplication::all();
            return view('admin.study.applications', compact("applications"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function review_study_application($id)
    {
        try {
            $application = StudyOfferApplication::find($id);
            if($application == null)
                 return view('user.not_found');

            return view('admin.study.application_review', compact("application"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function approve_application($id)
    {
        try {
            $application = StudyOfferApplication::find($id);
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
                ->route('admin_study_seeker_application')
                ->with('message', 'Application Approved.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function deleted_study_application($id)
    {
        try {
            $application = StudyOfferApplication::find($id);
            if($application == null)
                 return view('user.not_found');
             
              $application->delete();
            return redirect()
                ->route('admin_study_seeker_application')
                ->with('message', 'Application Deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    

    public function study_offer()
    {
        try {
            $countries = StudyCountry::all();
            return view('admin.study.create_offer', compact("countries"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function admin_view_study_offer($id)
    {
        try {
            $offer = StudyOffer::find($id);

            if($offer == null)
                return view('user.not_found');

            return view('admin.study.view_offer', compact("offer"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function admin_delete_study_offer($id)
    {
        try {
            $data = StudyOffer::find($id);

            if($data == null)
                return view('user.not_found');

            $randomText = Str::random(4);

            return view('admin.study.delete_offer', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function admin_delete_study_offer_post($id)
    {
        try {
            $data = StudyOffer::find($id);

            if($data == null)
                return view('user.not_found');

            $data->delete();

            return redirect()
                ->route('admin_study_offer')
                ->with('message', 'Offer successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function delete_study_offer_comments($id)
    {
        try {
            $data = StudyOfferComments::find($id);

            if($data == null)
                return view('user.not_found');

            $data->delete();

            return redirect()
                ->route('admin_study_comments')
                ->with('message', 'Comment successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function admin_copy_study_offer($id)
    {
        try {
            $offer = StudyOffer::find($id);
            $countries = StudyCountry::all();

            return view('admin.study.copy_offer', compact("offer", "countries"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }
    

    public function save_offer(Request $request)
    {
        try {
            $offer = new StudyOffer();
            $offer->country_id = $request->country_id;
            $offer->submit_email = $request->submit_email;
            $offer->name = $request->name;
            $offer->summary = $request->summary;
            $offer->educational_requirment = $request->educational_requirment;
            $offer->financial_requirement = $request->financial_requirement;
            $offer->documents_required = $request->documents_required;
            $offer->extra_title1 = $request->extra_title1;
            $offer->extra_details1 = $request->extra_details1;
            $offer->extra_title2 = $request->extra_title2;
            $offer->extra_document2 = $request->extra_document2;
            $offer->extra_title3 = $request->extra_title3;
            $offer->extra_document3 = $request->extra_document3;
            $offer->is_published = $request->has('is_published');
            $offer->save();
            return redirect()
                ->route('admin_study_offer')
                ->with('message', 'Offer successfully added.');
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function edit_offer($id)
    {
        try {
            $offer = StudyOffer::find($id);
            $countries = StudyCountry::all();

            return view('admin.study.edit_offer', compact("offer", "countries"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function update_offer(Request $request, $id)
    {
        try {
            $offer = StudyOffer::find($id);
            $offer->country_id = $request->country_id;
            $offer->submit_email = $request->submit_email;
            $offer->name = $request->name;
            $offer->summary = $request->summary;
            $offer->educational_requirment = $request->educational_requirment;
            $offer->financial_requirement = $request->financial_requirement;
            $offer->documents_required = $request->documents_required;
            $offer->extra_title1 = $request->extra_title1;
            $offer->extra_details1 = $request->extra_details1;
            $offer->extra_title2 = $request->extra_title2;
            $offer->extra_document2 = $request->extra_document2;
            $offer->extra_title3 = $request->extra_title3;
            $offer->extra_document3 = $request->extra_document3;
            $offer->is_published = $request->has('is_published');
            $offer->save();
            return redirect()
                ->route('admin_study_offer')
                ->with('message', 'Offer successfully updated.');
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function user_study_offeres_details($countryname, $countryid, $id)
    {
        try {
            $offer = StudyOffer::find($id);
            if ($offer == null) {
                return view('user.not_found');
            }
            $cmtQry = ['post_id' => $id, 'is_approved' => true, 'comment_id' => null];
            $comments = StudyOfferComments::where($cmtQry)
                ->orderBy('id', 'asc')
                ->get();
            return view('user.study.offerdetails', compact("offer", "countryname", "comments"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function all_comments()
    {
        try {
            $comments = StudyOfferComments::all();
            return view('admin.study.comments', compact("comments"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function edit_comment($id)
    {
        try {
            $comment = StudyOfferComments::find($id);
            return view('admin.study.edit_comment', compact("comment"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function user_study_offeres_application($countryname, $countryid, $id)
    {
        try {
            $offer = StudyOffer::find($id);
            if ($offer == null) {
                return view('user.not_found');
            }
            $cmtQry = ['post_id' => $id, 'is_approved' => true, 'comment_id' => null];
            $comments = StudyOfferComments::where($cmtQry)
                ->orderBy('id', 'asc')
                ->get();
            return view('user.study.application', compact("offer", "countryname", "comments"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function send_application(Request $request)
    {
        try {

            $offer = StudyOffer::where('id',$request->post_id)->firstOrFail();

            $application = new StudyOfferApplication();
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
                ->route('user_study_country')
                ->with('message', 'Application has been sent to employeer');
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }




}
