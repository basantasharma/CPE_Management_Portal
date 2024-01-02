@extends('./layouts/base')
@section('title', 'Setting-Telnet')
@section('headerLeft', 'Router')
@section('routersetting', 'active')


@section('body')
<div class="row">
    <div class="col-12 mb-4">
        <div class="row">
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-4">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Router Info <i class="fa-solid fa-wifi"></i></h3>
                        <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Status</td>
                                    <td class="text-end"><span class="badge text-bg-success p-2">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td class="text-end"><span class="p-2">4 Hrs</span></td>
                                </tr>
                                <tr>
                                    <td>Power</td>
                                    <td class="text-end"><span class="badge text-bg-success p-2">-16db</span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div>
            <div class="col-12 col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Connected Devices <i class="fa-solid fa-mobile-screen-button"></i></h3>
                        <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
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
                                    <td>
                                        <div class="text-success">
                                            <i class="fa-solid fa-wifi"></i>
                                            5Ghz
                                        </div>
                                    </td>
                                    <td>OppoA24</td>
                                    <td>3c:5a:81:eb:1a:c1</td>
                                    <td>192.168.1.254</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-danger">
                                            <i class="fa-solid fa-wifi"></i>
                                            5Ghz
                                        </div>
                                    </td>
                                    <td>OppoA24</td>
                                    <td>3c:5a:81:eb:1a:c1</td>
                                    <td>192.168.1.254</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-warning">
                                            <i class="fa-solid fa-wifi"></i>
                                            5Ghz
                                        </div>
                                    </td>
                                    <td>OppoA24</td>
                                    <td>3c:5a:81:eb:1a:c1</td>
                                    <td>192.168.1.254</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.col -->

        </div>
    </div>

    <div class="col-12 col-xxl-6 col-xl-6 col-lg-8 col-md-8 col-sm-8 mb-4">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">5 Ghz Router Setting <i class="fa-solid fa-wifi"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="WiFi SSID 5G" value="CPE-Mngt.-Portal_5Ghz">
                            <label for="floatingInput">WiFi SSID 5G</label>
                        </div>  
                    </div>
                    <div class="col">
                        <div class="input-group form-floating">
                            <input type="password" class="form-control" id="currentPassword5g" placeholder="Current password 5G" aria-label="Current password 5G" value="123456789" disabled>
                            <label for="currentPassword5g">Current Password 5G</label>
                            <button type="button" class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-currentPassword5g">
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
                    <div class="col col-lg-6">
                        <div class="form-floating">
                            <!-- <div class="input-group"> -->
                                <input type="password" class="form-control" id="newPassword5g" placeholder="New password 5G" aria-label="New password 5G" value="">
                                <label for="newPassword5g">New Password 5G</label>
                                <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-1 m-0 p-0">
                        <span class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-newPassword5g">
                        </span>
                    </div>
                    <div class="col"><button class="btn btn-info" >Generate Password</button></div>
                </div> 

                <div class="row mt-2">
                    <div class="col">

                        <button class="btn btn-success">Save settings</button>                               
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

    <div class="col-12 col-xxl-6 col-xl-6 col-lg-8 col-md-8 col-sm-8 mb-4">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">2.4 Ghz Router Setting <i class="fa-solid fa-wifi"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="WiFi Name" value="CPE-Mngt.-Portal_2.4Ghz">
                            <label for="floatingInput">WiFi SSID 2.4G</label>
                        </div>  
                    </div>
                    <div class="col">
                        <div class="input-group form-floating">
                            <input type="password" class="form-control" id="currentPassword24g" placeholder="Current password 2.4G" aria-label="Current password 2.4G" value="123456789" disabled>
                            <label for="currentPassword24g">Current Password 2.4G</label>
                            <button type="button" class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-currentPassword24g">
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
                    <div class="col col-lg-6">
                        <div class="form-floating">
                            <!-- <div class="input-group"> -->
                                <input type="password" class="form-control" id="newPassword24g" placeholder="New password 2.4G" aria-label="New password 2.4G" value="">
                                <label for="newPassword24g">New Password 2.4G</label>
                                <!-- </div> -->
                            </div>
                    </div>
                    <div class="col-1 m-0 p-0">
                        <span class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-newPassword24g">
                        </span>
                    </div>
                    <div class="col"><button class="btn btn-info" >Generate Password</button></div>
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

@section('script-end')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" integrity="sha256-BicZsQAhkGHIoR//IB2amPN5SrRb3fHB8tFsnqRAwnk=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)-->

@vite("resources/js/togglePasswordVisible.js")
@endsection