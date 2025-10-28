<section class="creative-cards style-one">
  <div class="container">
    <div class="row text-center mb-1">
      <span class="fw-bold fs-2">Why Choose High City Travels?</span >
      <p>We make your travel dreams come true with unbeatable service and prices</p>

      <!-- Card 1 -->
      <div class="card-column">
        <div class="card-details">
          <div class="card-icons">
            <i class="fa-solid fa-plane-departure"></i>
          </div>
          <span class="d-block fs-3 fw-bold">Cheapest Rates</span>
          <p>We monitor fares across carriers and apply our price-match promise so you get the best available deal.</p>
          <a class="read-more-btn" href="<?= site_url('our-branches') ?>"><i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card-column">
        <div class="card-details">
          <div class="card-icons">
            <i class="fa-solid fa-route"></i>
          </div>
          <span class="d-block fs-3 fw-bold">Flexible Routes</span>
          <p>Create multi-city itineraries, change dates easily, and explore off-the-beaten-path connections.</p>
          <a class="read-more-btn" href="<?= site_url('our-branches') ?>"><i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card-column">
        <div class="card-details">
          <div class="card-icons">
            <i class="fa-solid fa-headset"></i>
          </div>
          <span class="d-block fs-3 fw-bold">24/7 Support</span>
          <p>Our travel experts are available anytime to help with bookings, changes, and local advice.</p>
          <a class="read-more-btn" href="<?= site_url('our-branches') ?>"><i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  :root {
    --primary: #19183B;
    --accent: #A1C2BD;
  }

  body {
    font-size: 17px;
    line-height: 30px;
    font-weight: 400;
    margin: 0;
    background: #fff;
  }

  * {
    box-sizing: border-box;
  }

  .creative-cards {
    padding: 120px 0;
    position: relative;
  }

  .creative-cards .container {
    max-width: 1320px;
    margin: auto;
  }

  .creative-cards .container .row {
    display: flex;
    flex-wrap: wrap;
  }

  .card-column {
    flex: 0 0 auto;
    width: 33.33333333%;
    text-align: center;
    padding: 15px;
  }

  .card-details {
    width: 80%;
    margin: auto;
    position: relative;
    transition: .3s ease-in-out;
  }

  .card-details:before {
    content: "";
    width: 190px;
    height: 380px;
    background: #f7f6f2;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%) skew(-20deg, 0deg);
    z-index: -1;
    transition: .3s ease-in-out;
  }

  .card-details:hover:before {
    background-color: var(--accent);
  }

  .card-icons {
    width: 140px;
    height: 150px;
    position: relative;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .card-icons:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    border: 1px solid var(--primary);
    width: 100%;
    height: 100%;
    transform: skew(-20deg, 0deg);
    background: #fff;
    transition: .3s ease-in-out;
  }

  .card-details:hover .card-icons:before {
    background-color: var(--primary);
  }

  /* Favicon icon style */
  .card-icons i {
    position: relative;
    font-size: 48px;
    color: var(--primary);
    z-index: 1;
    transition: color 0.3s ease;
  }

  .card-details:hover .card-icons i {
    color: #fff;
  }

  .card-details h3 {
    margin: 50px 0 15px;
    font-weight: 700;
    font-size: 1.75rem;
  }

  .card-details h3 a {
    color: #000;
    text-decoration: none;
  }

  .card-details p {
    font-size: 16px;
    line-height: 30px;
    color: #444;
    margin-bottom: 30px;
  }

  .read-more-btn {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid var(--primary);
    border-radius: 100%;
    margin: auto;
    background: #fff;
    transform: translateX(-10px);
    opacity: 0;
    visibility: hidden;
    transition: .3s ease-in-out;
  }

  .read-more-btn i {
    color: #000;
    font-size: 12px;
  }

  .card-details:hover .read-more-btn {
    transform: translateX(0);
    opacity: 1;
    visibility: visible;
  }

  /* Responsive */
  @media (max-width: 992px) {
    .card-column {
      width: 50%;
      margin-bottom: 40px;
    }
  }

  @media (max-width: 480px) {
    .card-column {
      width: 100%;
      margin-bottom: 20px;
    }

    .card-details {
      width: 100%;
    }

    .read-more-btn {
      transform: translateX(0);
      opacity: 1;
      visibility: visible;
    }
  }
</style>

<!-- Font Awesome CDN -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
