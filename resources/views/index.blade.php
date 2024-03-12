@extends('./layouts/base')
@section('title', 'Telnet')
@section('headerLeft', 'Home')
@section('home', 'active')

@section('body')
  <section class="p-4 hcf-bp-center hcf-bs-cover hcf-overlay hcf-transform mb-4" style="background:none ; border-radius:50px;">
    {{-- <section class="px-5 py-6 py-xxl-10 hcf-bp-center hcf-bs-cover hcf-overlay hcf-transform mb-4" style="background-image: url('/images/techback.jpg') ;"> --}}
    <div class="container-fluid">
      <div class="row justify-content-md-center align-middle">
        <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-start text-dark">
          <h1 class="display-3 fw-bold mb-3">CPE Management Portal</h1>
          <p class="lead mb-5 text-secondary">Efficiently manage your CPE devices with our advanced portal. Streamline operations, enhance security, and optimize performance.</p>
          <div class="d-grid gap-4 d-sm-flex justify-start-sm-center">
            @auth
            <a href="/dashboard" class="btn btn-outline-dark btn-lg px-4 gap-3">Get Started</a>
            @else
            <a href="/login" class="btn btn-outline-dark btn-lg px-4 gap-3">Get Started</a>
            @endauth
            <a href="/services" class="btn btn-outline-secondary btn-lg px-4">Learn More</a>
          </div>
        </div>
        <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-center text-dark">
          <img src="/images/techSupport.png" class="col-md-6 float-md-center mb-3 ms-md-3 feature_img" style="height:500px;" alt="...">
        </div>
      </div>
    </div>
  </section>


  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-4 col-xxl-4 col-xl-4  col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-dark">
          <div class="card-header">
              <h3 class="card-title">Monitoring : <i class="fa-solid fa-gauge-high"></i></h3>
              <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="clearfix">
              <ul class="list-group list-group-flush">
                <div>
                  <img src="/images/monitoring.png" class="col-md-6 float-md-start m-4 ms-md-3 feature_img" alt="...">
                  <p class="card-text mt-4"> Monitoring CPE (Customer Premises Equipment) devices using the TR-069 protocol, also known as the CPE WAN Management Protocol (CWMP), involves leveraging a set of features and functionalities designed for remote management and provisioning of CPE devices connected to an IP network. This protocol is a critical tool for service providers to manage, monitor, and troubleshoot customer premises equipment such as routers, modems, and gateways.
                  </p>
                </div>
              </ul>
              <ul class="list-group list-group-flush">
                <div>
                  <a href="/services" class="btn btn-outline-dark mt-2">Learn More</a>
                </div>
              </ul>
            </div>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.col -->
      <div class="col-4 col-xxl-4 col-xl-4  col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-dark">
          <div class="card-header">
            <h3 class="card-title">Configure Settings : <i class="fa-solid fa-gear"></i></h3>
            <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="clearfix">
              <ul class="list-group list-group-flush">
                <div>
                  <img src="/images/setting.png" class="col-md-6 float-md-start m-4 ms-md-3 feature_img" alt="...">
                    <p class="card-text mt-4"> Configuring CPE (Customer Premises Equipment) devices using the TR-069 protocol, also known as the CPE WAN Management Protocol (CWMP), is a powerful method for service providers to manage and configure their devices remotely. This protocol is defined by the Broadband Forum and is widely used for its ability to support auto-configuration, software or firmware image management, status and performance management, and diagnostics.
                    </p>
                </div>
              </ul>
              <ul class="list-group list-group-flush">
                <div>
                  <a href="/services" class="btn btn-outline-dark mt-2">Learn More</a>
                </div>
              </ul>
            </div>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.col -->
      <div class="col-4 col-xxl-4 col-xl-4  col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-dark">
          <div class="card-header">
            <h3 class="card-title">Manage Connected Devices : <i class="fa-solid fa-mobile-screen-button"></i></h3>
            <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="clearfix">
              <ul class="list-group list-group-flush">
                <div>
                  <img src="/images/manage.png" class="col-md-6 float-md-start m-4 ms-md-3 feature_img" alt="...">
                  <p class="card-text mt-4"> Managing connected devices, particularly in the context of IoT (Internet of Things) applications, leverages the TR-069 protocol to provide a standardized approach for control and management. This protocol is essential for service providers looking to enter the IoT market, offering a framework for automated discovery, extreme scaling, zero-touch provisioning, bulk operations, secure device attribute addition, and closed-loop automation to ensure IoT security and network efficiency.
                  </p>
                </div>
              </ul>
              <ul class="list-group list-group-flush">
                <div>
                  <a href="/services" class="btn btn-outline-dark mt-2">Learn More</a>
                </div>
              </ul>
            </div>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.col -->
    </div>
  </div>
@endsection
