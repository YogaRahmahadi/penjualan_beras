@extends('admin.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Tambah Produk</h4>
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
            
                                <form method="post" action="/admin/produk" enctype="multipart/form-data" id="myForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_beras">Nama Beras</label>
                                        <input type="text" name="nama_beras" class="form-control" id="nama_beras" aria-describedby="nama_beras" >
                                    </div>
            
                                    <div class="form-group">
                                        <label for="hargaberas">Harga</label>
                                        <input type="hargaberas" name="hargaberas" class="form-control" id="hargaberas" ariadescribedby="hargaberas" >
                                    </div>
            
                                    <div class="form-group">
                                        <label for="berat">Berat</label>
                                        <input type="berat" name="berat" class="form-control" id="berat" ariadescribedby="berat" >
                                    </div>
        
                                    <div class="form-group">
                                        <label for="File">Foto</label>
                                        <input type="file" name="photo" class="form-control" id="photo" ariadescribedby="photo" >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea id="keterangan" name="keterangan" class="form-control" rows="4" cols="50"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection