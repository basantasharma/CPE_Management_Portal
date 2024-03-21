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
                        <div class="card-tools"><button type="button" class="btn btn-tool"
                                data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i>
                                <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div>
                        <!-- /.card-tools -->
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Status</td>
                                    <td class="text-end"><span
                                            class="badge {{ $routerSettingInfo['active'] === 'Active' ? 'text-bg-success' : 'text-bg-danger' }}  p-2">{{
                                            $routerSettingInfo['active'] }}</span></td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td class="text-end">
                                        @if ($routerSettingInfo['lastBoot'])
                                        <span class="p-2">{{ $routerSettingInfo['lastBoot']['h'] }} Hrs {{
                                            $routerSettingInfo['lastBoot']['i'] }} min</span>
                                        @else
                                        <span class="p-2"> Router's Offline</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Power</td>
                                    <td class="text-end"><span class="badge {{ $routerSettingInfo['active'] === 'Active' ? 'text-bg-success' : 'text-bg-danger' }} p-2">{{ $routerSettingInfo['routerPower'] }}</span></td>
                                </tr>
                                <tr>
                                    <td>Restart</td>
                                    <td class="text-end">
                                        <span>
                                            <form action="/reboot5g" method="post">@csrf @method('post')<button class="btn btn-danger btn-sm" type="submit"><i class="fa-solid fa-repeat"></i></button></form>
                                        </span>
                                    </td>
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
                        <div class="card-tools"><button type="button" class="btn btn-tool"
                                data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i>
                                <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div>
                        <!-- /.card-tools -->
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
                                
                                @if ($routerSettingInfo["Devices"])
                                @foreach ($routerSettingInfo["Devices"] as $devices)
                                <tr>
                                    <td>
                                        <div class="text-success {{ $devices['Active']['_value'] === true ? 'text-success' : 'text-danger' }}">
                                            <i class="fa-solid fa-wifi"></i>
                                            @if ($devices['Active']['_value'] === false)
                                            offline
                                            @else
                                            {{ $devices['X_HW_RSSI']['_value'] }}
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        @if ($devices['HostName']['_value'])
                                        {{ $devices['HostName']['_value'] }}
                                        @else
                                        Unknown
                                        @endif
                                    </td>
                                    <td>{{ $devices['MACAddress']['_value'] }}</td>
                                    <td>{{ $devices['IPAddress']['_value'] }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td>
                                        <div class="text-danger">
                                            <i class="fa-solid fa-wifi"></i>
                                            Null
                                        </div>
                                    </td>
                                    <td>Null</td>
                                    <td>Null</td>
                                    <td>Null</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>

                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.col -->

        </div>
    </div>
    <form class="row" action="/5g" method="post">
        @csrf
        @method('post')
        @foreach($routerSettingInfo['noOfWifi'] as $routerSettingInfoWifi)
            @if($routerSettingInfoWifi)
                <div class="col-12 col-xxl-6 col-xl-6 col-lg-8 col-md-8 col-sm-8 mb-4">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }} Router Setting <i class="fa-solid fa-wifi"></i></h3>
                            <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i
                                        data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse"
                                        class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <input name="SSID{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}" type="text" class="form-control" id="floatingInput{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}" placeholder="WiFi SSID {{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}"
                                            value="{{ $routerSettingInfoWifi['SSID']['_value'] }}">
                                        <label for="floatingInput{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}">WiFi SSID {{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}</label>
                                    </div>
                                </div>
                                {{-- <div class="col">
                                    <div class="input-group form-floating">
                                        <input type="password" class="form-control" id="currentPassword5g"
                                            placeholder="Current password 5G" aria-label="Current password 5G" value="123456789"
                                            disabled>
                                        <label for="currentPassword5g">Current Password 5G</label>
                                        <button type="button" class="btn btn-outline-info input-group-text bi-eye-slash"
                                            id="toggle-currentPassword5g">
                                        </button>
                                    </div>
                                </div> --}}
                                <div class="col col-lg-5">
                                    <div class="form-floating">

                                        <input name="newPassword{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}" type="password" class="form-control" id="newPassword{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] === '2.4GHz' ? '24GHz' : $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}"
                                            placeholder="New password {{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}" aria-label="New password {{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}" name="{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'].'newPassPhrase' }}">
                                        <label for="newPassword{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] === '2.4GHz' ? '24GHz' : $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}">New Password {{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}</label>
                                    </div>
                                </div>
                                <div class="col-1 m-0 p-0">
                                    <span class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-newPassword{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] === '2.4GHz' ? '24GHz' : $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}">
                                    </span>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <div class="form-check form-switch">
                                        <input name="SSIDAdvertisementEnabled{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}" class="form-check-input" type="checkbox" id="HideflexSwitchCheckDefault" {{ $routerSettingInfoWifi['SSIDAdvertisementEnabled']['_value']==0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="HideflexSwitchCheckDefault">Hide SSID</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-check form-switch">
                                        <input name="WLANEnable{{ $routerSettingInfoWifi['X_HW_RFBand']['_value'] }}" class="form-check-input" type="checkbox" id="WlanflexSwitchCheckDefault"
                                            {{ $routerSettingInfoWifi['Enable']['_value']==1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="WlanflexSwitchCheckDefault">Enable WLAN</label>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row my-2">
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
                            </div> --}}
                            

                            <div class="row mt-2">
                                <div class="col">

                                    <button class="btn btn-success">Save settings</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </form>

    {{-- <div class="col-12 col-xxl-6 col-xl-6 col-lg-8 col-md-8 col-sm-8 mb-4">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">2.4 Ghz Router Setting <i class="fa-solid fa-wifi"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i
                            data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse"
                            class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
            </div>
            <form action="/routersetting" method="post">
                @csrf
                @method('post')
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="WiFi SSID 2.4G"
                                    value="{{ $routerSettingInfo['SSID'] }}" name="SSID">
                                <label for="floatingInput">WiFi SSID 2.4G</label>
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="input-group form-floating">
                                <input type="password" class="form-control" id="currentPassword24g"
                                    placeholder="Current password 2.4G" aria-label="Current password 2.4G" value="">
                                <label for="currentPassword24g">Current Password 2.4G</label>
                                <button type="button" class="btn btn-outline-info input-group-text bi-eye-slash"
                                    id="toggle-currentPassword24g">
                                </button>
                            </div>
                        </div> -->
                        <div class="col col-lg-5">
                            <div class="form-floating">

                                <input type="password" class="form-control" id="newPassword24g"
                                    placeholder="New password 24G" aria-label="New password 24G" name="newPassPhrase">
                                <label for="newPassword24g">New Password 2.4G</label>
                            </div>
                        </div>
                        <div class="col-1 m-0 p-0">
                            <span class="btn btn-outline-info input-group-text bi-eye-slash" id="toggle-newPassword24g">
                            </span>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="HideflexSwitchCheckDefault"
                                    name="SSIDAdvertisementEnabled" {{ $routerSettingInfo['SSIDAdvertisementEnabled']==0
                                    ? 'checked' : '' }}>
                                <label class="form-check-label" for="HideflexSwitchCheckDefault">Hide SSID</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="WlanflexSwitchCheckDefault"
                                    name="WLANEnable" {{ $routerSettingInfo['WLANEnable']==1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="WlanflexSwitchCheckDefault">Enable WLAN</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">

                            <button class="btn btn-success">Save settings</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}



</div>



@endsection

@section('script-end')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css"
    integrity="sha256-BicZsQAhkGHIoR//IB2amPN5SrRb3fHB8tFsnqRAwnk=" crossorigin="anonymous">
<!--end::Third Party Plugin(Bootstrap Icons)-->

@vite("resources/js/togglePasswordVisible.js")
@endsection