<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use DataTables;
use Carbon\Carbon;

use App\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {   
        $page_title = "Testimonials";

         if($request->ajax()){
         
         $data = Testimonial::where('is_deleted',0)->latest()->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                           
                          
                           ->addColumn('description',function($data){
                                $btn=  \Str::limit($data->description, 20); 
                                return $btn;
                            })
                             ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->created_at)->format('d F Y');
                                return $btn;
                            })
                            ->addColumn('action',function($data){
                                // $btn='<a href="'.url("admin/product/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                                $btn='<a href="'.url("admin/testimonial/edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                                $btn.=  '<a href="'.url("admin/testimonial/delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                                // $btn.='<a href="javascript:void(0)" class="mr-4 btn btn-warning" id="st-add-quantity" data-pid="'.base64_encode($data->id).'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                            
                                return $btn;
                            })
                            ->rawColumns(['image','description','action'])
                            ->make(true);
        }

        return view('admin::testimonials.index',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = "Testimonial create";
        return view('admin::testimonials.create',compact('page_title'));
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
             'name'       =>'required',
             'designation' =>'required',
             'description' =>'required',
             // 'image'       =>'required'
        ]);

         $data = new Testimonial;


         // $file = $request->image;
         // $filname = time().'.'.$file->getClientOriginalExtension();
         // $file->move('public/images/bg',$filname);
         // $data->image = $filname;


         $data->name = $request->name;
         $data->designation = $request->designation;
         $data->description = $request->description;
         $data->save(); 

         return redirect('admin/testimonials')
                        ->with('success','Testimonials added successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::testimonials.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page_title = "Testimonial create";
        $data = Testimonial::find(base64_decode($id));
        return view('admin::testimonials.edit',compact('page_title','data'));
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
         'name'=>'required',
         'designation' =>'required',
         'description'=>'required',
         // 'image'=>'required'
        ]);

         $data = Testimonial::find(base64_decode($request->id));
         // if($request->has('image')){

         //     $file = $request->image;
         //     $filname = time().'.'.$file->getClientOriginalExtension();
         //     $file->move('public/images/bg',$filname);
         //     $data->image = $filname;

         // }
         $data->name = $request->name;
         $data->designation = $request->designation;
         $data->description = $request->description;
         $data->save(); 

         return redirect('admin/testimonials')
                        ->with('success','Testimonial updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
          $data = Testimonial::find(base64_decode($id));
          $data->is_deleted = 1;
          $data->save();
          return back()->with('success','Testimonial deleted successfully.');
    }
}
