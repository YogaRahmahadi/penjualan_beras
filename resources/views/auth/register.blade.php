@extends('layouts.main')

@section('content')
<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

    <div class="card mx-4 mx-md-5 shadow-12-strong" style="
          margin-top: -230px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-1 px-md-3">
  
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-outline">
                    <input type="text" name="username" id="username" class="form-control text-center @error('username') is-invalid @enderror" value="{{ old('username') }}">
                    <label class="form-label" for="form3Example1">Username</label>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-outline">
                    <input type="text" name="name" id="form3Example2" class="form-control text-center @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    <label class="form-label" for="form3Example2">Name</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
                </div>
              </div>
  
              <!-- Email input -->
              <div class="form-outline mb-3">
                <input type="text" name="email" id="form3Example3" class="form-control text-center @error('email') is-invalid @enderror" value="{{ old('email') }}">
                <label class="form-label" for="form3Example3">Email Address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              {{-- <!-- Phone Number input -->
              <div class="form-outline mb-3">
                <input type="text" name="no_hp" id="form3Example3" class="form-control text-center @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}">
                <label class="form-label" for="form3Example3">Phone Number</label>
                @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div> --}}
              
            <div class="form-outline mb-3">
                <input id="password" type="password" class="form-control text-center @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <label for="password" class="form label">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-outline mb-3">
                <input id="password-confirm" type="password" class="form-control text-center" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm" class="form label">Confirm Password</label>
            </div>
  
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-3">
                {{ __('Register') }}
              </button>
            
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
  </section>
  <!-- Section: Design Block -->
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
