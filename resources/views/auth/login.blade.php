<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5 mt-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-label-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <label for="inputEmail">Email address</label>
                </div>
  
                <div class="form-label-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <label for="inputPassword">Password</label>
                </div>
  
                <div class="custom-control custom-checkbox mb-3">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="" for="remember">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>
                {{-- @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif --}}
            </form>
            <div class="d-flex justify-content-center links">
                Don't have an account? <a href="{{ route('register') }}" class="ml-2">Sign Up</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

  <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js></script>
  <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js></script>

<style>
    :root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
  }
  
  body {
    background: #007bff;
    background: linear-gradient(to right, #0062E6, #33AEFF);
  }
  
  .card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }
  
  .card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
  }
  
  .card-signin .card-body {
    padding: 2rem;
  }
  
  .form-signin {
    width: 100%;
  }
  
  .form-signin .btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
  }
  
  .form-label-group {
    position: relative;
    margin-bottom: 1rem;
  }
  
  .form-label-group input {
    height: auto;
    border-radius: 2rem;
  }
  
  .form-label-group>input,
  .form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
  }
  
  .form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
  }
  
  .form-label-group input::-webkit-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input:-ms-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input::-ms-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input::-moz-placeholder {
    color: transparent;
  }
  
  .form-label-group input::placeholder {
    color: transparent;
  }
  
  .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
  }
  
  .form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
  }
  
  /* Fallback for Edge
  -------------------------------------------------- */
  
  @supports (-ms-ime-align: auto) {
    .form-label-group>label {
      display: none;
    }
    .form-label-group input::-ms-input-placeholder {
      color: #777;
    }
  }
  
  /* Fallback for IE
  -------------------------------------------------- */
  
  @media all and (-ms-high-contrast: none),
  (-ms-high-contrast: active) {
    .form-label-group>label {
      display: none;
    }
    .form-label-group input:-ms-input-placeholder {
      color: #777;
    }
  }
</style>