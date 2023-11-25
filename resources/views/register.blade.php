@extends('./layouts/base')
@section('title', 'Register-Telnet')
@section('headerLeft', 'Register')
@section('body')
<div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-lg-4"></div>
  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <form action="/register" method="post">
      @csrf
      @method('post')
      <h3 class="mb-1 text-center">Sign up</h3>

      <div class="form-outline mb-2">
        <label class="form-label" for="typenameX-2">Name</label>
        <input name="name" type="text" id="typenameX-2" class="form-control form-control-md" placeholder="Full Name" value="" />
      </div>

      <div class="form-outline mb-2">
        <label class="form-label" for="typeUserNameX-2">User Name</label>
        <input name="username" type="text" id="typeUserNameX-2" class="form-control form-control-md" placeholder="User Name" />
      </div>

      <div class="form-outline mb-2">
        <label class="form-label" for="typeEmailX-2">Email</label>
        <input name="email" type="email" id="typeEmailX-2" class="form-control form-control-md" placeholder="example@abc.com" />
      </div>

      <div class="form-outline mb-2">
        <label class="form-label" for="typePasswordX-2">Password</label>
        <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-md" placeholder="********" />
      </div>

      <div class="form-outline mb-2">
        <label class="form-label" for="password_confirmation">Confirm Password</label>
        <input name="password_confirmation" type="password" id="password_confirmation" class="form-control form-control-md" placeholder="********" />
      </div>

      <div class="form-outline mb-2">
        <label class="form-label" for="typeSerialNumberX-2">Serial Number</label>
        <input name="serialnumber" type="text" id="typeSerialNumberX-2" class="form-control form-control-md" placeholder="Serial Number" />
      </div>
      <div class="text-center">
        <button class="btn btn-info" type="submit">Register</button>
      </div>

      <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? 
        <a href="/login" class="link-danger">Login</a>
      </p>
    </form>
  </div>
</div>
@endsection