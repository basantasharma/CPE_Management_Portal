@extends('./layouts/base')
@section('title', 'Account-Telnet')
@section('headerLeft', 'Account')
@section('account', 'active')

@section('body')

<div class="row justify-content-center">
    <div class="col-12 col-xxl-4 col-xl-6  col-lg-6 col-md-12 col-sm-12">
        <div class="card  card-success">
            <div class="card-header">
                <h3 class="card-title">Your Latest Payment <i class="fa-solid fa-indian-rupee-sign"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped table-success">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Method</th>
                            <th style="width: 40px">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Internet Bill Paid</td>
                            <td>Online(Esewa)
                            </td>
                            <td>300$</td>
                        </tr>
                        
                    </tbody>
                </table>

            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

    <div class="col-12 col-xxl-4 col-xl-6  col-lg-6 col-md-12 col-sm-12">
        <div class="card  card-warning">
            <div class="card-header">
                <h3 class="card-title">My Subscribed Plan</h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="bi bi-plus-lg"></i><i data-lte-icon="collapse" class="bi bi-dash-lg"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped table-warning">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Speed</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Internet</td>
                            <td>200Mbps</td>
                            <td>1yrs</td>
                            <td><span class="badge text-bg-success">Active</span></td>
                            <td>300$</td>
                        </tr>
                        
                    </tbody>
                </table>

            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

    <div class="col-12 col-xxl-2 col-xl-6  col-lg-6 col-md-12 col-sm-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Days Remaining</h3>
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