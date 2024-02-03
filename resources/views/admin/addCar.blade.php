				@extends('admin.layouts.admin')
				@section('title','Add Cars')
				@section('h3','Manage Cars')
				@section('h2','Add Car')
				<!-- inside menuprofile.blade.php-->
				<!-- start body-->
				<!-- class=container body / Containter  /main container-->
				<!-- menu profile quick info -->
				<!-- /menu profile quick info -->

				<!-- sidebar menu -->

				<!-- /sidebar menu -->

				<!-- /menu footer buttons -->

				<!-- /menu footer buttons -->


				<!-- top navigation -->

				<!-- /top navigation -->
				@section('content')
				<!-- page content -->
				<div class="x_content">
					<br />
					@if(count($category) == 0)
					<div class="container text-center">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<h6 class="display-6">No Categories Field </h6>
								<p class="mb-4">Add Category first then add Cars.</p>
								<a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('addcategory')}}">Add Category</a>
							</div>
						</div>
					</div>
					@else
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('car')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span>*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="title" class="form-control" name="title">
								@error('title')
								{{$message}}
								@enderror
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span>*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<textarea id="content" name="content" class="form-control">Contents</textarea>
								@error('content')
								{{$message}}
								@enderror
							</div>
						</div>
						<div class="item form-group">
							<label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span>*</span></label>
							<div class="col-md-6 col-sm-6 ">
								<input id="luggage" class="form-control" type="number" name="luggage">
								@error('luggage')
								{{$message}}
								@enderror
							</div>
						</div>
						<div class="item form-group">
							<label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span>*</span></label>
							<div class="col-md-6 col-sm-6 ">
								<input id="doors" class="form-control" type="number" name="doors">
								@error('doors')
								{{$message}}
								@enderror
							</div>
						</div>
						<div class="item form-group">
							<label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span>*</span></label>
							<div class="col-md-6 col-sm-6 ">
								<input id="passengers" class="form-control" type="number" name="passengers">
								@error('passengers')
								{{$message}}
								@enderror
							</div>
						</div>
						<div class="item form-group">
							<label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span>*</span></label>
							<div class="col-md-6 col-sm-6 ">
								<input id="price" class="form-control" type="text" name="price">
								@error('price')
								{{$message}}
								@enderror
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
							<div class="checkbox">
								<label>
									<input type="checkbox" class="flat" name="published">
								</label>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="file" id="image" name="image" class="form-control">
								@error('image')
								{{$message}}
								@enderror
							</div>
						</div>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category
							</label>
							<div class="col-md-6 col-sm-6 ">
								<select class="form-control" name="cat_id" id="">
									<option value=" ">Select Category</option>
									@foreach($category as $data)
									<option value="{{$data->id}}">{{$data->cat_name}}</option>
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
								<button type="submit" class="btn btn-success">Add</button>
							</div>
						</div>

					</form>
					@endif

				</div>
				</div>
				</div>
				</div>

				</div>
				</div>
				<!-- /page content -->
				@endsection
				<!-- footer content -->

				<!-- /footer content -->