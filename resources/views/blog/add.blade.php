@extends('layouts.app')


@section('title')
<title>Admin | Add</title>
@endsection

@section('style')
@include('includes.style')
<style type="text/css">
	.tox-notifications-container {
            display: none;
        }
        .tox-editor-header{
        	display: none !important;
        }
</style>
@endsection

@section('content')
<!-- Top Bar Start -->
@include('includes.header')
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
@include('includes.sidebar')
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="wraper container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="pull-left page-title">Manage Blog Add</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.blog')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
                    </ol>
				</div>
			</div>
			@include('includes.message')
			
			<div class="row">
				<div class="col-lg-12">
					<div>
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							
							<div class="panel-body rm02 rm04">
								<form role="form" action="{{route('manage.blog.insert')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<div class="form-group rm03">
										<label for="title">Post Type</label>
										<select class="form-control" required name="post_type" id="post_type">
											<option value="">Select</option>
											<option value="P">Product</option>
											<option value="B">Blog</option>
											
										</select>
									</div>

									

									<div class="form-group rm03">
										<label for="title">Title</label>
										<input type="text"  class="form-control"  placeholder="Enter name"  name="title" >
									</div>
									

									<div class="clearfix"></div>

									
									<div class="form-group rm03">
										<label for="title">Description</label>
										<textarea class="form-control text_complaint" id="text_complaint" style="height:200px;" name="description"></textarea>
									</div>


									<div class="product_post">

									<div class="form-group rm03">
										<label for="title">Category</label>
										<select class="form-control" required name="category_id">
											<option value="">Select</option>
											<option value="1">Fitness</option>
											<option value="2">Books</option>
											<option value="3">Trending</option>
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">MRP</label>
										<input type="number"  class="form-control"  placeholder="Enter price"  name="mrp" >
									</div>

									<div class="form-group rm03">
										<label for="title">Selling Price</label>
										<input type="number"  class="form-control"  placeholder="Enter price"  name="price" >
									</div>

									{{-- <div class="form-group rm03">
										<label for="title">Discount (%)</label>
										<input type="number"  class="form-control"  placeholder="Enter discount (%)" value="0"  name="discount" >
									</div> --}}

									<div class="form-group rm03">
										<label for="title">Stock</label>
										<select class="form-control" name="stock">
										<option value="IS">In-Stock</option>
										<option value="OS">Out of Stock</option>
										</select>
									</div>

									</div>
									

									

									<div class="form-group rm50">
										<label for="title">Home page image </label>
										<input type="file"  class="form-control" name="image" onchange="fun1()" id="icon">
									</div>

									{{-- preview-image --}}
					                                   <div class="form-group rm03">
					                                    <img style="width: 100px;height: 100px" id="img2">
					                                   </div>

					                                   <div class="form-group rm50">
										<label for="title">Product Page Image</label>
										<input type="file"  class="form-control" name="product_image" onchange="fun2()" id="icon2">
									</div>

									{{-- preview-image --}}
					                                   <div class="form-group rm03">
					                                    <img style="width: 100px;height: 100px" id="img3">
					                                   </div>
									
									<div class="clearfix"></div>


									
							
									
									<div class="clearfix"></div>
									<div class="col-lg-12" style="margin-top: 10px;">
										<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Add</button>
									</div>
								</form>
							</div>
						</div>
						<!-- Personal-Information -->
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- content -->
	
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
@section('footer')
@include('includes.footer')
@endsection
@endsection
{{-- end content --}}
@section('script')
@include('includes.script')
{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}} {{-- for datepicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.2.1/tinymce.min.js"></script>

    <script>
       tinymce.init({
         selector: 'textarea.text_complaint', // Replace this CSS selector to match the placeholder element for TinyMCE
         license_key: 'gpl',
         plugins: '',
         toolbar: ''
       });

       
     </script>


<script>
$(document).ready(function(){
	
$('#frm').validate({
rules:{
title:{
required:true,
},
image:{
required:true,
},

},
messages:{
//  link:{
//     required:" social link is mandatory",
//     min:"Enter valid links"
// }
}
});
});
</script>

<script>
        function fun1(){
        var i=document.getElementById('icon').files[0];
        var b=URL.createObjectURL(i);
        $("#img2").attr("src",b);
    }

    function fun2(){
        var i=document.getElementById('icon2').files[0];
        var b=URL.createObjectURL(i);
        $("#img3").attr("src",b);
    }

    $('#post_type').on('change',function(e){
    	var post_type = $('#post_type').val();
    	if(post_type=="P")
    	{
    	   $('.product_post').show();		
    	}else{
    	    $('.product_post').hide();		
    	}
    });
</script> 



@endsection