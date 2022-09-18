@extends('admin.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Edit Profile</h4>
              </div>
          </div>
          <!-- /.col-lg-12 -->
      </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <form method="post" action="/admin/users/{{ Auth::user()->id }}" enctype="multipart/form-data" id="myForm">

                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="Nim">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" value="{{ Auth::user()->username }}" aria-describedby="username" >
                                    </div>

                                    <div class="form-group">
                                        <label for="Nim">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}" aria-describedby="name" >
                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" aria-describedby="email" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="Nama">Nomor HP</label>
                                        <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ Auth::user()->no_hp }}" aria-describedby="no_hp" >
                                    </div>

                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </form>
                        </div>
                    </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            @endsection