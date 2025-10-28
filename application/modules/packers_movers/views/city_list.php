<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

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
                <li class="breadcrumb-item active text-light" aria-current="page">
                    <?= $state ?>
                </li>
            </ol>
        </nav>
    </div>
</section>
</main>
<style>
    .our-service-page {
        background-attachment: fixed;
        padding: 60px 0;
        min-height: 500px;
    }

    .city-card {
        border-radius: 12px;
        background: #ffffff;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        transform: translateY(0);
        text-align: left;
        overflow: hidden;
    }

    .city-card:hover {
        background: #fdf6f6;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        transform: translateY(-8px);
    }

    .city-card .card-body {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px;
    }

    .city-card img {
        width: 55px;
        height: 55px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .city-card:hover img {
        transform: scale(1.1);
    }

    .city-name span {
        font-size: 16px;
        font-weight: 600;
        color: #212529;
        margin: 0;
        line-height: 1.3;
    }

    .city-name span b {
        color: #003049;
        /* highlight city name in red */
    }

    .city-card-link {
        text-decoration: none !important;
        color: inherit;
    }

    /* Responsive */
    @media (max-width: 576px) {
        .city-name h5 {
            font-size: 12px;
        }

        .city-card img {
            width: 40px;
            height: 40px;
        }
    }
</style>

<div class="our-service-page"
     style="background-image:url('<?= base_url() ?>assets/images/location/location-background.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container feature-content-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                       class="city-card-link d-block h-100">
                        <div class="city-card card border-0 shadow h-100">
                            <div class="card-body">
                                <!-- Icon -->
                                <div class="icon">
                                    <i class="fa-solid fa-plane display-4 text-brand" alt="<?= $ct['nm'] ?>"></i>
                                </div>
                                <!-- City Title -->
                                <div class="city-name">
                                    <span>Packers and Movers <b><?= $ct['nm'] ?></b></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>