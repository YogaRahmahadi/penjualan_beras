@extends('user.layouts.app')
@section('content')
<!-- Section-->
<div class="container px-4 px-lg-5 mt-5">
  <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    @foreach ($data as $item)
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="{{ asset('storage/'.$item->photo) }}" alt="..." />
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">{{ $item->nama_beras }}</h5>
              <!-- Product reviews-->
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
              </div>
              <!-- Product price-->
              Rp {{ number_format($item->hargaberas) }}
            </div>
          </div>
          <!-- Product actions-->
          <div class="text-center card-footer p-4 pt-0 border-top-0 bg-transparent">
            <form action="/cart/store" method="post" onsubmit="return confirm('Apakah anda yakin akan menambahkan keranjang?')">
              @csrf
              <input type="hidden" name="id_beras" value="{{ $item->id }}">
              <input type="hidden" name="harga" value="{{ $item->hargaberas }}">
              <input type="hidden" name="jumlah" value="{{ 1 }}">
              <button type="submit" class=" btn btn-outline-dark mt-auto">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
    
  </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="ui/js/scripts.js"></script>
@endsection