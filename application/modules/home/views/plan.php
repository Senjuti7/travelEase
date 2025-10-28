<!-- Booking Section -->
<section class="booking-section py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Left Text Section -->
      <div class="col-lg-6">
        <div class="booking-text">
          <span class="title mb-3 fs-2">Plan Your Perfect Journey</span>
          <p class="text-muted mb-4">
            Whether you’re discovering the wonders of India or setting off on an international adventure, we make travel planning effortless. Choose your destination, and we’ll handle the rest — from the best flight options to unforgettable travel experiences.
          </p>
          <ul class="booking-highlights">
            <li><i class="fas fa-check-circle me-2"></i>Exclusive flight offers</li>
            <li><i class="fas fa-check-circle me-2"></i>Trusted global partners</li>
            <li><i class="fas fa-check-circle me-2"></i>24/7 travel support</li>
          </ul>
        </div>
      </div>

      <!-- Right Form Section -->
      <div class="col-lg-6">
        <div class="booking-form-wrapper shadow-lg p-4 rounded-4">
          <div class="tab-buttons d-flex justify-content-between mb-4">
            <button class="tab-btn active" onclick="switchTab('domestic')">
              <i class="fas fa-map-marked-alt me-2"></i>Within India
            </button>
            <button class="tab-btn" onclick="switchTab('international')">
              <i class="fas fa-globe-americas me-2"></i>Outside India
            </button>
          </div>

          <!-- Domestic Form -->
          <form id="domestic" class="tab-content active">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Select Your State</label>
                <select class="form-select" required>
                  <option value="">Select State</option>
                  <option value="Goa">Goa</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Rajasthan">Rajasthan</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Duration of Stay (Days)</label>
                <input type="number" class="form-control" min="1" max="30" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Travelers</label>
                <input type="number" class="form-control" min="1" max="20" required>
              </div>
              <div class="col-md-12">
                <button class="btn btn-primary w-100 mt-2">
                  <i class="fas fa-paper-plane me-2"></i>Get Your Free Quote
                </button>
              </div>
            </div>
          </form>

          <!-- International Form -->
          <form id="international" class="tab-content">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Select Destination</label>
                <select class="form-select" required>
                  <option value="">Choose Country</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Bali">Bali</option>
                  <option value="Dubai">Dubai</option>
                  <option value="Singapore">Singapore</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Duration of Stay (Days)</label>
                <input type="number" class="form-control" min="1" max="30" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Travelers</label>
                <input type="number" class="form-control" min="1" max="20" required>
              </div>
              <div class="col-md-12">
                <button class="btn btn-primary w-100 mt-2">
                  <i class="fas fa-plane me-2"></i>Get International Quote
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Styles -->
<style>
.booking-section {
  background: #f9f9f9;
  position: relative;
}

.booking-text .title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #19183B;
}

.booking-text p {
  line-height: 1.7;
}

.booking-highlights {
  list-style: none;
  padding: 0;
}

.booking-highlights li {
  color: #555;
  font-weight: 500;
  margin-bottom: 10px;
}

.booking-highlights i {
  color: #A1C2BD;
}

.booking-form-wrapper {
  background: #ffffff;
  border: 1px solid #eee;
}

.tab-buttons {
  gap: 10px;
  border-bottom: 2px solid #eee;
  padding-bottom: 10px;
}

.tab-btn {
  flex: 1;
  padding: 10px 0;
  border: none;
  background: none;
  font-weight: 600;
  color: #777;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.tab-btn.active {
  background: linear-gradient(90deg, #A1C2BD, #B7B89F);
  color: #19183B;
}

.tab-btn:hover {
  background: #f1f1f1;
}

.tab-content {
  display: none;
}

.tab-content.active {
  display: block;
  animation: fadeIn 0.4s ease;
}

.form-control,
.form-select {
  border-radius: 8px;
  border: 1px solid #ddd;
  padding: 10px;
}

.btn-primary {
  background: linear-gradient(90deg, #19183B, #A1C2BD);
  border: none;
  font-weight: 600;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background: linear-gradient(90deg, #A1C2BD, #19183B);
  transform: scale(1.02);
}

@keyframes fadeIn {
  from {opacity: 0; transform: translateY(10px);}
  to {opacity: 1; transform: translateY(0);}
}
</style>

<!-- Tab Switch JS -->
<script>
function switchTab(tabId) {
  document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
  document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

  event.target.classList.add('active');
  document.getElementById(tabId).classList.add('active');
}
</script>
