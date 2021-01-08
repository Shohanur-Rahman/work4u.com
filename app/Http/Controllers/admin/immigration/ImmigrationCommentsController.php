<?php

namespace App\Http\Controllers\admin\immigration;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ImmigrationCategories;
use App\ImmigrationCountry;
use App\ImmigrationOffers;
use App\ImmigrationComments;
use App\Notifications;

class ImmigrationCommentsController extends Controller
{
   //

	public function all_comments($value='')
	{
		try {
            $comments = ImmigrationComments::all();
            return view('admin.immigration.comments.index', compact("comments"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
	}


    public function edit_comment($id)
    {
        try {
            $comment = ImmigrationComments::find($id);
            return view('admin.immigration.comments.edit', compact("comment"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function save_comments(Request $request)
    {
        try {

            $offer = new ImmigrationComments;
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
            $notify->from='immigration';
            $notify->type='comment';
            $notify->title='New Comment From Immigration';
            $notify->is_seen=false;
            $notify->save();

            return redirect()->back();

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
        
    }


    public function update_comments(Request $request, $id)
    {
        try {

            $comment = ImmigrationComments::find($id);
            $comment->is_approved= $request->has('is_approved');
            $comment->comment_text= $request->comment_text;
            $comment->save();
           return redirect()->route('admin_immigration_comments')->with('message', 'Comment successfully updated.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
        
    }
    
}
