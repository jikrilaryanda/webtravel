@extends('layouts.app')

@section('content')
<div class="center">
<div class="login-box">
  <!-- /.login-logo -->
      <form action="{{route('login')}}" method="post">
        @csrf
        <h2 class="text-center text-light">Login</h2>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
               @error('email')
             <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
             </span>
               @enderror
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
               @error('password')
             <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
             </span>
               @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-dark btn-block">Sign In</button>
            @csrf
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
</div>
</div>
@endsection