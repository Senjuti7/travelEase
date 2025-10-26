<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main">
    <section id="slider" class="position-relative">
  <!-- Background image with overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
    <img src="<?= base_url('assets/img/breadcrumb/img1.png') ?>" alt="Background" 
         class="w-100 h-100 object-fit-cover" style="opacity: 0.5;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50" loading="lazy"></div>
  </div>

  <!-- Swiper Slider Content -->
  <div class="swiper-container position-relative" style="z-index: 2;">
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center py-5">
        <div class="container py-5">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-white">
              <h1 class="fw-bold display-5 mb-3">Packers and Movers in <?= $state ?></h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center bg-transparent p-0">
                  <li class="breadcrumb-item"><a class="text-decoration-none text-white"
                    href="<?= site_url() ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page" > <a
                        class="text-decoration-none text-white" href="<?= site_url('major-cities') ?>">Major Cities</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                 <?= $state ?></li>
                </ol>
              </nav>
              <?php $this->load->view('contacts/breadcrumb_form.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <div class="our-service-page position-relative">

  <div class="container feature-content-section py-5">
    <div class="row">
      <?php
        $st = str_replace(" ", "-", $state);
        foreach ($cities as $ct):
            $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
            $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
          <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="city-card-link d-block h-100 text-decoration-none">
            <div class="card city-card h-100 shadow-sm border city-card-hover">
              <div class="card-body align-items-center justify-content-between rounded shadow" style="background-color:#89023e">
                <div class="icon">
                    <i class="fa-solid fa-boxes-packing text-white" aria-hidden="true"></i>
                </div>
                <div class="city-name">
                  <p class="mb-0 text-white fw-semibold">Packers and Movers <?= $ct['nm'] ?></p>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

</main>
<style>
    
</style>