@extends('./layouts/base')
@section('title', 'Add User-Telnet')

@section('body')
<section class="vh-60" style="background-color: #508bfc;">
    <div class="container py-5 h-60">
      <div class="row d-flex justify-content-center align-items-center h-60">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-left">
              <form action="#" method="post">
                @csrf
                @method('post')
                <h3 class="mb-1 text-center">Add User</h3>

                <div class="form-outline mb-2">
                  <label class="form-label" for="typenameX-2">Full Name</label>
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
    
                {{-- <div class="form-outline mb-2">
                  <label class="form-label" for="typePasswordX-2">Password</label>
                  <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-md" placeholder="********" />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="password_confirmation">Confirm Password</label>
                  <input name="password_confirmation" type="password" id="password_confirmation" class="form-control form-control-md" placeholder="********" />
                </div> --}}

                <div class="text-center">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                </div>

                    {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? 
                    <a href="/login" class="link-danger">Login</a>
                    </p> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection