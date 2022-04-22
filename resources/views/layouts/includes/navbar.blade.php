<!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.html"><img src="../images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="{{route('courses')}}">COURSES</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="{{route('teachers')}}">TEACHERS</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="{{route('events')}}">EVENTS</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<!-- <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form method="POST" action="{{ route('register') }}" class="row">
                    @csrf
                        <div class="col-12">
                            <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="User's Name" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input id="password-confirm" type="password" class="form-control mb-3" name="password_confirmation" placeholder="Confirm Your Password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('login') }}"  method="post" class="row">
                    @csrf
                        <div class="col-12">
                            <input type="text" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" name="email" placeholder="User's email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div> --> 