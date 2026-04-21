<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<style>
.hero {
  height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
  background-size: cover;
  background-position: center;
  position: relative;
}

.hero::after {
  content: "";
  position: absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background: rgba(0,0,0,0.6);
}

.hero-content {
  position: relative;
  z-index: 2;
}

.btn-orange {
  background-color: #ff6600;
  color: white;
  border: none;
}

.section-title {
  font-weight: 700;
}
.card img {
  height: 220px;
  object-fit: cover;
}
</style>

<!-- HERO -->
<div class="hero" style="background-image: url('{{asset('trackflow/costco-wholesale-shopping-cart-buy-clothes-in-a-supermarket-real-people-in-the-city-of-vancouver-go-shopping-with-big-carts-and-face-a-lot-of-people-choose-look-at-the-price-tags-free-video.jpg')}}')">
  <div class="hero-content">
    <h1 class="display-4 fw-bold">TruckFlow Movers</h1>
    <p class="lead">Reliable. Fast. Global logistics you can trust.</p>

    <form action="{{route('track')}}" method="POST" class="d-flex justify-content-center mt-4">
      @csrf
      <input type="text" name="tracking_number" class="form-control w-50" placeholder="Enter Tracking ID">
      <button class="btn btn-orange ms-2">Track</button>
    </form>
  </div>
</div>

<!-- ABOUT -->
<section class="container my-5 text-center">
  <h2 class="section-title">Who We Are</h2>
  <p class="text-muted">
    TruckFlow is a modern logistics company providing fast, secure, and reliable shipping services 
    for individuals and businesses worldwide. We combine technology with logistics expertise 
    to deliver excellence.
  </p>
</section>

<!-- WHY -->
<section class="container my-5">
  <h2 class="text-center section-title">Why Choose Us</h2>

  <div class="row text-center mt-4">

    <div class="col-md-4">
      <div class="mb-3">
        <i class="bi bi-lightning-charge-fill fs-1 text-warning"></i>
      </div>
      <h5>Fast Delivery</h5>
      <p>We ensure timely delivery with optimized routes and real-time tracking updates.</p>
    </div>

    <div class="col-md-4">
      <div class="mb-3">
        <i class="bi bi-globe2 fs-1 text-primary"></i>
      </div>
      <h5>Global Coverage</h5>
      <p>Ship anywhere in the world with our trusted international logistics network.</p>
    </div>

    <div class="col-md-4">
      <div class="mb-3">
        <i class="bi bi-shield-lock-fill fs-1 text-success"></i>
      </div>
      <h5>Secure Handling</h5>
      <p>Your packages are protected at every step with advanced security systems.</p>
    </div>

  </div>
</section>

<!-- IMAGE + TEXT -->
<section class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="{{ asset('trackflow/transport-truck-vehicle-passing-through-a-highway-free-video.jpg') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>Built on Trust</h3>
      <p>

We provide end-to-end logistics solutions designed for efficiency and reliability.
Our dedicated team ensures every delivery meets the highest standards of quality.
We focus on speed, safety, and accuracy in every shipment we handle.
With modern tracking systems, you stay informed at every stage of delivery.
We handle both local and international shipments with professionalism and care.
Our logistics network is built to support businesses of all sizes.
Every package is treated with attention and secure handling procedures.
We continuously improve our services to meet global shipping standards.
Customer satisfaction is at the core of everything we do.
Your trust drives us to deliver excellence every single day.

      </p>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="container my-5">
  <h2 class="text-center section-title">Our Services</h2>

  <div class="row gy-4">
    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('trackflow/theme-of-illegal-burial-of-pets-in-forest-self-service-pet-burial-in-woodland-man-carries-carrier-with-dead-cat-or-dog-and-a-large-shovel-to-bury-in-the-ground-in-the-forest-rip-domestic-animal-video.jpg') }}">
        <div class="card-body">
          <h5>Domestic Shipping</h5>
          <p>Quick and affordable delivery within your country.
              We ensure fast shipping that fits your budget and timeline.
              Our local logistics network guarantees reliable doorstep delivery.
              Every package is handled safely and delivered with care and efficiency.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('trackflow/porto-portugal-cargo-port-with-cranes-and-workers-in-sunny-weather-in-oporto-loading-terminal-with-cargo-ships-view-from-the-bridge-global-business-logistic-and-transportation-video.jpg') }}">
        <div class="card-body">
          <h5>International Shipping</h5>
          <p>Seamless global delivery with customs support.
            We handle international shipping with smooth and reliable processes.
            Our team assists with customs clearance to avoid delays.
            Every shipment is tracked and delivered safely across borders.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('trackflow/russia-moscow-february-24-2022-warehouse-with-cardboard-boxes-inside-on-pallets-racks-logistic-center-creative-huge-large-modern-warehouse-filled-with-cardboard-boxes-on-shelves-free-video.jpg') }}">
        <div class="card-body">
          <h5>Real-Time Tracking</h5>
          <p>Track your shipments anytime, anywhere.
              Stay updated with real-time tracking information on every delivery.
              Access your shipment status easily from any device.
              We ensure full visibility so you never lose control of your package.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PET -->
