<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use DataTables;
use Carbon\Carbon;
use Hash;


use App\User;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
   public function index(Request $request)
    {
        $page_title = 'Client';

        if($request->ajax()){
         
         $data = User::where('is_deleted',0)->latest()->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                             ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->created_at)->format('d F Y');
                                return $btn;
                            })
                            ->addColumn('action',function($data){
                                $btn='<a href="'.url("admin/client/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                                $btn.='<a href="'.url("admin/client/edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                                $btn.=  '<a href="'.url("admin/client/delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                                // $btn.='<a href="'.url("admin/product/add-quantity").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                                // $btn.= '<a href=" url("admin/stocks/edit/'.base64_encode($data->id).'").'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                                // $btn.= '<a href="'.url("admin/stocks/delete/'.base64_encode($data->id).'").'" class="mr-4 btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }


        return view('admin::client.index',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'Create client';
        return view('admin::client.create',compact('page_title'));
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
             'email'=>'required|email',
             'password'=>'required|min:6',
             'phone'=>'required',
             'address'=>'required'
        
        ]);
        
        $checkEmail = User::where('email',$request->email)
                                ->where('status',1)
                                ->where('is_deleted',0)
                                ->first();

        $checkPhone = User::where('phone',$request->phone)
                                ->where('status',1)
                                ->where('is_deleted',0)
                                ->first();

        if(!empty($checkEmail)) return redirect()
                                                ->back()
                                                ->with('failed','Email is already exist.')
                                                ->withInput();


         if(!empty($checkPhone)) return redirect()
                                                ->back()
                                                ->with('failed','Phone is already exist.')
                                                ->withInput();

        $client = new User();
        $client->name             = $request->name;
        $client->email            = $request->email;
        $client->phone            = $request->phone;
        $client->password         = Hash::make($request->password);
        $client->random_password  = base64_encode($request->password);
        $client->address          = $request->address;
        if($client->save()){
            return redirect('admin/client')->with('success','Client added successfully.');
        }
        return redirect()->back()->with('failed','Client cannot add.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $page_title = 'Client details';
        $client = User::find(base64_decode($id));
        return view('admin::client.show',compact('page_title','client'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page_title = 'Client edit';
        $client = User::find(base64_decode($id));
        return view('admin::client.edit',compact('page_title','client'));
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
           
           if(!empty($request->password)){
              $request->validate([
             'name'=>'required',
             'phone'=>'required',
             'password'=>'required|min:6',
             'address'=>'required'
               ]);
           }else{

            $request->validate([
             'name'=>'required',
             'phone'=>'required',
             'address'=>'required'
             ]);

           }
        
        // $checkEmail = User::where('email',$request->email)
        //                         ->where('id','!=',base64_decode($client->id))
        //                         ->where('status',1)
        //                         ->where('is_deleted',0)
        //                         ->first();

        $checkPhone = User::where('phone',$request->phone)
                                ->where('id','!=',base64_decode($request->client_id))
                                ->where('status',1)
                                ->where('is_deleted',0)
                                ->first();

        // if(!empty($checkEmail)) return redirect()
        //                                         ->back()
        //                                         ->with('failed','Email is already exist.')
        //                                         ->withInput();


         if(!empty($checkPhone)) return redirect()
                                                ->back()
                                                ->with('failed','Phone is already exist.')
                                                ->withInput();

        $client = User::find(base64_decode($request->client_id));
        $client->name       = $request->name;
        // $client->email      = $request->email;
        $client->phone      = $request->phone;
        if(!empty($request->password)){
        $client->password   = Hash::make($request->password);
        $client->random_password  = base64_encode($request->password);
        }
        $client->address    = $request->address;
      
        if($client->save()){
            return redirect('admin/client')->with('success','Client updated successfully.');
        }
        return redirect()->back()->with('failed','Client cannot update.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $client = User::find(base64_decode($id));
        $client->is_deleted = 1;
        $client->save();

        return  redirect()->back()->with('success','Client deleted successfully.');
    }
}
