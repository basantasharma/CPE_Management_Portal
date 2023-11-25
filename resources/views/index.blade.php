@extends('./layouts/base')
@section('title', 'Telnet')
@section('headerLeft', 'Home')
@section('home', 'active')
@section('sidebar')

@section('body')

<div class=" ">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style=" width:100%; height: 350px !important;">
      <div class="carousel-item active">
        <video  autoplay muted loop id="introVideo"  style="object-fit: cover;position: relative; top: 0; left: 0;width:100%; height: 350px;">
          <source src="/videos/An_internet_service_V1.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        {{-- <img src="..." class="d-block w-100" alt="..."> --}}
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <video autoplay muted loop id="introVideo" style="object-fit: cover;position: relative; top: 0; left: 0;width:100%; height: 350px;" >
          <source src="/videos/An_internet_service_V1.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        {{-- <img src="..." class="d-block w-100" alt="..."> --}}
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <video autoplay muted loop id="introVideo" style="object-fit: cover;position: relative; top: 0; left: 0;width:100%; height: 350px;" >
          <source src="/videos/An_internet_service_V1.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        {{-- <img src="..." class="d-block w-100" alt="..."> --}}
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
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

</div>


{{-- style="object-fit: cover;position: absolute; top: 0; left: 0; width: 100%; height: 350px;" --}}




@endsection
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
