<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use DataTables;
use Carbon\Carbon;

use App\Brand;

class BrandController extends Controller
{
   



    public function index(Request $request)
    {   
        $page_title = "Brands";

         if($request->ajax()){
         
         $data = Brand::where('is_deleted',0)->latest()->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                             ->addColumn('image',function($data){
                                $btn=  '<img src="'.url('public/images/clients/').'/'.$data->image.'" height="80" width="150"/>';
                                return $btn;
                            })
                             ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->created_at)->format('d F Y');
                                return $btn;
                            })
                            ->addColumn('action',function($data){
                                // $btn='<a href="'.url("admin/product/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                                $btn='<a href="'.url("admin/brand/edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                                $btn.=  '<a href="'.url("admin/brand/delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                                // $btn.='<a href="javascript:void(0)" class="mr-4 btn btn-warning" id="st-add-quantity" data-pid="'.base64_encode($data->id).'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                            
                                return $btn;
                            })
                            ->rawColumns(['image','description','action'])
                            ->make(true);
        }

        return view('admin::brands.index',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = "Brands create";
        return view('admin::brands.create',compact('page_title'));
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
             'title'       =>'required',
             // 'description' =>'required',
             'image'       =>'required'
        ]);

         $data = new Brand;
         $file = $request->image;
         $filname = time().'.'.$file->getClientOriginalExtension();
         $file->move('public/images/clients',$filname);

         $data->image = $filname;
         $data->title = $request->title;
         $data->save(); 

         return redirect('admin/brands')
                        ->with('success','Brand added successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::brands.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page_title = "Brands create";
        $data = Brand::find(base64_decode($id));
        return view('admin::brands.edit',compact('page_title','data'));
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
         'title'=>'required',
         // 'description'=>'required',
         // 'image'=>'required'
        ]);

         $data = Brand::find(base64_decode($request->id));
         if($request->has('image')){

             $file = $request->image;
             $filname = time().'.'.$file->getClientOriginalExtension();
             $file->move('public/images/clients',$filname);
             $data->image = $filname;

         }
         $data->title = $request->title;
         $data->save(); 

         return redirect('admin/brands')
                        ->with('success','Brand updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
          $data = Brand::find(base64_decode($id));
          $data->is_deleted = 1;
          $data->save();
          return back()->with('success','Brand deleted successfully.');
    }
}
