@extends('admin.layouts.admin')
@section('title','Messages')
@section('h3','Manage Messages')
@section('h2','List of Messages')
@section('content')
<!-- page content -->
<div class="x_content">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Full Name</th>
              <th>Email</th>
              <th>Show</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($msg as $data)
            <tr>
              <td>{{$data->fname}} {{$data->lname}}</td>
              <td>{{$data->email}}</td>
              <td><a href="showmessage/{{$data->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="show"></a></td>
              <td><a href="deletemessage/{{$data->id}}" onclick="return confirm('Are you sure you want to delete?')"><img src=" {{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
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