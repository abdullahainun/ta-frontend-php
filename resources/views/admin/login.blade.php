@extends('layouts.app', ['bodyclass' => 'bg-login', 'hidenav' => true])

@section('content')

  <div class="container">
    <center><img src="{{ URL::to('/') }}/images/heading.png" class=" mt-5" style="width: 300px; margin-bottom : 20px;"></center>
    <div class="card card-login mx-auto">
      <!-- <div class="card-header">Login</div> -->
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="{{ url('/home') }}" style="background:#17a589 !important">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ url('/admin/register') }}" style="color:#117864 !important">Register an Account</a>
          <a class="d-block small" href="{{ url('/admin/forgot-password') }}"  style="color:#117864 !important">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

@endsection
