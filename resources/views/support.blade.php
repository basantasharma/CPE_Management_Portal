@extends('./layouts/base')
@section('title', 'Support-Telnet')
@section('headerLeft', 'Support')
@section('support', 'active')


@section('body')

    <div class="row text-center mb-4">
        <div class="col">
            <h2>You have no Tickets Opened</h2>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#openTicket">
                Open Ticket
              </button>
            
        </div>
    </div>
    <!-- The Modal -->
    <form class="needs-validation" novalidate action="#" method="post">
        <div class="modal modal-lg" id="openTicket">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
            
                    <!-- Modal Header -->
                    <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title">Report Your Problem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body">

                            @csrf
                            <!--begin::Body-->
                            <div class="card-body"><!--begin::Row-->
                                <div class="row mb-2"><!--begin::Col-->
                                    <div class="col-6">
                                        <label for="validationCustom01" class="form-label fs-5">Choose Problem Catogery</label>
                                        <select class="form-select" id="validationCustom01" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Slow Internet</option>
                                        <option>No Internet Connection</option>
                                        <option>Online Gaming Issue</option>
                                        <option>Tv Related</option>
                                        <option>Account Related</option>
                                        <option>Billing Related</option>
                                        <option>Other</option>
                                        </select>
                                        <div class="invalid-feedback">
                                        Please select a valid Problem.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationTextarea" class="form-label fs-5">Describe your Problem</label>
                                        <textarea class="form-control" id="validationTextarea" placeholder="Describe your problem in details" required></textarea>
                                        <div class="invalid-feedback">
                                        Please describe your problem.
                                        </div>
                                    </div>
                                </div><!--end::Row-->
                            </div><!--end::Body--><!--begin::Footer-->
                            <div class="card-footer">
                            </div><!--end::Footer-->
                        {{-- </form> --}}
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
                    </div>
            
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12 col-xxl-5 col-xl-6  col-lg-6 col-md-12 col-sm-12">
            <div class="card  card-dark">
                <div class="card-header">
                    <h3 class="card-title">My Last Tickets <i class="fa-solid fa-ticket"></i></h3>
                    <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
                </div><!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped">
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

        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Support Contacts <i class="fa-solid fa-user-gear"></i></h3>
                    <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-4">
                            <img class="img-thumbnail" src="images/techSupport.png" >
                        </div>
                        <div class="col">
                            <table class="table table-striped">
                                <thead>
                                    <th>#</th>
                                    <th>Department <i class="fa-solid fa-code-branch"></i></th>
                                    <th>Contact <i class="fa-solid fa-phone"></i></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fa-solid fa-user-gear"></i></td>
                                        <td>Technical</td>
                                        <td>+977 9869245425</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-user-tie"></i></td>
                                        <td>Account</td>
                                        <td>+977 9854763245</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-display"></i></td>
                                        <td>TV</td>
                                        <td>+977 9845632157</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-people-group"></i></td>
                                        <td>Sales</td>
                                        <td>+977 9823652145</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-file-invoice-dollar"></i></td>
                                        <td>Billing</td>
                                        <td>+977 9863265562</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-building"></i></td>
                                        <td>Enterprise</td>
                                        <td>+977 9863525565</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script-end')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms =
            document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>

@endsection