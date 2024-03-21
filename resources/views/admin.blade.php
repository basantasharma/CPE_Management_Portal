@extends('./layouts/base')
@section('title', 'Admin-Telnet')

@section('body')
<h1>This is admin panel</h1>



  @auth
    hello {{ \Auth::user()->username }} your id is : {{ \Auth::user()->id }}
      <br>
      
      <div class="btn-group m-2">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">All roles</button>
        <ol class="dropdown-menu" style="background: #e3f2fd" aria-labelledby="dropdownMenuButton2">
          @foreach($registeredroles as $roles)
            <li class="dropdown-item">{{ $roles->role }}</li>
          @endforeach
        </ol>
      </div>
      <div class="btn-group dropdown m-2">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">All users</button>
        <ol class="dropdown-menu" style="background: #e3f2fd" aria-labelledby="dropdownMenuButton2">
          @foreach($registeredusers as $users)
            <li class="dropdown-item">{{ $users->username }}</li>
          @endforeach
          </ol>
      </div>


    @role('manager')
      <section class="vh-60" style="background-color: #508bfc;">
        <div class="container-fluid py-3 h-60">
          <div class="row d-flex justify-content-center align-items-center h-60">
              {{-- @permission('editor') --}}
              <div class="col-12 col-md-6 col-lg-4 col-xl-2 m-2">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                  <div class="card-body p-4 text-left">
                    <form method="post" action="/role">
                      @csrf
                      @method('post')
                      <div class="form-outline mb-2">
                        <label class="form-label" for="typeRoleX-2">Add Role in Role table</label>
                        <input type="text" class="form-control" name="role" id="typeRoleX-2">
                      </div>
                      <div class="text-center">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Add Role</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              {{-- @endpermission --}}
              {{-- @permission('editor') --}}
              <div class="col-12 col-md-6 col-lg-4 col-xl-3 m-2">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                  <div class="card-body p-4 text-left">
                    <form method="post" action="/deleterole">
                      @csrf
                      @method('post')
                      <div class="form-outline mb-2">
                        <label class="form-label" for="typeRoleX-2">Delete Role from Role table</label>
                        <select name="roleid" class="form-select" aria-label="Default select example" id="typeRoleX-2">
                          <option selected value="">Select Role To be deleted</option>
                          @foreach($registeredroles as $roles)
                          <option value={{ $roles->id }} >{{ $roles->id }},{{ $roles->role }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="text-center">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Delete Role</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              {{-- @endpermission --}}
              <div class="col-12 col-md-6 col-lg-4 col-xl-3 m-2">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                  <div class="card-body p-4 text-left">
                    <form method="post" action="/adduserrole">
                        @csrf
                        @method('post')
                        <div class="form-outline mb-2">
                          <label class="form-label" for="typeIDX-2">Select User</label>
                          <select name="userid" class="form-select" aria-label="Default select example" id="typeIDX-2">
                            <option selected value="">Select user</option>
                            @foreach ($registeredusers as $user)
                            <option value={{ $user->id }}>{{ $user->id }},{{ $user->username }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-outline mb-2">
                          <label class="form-label" for="typeRoleX-2">Select Role for user</label>
                          <select name="roleid" class="form-select" aria-label="Default select example" id="typeRoleX-2">
                            <option selected value="">Select user Role</option>
                            @foreach($registeredroles as $roles)
                            <option value={{ $roles->id }} >{{ $roles->id }},{{ $roles->role }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="text-center">
                          <button class="btn btn-primary btn-lg btn-block" type="submit">Assign Role</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>


              <div class="col-12 col-md-6 col-lg-4 col-xl-3 m-2">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                  <div class="card-body p-4 text-left">
                    <form method="post" action="/removeuserrole">
                        @csrf
                        @method('post')
                        <div class="form-outline mb-2">
                          <label class="form-label" for="typeIDX-2">Select User</label>
                          <select name="userid" class="form-select" aria-label="Default select example" id="typeIDX-2">
                            <option selected value="">Select user</option>
                            @foreach ($registeredusers as $user)
                            <option value={{ $user->id }}>{{ $user->id }},{{ $user->username }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-outline mb-2">
                          <label class="form-label" for="typeRoleX-2">Select Role for user</label>
                          <select name="roleid" class="form-select" aria-label="Default select example" id="typeRoleX-2">
                            <option selected value="">Select user Role</option>
                            @foreach ($registeredroles as $role)
                            <option value={{ $role->id }}>{{ $role->id }},{{ $role->role }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="text-center">
                          <button class="btn btn-primary btn-lg btn-block" type="submit">Remove Role</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
    @endrole

    @role('manager')
      <section class="vh-60" style="background-color: #50fce5;">
        <div class="container-fluid py-5 h-60">
          <div class="row d-flex justify-content-center align-items-center h-60">
            
            <div class="col-12 col-md-6 col-lg-4 col-xl-2 m-2">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                  <form method="post" action="/permission">
                    @csrf
                    @method('post')
                    <div class="form-outline mb-2">
                      <label class="form-label" for="typeRoleX-2">Add Permission in Permissions table</label>
                      <input type="text" class="form-control" name="permission" id="typeRoleX-2">
                    </div>
                    <div class="text-center">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Add Permission</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 m-2">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                  <form method="post" action="/deletepermission">
                    @csrf
                    @method('post')
                    <div class="form-outline mb-2">
                      <label class="form-label" for="typeRoleX-2">Delete Permission from Permissions table</label>
                      <select name="permissionid" class="form-select" aria-label="Default select example" id="typeRoleX-2">
                        <option selected value="">Select Permission To be deleted</option>
                        @foreach($registeredpermissions as $permissions)
                        <option value={{ $permissions->id }} >{{ $permissions->id }},{{ $permissions->permission }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="text-center">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Delete Permission</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 m-2">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                  <form method="post" action="/adduserpermission">
                      @csrf
                      @method('post')
                      <div class="form-outline mb-2">
                        <label class="form-label" for="typeIDX-2">Select User</label>
                        <select name="userid" class="form-select" aria-label="Default select example" id="typeIDX-2">
                          <option selected value="">Select user</option>
                          @foreach ($registeredusers as $user)
                          <option value={{ $user->id }}>{{ $user->id }},{{ $user->username }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-outline mb-2">
                        <label class="form-label" for="typeRoleX-2">Select Permission for user</label>
                        <select name="permissionid" class="form-select" aria-label="Default select example" id="typeRoleX-2">
                          <option selected value="">Select user Permission</option>
                          @foreach($registeredpermissions as $permissions)
                          <option value={{ $permissions->id }} >{{ $permissions->id }},{{ $permissions->permission }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="text-center">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Assign Permission</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 m-2">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                  <form method="post" action="/removeuserpermission">
                      @csrf
                      @method('post')
                      <div class="form-outline mb-2">
                        <label class="form-label" for="typeIDX-2">Select User</label>
                        <select name="userid" class="form-select" aria-label="Default select example" id="typeIDX-2">
                          <option selected value="">Select user</option>
                          @foreach ($registeredusers as $user)
                          <option value={{ $user->id }}>{{ $user->id }},{{ $user->username }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-outline mb-2">
                        <label class="form-label" for="typeRoleX-2">Select Permission for user</label>
                        <select name="permissionid" class="form-select" aria-label="Default select example" id="typeRoleX-2">
                          <option selected value="">Select user Permission</option>
                          @foreach ($registeredpermissions as $permissions)
                          <option value={{ $permissions->id }}>{{ $permissions->id }},{{ $permissions->permission }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="text-center">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Remove Permission</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    @endrole
  @endauth
@endsection