@extends('admin::layouts.master')
@section('content')
<body class="theme-orange">

<!-- Page Loader -->
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/icon-light.svg" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div> -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">
@include('admin::partials.navbar')
@include('admin::partials.sidebar')
    

    

    

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>{{ isset($page_title) ? $page_title:""}}</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}"><i class="icon-home"></i></a></li>
                        <!-- <li class="breadcrumb-item">Forms</li> -->
                        <li class="breadcrumb-item active">{{ isset($page_title) ? $page_title:""}}</li>
                    </ul>
                    <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a> -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            
            <div class="row clearfix">
                <div class="col-md-12">

                    <div class="card">
                        <div class="header">
                            <h2></h2>
                        </div>

                        <div class="col-sm-12">
                             @if(Session()->has('failed'))
    	                     <p class="alert alert-danger text-center">{{ Session()->get('failed')}}</p>
    	                     @endif
                        </div>


                        <div class="body">
                            <form id="basic-form" method="post" action="{{ url('admin/setting')}}" enctype="multipart/form-data">
                               @csrf
                              
                               

                                
                                 <!--  <div class="row col-sm-12 justify-content-center">
                                    
                                    <div class="form-group col-sm-4">
                                 
                                       <img src="{{ url('public/images/news/'.$logo->field_value)}}" width="300" height="150"
                                       class="image">
                                       
                                    </div>


                                 </div> -->



                                <div class="row col-sm-12">
                                    
                                   <!--  <div class="form-group col-sm-3">
                                        <label>Logo</label>
                                        <input type="file" class="form-control" name="logo">
                                        @if($errors->has('logo'))
                                        <p class="text-dangtitleer">{{ $errors->first('logo') }}</p>
                                        @endif
                                    </div> -->

                                    <div class="form-group col-sm-3">
                                        <label>Website email</label>
                                        <input type="text" class="form-control" name="website_email" value="{{ $website_email->field_value }}">
                                        @if($errors->has('website_email'))
                                        <p class="text-danger">{{ $errors->first('website_email') }}</p>
                                        @endif
                                    </div>



                                     <div class="form-group col-sm-3">
                                        <label>contact 1</label>
                                        <input type="text" class="form-control" name="contact_1" value="{{ $contact_1->field_value }}">
                                        @if($errors->has('contact_1'))
                                        <p class="text-danger">{{ $errors->first('contact_1') }}</p>
                                        @endif
                                    </div>


                                     <div class="form-group col-sm-3">
                                        <label>contact 2</label>
                                        <input type="text" class="form-control" name="contact_2" value="{{ $contact_2->field_value }}">
                                        @if($errors->has('contact_2'))
                                        <p class="text-danger">{{ $errors->first('contact_2') }}</p>
                                        @endif
                                    </div>

                                 

                                 </div>



                                   <div class="row col-sm-12">
                                     
                                    <div class="form-group col-sm-12">
                                        <label>Description</label>
                                        <textarea name="website_address" id="description">{{ $address->field_value }}</textarea>
                                         @if($errors->has('website_address'))
                                        <p class="text-danger">{{ $errors->first('website_address') }}</p>
                                        @endif
                                    </div>

                                 </div>

                                <br>

                                <button type="submit" class="btn btn-primary ml-3">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>

@endsection
<!-- <script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="http://www.wrraptheme.com/templates/hexabit/html/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="http://www.wrraptheme.com/templates/hexabit/html/assets/vendor/parsleyjs/js/parsley.min.js"></script>
    
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();

        // initialize after multiselect
        $('#basic-form').parsley();
    });
    </script>
</body>

</html>
 -->