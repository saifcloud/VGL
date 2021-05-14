<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit()
    {   
        $page_title ="Setting";
        $logo = Setting::where('field_key','logo')->first();
        $address = Setting::where('field_key','website_address')->first();
        $contact_1 = Setting::where('field_key','contact_1')->first();
        $contact_2 = Setting::where('field_key','contact_2')->first();
        $website_email = Setting::where('field_key','website_email')->first();

        return view('admin::setting.edit',compact('logo','page_title','address','contact_1','contact_2','website_email'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {

        //
        $request->validate([
         'website_email' =>'required',
         'website_address'=>'required',
         'contact_1' =>'required',
         'contact_2' =>'required',
         // 'logo' =>'required'
        ]);


        foreach ($request->except('_token') as $key => $value) {
            # code...
            $setting = Setting::where('field_key',$key)->first();
            $setting->field_value = $value;
            $setting->save();
           // echo $value;
        }

         return redirect('admin/dashboard')->with('success','Setting has been done.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
