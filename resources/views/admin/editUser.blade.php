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
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif

            <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Update user</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('users.update', $user['id'])}}" method="post">
        <div class="card-body">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="text" value="{{ $user['name'] }}" class="form-control @error('name') is-invalid @enderror" id="exampleInputText" placeholder="Name" name="name">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" value="{{ $user['email'] }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputText" placeholder="Email" name="email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputText" placeholder="Password" name="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value = "Update"> 
        </div>
        </form>
    </div>
    <!-- /.card -->
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 