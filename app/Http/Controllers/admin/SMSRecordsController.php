<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Mail;
use App\UserEmail;
use App\SMSRecords;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MobileImport;
class SMSRecordsController extends Controller
{

    public function index()
    {
        try {


            $smsList = SMSRecords::all();
            return view('admin.sms.index', compact("smsList"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function delete_sms($id)
    {
        try {
            $sms = SMSRecords::find($id);

            if ($sms == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.sms.delete', compact("sms", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function delete_sms_post($id)
    {
        try {
            $sms = SMSRecords::find($id);

            if ($sms == null) {
                return view('user.not_found');
            }

           $sms->delete();

            return redirect()->route('sms_list')->with('message', 'Your sms has been successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function view_sms($id)
    {
        try {
            $smsList = SMSRecords::find($id);
            return view('admin.sms.view', compact("smsList"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function send_sms()
    {
        try {


            return view('admin.sms.send');
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function send_sms_to_number(Request $request)
    {
    	try {

            $sms = new SMSRecords();

            $sms->message = $request->message;

            if ($request->file('excelFile')) {

                $arr = Excel::toArray(new MobileImport, $request->file('excelFile'));
                $receipointList = "";
                foreach ($arr[0] as $key => $value) {

                    if ($key > 0) {
                        if ($value[1]) {
                            if ($receipointList == "")
                                $receipointList = $value[1];
                            else
                                $receipointList = $receipointList . ',' . $value[1];
                        }

                    }
                }

                if ($request->receipoints) {
                    $receipointList = $request->receipoints . ',' . $receipointList;
                }
            }else{
                $receipointList = $request->receipoints;
            }

            $sms->receipoints = $receipointList;



            $url = 'https://http.myvfirst.com/smpp/sendsms?username=workhtpint&password=work0098&to='.$sms->receipoints.'&udh=0&from=Work4u&text='. $sms->message .'&action=send&category=bulk';

             $client = new \GuzzleHttp\Client();
             $request = $client->get($url);
             $response = $request->getStatusCode();

             $sms->status_code = $response;

             $sms->save();

            return redirect()->route('sms_list')->with('message', 'Your sms successfully sent.');


        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }
}
