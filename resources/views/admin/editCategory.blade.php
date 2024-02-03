@extends('admin.layouts.admin')
@section('title','Edit Category')
@section('h3','Manage Categories')
@section('h2','Edit Category')
@section('content')
<!-- page content -->
<div class="x_content">
	<br />
	<form action="{{route('updatecategory',$category->id)}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
		@csrf
		@method('put')
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">Edit Category <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="add-category" class="form-control " value="{{$category->cat_name}}" name="cat_name">
				@error('cat_name')
				{{$message}}
				@enderror
			</div>
		</div>

		<div class="ln_solid"></div>
		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<a href="{{route('categories')}}"><button class="btn btn-primary" type="button">Cancel</button></a>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>

	</form>
</div>
</div>
</div>
</div>

</div>
</div>
<!-- /page content -->
@endsection