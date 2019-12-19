<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\VillasModel;
use App\Model\Admin\ImagesModel;
use App\Model\Admin\VillaBookings;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;
use File;
use Session;

class VillasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villas = VillasModel::all();
        return view("admin/list-villas",compact('villas'));
        //echo "Success";
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

    public function bookings()
    {
        $bookings = VillaBookings::all();
        return view("admin/list-bookings",compact('bookings'));
    }

    public function featured_villas()
    {
        $condition = ['featured_villa' => 'yes'];   
        $villas = VillasModel::where($condition)->get();
        return view("admin/list-featured-villas",compact('villas'));
    }

    public function dashboard()
    {
        return view("admin/home");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/create-villas");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $villas = new villasmodel;
        $villas->name = $request->villa_name;
        $villas->slug = str_replace(' ','-',strtolower($request->villa_name));
        //$courses->slug = str_replace(' ','-',strtolower($request->course_name));
        $villas->price = $request->villa_cost;
        $villas->villa_description = $request->villa_description;
        $villas->address = $request->villa_address;
        $villas->amenities =  implode(",",(array)$request->amenities);
        //$sports->sports_taught = implode(",",(array)$request->sports_taught);
        $villas->location = $request->villa_location;
        $villas->state = $request->villa_state;
        $villas->contact_manager = $request->villa_manager;
        $villas->sleeps = $request->villa_sleep;
        $villas->bedrooms = $request->villa_bedroom;
        $villas->bathrooms = $request->villa_bathrooms;
        $villas->gmap_link = $request->gmap_link;
        $villas->featured_villa = $request->set_featured_as;
        $villas->maximum_ppl_allowed = $request->maximum_ppl_allowed;
        $villas->children_rate = $request->children_rate;
        $villas->infants_rate = $request->infants_rate;
        $villas->extra_person_cost = $request->extra_person_cost;
        $villas->dynamic_villa_cost = $request->dynamic_villa_cost;
        $villas->dynamic_villa_ppl = $request->dynamic_villa_ppl;
        $this->validate($request, [
            'profile_pic' => 'mimes:jpeg,jpg,png,bmp,tiff |max:4096',
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );
        //$villas->save();
        if($request->hasFile('profile_pic'))
        {
            //echo "here";exit;
            $img_file = $request->file('profile_pic');
            
            $img_file_name = time().'.'.$img_file->getClientOriginalName();
            //echo $img_file_name;exit;
            //$img_file->storeAs('front-end/profile-photo/',$img_file_name);     
            //$request->file('profile_pic')->storeAs('public/front-end/profile-photo/',$img_file_name);     
            $img_file->move('front-end/profile-photo/',$img_file_name);
            $villas->profile_pic = $img_file_name;
        } 
       
        $villas->save();

        return redirect(route('admin.villas.show'));
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
    public function edit_villas($id)
    {
        //$pictures = imageModel::where('villa_id',$id)->get();
        $villas = villasModel::where('id',$id)->first();
        $photos = ImagesModel::where('villa_id',$id)->get();
        return view("admin.edit-villas",compact("villas","photos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_villas(Request $request, $id)
    {
        $villas = villasModel::find($id);
        $villas->name = $request->villa_name;
        // $villas->slug = $request->villa_slug;
        $villas->price = $request->villa_cost;
        $villas->villa_description = $request->villa_description;
        $villas->address = $request->villa_address;
        $villas->amenities =  implode(",",(array)$request->amenities);
        //$sports->sports_taught = implode(",",(array)$request->sports_taught);
        $villas->location = $request->villa_location;
        $villas->state = $request->villa_state;
        $villas->contact_manager = $request->villa_manager;
        $villas->sleeps = $request->villa_sleep;
        $villas->bedrooms = $request->villa_bedroom;
        $villas->bathrooms = $request->villa_bathrooms;
        $villas->gmap_link = $request->gmap_link;
        $villas->featured_villa = $request->set_featured_as;
        $villas->maximum_ppl_allowed = $request->maximum_ppl_allowed;
        $villas->children_rate = $request->children_rate;
        $villas->infants_rate = $request->infants_rate;
        $villas->extra_person_cost = $request->extra_person_cost;
        $villas->dynamic_villa_cost = $request->dynamic_villa_cost;
        $villas->dynamic_villa_ppl = $request->dynamic_villa_ppl;
        $this->validate($request, [
            'profile_pic' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );
        //$villas->save();
        if($request->hasFile('profile_pic'))
        {
            //echo "here";exit;
            $img_file = $request->file('profile_pic');
            
            $img_file_name = time().'.'.$img_file->getClientOriginalName();
            //echo $img_file_name;exit;
            //$img_file->storeAs('front-end/profile-photo/',$img_file_name);     
            //$request->file('profile_pic')->storeAs('public/front-end/profile-photo/',$img_file_name);     
            $img_file->move('front-end/profile-photo/',$img_file_name);
            $villas->profile_pic = $img_file_name;
        } 
       
        $villas->save();

        return redirect(route('admin.villas.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        villasModel::where("id",$id)->delete();
        return redirect()->back();
    }

    public function destroy_pix($id)
    {

        ImagesModel::where("id",$id)->delete();
        return redirect()->back();
    }

    public function uploadImages(Request $request,$id)
    {
        $images = new ImagesModel();
        $img_file = $request->file('file');
        if($img_file)
        {
            $imageName = $img_file->getClientOriginalName();
            $path = 'front-end/photo-gallery/'.$id;
            if(!is_dir($path))
                {                
                File::makeDirectory($path, $mode = 0777, true, true);
                }
            $img_file->move($path,$imageName);
            //$imagePath = public_path("photo-gallery/$id/$imageName");
            $imagePath = "photo-gallery/$id/$imageName";
            $images->image_name = $imageName;
            $images->image_path = $imagePath;
            $images->villa_id = $id;
            $images->save();
        }
        return "done";
    }
}