<section class="container my-5">
  <h2 class="text-center section-title">Pet Relocation</h2>

  <div class="row gy-4">
    <div class="col-md-6">
      <div class="card">
        <img src="{{ asset('trackflow/male-volunteer-taking-out-cat-of-carton-box-and-putting-into-carrier-in-truck-rescue-workers-saving-animals-from-frontline-city-in-ukraine-people-evacuating-homeless-pets-and-taking-to-safe-places-video.jpg') }}">
        <div class="card-body">
          <h5>Domestic Pet Transport</h5>
          <p>Safe and comfortable relocation within the country.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <img src="{{ asset('trackflow/everyday-busy-life-at-the-airport-free-video.jpg') }}">
        <div class="card-body">
          <h5>International Pet Transport</h5>
          <p>We handle all logistics and documentation for your pet.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="container text-center my-5">
  <h2 class="section-title">Our Impact</h2>

  <div class="row">
    <div class="col-md-4">
      <h1 class="text-danger count-up" data-count="34">0</h1>
      <p>Years Experience</p>
    </div>

    <div class="col-md-4">
      <h1 class="text-danger count-up" data-count="12500">0</h1>
      <p>Deliveries</p>
    </div>

    <div class="col-md-4">
      <h1 class="text-danger count-up" data-count="281">0</h1>
      <p>Reviews</p>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white pt-5 pb-3 mt-5">
  <div class="container">

    <div class="row text-start">

      <!-- Brand -->
      <div class="col-md-4 mb-4">
        <h4 class="fw-bold text-warning">TruckFlow Movers</h4>
        <p class="text-muted">
          Delivering trust worldwide with fast, secure, and reliable logistics solutions for individuals and businesses.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-semibold mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-light d-block mb-2">Track Shipment</a></li>
          <li><a href="#" class="text-decoration-none text-light d-block mb-2">Pricing</a></li>
          <li><a href="#" class="text-decoration-none text-light d-block mb-2">Services</a></li>
          <li><a href="#" class="text-decoration-none text-light d-block">Contact Support</a></li>
        </ul>
      </div>

      <!-- Contact / Social -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-semibold mb-3">Connect With Us</h5>

        <p class="mb-2">
          <i class="bi bi-geo-alt-fill text-warning me-2"></i> Global Logistics Network
        </p>
        <p class="mb-3">
          <i class="bi bi-envelope-fill text-warning me-2"></i> support@truckflow.com
        </p>

        <div class="d-flex gap-3">
          <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>

    <hr class="border-secondary">

    <div class="text-center text-muted small">
      © 2026 TruckFlow Movers. All rights reserved.
    </div>

  </div>
</footer>
<script>
function animateCountUp(el, end, duration = 2000) {
  let start = 0;
  let startTime = null;

  function step(timestamp) {
    if (!startTime) startTime = timestamp;
    const progress = Math.min((timestamp - startTime) / duration, 1);
    el.textContent = Math.floor(progress * end);
    if (progress < 1) requestAnimationFrame(step);
  }

  requestAnimationFrame(step);
}

document.querySelectorAll('.count-up').forEach(el => {
  animateCountUp(el, parseInt(el.dataset.count));
});
</script>

</html>
</x-app-layout>