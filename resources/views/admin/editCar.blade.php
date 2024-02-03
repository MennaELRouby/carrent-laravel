@extends('admin.layouts.admin')
@section('title','Edit Cars')
@section('h3','Manage Cars')
@section('h2','Edit Car')
@section('content')
<!-- page content -->
<div class="x_content">
	<br />
	<form action="{{route('updatecar',$car->id)}}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
		@csrf
		@method('put')
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="title" class="form-control " name="title" value="{{$car->title}}">
				@error('title')
				{{$message}}
				@enderror
			</div>
		</div>
		<div class=" item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<textarea id="content" name="content" class="form-control">{{$car->content}}</textarea>
				@error('content')
				{{$message}}
				@enderror

			</div>
		</div>
		<div class="item form-group">
			<label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6 ">
				<input id="luggage" class="form-control" type="number" name="luggage" value="{{$car->luggage}}">
				@error('luggage')
				{{$message}}
				@enderror

			</div>
		</div>
		<div class=" item form-group">
			<label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6 ">
				<input id="doors" class="form-control" type="number" name="doors" value="{{$car->doors}}">
				@error('doors')
				{{$message}}
				@enderror

			</div>
		</div>
		<div class="item form-group">
			<label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6 ">
				<input id="passengers" class="form-control" type="number" name="passengers" value="{{$car->passengers}}">
				@error('passengers')
				{{$message}}
				@enderror

			</div>
		</div>
		<div class="item form-group">
			<label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6 ">
				<input id="price" class="form-control" type="number" name="price" value="{{$car->price}}">
				@error('price')
				{{$message}}
				@enderror

			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
			<div class="checkbox">
				<label>
					<input type="checkbox" class="flat" name="published" @checked($car->published)>
				</label>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="file" id="image" name="image" class="form-control" value="{{$car->image}}">
				@error('image')
				{{$message}}
				@enderror

				<img src="{{asset('assets/images/'.$car->image)}}" alt="" width="100">
			</div>
		</div>

		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<select class="form-control" name="cat_id" id="">
					@foreach($category as $data)
					<option value="{{$data->id}}" @selected( $data->cat_name == $car->cat_id)>{{$data->cat_name}}</option>
					@endforeach
				</select>
				@error('cat_id')
				{{$message}}
				@enderror

			</div>
		</div>
		<div class="ln_solid"></div>
		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<a href="{{route('cars')}}"><button class="btn btn-primary" type="button">Cancel</button></a>
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