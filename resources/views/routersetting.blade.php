@extends('./layouts/base')
@section('title', 'Setting-Telnet')
@section('headerLeft', 'Router')
@section('routersetting', 'active')


@section('body')
<div class="row justify-content-center">

    <div class="col-12 col-xxl-2 col-xl-6  col-lg-6 col-md-12 col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Router Info <i class="fa-solid fa-wifi"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="row my-2">
                    <div class="col">
                        Status
                    </div>
                    <div class="col text-end"><span class="badge text-bg-success">Active</span></div>
                </div>

                <div class="row my-2">
                    <div class="col">
                        Duration
                    </div>
                    <div class="col text-end">4Hrs</div>
                </div>

                <div class="row my-2">
                    <div class="col">
                        Power
                    </div>
                    <div class="col text-end"><span class="border border-success text-success">16db</span></div>
                </div>

            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->


    <div class="col-12 col-xxl-4 col-xl-8  col-lg-6 col-md-12 col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Connected Devices <i class="fa-solid fa-mobile-screen-button"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped table-info">
                    <thead>
                        <tr>
                            <th style="width: 10px;">Wifi</th>
                            <th>Device</th>
                            <th>Mac Address</th>
                            <th>Ip Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <div class="text-success">
                                    <i class="fa-solid fa-wifi"></i>
                                    5Ghz
                                </div>
                            </th>
                            <th>OppoA24</th>
                            <th>3c:5a:81:eb:1a:c1</th>
                            <th>192.168.1.254</th>
                        </tr>
                        <tr>
                            <th>
                                <div class="text-danger">
                                    <i class="fa-solid fa-wifi"></i>
                                    5Ghz
                                </div>
                            </th>
                            <th>OppoA24</th>
                            <th>3c:5a:81:eb:1a:c1</th>
                            <th>192.168.1.254</th>
                        </tr>
                        <tr>
                            <th>
                                <div class="text-warning">
                                    <i class="fa-solid fa-wifi"></i>
                                    5Ghz
                                </div>
                            </th>
                            <th>OppoA24</th>
                            <th>3c:5a:81:eb:1a:c1</th>
                            <th>192.168.1.254</th>
                        </tr>
                    </tbody>
                </table>
                
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

    <div class="col col-lg-4">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Router Setting <i class="fa-solid fa-wifi"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="WiFi Name" value="CPE-Mngt.-Portal">
                            <label for="floatingInput">WiFi SSID</label>
                          </div>  
                    </div>
                    <div class="col">
                        <div class="input-group form-floating">
                            <input type="password" class="form-control" id="oldPassword" placeholder="Old WiFi password" aria-label="Old WiFi password" value="123456789" disabled>
                            <label for="oldPassword">Current WiFi Password</label>
                            <button type="button" class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-password">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="HideflexSwitchCheckDefault">
                            <label class="form-check-label" for="HideflexSwitchCheckDefault">Hide SSID</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="WlanflexSwitchCheckDefault">
                            <label class="form-check-label" for="WlanflexSwitchCheckDefault">Enable WLAN</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-lg-5">
                        <div class="form-floating">
                            <!-- <div class="input-group"> -->
                                <input type="password" class="form-control" id="newPassword" placeholder="WiFi password" aria-label="Old WiFi password" value="">
                                <label for="newPassword">New WiFi Password</label>
                                <!-- </div> -->
                            </div>
                    </div>
                    <div class="col m-0 p-0">
                        <span class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-newPassword">
                        </span>
                    </div>
                    <div class="col col-lg-6"><button class="btn btn-info" >Generate Password</button></div>
                </div> 
                <div class="row mt-2">
                    <div class="col">

                        <button class="btn btn-success">Save settings</button>                               
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

</div>



@endsection