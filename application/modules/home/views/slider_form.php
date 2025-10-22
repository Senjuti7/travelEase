<!-- Hero Section (Clean Version Without SVG Background) -->
<section class="hero-section hero-landing container" id="home">
    <div class="hero-content container">
        <div class="hero-inner row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-3 hero-right">
                <div class="hero-card shadow-lg p-4 rounded-4 bg-white">
                    <h5 class="mb-3 text-center">Quick Flight Search</h5>
                    <form id="flightSearchForm" aria-label="Flight search form">
                        <div class="row g-2">
                            <div class="col-12">
                                <label class="form-label small mb-1">From</label>
                                <input type="text" class="form-control" id="fromCity" placeholder="Departure City" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small mb-1">To</label>
                                <input type="text" class="form-control" id="toCity" placeholder="Destination City" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label small mb-1">Depart</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label small mb-1">Return</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 mt-2">Search Flights</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional minimal styling for spacing -->
<style>
.hero-section {
  padding: 6rem 0;
  background-color: var(--bg, #f9f9f9); /* soft neutral background */
}

.hero-card {
  background: #fff;
  border: 1px solid #eee;
}

.hero-card h5 {
  font-weight: 600;
  color: var(--primary, #19183B);
}

.hero-card .btn-primary {
  background-color: var(--accent, #A1C2BD);
  border: none;
}

.hero-card .btn-primary:hover {
  background-color: var(--tone, #777C6D);
}
</style>
