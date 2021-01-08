<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\JobOffers;
use App\JobBenefites;
use App\JobCountries;
use App\JobCategories;
use App\EmploymentStatus;
use App\JobEmploymentStatusMap;
use App\JobBenefiteMaper;
use App\JobOfferComments;
use App\Notifications;

class JobCommentsController extends Controller
{
    //

    public function all_comments()
    {
        try {
            $comments = JobOfferComments::all();
            return view('admin.job.comments.index', compact("comments"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function edit_comment($id)
    {
        try {
            $comment = JobOfferComments::find($id);
            return view('admin.job.comments.edit', compact("comment"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }
    
    public function save_comments(Request $request)
    {
        try {

            $offer = new JobOfferComments;
            $offer->user_id= $request->user_id;
            $offer->comment_id= $request->comment_id;
            $offer->post_id= $request->post_id;
            $offer->auth_name= $request->auth_name;
            $offer->auth_email= $request->auth_email;
            $offer->comment_text= $request->comment_text;
            $offer->save();

            $notify = new Notifications();
            $notify->post_id=$offer->post_id;
            $notify->subject= $offer->auth_name;
            $notify->from='study';
            $notify->type='comment';
            $notify->title='New Comment From Study';
            $notify->is_seen=false;
            $notify->save();

            return redirect()->back();

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
        
    }


    public function edit_comments(Request $request, $id)
    {
        try {

            $comment = JobOfferComments::find($id);
            $comment->is_approved= $request->has('is_approved');
            $comment->comment_text= $request->comment_text;
            $comment->save();
           return redirect()->route('admin_job_comments')->with('message', 'Comment successfully updated.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
        
    }


     public function delet_job_comment($id)
    {
        try {

            $data = JobOfferComments::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

            return redirect()->route('admin_job_comments')->with('message', 'Comment successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }
}
