<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use App\Mail\ContactMailer;
use Illuminate\Support\Facades\Mail;
use App\UserEmail;

class UserEmailController extends Controller
{
    //
    public function index()
    {
        $inboxMail = ['is_approved' => true, 'comment_id' => null];
        $inboxMails = UserEmail::where('outbox' , false)->orderBy('id', 'desc')->get();
        $outboxMails = UserEmail::where('outbox' , true)->orderBy('id', 'desc')->get();
    	return view('admin.emails.index', compact("inboxMails", "outboxMails"));
    }

    public function save_email($data)
    {
    	$email = new UserEmail();
        $email->to_email = 'work4u.consultancy@yahoo.com ';
        $email->to_name = 'Work4u';
        $email->from_email = $data['seeker_email'];
        $email->from_name = $data['seeker_name'];
        $email->subject = $data['application_subject'];
        $email->message = $data['application_message'];
        $email->cv_url = $data['cv_url'];
        $email->is_seen = false;
        $email->outbox = false;
        $email->save();
    }

    public function send_email(Request $request)
    {
    	$email = new UserEmail();
    	$email->to_email = $request->to_email;
    	$email->to_name = '';
    	$email->from_email = 'noreply@rams-app.co.uk';
    	$email->from_name = 'Work4u';
    	$email->subject = $request->subject;
    	$email->message = $request->message;
    	$email->is_seen = true;
        $email->outbox = true;
    	$email->save();
    	
    	$data = array(
            'seeker_name' => 'Work4U',
            'seeker_email' => $request->email,
            'from_name' => 'Work4u',
            'to_email' => 'work4u.consultancy@yahoo.com',
            'to_name' => 'Work4u',
            'application_subject' => $request->subject,
            'application_message' => $request->message,
            'mobile' => '+880 1718833391',
        );

        $mailStatus  = Mail::to('work4u.consultancy@yahoo.com')->send(new ContactMailer($data));
            

    	

        return redirect()
                ->route('mail_index')
                ->with('message', 'Email has been successfully sent.');
    }
}
