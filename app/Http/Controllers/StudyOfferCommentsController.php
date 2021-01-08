<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyOfferComments;
use App\Notifications;

class StudyOfferCommentsController extends Controller
{
    //
    public function save_comments(Request $request)
    {
        try {

            $offer = new StudyOfferComments;
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

            $comment = StudyOfferComments::find($id);
            $comment->is_approved= $request->has('is_approved');
            $comment->comment_text= $request->comment_text;
            $comment->save();
           return redirect()->route('admin_study_comments')->with('message', 'Comment successfully updated.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
        
    }
}
