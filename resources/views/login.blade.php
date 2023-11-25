@extends('./layouts/base')
@section('title', 'Login-Telnet')
@section('headerLeft', 'Sign in')

@section('body')
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
      <form method="post" action="/login">
        @csrf
        @method('post')
          <h3 class="mb-1 text-center">Log in</h3>
      
          <div class="form-outline mb-2">
              <label class="form-label" for="typeEmailX-2">Email</label>
              <input name="email" type="email" id="typeEmailX-2" class="form-control form-control-md" placeholder="example@abc.com" />
          </div>
      
          <div class="form-outline mb-2">
              <label class="form-label" for="typePasswordX-2">Password</label>
              <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-md" />
          </div>
      
          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-start mb-2">
              <input name="rememberme" class="form-check-input" type="checkbox" id="form2Example31" checked/>
              <label class="form-check-label" for="form2Example31"> Remember me </label>
              {{-- <input name="rememberme" class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label> --}}
          </div>
          <div class="text-center">
              <button class="btn btn-info" type="submit">Login</button>
          </div>
          <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
              class="link-danger">Register</a></p>
          {{-- <hr class="my-2">
      
              <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
          <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
      --}}
      </form>
    </div>
  </div>
</div>
@endsection