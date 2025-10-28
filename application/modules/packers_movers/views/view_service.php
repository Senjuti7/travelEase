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
<?php $this->load->view('home/about.php'); ?>
<?php $this->load->view('home/choose.php'); ?>


