@extends('layouts.app')


@section('title')
<title>Admin | Manage Blog Edit</title>
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
					<h4 class="pull-left page-title">Manage Blog Edit</h4>
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
								<form role="form" action="{{route('manage.blog.update')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf
									<input type="hidden" name="id" value="{{@$data->id}}">

									<div class="form-group rm03">
										<label for="title">Post Type</label>
										<select class="form-control" required name="post_type" id="post_type">
											<option value="">Select</option>
											<option value="P" @if(@$data->post_type=="P") selected @endif>Product</option>
											<option value="B" @if(@$data->post_type=="B") selected @endif>Blog</option>
											
										</select>
									</div>

									


									<div class="form-group rm03">
										<label for="title">Title</label>
										<input type="text"  class="form-control" value="{{@$data->title}}"  placeholder="Enter name"  name="title" >
									</div>
									

									<div class="clearfix"></div>

									
									<div class="form-group rm03">
										<label for="title">Description</label>
										<textarea class="form-control text_complaint" id="text_complaint" style="height:200px;" name="description">{{@$data->description}}</textarea>
									</div>


									<div class="product_post" @if(@$data->post_type=="P") style="display:block" @else style="display:none" @endif >

									<div class="form-group rm03">
										<label for="title">Category</label>
										<select class="form-control" required name="category_id">
											<option value="">Select</option>
											<option value="1" @if(@$data->category_id==1) selected @endif>Fitness</option>
											<option value="2" @if(@$data->category_id==2) selected @endif>Books</option>
											<option value="3" @if(@$data->category_id==3) selected @endif>Trending</option>
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">MRP</label>
										<input type="number"  class="form-control" value="{{@$data->mrp}}"  placeholder="Enter price"  name="mrp" >
									</div>

									<div class="form-group rm03">
										<label for="title">Selling Price</label>
										<input type="number"  class="form-control" value="{{@$data->price}}"  placeholder="Enter price"  name="price" >
									</div>

									<div class="form-group rm03">
										<label for="title">Stock</label>
										<select class="form-control" name="stock">
										<option value="IS" @if(@$data->stock=="IS") selected @endif>In-Stock</option>
										<option value="OS" @if(@$data->stock=="OS") selected @endif>Out of Stock</option>
										</select>
									</div>

									{{-- <div class="form-group rm03">
										<label for="title">Discount (%)</label>
										<input type="number"  class="form-control"  placeholder="Enter discount (%)" value="{{@$data->discount}}"  name="discount" >
									</div> --}}

									</div>
									
									
									

									<div class="form-group rm50">
										<label for="title">Home page image </label>
										<input type="file"  class="form-control" name="image" onchange="fun1()" id="icon">
									</div>

									{{-- preview-image --}}
					                                   <div class="form-group rm03">
					                                    <img style="width: 100px;height: 100px" id="img2" src="{{URL::to('storage/app/public/blog')}}/{{@$data->image}}">
					                                   </div>
									

									<div class="form-group rm50">
										<label for="title">Product Page Image</label>
										<input type="file"  class="form-control" name="product_image" onchange="fun2()" id="icon2">
									</div>

									{{-- preview-image --}}
									
					                                   <div class="form-group rm03">
					                                    <img style="width: 100px;height: 100px" @if(@$data->product_image!="")src="{{URL::to('storage/app/public/blog')}}/{{@$data->product_image}}" @endif id="img3">
					                                   </div>

									<div class="clearfix"></div>

									


							
									
									<div class="clearfix"></div>
									<div class="col-lg-12" style="margin-top: 10px;">
										<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Update</button>
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
<script>
$(document).ready(function(){
	
$('#frm').validate({
rules:{
title:{
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
</script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.2.1/tinymce.min.js"></script>

    <script>
       tinymce.init({
         selector: 'textarea.text_complaint', // Replace this CSS selector to match the placeholder element for TinyMCE
         license_key: 'gpl',
         plugins: 'code table lists',
         toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
       });

       
     </script>



@endsection