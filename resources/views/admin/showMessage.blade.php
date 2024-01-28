@extends('admin.layouts.admin')
@section('title','Show Message')
@section('h3','Manage Messages')
@section('h2','Show Message')
@section('content')
<!-- page content -->
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Full Name: {{$msg->name}}</h2>
      <br>
      <h2>Email: {{$msg->email}}</h2>
      <br>
      <h2>Message Content:</h2>
      <p>{{$msg->content}}</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->
@endsection