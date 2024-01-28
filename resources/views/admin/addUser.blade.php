@extends('admin.layouts.admin')
@section('title','Add User')
@section('h3','Manage Users')
@section('h2','Add User')
@section('content')
<!-- page content -->
<div class="x_content">
	<br />
	<form action="{{route('user')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
		@csrf
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span>*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="first-name" class="form-control " name="name" value="{{old('name')}}">
				@error('name')

				{{$message}}

				@enderror
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="user-name">Username <span>*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" id="user-name" name="username" class="form-control" value="{{old('username')}}">
				@error('username')

				{{$message}}

				@enderror
			</div>
		</div>
		<div class="item form-group">
			<label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span>*</span></label>
			<div class="col-md-6 col-sm-6 ">
				<input id="email" class="form-control" type="email" name="email" value="{{old('email')}}">
				@error('email')

				{{$message}}

				@enderror
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
			<div class="checkbox">
				<label>
					<input type="checkbox" class="flat" name="active">
				</label>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span>*</span>
			</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="password" id="password" name="password" class="form-control" value="{{old('password')}}">
				@error('password')

				{{$message}}

				@enderror
			</div>
		</div>
		<div class="ln_solid"></div>
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