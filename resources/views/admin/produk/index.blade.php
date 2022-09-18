@extends('admin.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Produk</h4>
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
                            <a href="/admin/produk/create" class="float-end btn btn-success">Tambah Data</a>
                            <h3 class="box-title">Data Produk</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nama Beras</th>
                                            <th class="border-top-0">Harga</th>
                                            <th class="border-top-0">Berat</th>
                                            <th class="border-top-0">Foto</th>
                                            <th class="border-top-0">Keterangan</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($beras as $item)    
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_beras }}</td>
                                            <td>{{ $item->hargaberas }}</td>
                                            <td>{{ $item->berat }}</td>
                                            <td>
                                                <img src="{{ asset('storage/'.$item->photo) }}" class="w-50" alt="">
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>
                                                <form action="/admin/produk/{{ $item->id }}" method="post">
                                                    
                                                    <a href="/admin/produk/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </form>
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