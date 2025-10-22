<!-- Hero Section -->
<section class="hero" id="home">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Text Section -->
      <div class="col-lg-7 mb-5 mb-lg-0">
        <h1>TravelEase –</h1>
        <p>
          We specialize in providing affordable flight options, personalized travel packages, and exceptional
          customer service.
        </p>
      </div>

      <!-- Right Flight Form -->
      <div class="col-lg-5">
        <div class="flight-form card p-4 shadow-lg border-0">
          <h4 class="mb-3 text-brand fw-semibold">Quick Flight Search</h4>
          <form>
            <div class="mb-3">
              <label class="form-label fw-semibold">From</label>
              <input type="text" class="form-control" placeholder="Departure City">
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">To</label>
              <input type="text" class="form-control" placeholder="Destination City">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label fw-semibold">Depart</label>
                <input type="text" class="form-control" placeholder="dd-mm-yyyy">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label fw-semibold">Return</label>
                <input type="text" class="form-control" placeholder="dd-mm-yyyy">
              </div>
            </div>

            <button type="submit" class="btn btn-gradient w-100 mt-2 fw-semibold">
              Search Flights
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Styles -->
<style>
  :root {
    --tone: #777C6D;
    /* olive-gray */
    --secondary: #B7B89F;
    /* sand beige */
    --muted: #CBCBCB;
    /* light gray */
    --bg: #EEEEEE;
    /* page background */
    --primary: #19183B;
    /* deep dark */
    --accent: #A1C2BD;
    /* muted teal */
    --text: #19183B;
  }

  .hero {
    position: relative;
    background: linear-gradient(135deg, var(--tone), var(--accent), var(--secondary));
    padding: 3rem 0;
    color: white;
    z-index: 1;
    overflow: hidden;
  }

  .hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(25, 24, 59, 0.3);
    z-index: -1;
  }

  .hero h1 {
    font-weight: 700;
    font-size: 2.8rem;
    margin-bottom: 1.5rem;
    color: var(--primary);
    text-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  }

  .hero p {
    font-size: 1.2rem;
    color: #f5f5f5;
    max-width: 600px;
  }

  .flight-form {
    background: var(--bg);
    border-radius: 1rem;
  }

  .form-control {
    border: 1.5px solid var(--muted);
    border-radius: 0.5rem;
    padding: 0.6rem 0.8rem;
    box-shadow: none;
  }

  .form-control:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(25, 24, 59, 0.1);
  }

  .btn-gradient {
    background: linear-gradient(90deg, var(--primary), var(--accent));
    color: #fff;
    border: none;
    border-radius: 0.6rem;
    padding: 0.75rem;
    transition: all 0.3s ease;
  }

  .btn-gradient:hover {
    background: linear-gradient(90deg, var(--accent), var(--primary));
    transform: scale(1.02);
  }
</style>
