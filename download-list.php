    <?php $page = "Downloads";
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
                                <h2>Downloads</h2>

                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-wrap2">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Downloads</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- gallery-area -->
        <section id="work" class="pt-150 pb-105">
            <div class="container">
                <div class="portfolio ">
                    <!-- <div class="row align-items-end">
                        <div class="col-lg-12">
                            <div class="my-masonry text-center mb-50 wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="button-group filter-button-group ">
                                    <button class="active" data-filter="*">View All</button>
                                    <button data-filter=".brochure">Brochures</button>
                                    <button data-filter=".flyers">Flyers</button>
                                    <button data-filter=".discussion">Mandatory Discussion</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="grid col3 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="grid-item brochure">
                            <a href="img/download/pdf/BBA-Admission Brochure.pdf" target="_blank">
                                <figure class="gallery-image">
                                    <img src="img/download/bba.jpg" alt="img" class="img" style="height: 510px;">
                                </figure>
                            </a>
                        </div>
                        <div class="grid-item brochure">
                            <a href="img/download/pdf/Fuel-Profile.pdf" target="_blank">
                                <figure class="gallery-image">
                                    <img src="img/download/img11.jpg" alt="img" class="img" style="height: 510px;">
                                </figure>
                            </a>
                        </div>
                        <div class="grid-item brochure">
                            <a href="img/download/pdf/FUEL-1pager-with-info.pdf" target="_blank">
                                <figure class="gallery-image">
                                    <img src="img/download/img2.png"  alt="img" class="img" style="height: 510px;">
                                </figure>
                            </a>
                        </div>
                       
                        
                    </div>

                </div>
            </div>
        </section>
        <!-- gallery-area-end -->

        <?php include("include/footer.php"); ?>