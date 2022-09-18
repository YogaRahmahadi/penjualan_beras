@extends('user.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Profile</h4>
              </div>
          </div>
          <!-- /.col-lg-12 -->
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
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
              <div class="col-lg-12 col-xlg-3 col-md-12">
                  <div class="white-box">
                      <div class="user-bg"> <img width="100%" alt="user" src="{{ asset('assets/plugins/images/large/background.jpg') }}">
                          <div class="overlay-box">
                              <div class="user-content">
                                  <a href="javascript:void(0)"><img src="{{ asset('assets/plugins/images/users/user.jpg') }}"
                                          class="thumb-lg img-circle" alt="img"></a>
                                  <h4 class="text-white mt-2">{{ Auth::user()->name }}</h4>
                                  <h5 class="text-white mt-2">{{ Auth::user()->email }}</h5>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              </div>
              <!-- Column -->
              <!-- Column -->
              <div class="col-lg-12 col-xlg-9 col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <form class="form-horizontal form-material">
                              <div class="form-group mb-4">
                                  <label class="col-md-12 p-0">Name</label>
                                  <div class="col-md-12 border-bottom p-0">
                                      <input type="text" placeholder="{{ Auth::user()->name }}"
                                          class="form-control p-0 border-0"> </div>
                              </div>
                              <div class="form-group mb-4">
                                  <label for="example-email" class="col-md-12 p-0">Email</label>
                                  <div class="col-md-12 border-bottom p-0">
                                      <input type="email" placeholder="{{ Auth::user()->email }}"
                                          class="form-control p-0 border-0" name="example-email"
                                          id="example-email">
                                  </div>
                              </div>
                              <div class="form-group mb-4">
                                  <label class="col-md-12 p-0">Password</label>
                                  <div class="col-md-12 border-bottom p-0">
                                      <input type="password" value="password" class="form-control p-0 border-0">
                                  </div>
                              </div>
                              
                              <div class="form-group mb-4">
                                  <div class="col-sm-12">
                                      <button class="btn btn-success">Update Profile</button>
                                  </div>
                              </div>
                            </div>
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