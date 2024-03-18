<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function home(){
        return view('website.home');
    }
    public function pricing(){
        return view('website.pricing');
    }
    public function services(){
        return view('website.services');
    }
    

    public function documentation(Request $request)
    {
        $section=$request->section;
        return view('website.documentation',compact('section'));
    }

    public function contact_us()
    {
        return view('website.contact_us');
    }

    public function about_us()
    {
        return view('website.about_us');
    }

    public function url_expire(){
        return view('website.expired');
    }
    public function generate_requests($c)
    {
        $c=Crypt::decrypt($c);
        $saletaxes = Preference::where('category', 1)->get();
        $customer=Customer::find($c);
        return view('website.generate_requests', compact('saletaxes','c','customer'));
    }
    public function check_time(Request $request){
        $customer=Customer::find($request->id);
        $start=strtotime($customer->verification->format('Y-m-d H:i:s'));
        $now=time();
        $span=round(($now-$start)/60,1);
        if ($span>45){
            $data=[
                'next'=>true,
                'span'=>$span
            ];
        }else{
            $data=[
                'next'=>false,
                'span'=>$span
            ];
        }

        return response()->json($data);
    }

    public function tac()
    {
        return view('website.tac');
    }

    public function teams()
    {
        $teams = Team::all();
        return view('website.team', compact('teams'));
    }

    public function team($id)
    {
        $team = Team::find($id);
        return view('website.s_team', compact('team'));
    }

   

    public function service($id)
    {
        $service = Services::find($id);
        return view('website.service', compact('service'));
    }


    public function privacy_policy()
    {
        return view('website.privacy');
    }


    public function faqs()
    {
        $faqs = Faq::all();
        return view('website.faqs', compact('faqs'));
    }


    public function send_email(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        $subject=$request->subject;
        $to = 'info@rubicsol.com';
        $from = $request->email;
        $message=$request->message;
        Mail::html($message, function ($message) use ($subject, $to, $from) {
            $message->to($to)->subject($subject)->cc(['emazeem07@gmail.com','info@rubicsol.com'])->from($from);
        });


        /*$mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPDebug = 3;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';

        //$mail->SMTPAutoTLS = false;

        $mail->Host = "mail.aimscal.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'info@aimscal.com';
        $mail->Password = 'Bestbrands@22';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($request->email, $request->name);
        $mail->addAddress('info@aimscal.com', 'AIMS CAL LAB');
        $mail->isHTML(true);
        $mail->Subject = $request->subject;
        $mail->Body = $request->message;
        try {
            $mail->send();
        } catch (Exception $exception) {
            $response['message'] = $mail->ErrorInfo;
            return response()->json([
                'status' => 'failed',
                'status_code' => 422,
                'errors' => $response['message'],
            ], 422);
        } finally {
            http_response_code(200);
            return response()->json(['success' => 'Email sent successfully']);
        }*/


        return response()->json(['success' => 'Email sent successfully']);
    }

    public function customer_store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "plant" => "required",
            "industry" => "required",
            "ntn" => "required",
            "region" => "required",
            "address" => "required",
            "bill_to_address" => "required",
            'add_contact_type'=>'required',
            'add_contact_name'=>'required',
            'add_contact_email'=>'required',
            'add_contact_phone'=>'required',
        ],[
            'add_contact_type.required'=>'Customer contact type field is required.*',
            'add_contact_name.required'=>'Customer contact name field is required.*',
            'add_contact_email.required'=>'Customer contact email field is required.*',
            'add_contact_phone.required'=>'Customer contact phone field is required.*',
        ]);

        $customer = new OnlineCustomers();

        $customer->reg_name = $request->name;
        $customer->plant = $request->plant;
        $customer->industry = $request->industry;
        $customer->ntn = $request->ntn;
        $customer->strn = $request->strn;
        $customer->region = $request->region;
        $customer->address = $request->address;
        $customer->bill_to_address = $request->bill_to_address;

        $customer->type=$request->add_contact_type;
        $customer->name=$request->add_contact_name;
        $customer->email=$request->add_contact_email;
        $customer->phone=$request->add_contact_phone;
        $customer->save();

        return response()->json(['success' => 'Your request to register in AIMS customers list is sent successfully.!']);
    }

    public function getCapabilities(Request $request)
    {
        if ($request->type==0){
            $data['capabilities'] = Capabilities::where('parameter', $request->parameter)
                ->where('group_id', null)
                ->orderBy('name', 'ASC')
                ->get();
            $data['unit'] = Unit::where('parameter', $request->parameter)
                ->orderBy('unit', 'ASC')
                ->pluck('id', 'unit')
                ->all();
        }else if ($request->type==1){
            $data['capabilities'] = Capabilities::where('is_group', 1)
                ->orderBy('name', 'ASC')
                ->get();
            $data['unit'] = Unit::orderBy('unit', 'ASC')
                ->pluck('id', 'unit')
                ->all();
        }else{
            $data['unit'] = Unit::orderBy('unit', 'ASC')
                ->pluck('id', 'unit')
                ->all();
        }


        return response()->json($data);
    }

    public function validate_rfq(Request $request)
    {
        $this->validate(request(), [
            'type' => 'required',
            'parameter' => 'required',
            'min_range' => 'required',
            'max_range' => 'required',
            'quantity' => 'required',
            'location' => 'required',
            'unit' => 'required',
            'make' => 'required',
            'model' => 'required',
            'resolution' => 'required',
            'accuracy' => 'required',
            'serial' => 'required',
            'eq_id' => 'required',
        ], [
            'type.required' => 'Item type field is required *',
            'parameter.required' => 'Parameter field is required *',
            'range.0.required' => 'Min Range field is required *',
            'range.1.required' => 'Max Range field is required *',
            'quantity.required' => 'Quantity field is required *',
            'location.required' => 'Location field is required *',
            'unit.required' => 'Unit field is required *',
            'accuracy.required' => 'Accuracy field is required *',
            'resolution.required' => 'Resolution field is required *',
            'make.required' => 'Make field is required *',
            'model.required' => 'Model field is required *',
            'serial.required' => 'Serial field is required *',
            'eq_id.required' => 'Equipment ID field is required *',
        ]);

        if ($request->type==2){
            $this->validate(request(), [
                'ncapability' => 'required',
            ],[
                'ncapability.required' => 'Capability field is required *',
            ]);
        }else{
            $this->validate(request(), [
                'capability' => 'required',
            ],[
                'capability.required' => 'Capability field is required *',
            ]);
        }
        $time=time();

        if ($request->type==0){
            $typename='Single Parameter';
        }else if ($request->type==1){
            $typename='Multi Parameter';
        }else{
            $typename='Non-Listed';
        }

        $data = [
            'id'=>$time,
            "type" => $request->type,
            "type_name" => $typename,
            "parameter" => $request->parameter,
            "capability" => $request->capability,
            "unit" => $request->unit,

            "capability_name" => $request->type==2?$request->ncapability:Capabilities::find($request->capability)->name,
            "parameter_name" => $request->parameter==0?'Multi':Parameter::find($request->parameter)->name,
            "unit_name" => Unit::find($request->unit)->unit,

            "make" => $request->make,
            "model" => $request->model,
            "serial" => $request->serial,
            "eq_id" => $request->eq_id,

            "min_range" => $request->min_range,
            "max_range" => $request->max_range,
            "resolution" => $request->resolution,
            "accuracy" => $request->accuracy,

            "location" => $request->location,
            "quantity" => $request->quantity,
        ];
        return response()->json($data);
    }

    public function store_rfq(Request $request)
    {
        if (!$request->data){
            $response['message']=['Your items list is empty. Please select to continue!'];
            return response()->json([
                'status'      => 'failed',
                'status_code' => 422,
                'errors'     => $response['message'],
            ], 422);
        }
        $session=new WebRfqItem();
        $session->customer_id=$request->customer;
        $session->save();
        foreach ($request->data as $datum){
            $item=new WebRfqItem();
            $item->parent_id=$session->id;
            $item->type=$datum['type'];
            $item->parameter=$datum['parameter'];
            $item->capability=$datum['type']==2?$datum['capability_name']:$datum['capability'];
            $item->unit=$datum['unit'];
            $item->make=$datum['make'];
            $item->model=$datum['model'];
            $item->serial=$datum['serial'];
            $item->eq_id=$datum['eq_id'];
            $item->range=$datum['min_range'].','.$datum['max_range'];
            $item->resolution=$datum['resolution'];
            $item->accuracy=$datum['accuracy'];
            $item->location=$datum['location'];
            $item->quantity=$datum['quantity'];
            $item->save();
        }
        return response()->json(['success' => 'Request for quote is sent successfully!']);
    }

    //
}
