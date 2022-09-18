@extends('admin.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Penjualan</h4>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Data Penjualan</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">ID User</th>
                                            <th class="border-top-0">ID Beras</th>
                                            <th class="border-top-0">Tanggal</th>
                                            <th class="border-top-0">Total</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan as $item)    
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->user_id }}</td>
                                            <td>{{ $item->beras_id }}</td>
                                            <td>{{ $item->date_order }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>
                                                <a href="/admin/penjualan/{{ $item->id }}/edit" class="btn btn-primary">Terbayar ?</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            @endsection