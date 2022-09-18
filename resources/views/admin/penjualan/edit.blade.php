@extends('admin.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Konfirmasi Pembayaran</h4>
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

                                <form method="post" action="/admin/pembayaran" enctype="multipart/form-data" id="myForm">

                                    @csrf

                                    <div class="form-group">
                                        <label for="id">ID Penjualan</label>
                                        <input type="text" name="id_penjualan" class="form-control" id="id" value="{{ $penjualan->id }}" aria-describedby="id" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="bayar">Bayar</label>
                                        <input type="number" name="bayar" class="form-control" id="bayar" value="{{ $penjualan->total }}" aria-describedby="bayar" readonly>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea name="keterangan" class="form-control" id="keterangan" aria-describedby="keterangan" ></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Sudah Terbayar</button>
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