<!-- Home -->

<div class="home">

    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

            <?php foreach ($slider as $data) { ?>
                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(<?= base_url('assets/uploads/slider/' . $data->slider) ?>)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content">
                                        <!-- <div class="home_subtitle">#1 Plastic Surgery Clinic</div> -->
                                        <div class="home_title text-light"><?= $data->keterangan ?></div>
                                        <!-- <div class="home_text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                            </div> -->
                                        <div class="home_buttons d-flex flex-row align-items-center justify-content-start">
                                            <div class="button button_1 trans_200"><a href="#">read more</a></div>
                                            <!-- <div class="button button_2 trans_200"><a href="#">make an appointment</a></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>

        <!-- Home Slider Dots -->

        <div class="home_slider_dots">
            <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
                <?php foreach ($slider as $data) { ?>
                    <li class="home_slider_custom_dot trans_200"></li>
                <?php } ?>
                <!-- <li class="home_slider_custom_dot trans_200 active"></li> -->
            </ul>
        </div>

    </div>
</div>


<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">

            <!-- Intro Content -->

            <div class="col-lg-5 text-center">
                <div class="intro_content">
                    <div class="section_title_container">
                        <img src="<?= base_url('assets/user/') ?>images/Logo.png" alt="logo" style="width:330px" class="mt-5">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 intro_col">
                <div class="intro_content">
                    <div class="section_title_container">
                        <!-- <div class="section_subtitle">Tentang Kami</div> -->
                        <div class="section_title">
                            <h2>Tentang Kami</h2>
                        </div>
                    </div>
                    <div class="intro_text">
                        <p>Integer aliquet congue libero, eu gravida odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna vestibulum in. Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus, vel pharetra metus dolor.</p>
                    </div>
                    <div class="milestones">
                        <div class="row milestones_row">

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col text-center">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="6">0</div>
                                    <div class="milestone_text">Staff</div>
                                </div>
                            </div>
                            <div class="col-md-3 milestone_col text-center">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="6">0</div>
                                    <div class="milestone_text">Guru</div>
                                </div>
                            </div>
                            <div class="col-md-3 milestone_col text-center">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="6">0</div>
                                    <div class="milestone_text">Kelas</div>
                                </div>
                            </div>
                            <div class="col-md-3 milestone_col text-center">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="6">0</div>
                                    <div class="milestone_text">Siswa</div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Why Choose Us -->

<div class="why">
    <!-- <div class="background_image" style="background-image:url(<?= base_url('assets/user/') ?>images/why.jpg)"></div> -->
    <!-- <div class="background_image bg-secondari"></div> -->
    <div class="container">
        <div class="row row-eq-height">

            <!-- Why Choose Us Content -->
            <div class="col-lg-12 order-lg-2 order-1">
                <div class="why_content">
                    <div class="section_title_container">
                        <div class="section_title">
                            <div class="row justify-content-between">
                                <div class="col-lg-3">
                                    <h2>Berita</h2>
                                </div>
                                <div class="col-lg-3 text-right">
                                    <a href="#" class="btn btn-lg btn-secondary">Lihat Semua &nbsp; <span class="fa fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">

                            <?php foreach ($berita as $data) : ?>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="<?= base_url('assets/uploads/berita/' . $data->gambar) ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $data->judul ?></h5>
                                            <p class="card-text"><?= $data->kutipan ?></p>
                                            <br>
                                            <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                            <small>Baca Selengkapnya</small>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services -->

<div class="services" style="padding-bottom: 150px;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title_container">
                    <!-- <div class="section_subtitle">This is Dr Pro</div> -->
                    <div class="section_title">
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services_row">

            <!-- Service -->
            <?php foreach ($galeri as $data) { ?>
                <div class="col-xl-4 col-md-6 service_col">
                    <div class="service">
                        <div class="service">
                            <a href="<?= base_url('assets/uploads/galeri/' . $data->gambar) ?>" title="<?= $data->keterangan ?>" class="fancybox" rel="ligthbox">
                                <img src="<?= base_url('assets/uploads/galeri/' . $data->gambar) ?>" class="zoom img-fluid " alt="">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>