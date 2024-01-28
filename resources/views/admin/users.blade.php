@extends('admin.layouts.admin')
@section('title','Users')
@section('h3','Manage Users')
@section('h2','List of Users')
@section('content')
<!-- page content -->
</div>
<div class="x_content">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Registration Date</th>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Active</th>
              <th>Edit</th>
            </tr>
          </thead>

          <tbody>
            @foreach($user as $data)
            <tr>
              <td>{{$data->created_at}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->username}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->active? 'YES✅' : 'NO ❎'}}</td>
              <td><a href="edituser/{{$data->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
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