{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
<body>
    <div class="container-fluid p-0">
        <div class="row m-0">
          <div class="col-12 p-0">    
            <div class="login-card">
              <div>
                <div><a class="logo" href=""><img class="img-fluid for-light" src="{{asset('front/images/ddlogo.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                <div class="login-main"> 
                <form method="POST" action="{{ route('password.email') }}" class="theme-form">
                        @csrf
                    <h4>Reset Password</h4>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                      <label class="col-form-label">Email</label>
                      <input class="form-control" type="email" name="email" required="" placeholder="">
                      @error('email')
                                    <span class="text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    </div>
                    <div class="form-group mb-0">
                      <div class="">
                      <div class="text-end mt-3">
                        <button class="btn btn-primary btn-block w-100" type="submit">Send Password Reset Link</button>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- login js-->
        <!-- Plugin used-->
      </div>
@include('admin.includes.footer')
</body>
</html>
