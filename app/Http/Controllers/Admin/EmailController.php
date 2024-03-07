<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function index()
    {
        $countries=Countries::all();
        return view('admin.emails.index',compact('countries'));
    }
    public function show($id){
        $country=Countries::find($id);
        return view('admin.emails.show',compact('country'));
    }
    public function delete($id){
        Email::find($id)->delete();
        return redirect()->back();
    }
    public function addFavourite($id){
        $email=Email::find($id);
        $email->is_favourite=($email->is_favourite==0)?1:0;
        $email->save();
        return redirect()->back();
    }
    public function emailTemplate(){
        return view('admin.emails.template');
    }
    public function emailTemplate1(){
        return view('admin.emails.template1');
    }



    public function sendEmails($country){
        foreach (Email::where('country_id',$country)->where('status',0)->where('is_favourite',0)->get() as $dbRow){
            try {
                $data = array('name'=>"Muhammad Azeem","message"=>"Message");
                Mail::send('admin.emails.template1', $data, function($message) use($dbRow) {
                    $message->from('info@rubicsol.com', 'RUBICSOL')
                        ->to($dbRow->email, explode('@', $dbRow->email)[0])
                        ->subject('Transform Your Lab Operations with Our Revolutionary RUBIC LIMS!');
                });
                $dbRow->status=1;
                $dbRow->save();
            } catch (\Exception $exception) {
                return $exception->getMessage();
            }
        }
        return  redirect()->back();
    }
    public function sendAgain($country){
        $emails=Email::where('country_id',$country)->get();
        foreach ($emails as $email) {
            $email->status=0;
            $email->save();
        }
        return redirect()->back();
    }
    public function store(Request $request){
        //dd($request->option);
        if ($request->option==1){
            $country=Countries::find($request->country_id);
        }else{
            $country=new Countries();
            $country->name=$request->country;
            $country->save();
        }

        $emails=$request->emails;
        $emails=preg_split('/\r\n|[\r\n]/',$emails);
        foreach ($emails as $email){
            foreach (explode(',',$email) as $e){
                foreach (explode(';',$e) as $x){
                    if ($x){
                        $table=new Email();
                        $table->country_id=$country->id;
                        $table->email=$x;
                        $table->save();
                    }
                }

            }
        }
        return redirect()->back();
    }

}
