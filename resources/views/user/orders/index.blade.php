@extends('user.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        {{-- <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Keranjang</h4>
              </div>
          </div>
          <!-- /.col-lg-12 -->
      </div> --}}
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
                            <h3 class="box-title">Transaksi</h3>
                            
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID Transaksi</th>
                                            <th class="border-top-0">ID Beras</th>
                                            <th class="border-top-0">Nama Beras</th>
                                            <th class="border-top-0">Total Harga</th>
                                            <th class="border-top-0">Tanggal</th>
                                            {{-- <th class="border-top-0">Aksi</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)    
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->beras_id }}</td>
                                            <td>{{ $item->beras->nama_beras }}</td>
                                            <td>Rp. {{ number_format($item->total) }}</td>
                                            <td>{{ $item->date_order }}</td>
                                            {{-- <td>
                                                <a href="/order/{{ $item->id }}" onclick="return confirm('apakah anda yakin')">Check Out</a>
                                            </td> --}}

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