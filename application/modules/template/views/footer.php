
 <!-- Footer -->
<footer class="footer-section text-white pt-5">
  <div class="container">
    <div class="row">
      <!-- Brand Info -->
      <div class="col-lg-6 mb-4">
        <span class="text-brand3 mb-4 fs-3">High City Travels</span>
        <p>
          With over 10 years in the travel industry, High City Travels has been helping travelers explore the world with confidence. We specialize in affordable flights, personalized travel packages, and exceptional customer service.
        </p>
        <div class="mt-3 d-flex gap-3">
          <a href="https://facebook.com/" target="_blank" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://twitter.com/" target="_blank" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://instagram.com/" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://linkedin.com/" target="_blank" class="social-icon">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <!-- <div class="col-lg-2 col-md-4 mb-4">
        <span class="text-brand3 mb-4 fs-4">Quick Links</span>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?= site_url('') ?>" class="footer-link">Home</a></li>
          <li class="mb-2"><a href="<?= site_url('about-us') ?>" class="footer-link">About Us</a></li>
          <li class="mb-2"><a href="<?= site_url('services') ?>" class="footer-link">Services</a></li>
          <li class="mb-2"><a href="<?= site_url('destinations') ?>" class="footer-link">Destinations</a></li>
          <li class="mb-2"><a href="<?= site_url('contact') ?>" class="footer-link">Contact</a></li>
        </ul>
      </div> -->

      <!-- Services -->
      <!-- <div class="col-lg-3 col-md-4 mb-4">
        <span class="text-brand3 mb-4 fs-4">Our Services</span>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?= site_url('flights') ?>" class="footer-link">Flights Booking</a></li>
          <li class="mb-2"><a href="<?= site_url('holiday-packages') ?>" class="footer-link">Holiday Packages</a></li>
          <li class="mb-2"><a href="<?= site_url('hotels') ?>" class="footer-link">Hotel Reservations</a></li>
          <li class="mb-2"><a href="<?= site_url('custom-tours') ?>" class="footer-link">Custom Tours</a></li>
        </ul>
      </div> -->

      <!-- Contact -->
      <div class="col-lg-6 col-md-4 mb-4">
        <span class="text-brand3 mb-4 fs-4">Contact Us</span>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-brand3"></i>M.G Marg Gangtok, Sikkim</li>
          <li class="mb-2"><i class="fas fa-phone me-2 text-brand3"></i>+91 91664 42597</li>
          <li class="mb-2"><i class="fas fa-envelope me-2 text-brand3"></i>info@High City Travels.com</li>
        </ul>
      </div>
    </div>

    <!-- Divider -->
    <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">

    <!-- Bottom -->
    <div class="row">
      <div class="col-12 text-center">
        <p class="mb-0">&copy; 2025 High City Travels. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>

<!-- Footer Styling -->
<style>
  .footer-section {
  background: linear-gradient(135deg, #19183B, #457b9d, #A1C2BD);
  color: #fff;
  position: relative;
  overflow: hidden;
}

.footer-section::before,
.footer-section::after {
  content: '';
  position: absolute;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  z-index: 0;
}

.footer-section::before {
  width: 350px;
  height: 350px;
  bottom: -100px;
  left: -100px;
}

.footer-section::after {
  width: 300px;
  height: 300px;
  top: -80px;
  right: -80px;
}

.footer-section .container {
  position: relative;
  z-index: 2;
}


  .footer-link {
    color: #bbb;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-link:hover {
    color: #fa4216;
  }

  .social-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #fdf0d5;
    color: #003049;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .social-icon:hover {
    background: #457b9d;
    color: #fff;
  }
</style>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
     // Flight search form submission
     document.getElementById('flightSearchForm').addEventListener('submit', function(e) {
         e.preventDefault();
         const fromCity = document.getElementById('fromCity').value;
         const toCity = document.getElementById('toCity').value;

         if (fromCity && toCity) {
             const message = `Hey, need information about ${fromCity} to ${toCity} flight rates`;
             const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;
             window.open(whatsappUrl, '_blank');
         }
     });

     // Tab switching functionality
     function switchTab(tabId) {
         // Hide all tab contents
         const tabContents = document.querySelectorAll('.tab-content');
         tabContents.forEach(content => content.classList.remove('active'));

         // Remove active class from all buttons
         const tabButtons = document.querySelectorAll('.tab-btn');
         tabButtons.forEach(btn => btn.classList.remove('active'));

         // Show selected tab content
         document.getElementById(tabId).classList.add('active');

         // Add active class to clicked button
         event.target.classList.add('active');
     }

     // Domestic form submission
     document.getElementById('domesticForm').addEventListener('submit', function(e) {
         e.preventDefault();
         const formData = new FormData(this);
         const state = this.querySelector('select').value;
         const days = this.querySelector('input[type="number"]:nth-of-type(1)').value;
         const people = this.querySelector('input[type="number"]:nth-of-type(2)').value;

         if (state && days && people) {
             const message = `Hey, need information about domestic travel to ${state} for ${people} people for ${days} days`;
             const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;
             window.open(whatsappUrl, '_blank');
         }
     });

     // International form submission
     document.getElementById('internationalForm').addEventListener('submit', function(e) {
         e.preventDefault();
         const country = this.querySelector('select').value;
         const people = this.querySelector('input[type="number"]:nth-of-type(1)').value;
         const days = this.querySelector('input[type="number"]:nth-of-type(2)').value;

         if (country && people && days) {
             const message = `Hey, need information about international travel to ${country} for ${people} people for ${days} days`;
             const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;
             window.open(whatsappUrl, '_blank');
         }
     });

     // Smooth scrolling for navigation links
     document.querySelectorAll('a[href^="#"]').forEach(anchor => {
         anchor.addEventListener('click', function(e) {
             e.preventDefault();
             const target = document.querySelector(this.getAttribute('href'));
             if (target) {
                 target.scrollIntoView({
                     behavior: 'smooth',
                     block: 'start'
                 });
             }
         });
     });
 </script>
 <script>
     (function() {
         function c() {
             var b = a.contentDocument || a.contentWindow.document;
             if (b) {
                 var d = b.createElement('script');
                 d.innerHTML = "window.__CF$cv$params={r:'98d06ed030c22e8f',t:'MTc2MDIwNzQ3MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                 b.getElementsByTagName('head')[0].appendChild(d)
             }
         }
         if (document.body) {
             var a = document.createElement('iframe');
             a.height = 1;
             a.width = 1;
             a.style.position = 'absolute';
             a.style.top = 0;
             a.style.left = 0;
             a.style.border = 'none';
             a.style.visibility = 'hidden';
             document.body.appendChild(a);
             if ('loading' !== document.readyState) c();
             else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
             else {
                 var e = document.onreadystatechange || function() {};
                 document.onreadystatechange = function(b) {
                     e(b);
                     'loading' !== document.readyState && (document.onreadystatechange = e, c())
                 }
             }
         }
     })();
 </script>
 
 </body>

 </html>