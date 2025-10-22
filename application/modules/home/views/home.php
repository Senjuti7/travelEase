
<!-- <section class="hero-section hero-landing container" id="home">
    <svg class="hero-svg" viewBox="0 0 1200 600" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <linearGradient id="bgDark" x1="0" x2="0" y1="0" y2="1">
                <stop offset="0%" stop-color="#000000" stop-opacity="0.30" />
                <stop offset="100%" stop-color="#000000" stop-opacity="0.10" />
            </linearGradient>

            <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
                <stop offset="0%" stop-color="#008080" stop-opacity="0.18" />
                <stop offset="100%" stop-color="#F4E1C1" stop-opacity="0.12" />
            </linearGradient>
            <linearGradient id="g2" x1="0" x2="1" y1="0" y2="1">
                <stop offset="0%" stop-color="#FF6F61" stop-opacity="0.08" />
                <stop offset="100%" stop-color="#008080" stop-opacity="0.06" />
            </linearGradient>
            <filter id="blur" x="-20%" y="-20%" width="140%" height="140%">
                <feGaussianBlur stdDeviation="40" />
            </filter>

            <pattern id="diag" width="8" height="8" patternUnits="userSpaceOnUse" patternTransform="rotate(25)">
                <path d="M0 0 L0 8" stroke="#ffffff" stroke-width="0.6" opacity="0.06" />
            </pattern>

            <pattern id="dots" width="6" height="6" patternUnits="userSpaceOnUse">
                <circle cx="1" cy="1" r="0.8" fill="#ffffff" opacity="0.04" />
            </pattern>
        </defs>

        <rect width="1200" height="600" fill="url(#bgDark)" />
        <path d="M0,220 C200,120 400,60 700,120 C1000,180 1200,140 1200,140 L1200,600 L0,600 Z" fill="url(#g1)" filter="url(#blur)" opacity="0.9" />
    
        <circle cx="980" cy="80" r="120" fill="url(#g2)" opacity="0.7" />
        <circle cx="200" cy="60" r="80" fill="#FF6F61" opacity="0.06" />
   
        <g opacity="0.12" stroke="#ffffff" stroke-width="1">
            <path d="M0 320 Q300 260 600 320 T1200 320" fill="none" />
        </g>
    </svg>

    <div class="hero-content container">
        <div class="hero-inner row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-3 hero-right">
                <div class="hero-card">
                    <h5 class="mb-3">Quick Flight Search</h5>
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
    </div>
    </div>
</section> -->

<script>
    // feature pills toggle - desktop only (mobile hides details via CSS)
    (function() {
        const pills = document.querySelectorAll('.feature-compact .pill');
        const details = document.querySelectorAll('.feature-details .detail');

        function clearActive() {
            pills.forEach(p => p.classList.remove('active'));
            details.forEach(d => d.style.display = 'none');
        }
        pills.forEach(p => {
            p.addEventListener('click', () => {
                if (window.innerWidth <= 768) return; // ignore on mobile
                const key = p.getAttribute('data-key');
                clearActive();
                p.classList.add('active');
                const sel = document.querySelector('.feature-details .detail[data-key="' + key + '"]');
                if (sel) sel.style.display = 'block';
            });
        });
        // show first detail by default on large screens
        if (window.innerWidth > 768 && details.length) {
            clearActive();
            const firstP = pills[0];
            firstP.classList.add('active');
            const firstKey = firstP.getAttribute('data-key');
            const firstDetail = document.querySelector('.feature-details .detail[data-key="' + firstKey + '"]');
            if (firstDetail) firstDetail.style.display = 'block';
        }
    })();
</script>
</div>
</section>

<?php $this->load->view('home/choose.php'); ?>


<!-- <section class="why-choose-section" id="why">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Why Choose TravelEase?</h2>
            <p class="lead">We make your travel dreams come true with unbeatable service and prices</p>
        </div>

        <div class="feature-compact" role="list">
            <button class="pill" data-key="rates" aria-expanded="false">
                <span class="pill-icon"><i class="fas fa-dollar-sign brand-icon" aria-hidden="true"></i></span>
                <span class="pill-label">Best Rates</span>
            </button>

            <button class="pill" data-key="routes" aria-expanded="false">
                <span class="pill-icon"><i class="fas fa-route brand-icon" aria-hidden="true"></i></span>
                <span class="pill-label">Flexible Routes</span>
            </button>

            <button class="pill" data-key="support" aria-expanded="false">
                <span class="pill-icon"><i class="fas fa-headset brand-icon" aria-hidden="true"></i></span>
                <span class="pill-label">24/7 Help</span>
            </button>

            <button class="pill" data-key="secure" aria-expanded="false">
                <span class="pill-icon"><i class="fas fa-shield-alt brand-icon" aria-hidden="true"></i></span>
                <span class="pill-label">Secure</span>
            </button>
        </div>

        <div class="feature-details" aria-hidden="true">
            <div class="detail" data-key="rates">
                <h5>Cheapest Rates</h5>
                <p>We monitor fares across carriers and apply our price-match promise so you get the best available deal.</p>
            </div>
            <div class="detail" data-key="routes">
                <h5>Flexible Routes</h5>
                <p>Create multi-city itineraries, change dates easily, and explore off-the-beaten-path connections.</p>
            </div>
            <div class="detail" data-key="support">
                <h5>24/7 Support</h5>
                <p>Our travel experts are available anytime to help with bookings, changes, and local advice.</p>
            </div>
            <div class="detail" data-key="secure">
                <h5>Secure Booking</h5>
                <p>Payment and personal information are protected with industry-standard encryption.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="plan-section" id="plan">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Plan Your Journey</h2>
            <p class="lead">Simple steps to start your next tropical escape</p>
        </div>
    </div>
</section> -->

<!-- Booking Forms Section -->
<section class="booking-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center mb-5">Plan Your Journey</h2>

                <div class="tab-buttons">
                    <button class="tab-btn active" onclick="switchTab('within-india')">Within India</button>
                    <button class="tab-btn" onclick="switchTab('outside-india')">Outside India</button>
                </div>

                <!-- Within India Form -->
                <div id="within-india" class="tab-content active">
                    <h4 class="mb-4">Domestic Travel</h4>
                    <form id="domesticForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">State</label>
                                <select class="form-control" required>
                                    <option value="">Select State</option>
                                    <!-- States -->
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradeshh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>

                                    <!-- Union Territories -->
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry  ">Puducherry </option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Number of Days</label>
                                <input type="number" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Number of People</label>
                                <input type="number" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">Get Quote</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Outside India Form -->
                <div id="outside-india" class="tab-content">
                    <h4 class="mb-4">International Travel</h4>
                    <form id="internationalForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Destination (Country / City)</label>
                                <select class="form-control" required>
                                    <option value="">Select Country / City</option>

                                    <!-- Thailand -->
                                    <optgroup label="Thailand">
                                        <option value="bangkok">Bangkok</option>
                                        <option value="phuket">Phuket</option>
                                        <option value="pattaya">Pattaya</option>
                                        <option value="chiang-mai">Chiang Mai</option>
                                        <option value="krabi">Krabi</option>
                                    </optgroup>

                                    <!-- Bali (Indonesia) -->
                                    <optgroup label="Bali (Indonesia)">
                                        <option value="denpasar">Denpasar</option>
                                        <option value="ubud">Ubud</option>
                                        <option value="kuta">Kuta</option>
                                        <option value="nusa-dua">Nusa Dua</option>
                                        <option value="seminyak">Seminyak</option>
                                    </optgroup>

                                    <!-- Dubai (UAE) -->
                                    <optgroup label="Dubai (UAE)">
                                        <option value="dubai-city">Dubai City</option>
                                        <option value="abu-dhabi">Abu Dhabi</option>
                                        <option value="sharjah">Sharjah</option>
                                        <option value="ajman">Ajman</option>
                                    </optgroup>

                                    <!-- Vietnam -->
                                    <optgroup label="Vietnam">
                                        <option value="hanoi">Hanoi</option>
                                        <option value="ho-chi-minh-city">Ho Chi Minh City</option>
                                        <option value="da-nang">Da Nang</option>
                                        <option value="nha-trang">Nha Trang</option>
                                        <option value="hoi-an">Hoi An</option>
                                    </optgroup>

                                    <!-- Singapore -->
                                    <optgroup label="Singapore">
                                        <option value="singapore-city">Singapore City</option>
                                    </optgroup>

                                    <!-- Malaysia -->
                                    <optgroup label="Malaysia">
                                        <option value="kuala-lumpur">Kuala Lumpur</option>
                                        <option value="penang">Penang</option>
                                        <option value="langkawi">Langkawi</option>
                                        <option value="malacca">Malacca</option>
                                        <option value="kota-kinabalu">Kota Kinabalu</option>
                                    </optgroup>

                                    <!-- Bhutan -->
                                    <optgroup label="Bhutan">
                                        <option value="thimphu">Thimphu</option>
                                        <option value="paro">Paro</option>
                                        <option value="punakha">Punakha</option>
                                        <option value="phuentsholing">Phuentsholing</option>
                                    </optgroup>

                                    <!-- Nepal -->
                                    <optgroup label="Nepal">
                                        <option value="kathmandu">Kathmandu</option>
                                        <option value="pokhara">Pokhara</option>
                                        <option value="lumbini">Lumbini</option>
                                        <option value="chitwan">Chitwan</option>
                                    </optgroup>

                                    <!-- Sri Lanka -->
                                    <optgroup label="Sri Lanka">
                                        <option value="colombo">Colombo</option>
                                        <option value="kandy">Kandy</option>
                                        <option value="galle">Galle</option>
                                        <option value="nuwara-eliya">Nuwara Eliya</option>
                                        <option value="negombo">Negombo</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Number of People</label>
                                <input type="number" class="form-control" min="1" max="10" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Number of Days</label>
                                <input type="number" class="form-control" min="1" max="30" required>
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">Get Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('home/about.php'); ?>

<!-- About Us Section -->
<!-- <section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4">About TravelEase</h2>
                <p class="lead">With over 10 years of experience in the travel industry, TravelEase has been helping travelers explore the world with confidence. We specialize in providing affordable flight options, personalized travel packages, and exceptional customer service.</p>
                <p>Our team of travel experts works around the clock to ensure you get the best deals and have a seamless booking experience. Whether you're planning a domestic getaway or an international adventure, we're here to make your journey memorable.</p>
            </div>
        </div>
    </div>
</section> -->