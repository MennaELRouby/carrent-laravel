@extends('admin.layouts.admin')
@section('title','Categories')
@section('h3','Manage Categories')
@section('h2','List of Categories')
@section('content')
<!-- page content -->
<div class="x_content">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Category Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>


          <tbody>
            @foreach($category as $data)
            <tr>
              <td>{{$data->cat_name}}</td>
              <td><a href="editcategory/{{$data->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></a></td>
              <td><a href="deletecategory/{{$data->id}}" onclick="return confirm('Are you sure you want to delete?')"><img src=" {{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
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