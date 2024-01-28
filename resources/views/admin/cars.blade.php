@extends('admin.layouts.admin')
@section('title','Cars')
@section('h3','Manage Cars')
@section('h2','List of Cars')
@section('content')
<!-- page content -->
<div class="x_content">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Title</th>
              <th>Price</th>
              <th>Active</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>


          <tbody>
            <tr>
              @foreach($car as $data)
              <td>{{$data->title}}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->published? 'YES✅' : 'NO ❎'}}</td>
              <td><a href="editcar/{{$data->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></a></td>
              <td><a href="deletecar/{{$data->id}}" onclick="return confirm('Are you sure you want to delete?')"><img src=" {{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
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