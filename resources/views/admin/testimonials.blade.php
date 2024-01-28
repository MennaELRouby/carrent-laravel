@extends('admin.layouts.admin')
@section('title','Testimonials')
@section('h3','Manage Testimonials')
@section('h2','List of Testimonials')
@section('content')
<!-- page content -->
<div class="x_content">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Published</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tstmnl as $data)
            <tr>
              <td>{{$data->name}}</td>
              <td>{{$data->postision}}</td>
              <td>{{$data->published? 'YES✅' : 'NO ❎'}}</td>
              <td><a href="edittestimonials/{{$data->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></a></td>
              <td><a href="deletetestimonials/{{$data->id}}" onclick="return confirm('Are you sure you want to delete?')"><img src=" {{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
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