@extends('./layouts/base')
@section('title', 'Contacts-Telnet')
@section('headerLeft', 'Contacts')
@section('contacts', 'active')


@section('body')
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
    <form action="#" class="col mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center">Contact US</h2>
                <div class="row">
                    <div class="col-6 form-group mb-4">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="col-6 form-group mb-4">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="col-12 form-group mb-4">
                        <label for="discription">Your Queries or Suggestions</label>
                        <textarea type="text" class="form-control" id="discription" placeholder="Write something" required></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>



@endsection