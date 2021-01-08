<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notifications;

class NotificationsController extends Controller
{

   public function index()
    {
    	try {

        	$notifications = Notifications::all();
	    	return view('admin.notification.index', compact("notifications"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function delete_notification($id)
    {
        try {

            $data = Notifications::find($id);

            if ($data == null) {
                return view('user.not_found');
            }
            
            $data->delete();

            return redirect()->route('notification_list')->with('message', 'Notification successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }
    
}
