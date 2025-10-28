<?php
// $this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'city_content.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
} else {
    redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} ?>

<section id="slider" class="position-relative hero-banner py-5"
    style="background: url('<?= base_url("assets/images/breadcrumb/breadcrumbImg.jpg") ?>') center center/cover no-repeat;">
    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index:1;"></div>

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
                    <a class="text-decoration-none text-white" href="<?= site_url('our-branches') ?>">Our Branches</a>
                </li>
                <li aria-current="page" style="color:#fff;" class="breadcrumb-item active"><a
                        href="<?= site_url($st) ?>" aria-current="page" class="text-decoration-none text-light"><?= $state ?></a>
                </li>

                <li class="breadcrumb-item active text-light" aria-current="page">
                    <?= $city ?>
            </ol>
        </nav>
    </div>
</section>


<?php $this->load->view('home/plan.php'); ?>
<section class="map-contact-section py-5 bg-white">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 mb-4">
                <div class="section-heading mb-3">
                    <span class="fw-600 fs-2">Find Our Branch in <?= html_escape($city) ?></span>
                </div>

                <div class="map-wrapper" style="border-radius:8px;overflow:hidden;box-shadow:0 6px 24px rgba(0,0,0,0.08);">
                    <iframe
                        src="https://www.google.com/maps?q=<?= $lat ?>,<?= $lon ?>&z=13&output=embed"
                        width="100%" height="420" style="border:0;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-card p-4" style="border-radius:8px; background:#f8f9fa; box-shadow:0 4px 18px rgba(0,0,0,0.04);">
                    <span class="fw-bold fs-4 mb-3">Tours & Travel Booking</span>
                    <p class="mb-2">Planning a trip? We offer end-to-end tour and travel services tailored to your needs. From hotel bookings and transfers to curated sightseeing and custom itineraries — we've got you covered.</p>
                    <p class="mb-2">Our local experts suggest the best routes and experiences so you can travel stress-free. Competitive pricing and 24/7 support ensure a smooth journey.</p>
                    <p class="mb-0">Ready to start? Click below to request a personalized quote and one of our travel advisors will reach out shortly.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('home/about.php'); ?>
<?php $this->load->view('home/choose.php'); ?>


