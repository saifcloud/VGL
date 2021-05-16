<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App\Service;
use App\Project;
use App\Brand;
use App\News;
use App\Testimonial;
use App\Contact;
use App\Setting;
use App\Category;
use App\Callback;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
     
     $services = Service::where('status',1)->where('is_deleted',0)->get();

     $website_address = Setting::where('field_key','website_address')->first();
     $contact_1       = Setting::where('field_key','contact_1')->first();
     $contact_2       = Setting::where('field_key','contact_2')->first();
     $website_email   = Setting::where('field_key','website_email')->first();

     $facebook = Setting::where('field_key','facebook')->first();
     $linkdin  = Setting::where('field_key','linkdin')->first();
     $google   = Setting::where('field_key','google')->first();
     $twitter  = Setting::where('field_key','twitter')->first();

     View::share('services',$services);
     View::share('website_address',$website_address);
     View::share('contact_1',$contact_1);
     View::share('contact_2',$contact_2);
     View::share('website_email',$website_email);



     View::share('facebook',$facebook);
     View::share('linkdin',$linkdin);
     View::share('google',$google);
     View::share('twitter',$twitter);


    }

    public function index()
    {
        //
        $project = Project::where('status',1)->where('is_deleted',0)->limit(6)->latest()->get();
        $brand   = Brand::where('status',1)->where('is_deleted',0)->limit(3)->latest()->get();
        $news    = News::where('status',1)->where('is_deleted',0)->limit(3)->get();

        $testimonial = Testimonial::where('status',1)->where('is_deleted',0)->latest()->get();


        $category =  Category::where('status',1)->where('is_deleted',0)->get();

        return view('index',compact('project','brand','news','testimonial','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        //
         $project = Project::where('status',1)
                                             ->where('is_deleted',0)
                                             ->latest()
                                             ->get();
        return view('gallery',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function news(Request $request)
    {
        //
         $news = News::where('status',1)
                                             ->where('is_deleted',0)
                                             ->latest()
                                             ->get();
        return view('news',compact('news'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        //
        return view('contact');
    }

    public function post_contact(Request $request)
    {
        //
        $request->validate([
          'name'=>'required',
          'email'=>'required|email',
          'message'=>'required'
        ]);

        $contact = new Contact;
        $contact->name    = $request->name;
        $contact->website = $request->website;
        $contact->email   = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success','Thanks for contact us, we will notify you on your email.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        //
        return view('about');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function career()
    {
        //
        return view('career');
    }


    public function callback(Request $request){
        
        $request->validate([
         'name'  =>'required',
         'email' =>'required|email',
         'phone' =>'required',
         'category'=>'required'
        ]);

        $callback = new Callback;
        $callback->name  = $request->name;
        $callback->email = $request->email;
        $callback->phone = $request->phone; 
        $callback->category_id = $request->category;
        $callback->save();

        return back()->with('success','Request has been submitted successfully.');
    }

    
   
}
