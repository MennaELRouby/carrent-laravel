@extends('admin.layouts.admin')
@section('title','Add Testimonial')
@section('h3','Manage Testimonials')
@section('h2','Add Testimonials')
@section('content')
<!-- page content -->
<div class="x_content">
	<br />
	<form action="{{route('testimonial')}}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
		@csrf
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="name" class="form-control " name="name" value="{{old('name')}}">
				@error('name')
				{{$message}}
				@enderror
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Position <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="position" class="form-control " name="position" value="{{old('position')}}">
				@error('position')
				{{$message}}
				@enderror
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<textarea id="content" name="content" class="form-control">{{old('content')}}</textarea>
				@error('content')
				{{$message}}
				@enderror
			</div>
		</div>

		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
			<div class="checkbox">
				<label>
					<input type="checkbox" class="flat" name="published">
				</label>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="file" id="image" name="image" class="form-control" value="{{old('image')}}">
				@error('image')
				{{$message}}
				@enderror
			</div>
		</div>
		<div class=" ln_solid">
		</div>
		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<button class="btn btn-primary" type="button">Cancel</button>
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