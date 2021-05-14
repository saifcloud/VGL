<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;
use Hash;
use Carbon\Carbon;
use App\Admin;
use App\User;
use App\Product;
use App\Stock_history;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        // echo Carbon::now()->toDateString(); die;
        $page_title ='Dashboard';

     

         

        // print_r($todaySale); die;
        return view('admin::dashboard',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {  
        $page_title ="Profile";
        $admin = Admin::find(Auth::guard('admin')->id());
        
        return view('admin::profile',compact('admin','page_title'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'name'=>'required',
          'email'=>'required'
        ]);

        $admin = Admin::find(Auth::guard('admin')->id());
        $admin->name  = $request->name;
        $admin->email = $request->email;
        $admin->save();

        return redirect('admin/dashboard');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function change_password()
    {
        $page_title = "Change password";
        return view('admin::change-password',compact('page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function store_change_password(Request $request)
    {
        $request->validate([
           'new_password'=>'required|min:6',
           'confrim_password'=>'required|min:6|same:new_password'
        ]);
        $admin = Admin::find(Auth::guard('admin')->id());
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->back()->with('success','Password has been changed successfully.');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy()
    {
        //
        Auth::guard('admin')->logout();

        return redirect('admin');
    }
}
