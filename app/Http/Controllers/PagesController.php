<?php

namespace App\Http\Controllers;

use App\JobOffers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use App\FAQQuestions;
use App\Mail\ContactMailer;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function index()
    {
        $hotJobs = JobOffers::where('hot_job_title', '<>', null)->take(10)->get();
        return view('welcome', compact('hotJobs'));
    }

    public function contact_page()
    {
        return view('user.pages.contact');
    }

    public function about_us_page()
    {
        return view('user.pages.about');
    }



    public function send_contact_message(Request $request)
    {
        try {

            $data = array(
                'seeker_name' => $request->name,
                'seeker_email' => $request->email,
                'from_name' => 'Work4u',
                'to_email' => 'work4u.consultancy@yahoo.com',
                'to_name' => 'Work4u',
                'application_subject' => $request->subject,
                'application_message' => $request->message,
                'mobile' => $request->mobile,
            );

            $mailStatus  = Mail::to('work4u.consultancy@yahoo.com')->send(new ContactMailer($data));


            return redirect()
                ->route('contact_page')
                ->with('message', 'Application Sent.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function faq_page()
    {
        $faqs = FAQQuestions::all();
        return view('user.pages.faq', compact('faqs'));
    }
    public function privacy_policy()
    {
        return view('user.pages.privacy_policy');
    }
    public function terms_condition()
    {
        return view('user.pages.terms_condition');
    }

}
