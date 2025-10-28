<section id="slider" class="position-relative hero-banner py-5" 
  style="background: url('<?= base_url("assets/images/breadcrumb/breadcrumbImg.jpg") ?>') center center/cover no-repeat;">
  <!-- Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" 
       style="background: rgba(0,0,0,0.6); z-index:1;"></div>

  <!-- Content -->
  <div class="container text-center text-white position-relative" style="z-index:2;">
    <h1 class="fw-bold display-4 mb-3 animate__animated animate__fadeInDown">
      Our Branches
    </h1>
    <nav aria-label="breadcrumb" class="animate__animated animate__fadeInUp">
      <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
        <li class="breadcrumb-item mb-3">
          <a href="<?= site_url() ?>" class="text-white text-decoration-none">
            Home
          </a>
        </li>
        <li class="breadcrumb-item active text-light" aria-current="page">
          Our Branches
        </li>
      </ol>
    </nav>
  </div>
</section>

<?php
$locations = [
  [
    'name' => 'Sikkim',
    'image' => 'sikkim.jpg',
    'url' => site_url('packers-movers-sikkim-india'),
    'description' => 'Known for its stunning landscapes, Sikkim is a paradise for nature lovers and adventure seekers.',
  ],
  [
    'name' => 'west-bengal',
    'image' => 'wb.webp',
    'url' => site_url('packers-movers-west-bengal-india'),
    'description' => 'Known for its rich culture and heritage, West Bengal is a vibrant state with a lot to offer.',
  ],
  [
    'name' => 'rajasthan',
    'image' => 'rajasthan.jpg',
    'url' => site_url('packers-movers-rajasthan-india'),
    'description' => 'Known for its royal heritage and vibrant culture, Rajasthan is a popular destination for travelers seeking history and adventure.',
  ],
];
?>

<section class="location-section py-5" style="background: #f8f9fa;">
  <div class="container">
    <!-- Section Heading -->
    <div class="text-center mb-5">
      <h2 class="text-brand fw-bold">We Serve Across India</h2>
    </div>

    <!-- Location Grid -->
    <div class="row g-4">
      <?php foreach ($locations as $location): ?>
        <div class="col-12 col-md-6 col-lg-3">
          <a href="<?= $location['url'] ?>" class="location-card-new d-block position-relative overflow-hidden rounded-4 shadow-sm text-decoration-none">
            <!-- Image -->
            <div class="image-wrap">
              <img src="<?= base_url('assets/images/location/' . $location['image']) ?>" 
                   alt="<?= $location['name'] ?>" 
                   class="w-100 h-100 object-fit-cover" 
                   loading="lazy">
            </div>
            
            <!-- Content Box -->
            <div class="location-content p-3 bg-white text-center">
              <h5 class="fw-bold mb-2 text-dark"><?= $location['name'] ?></h5>
              <p class="text-muted small mb-0"><?= $location['description'] ?></p>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.location-card-new {
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  background: #fff;
}
.location-card-new .image-wrap {
  height: 180px;
  overflow: hidden;
}
.location-card-new img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.location-card-new .location-content {
  background: #fff;
}
.location-card-new:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
.location-card-new:hover img {
  transform: scale(1.1);
}
.location-card-new h5 {
  font-size: 1.1rem;
}
.location-card-new p {
  font-size: 0.85rem;
  line-height: 1.4;
}
</style>
