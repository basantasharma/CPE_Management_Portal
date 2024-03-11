@extends('./layouts/base')
@section('title', 'Telnet')
@section('headerLeft', 'Home')
@section('home', 'active')

@section('body')
<section class="p-4 hcf-bp-center hcf-bs-cover hcf-overlay hcf-transform mb-4" style="background: linear-gradient(-135deg, black, grey) ; border-radius:50px;">
  {{-- <section class="px-5 py-6 py-xxl-10 hcf-bp-center hcf-bs-cover hcf-overlay hcf-transform mb-4" style="background-image: url('/images/techback.jpg') ;"> --}}
  <div class="container-fluid">
     <div class="row justify-content-md-center">
       <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-center text-white">
         <h1 class="display-3 fw-bold mb-3">CPE Management Portal</h1>
         <p class="lead mb-5">Efficiently manage your CPE devices with our advanced portal. Streamline operations, enhance security, and optimize performance.</p>
         <div class="d-grid gap-4 d-sm-flex justify-content-sm-center">
          @auth
           <a href="/dashboard" class="btn btn-outline-light btn-lg px-4 gap-3">Get Started</a>
          @else
          <a href="/login" class="btn btn-outline-light btn-lg px-4 gap-3">Get Started</a>
          @endauth
           <a href="#" class="btn btn-outline-light btn-lg px-4">Learn More</a>
         </div>
       </div>
     </div>
  </div>
 </section>


 <div class="container">
 <div class="row">
    <div class="col-md-4">
      <div class="card bg-dark text-light">
        <img src="/images/monitoring.png" class="card-img-top" alt="Monitoring">
        <div class="card-body border-top">
          <h2 class="card-title ">Monitoring</h2><br>
          <p class="card-text">Automated monitoring of CPE devices ensures optimal network performance and security. Utilizing TR-069, we can collect data for business analysis, detect active users, and optimize network settings for better performance.</p>
          <a href="#" class="btn btn-outline-light">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-dark text-light">
        <img src="/images/setting.png" class="card-img-top" alt="Monitoring">
        <div class="card-body border-top">
          <h2 class="card-title">Change Settings</h2><br>
          <p class="card-text">Efficiently manage CPE settings remotely using TR-069. This feature reduces the need for physical visits, speeds up the deployment process, and ensures devices are always configured optimally for your network.</p>
          <a href="#" class="btn btn-outline-light">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-dark text-light">
        <img src="/images/manage.png" class="card-img-top" alt="Monitoring">
        <div class="card-body border-top">
          <h2 class="card-title">Manage Connected Devices</h2><br>
          <p class="card-text">Centralized management of connected devices, including firmware upgrades, configuration backups, and scheduling maintenance tasks. This ensures your network remains secure and operational, with minimal downtime.</p>
          <a href="#" class="btn btn-outline-light">Learn More</a>
        </div>
      </div>
    </div>
 </div>
</div>
  
{{-- 
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aGlraW5nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mountain Climbing</h5>
        <p>Join with us for adventure.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.wallpaperflare.com/static/400/626/479/landscape-mountains-paragliding-sport-wallpaper.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Paragliding</h5>
        <p>Let's fly together.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/id/139701505/photo/river-rafting.jpg?s=612x612&w=0&k=20&c=2Tvl5fIHKUlAiGzDfGkMTJSbnChYAAHPKh2uVvqVf3I=" class="d-block w-100" alt="...">
      <div class="text-dark carousel-caption d-none d-md-block">
        <h5>River Rafting</h5>
        <p>Let's go with the flow.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="vh-60" style="background: url(https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg) no-repeat fixed; background-size: cover;">
  <div class="container py-5 h-60">
    <div class="row d-flex justify-content-center align-items-center h-60">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-left">
            <form class="row g-3">
              <div class="col-md-12">
                <label for="Fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="Fullname">
              </div>
              <div class="col-md-6">
                <label for="Phone" class="form-label">Phone</label>
                <input type="Number" class="form-control" id="Phone">
              </div>
              <div class="col-md-6">
                <label for="typeServiceX-2" class="form-label">Service</label>
                <select name="role" class="form-select" aria-label="Default select example" id="typeServiceX-2">
                  <option value="boating">Boating</option>
                  <option value="paragliding">Paragliding</option>
                  <option value="mountain climbing">Mountain Climbing</option>
                </select>
              </div>
                <div class="col-md-4">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Adult</label>
                  </div>
                  <label for="adult_ticket" class="form-label">Number of tickets </label>
                  <input type="Number" class="form-control" id="adult_ticket">
                </div>
                <div class="col-md-4">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Child</label>
                  </div>
                  <label for="child_ticket" class="form-label">Number of tickets </label>
                  <input type="Number" class="form-control" id="child_ticket">
                </div>
                <div class="col-md-4">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2">
                    <label class="form-check-label" for="inlineCheckbox3">Foreign</label>
                  </div>
                  <label for="foreign_ticket" class="form-label">Number of tickets </label>
                  <input type="Number" class="form-control" id="foreign_ticket">
                </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Select date</label>
                <input type="datetime-local" class="form-control" id="inputAddress" placeholder="1234 Main St" data-mdb-disable-past>
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Book Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
--}}
@endsection
