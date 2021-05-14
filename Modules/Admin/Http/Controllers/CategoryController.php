<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use DataTables;
use Carbon\Carbon;

use App\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
   
    public function index(Request $request)
    {   
        $page_title = "Category";

         if($request->ajax()){
         
         $data = Category::where('is_deleted',0)->latest()->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                            //  ->addColumn('image',function($data){
                            //     $btn=  '<img src="'.url('public/images/clients/').'/'.$data->image.'" height="80" width="150"/>';
                            //     return $btn;
                            // })


                             ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->created_at)->format('d F Y');
                                return $btn;
                            })
                            ->addColumn('action',function($data){
                                // $btn='<a href="'.url("admin/product/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                                $btn='<a href="'.url("admin/category/edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                                $btn.=  '<a href="'.url("admin/category/delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                                // $btn.='<a href="javascript:void(0)" class="mr-4 btn btn-warning" id="st-add-quantity" data-pid="'.base64_encode($data->id).'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                            
                                return $btn;
                            })
                            ->rawColumns(['image','action'])
                            ->make(true);
        }

        return view('admin::category.index',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = "Category create";
        return view('admin::category.create',compact('page_title'));
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
             // 'image'       =>'required'
        ]);

         $data = new Category;
         // $file = $request->image;
         // $filname = time().'.'.$file->getClientOriginalExtension();
         // $file->move('public/images/clients',$filname);

         // $data->image = $filname;
         $data->category = $request->title;
         $data->save(); 

         return redirect('admin/category')
                        ->with('success','Category added successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::category.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page_title = "Category create";
        $data = Category::find(base64_decode($id));
        return view('admin::category.edit',compact('page_title','data'));
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

         $data = Category::find(base64_decode($request->id));
         // if($request->has('image')){

         //     $file = $request->image;
         //     $filname = time().'.'.$file->getClientOriginalExtension();
         //     $file->move('public/images/clients',$filname);
         //     $data->image = $filname;

         // }
         $data->category = $request->title;
         $data->save(); 

         return redirect('admin/category')
                        ->with('success','Category updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
          $data = Category::find(base64_decode($id));
          $data->is_deleted = 1;
          $data->save();
          return back()->with('success','Category deleted successfully.');
    }
}
