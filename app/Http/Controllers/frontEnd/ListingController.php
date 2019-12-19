<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\VillasModel;
use App\Model\Admin\ImagesModel;
use App\Model\Admin\VillaBookings;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-end/home');
    }

    public function villa_info()
    {
        return view('front-end/villa1');
    }

    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
 
        //Mail::to("faisal.shaikh@unimaxsmart.com")->send(new DemoEmail($objDemo));
        Mail::to("gangadharan.nadar@yahoo.com")->send(new DemoEmail($objDemo));
    }

    public function ajaxBookVilla(Request $request)
    {
        // print_r($_POST);exit;
        $bookings = new VillaBookings;
        $bookings->customer_name = $request->name;
        $bookings->email = $request->email;
        $bookings->villa_name = $request->villa_name;
        $bookings->phone_no = $request->phone_no;
        $bookings->message = $request->message;
        $bookings->no_of_days = $request->no_of_days;
        $bookings->no_of_guests = $request->no_of_guests;
        $bookings->cost = $request->cost;
        $bookings->start_date = $request->start_date;
        $bookings->end_date = $request->end_date;
        if($bookings->save())
        {
        //     $objDemo = new \stdClass();
        // $objDemo->demo_one = 'Demo One Value';
        // $objDemo->demo_two = 'Demo Two Value';
        // $objDemo->sender = 'SenderUserName';
        // $objDemo->receiver = 'ReceiverUserName';
        $data = array('name'=>"Virat Gandhi");
        // $data = array(
        //     'name' => $request->name,
        //     'villa_name' => $request->villa_name,
        //     'message' => $request->message
        // );
            //Mail::to("gangadharan.nadar@yahoo.com")->send(new DemoEmail($objDemo));
            Mail::send(['text'=>'front-end.mail'], $data, function($message) {
                $message->to('gdtechwiz@gmail.com', 'Tutorials Point')->subject
                   ('Laravel Basic Testing Mail');
                $message->from('xyz@gmail.com','Virat Gandhi');
             });
            return "success";
        }
        else
        {
            return "fail";
        }

    }

    public function villas(villasModel $villas)
    {
        //print_r($villa);exit;
        /*echo $school->id;exit;*/
        // $matchConditions = ['parent_id' => $sport->id,'type' => 'sports'];
        // $images = images::where($matchConditions)->get();
        // $matchRatingConditions = ['parent_id' => $sport->id,'type' => 'sports'];
        // /*$ratings = ratingsModel::where($matchRatingConditions)->average('rating')->first();*/
        //$ratings = ratingsModel::where($matchRatingConditions)->avg('rating');
        
        /*print_r($ratings);exit;*/
        // return $slug;exit;
        // $matchConditions = ['slug'=>$slug];
        // $villas = villasModel::where($matchConditions);
         //print_r($villas);exit;
        //  $response = \GoogleMaps::load('geocoding')->setParam([
        //      'address'=>'Panvel'

        //  ])->get();
        $response = "";
         //print_r($villas->id);exit;
         $lat = json_decode($response,true);
         $matchConditions = ['villa_id'=>$villas->id];
        //$images = ImagesModel::where($matchConditions)->get(); 
        $images = ImagesModel::where('villa_id',$villas->id)->get();
        $thumbnail =  ImagesModel::where('villa_id',$villas->id)->limit(6)->get();
        //print_r($images->image_path);exit;
        // if(empty($images))
        //     { 
        //         $images = "../front-end/images/favicon.png";
        //     }
        return view("front-end/villa",compact("villas","response","lat","images","thumbnail"));
    }

    public function villas_book_property(Request $request)
    {
        return view("front-end/book-property");
    }

    public function searchVillasAlibaug()
    {     
        
        $villas = VillasModel::where('location','LIKE','%alibaug%')->orWhere('location','LIKE','%Alibaug%')->get();
        //print_r($villas);exit;
        return view('front-end/results-list',compact('villas'));

         
    }

    public function searchVillasLonavala()
    {      
        $villas = VillasModel::where('location','LIKE','%lonavala%')->orWhere('location','LIKE','%Lonavala%')->get();
        //print_r($villas);exit;
        return view('front-end/results-list',compact('villas'));

         
    }

    public function searchVillasPanvel()
    {      
        $villas = VillasModel::where('location','LIKE','%panvel%')->orWhere('location','LIKE','%Panvel%')->get();
        //print_r($villas);exit;
        return view('front-end/results-list',compact('villas'));

         
    }

    public function searchVillasKhandala()
    {      
        $villas = VillasModel::where('location','LIKE','%khandala%')->orWhere('location','LIKE','%Khandala%')->get();
        //print_r($villas);exit;
        return view('front-end/results-list',compact('villas'));

         
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('front-end/listing');
        return view('front-end/list-your-property');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
