@extends('./layouts/base')
@section('title', 'Dashboard-Telnet')
@section('headerLeft', 'Dashboard')
@section('dashboard', 'active')


@section('body')

<div class="row justify-content-center mb-4">

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

    <div class="col-12 col-xxl-3 col-xl-4  col-lg-6 col-md-12 col-sm-12">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Your Bandwidth <i class="fa-solid fa-bolt"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped table-success">
                    <thead>
                        <tr>
                            <th><i class="fa-solid fa-circle-down fa-2xl mx-2"></i>Download</th>
                            <th><i class="fa-solid fa-circle-up fa-2xl mx-2"></i>Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>200Mbps</th>
                            <th>100Mbps</th>
                        </tr>
                    </tbody>
                </table>
               
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->
</div>

<div class="row justify-content-center mb-4">
    <div class="col-12 col-xxl-5 col-xl-6  col-lg-6 col-md-12 col-sm-12">
        <div class="card  card-warning">
            <div class="card-header">
                <h3 class="card-title">My Last Tickets <i class="fa-solid fa-ticket"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped table-warning">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Issue</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Assigned to</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2 Days ago</td>
                            <td>Gaming Issue</td>
                            <td>High Ping</td>
                            <td><span class="badge text-bg-success">Solved</span></td>
                            <td>Basanta Sharma</td>
                        </tr>
                        
                    </tbody>
                </table>

            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

    <div class="col-12 col-xxl-2 col-xl-6  col-lg-6 col-md-12 col-sm-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Days Remaining <i class="fa-regular fa-calendar-days"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="">
                    <tr>
                        <th>
                            <h4 class="">250 days</h4>
                        </th>
                        <button class="btn btn-outline-danger float-end">Pay Advance</button>
                    </tr>
                    
                </table>
                <div class="progress mb-2" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 80%; border-radius: 0.375rem;"></div>
                </div>
               
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->
    
</div>



@endsection