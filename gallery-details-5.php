<?php
$page = "Gallery";

include("include/header.php"); ?>
<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-color: #032e3f;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Gallery Details</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="gallery-list.php">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery Details</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- Project Detail -->
    <section class="project-detail">
        <div class="container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="single-item-carousel owl-carousel owl-theme">
                    <figure class="image"><img src="img/gallery/Atal-FUEl Leadership Awards/AT3.jpg" alt="img"></figure>
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content2">
                <div class="row">
                    <div class="text-column col-lg-9 col-md-12 col-sm-12">
                        <div class="s-about-content wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">
                            <!-- <p>Celebrating 16 Years of Empowering Lives: Friends Union for Energising Lives (FUEL) Pune Foundation Day!</p>
                             <p>We are delighted to commemorate a significant milestone as Friends Union for Energising Lives (FUEL) Pune celebrates its 16th Foundation Day. Over the past sixteen years, FUEL has been instrumental in transforming lives and making a positive impact on communities throughout Pune, India.</p> -->
                            <div class="two-column mt-30 mb-30">
                                <div class="row aling-items-center">
                                    <div class="col-xl-4 col-lg-12 col-md-12 mt-30">
                                        <img src="img/gallery/Atal-FUEl Leadership Awards/AT1.jpg" alt="img">
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 mt-30">
                                        <img src="img/gallery/Atal-FUEl Leadership Awards/AT2.jpg" alt="img">
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 mt-30">
                                        <img src="img/gallery/Atal-FUEl Leadership Awards/AT3.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="info-column col-lg-3 col-md-12 col-sm-12">
                        <div class="inner-column3">
                            <h3>Gallery Info</h3>
                            <ul class="project-info clearfix">
                                <li>
                                    <strong>Date:</strong> <span>1th Dec 2022</span>
                                </li>

                                <li>
                                    <strong>Category:</strong> <span>Photo Gallery</span>
                                </li>

                                <li>
                                    <strong>Program:</strong> <span>Atal-FUEl Leadership Awards</span>
                                </li>

                                <li>
                                    <strong>Location:</strong> <span> FUEL, Forest Trails Township, Near Atashri Apartments, Paranjape Schemes, Matalwadi Road, near Manas Lake, Bhugaon, Pune, Maharashtra 412115</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--End Project Detail -->

    <!-- main-area-end -->
    <?php include("include/footer.php"); ?>