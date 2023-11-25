@extends('./layouts/base')
@section('title', 'Support-Telnet')
@section('headerLeft', 'Support')
@section('support', 'active')


@section('body')

    <div class="row justify-content-center text-center mb-4">
        <div class="col">
            <h2>You have no Tickets Opened</h2>
            <button class="btn btn-warning">Report a problem</button>
        </div>
    </div>

    <div class="row">
        <div class="col">
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
        </div>
    </div>




@endsection