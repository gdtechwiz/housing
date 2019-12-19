<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Mail;




class SendEmailController extends Controller
{
    public function fn_sendmail()
    {
    	$data = array(
    			'name' => "Mohit Sharma",
    	);
    	
    	Mail::send('mailtemplate', $data, function ($message) {
    		$message->from('gdtechwiz@gmail.com', 'Learning Laravel');
    	
    		$message->to('gangadharan.nadar@yahoo.com')->subject('There is a new ticket!');
    	});
    		 
    }

    public function index()
    {
        // return view("front-end/");
    }

    public function enquiryForm(EnquiryFormRequest $request)
    {
        
        $name = $request->get('name');
		$email = $request->get('email');
		
        $message = $request->get('message');
        $villa_name = $request->get('villa_name');
		$data = array(
				'name' => $name,
                'email' => $email,
                'villa_name' => $villa_name,
				'message' => $message
		);
		Mail::send('mailtemplate2', $data, function ($message) {
			$message->from($name, 'Hotel Booking Message');
			 
			$message->to('gdtechwiz@gmail.com,gangadharan.nadar@yahoo.com')->subject('Hotel Booking Message');
		});
			return redirect('/enquiryform')->with('status', 'We have received your Enquiry, Thanks!');
    }

    public function store_old(ContactFormRequest $request)
    {
        echo "here";exit;
        Mail::send('email.mail',
        [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            'villa' => $request->get('villa_name')
        ], function($message)
        {
            $message->from($request->get('email'));
            $message->to('gdtechwiz@gmail.com')->subject('Contact form');
        });
        $response = [
            'status' => 'success',
            'msg' => 'Mail sent successfully',
        ];
        //return response()->json([$response], 200);
        return response()->json(['success' => 'Your E-mail was sent! Allegedly.'], 200);

    }

    public function store(Request $request)
    {
    //     $contact = [];

    // $contact['name'] = $request->get('name');
    // $contact['email'] = $request->get('email');
    // $contact['msg'] = $request->get('msg');

    
    // Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));


    // flash('Your message has been sent!')->success();

    // return redirect()->route('home');

    // The above are old code which do not work properly.The working codes are below

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message'=> 'required'

        ]);

        Mail::send('front-end.contact-message',[ 
            'message' => $request->message
        ], function($mail) use($request) {
            $mail->from($request->email,$request->name);
            $mail->to('gdtechwiz@gmail.com')->subject('Villa Messages');
        });

        return redirect()->back()->with('flash_message','Thank u For Your Message');
    }
}
