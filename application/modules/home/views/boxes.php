<div class="container py-5">
  <div class="row g-4">
    <!-- Card 1 -->
    <div class="col-lg-3 col-md-6">
      <div class="feature-card card border-0 shadow-lg text-center h-100 gradient-1">
        <div class="card-body py-4">
          <div class="icon-circle mb-3">
            <i class="fa-solid fa-plane-departure fa-2x"></i>
          </div>
          <span class="fw-bold d-block">Instant Booking</span>
          <p class="text-dark">Book your flights within seconds with real-time confirmation and no hidden charges.</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-lg-3 col-md-6">
      <div class="feature-card card border-0 shadow-lg text-center h-100 gradient-2">
        <div class="card-body py-4">
          <div class="icon-circle mb-3">
            <i class="fa-solid fa-tags fa-2x"></i>
          </div>
          <span class="fw-bold d-block">Best Fare Deals</span>
          <p class="text-dark">Get the lowest airfares and special discounts for both domestic and international routes.</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-lg-3 col-md-6">
      <div class="feature-card card border-0 shadow-lg text-center h-100 gradient-3">
        <div class="card-body py-4">
          <div class="icon-circle mb-3">
            <i class="fa-solid fa-headset fa-2x"></i>
          </div>
          <span class="fw-bold d-block">24/7 Support</span>
          <p class="text-dark">Our travel experts are always ready to assist you with any booking or itinerary changes.</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-lg-3 col-md-6">
      <div class="feature-card card border-0 shadow-lg text-center h-100 gradient-4">
        <div class="card-body py-4">
          <div class="icon-circle mb-3">
            <i class="fa-solid fa-shield-halved fa-2x"></i>
          </div>
          <span class="fw-bold d-block">Safe & Secure</span>
          <p class="text-dark">All transactions are encrypted and flights are verified for safety and reliability.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* ====== Brand Colors ====== */
:root {
  --primary: #19183B;
  --accent: #A1C2BD;
  --secondary: #B7B89F;
  --tone: #777C6D;
}

/* ====== Card Gradients ====== */
.gradient-1 {
  background: linear-gradient(145deg, var(--accent), var(--secondary));
}

.gradient-2 {
  background: linear-gradient(145deg, var(--secondary), var(--accent));
}

.gradient-3 {
  background: linear-gradient(145deg, var(--accent), var(--tone));
}

.gradient-4 {
  background: linear-gradient(145deg, var(--tone), var(--secondary));
}

/* ====== Card Styling ====== */
.feature-card {
  color: var(--primary);
  border-radius: 1rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 25px rgba(25, 24, 59, 0.2);
}

/* ====== Icon Circle ====== */
.icon-circle {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background-color: var(--primary);
  color: #fff;
  transition: all 0.3s ease-in-out;
}

.icon-circle:hover {
  background-color: var(--accent);
  color: var(--primary);
  transform: scale(1.1);
}

/* ====== Text ====== */
.text-dark {
  color: var(--primary) !important;
}
</style>
