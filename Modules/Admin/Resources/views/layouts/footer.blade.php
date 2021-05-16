<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script src="{{ url('public/admin_assets/bundles/libscripts.bundle.js') }}"></script>     -->

<script src="{{ url('public/admin_assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ url('public/admin_assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ url('public/admin_assets/bundles/chartist.bundle.js')}}"></script>

<!-- <script src="{{ url('public/admin_assets/js/toastr.js')}}"></script> -->

<script src="{{ url('public/admin_assets/bundles/mainscripts.bundle.js')}}"></script>

<script src="{{ url('public/admin_assets/js/jquery.validate.js')}}"></script>

<script src="{{ url('public/admin_assets/js/jquery.dataTables.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/bootstrap.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/dataTables.bootstrap4.min.js')}}"></script>


<!-- <script src="{{ url('public/admin_assets/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/buttons.colVis.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/buttons.html5.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/buttons.print.min.js')}}"></script> -->

<script src="{{ url('public/admin_assets/js/sweetalert.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/index.js')}}"></script>

<!-- datepicker -->
<script src="{{ url('public/admin_assets/js/bootstrap-datepicker.js')}}"></script>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>


<script>
CKEDITOR.replace( 'description' );
</script>



<!-- callback -->

<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });


        var table = $('.data-table-callback').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('admin/callback') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'category', name: 'category'},
              {data: 'date', name: 'date'},
              // {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  })
</script>



<!-- service -->
<script type="text/javascript">
	$(document).ready(function(){
     $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
	 });


	      var table = $('.data-table-services').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ url('admin/services') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'image', name: 'image'},
	            {data: 'title', name: 'title'},
	            {data: 'description', name: 'description'},
	            {data: 'date', name: 'date'},
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ]
	    });

  })
</script>





<!-- projects -->
<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });


        var table = $('.data-table-projects').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('admin/projects') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'image', name: 'image'},
              {data: 'client', name: 'client'},
              {data: 'category', name: 'category'},
              {data: 'skills', name: 'skills'},
              {data: 'budget', name: 'budget'},
              {data: 'date', name: 'date'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  })
</script>





<!-- brands -->
<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });


        var table = $('.data-table-brands').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('admin/brands') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'image', name: 'image'},
              {data: 'title', name: 'title'},
              {data: 'date', name: 'date'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  })
</script>




<!-- news -->
<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });


        var table = $('.data-table-news').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('admin/news') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'image', name: 'image'},
              {data: 'title', name: 'title'},
              {data: 'description', name: 'description'},
              {data: 'date', name: 'date'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  })
</script>




<!-- testimonial -->
<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });


        var table = $('.data-table-testimonials').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('admin/testimonials') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              // {data: 'image', name: 'image'},
              {data: 'name', name: 'name'},
              {data: 'designation', name: 'designation'},
              {data: 'description', name: 'description'},
              {data: 'date', name: 'date'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  })
</script>



<!-- contact -->
<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });


        var table = $('.data-table-contacts').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('admin/contacts') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              // {data: 'image', name: 'image'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'message', name: 'message'},
              {data: 'date', name: 'date'},
              // {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  })
</script>



<!-- category -->
<script type="text/javascript">
  $(document).ready(function(){
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });


        var table = $('.data-table-category').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('admin/category') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              // {data: 'image', name: 'image'},
              {data: 'category', name: 'category'},
             
              {data: 'date', name: 'date'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  })
</script>







</body>

</html>