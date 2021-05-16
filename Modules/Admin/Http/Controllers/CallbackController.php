<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Callback;
use Carbon\Carbon;
use DataTables;

class CallbackController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    { 
        $page_title = "Callback";

         if($request->ajax()){
         
         $data = Callback::where('is_deleted',0)->latest()->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                            //  ->addColumn('image',function($data){
                            //     $btn=  '<img src="'.url('public/images/project/').'/'.$data->image.'" height="80" width="150"/>';
                            //     return $btn;
                            // })
                           ->addColumn('category',function($data){
                                $btn=  $data->category->category; 
                                return $btn;
                            })
                             ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->created_at)->format('d F Y');
                                return $btn;
                            })
                            // ->addColumn('action',function($data){
                            //     // $btn='<a href="'.url("admin/product/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                            //     $btn='<a href="'.url("admin/project/edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                            //     $btn.=  '<a href="'.url("admin/project/delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                            //     // $btn.='<a href="javascript:void(0)" class="mr-4 btn btn-warning" id="st-add-quantity" data-pid="'.base64_encode($data->id).'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                            
                            //     return $btn;
                            // })
                            ->rawColumns(['category'])
                            ->make(true);
        }

        return view('admin::callback.index',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::callback.create');
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
        return view('admin::callback.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::callback.edit');
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
    public function destroy($id)
    {
        //
    }
}
