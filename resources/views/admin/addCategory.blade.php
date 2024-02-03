@extends('admin.layouts.admin')
@section('title','Add Category')
@section('h3','Manage Categories')
@section('h2','Add Category')
@section('content')
<!-- page content -->
<div class="x_content">
	<br />
	<form action="{{route('category')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
		@csrf
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">Add Category <span>*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="add-category" class="form-control " name="cat_name">
				@error('cat_name')
				{{$message}}
				@enderror
			</div>
		</div>

		<div class="ln_solid"></div>
		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<a href="{{route('categories')}}"><button class="btn btn-primary" type="button">Cancel</button></a>
				<button type="submit" class="btn btn-success">Add</button>
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