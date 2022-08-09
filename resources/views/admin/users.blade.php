@extends('admin.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-8 offset-2 text-center">
<div class="card table-responsive">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($users as $user)
                        <tr>
                        <td></td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>
                        <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal{{$user["id"]}}'>
                        Delete
                      </button>
                      <div class="modal fade" id="exampleModal{{$user['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are you sure ?
                          </div>
                          <div class="modal-footer">
                          <form action='{{ route("users.destroy", $user["id"]) }}' method='post'>
                            @csrf
                            @method('DELETE')
                            <input class='btn btn-danger' type='submit' value='confirm'>
                          </form>
                          
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                        <form action='{{ route("users.edit", $user["id"]) }}' method='get'>
                          @csrf
                          <input class='btn btn-success' type='submit' value='Edit'>
                        </form>

                        </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 