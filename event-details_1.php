<?php $page = "Event Details";
include("include/header.php"); ?>

<style>
    .txt-justify {
        text-align: justify;
        text-justify: inter-word;
    }
</style>

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-color: #032e3f;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Event Details</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="event-list.php">Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event Details</li>
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
                    <figure class="image"><img src="img/bg/evn-img-1.png" alt=""></figure>
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content2">
                <div class="row">
                    <div class="text-column col-lg-9 col-md-12 col-sm-12">
                        <div class="s-about-content wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">
                            <h2>FUEL Delegation at Rashtrapati Bhavan</h2>

                            <p class="txt-justify"><b>Hon'ble Shri Ram Nath Kovind, Former President of India with FUEL Delegation at Rashtrapati Bhavan, New Delhi</b></p>
                            <p class="txt-justify">On a bright day in New Delhi, a delegation from FUEL (Friends Union for Energising Lives) had the privilege of meeting with the Hon'ble President of India at the RashtrapatiBhavan. The delegation included the founder and CEO of FUEL, as well as several other representatives from the organization.</p>
                            <p class="txt-justify">The Hon'ble President warmly welcomed the delegation and expressed his appreciation for the work that FUEL was doing to empower underprivileged youth across India. The delegation had the opportunity to share their experiences and insights from their work with the President, and discuss the challenges and opportunities they faced in their mission to create a more equitable society.</p>
                            <p class="txt-justify"> During the meeting, the Hon'ble President encouraged the delegation to continue their efforts to uplift the lives of young people, and emphasized the important role that youth play in shaping the future of the country. He also shared his own experiences and observations from his extensive career in public service, offering insights and advice to the FUEL team.</p>
                            <p class="txt-justify">The meeting was a wonderful opportunity for FUEL to showcase their work and receive recognition and support from the highest office in the country. It also provided an opportunity for the Hon'ble President to connect with a grassroots organization working to make a real difference in the lives of young people, and to offer his support and encouragement. Overall, the meeting was a positive and inspiring experience for all involved.</p>    
                       
                        </div>
                    </div>

                    <div class="info-column col-lg-3 col-md-12 col-sm-12">
                        <div class="inner-column2">
                            <h3>Event Details</h3>
                            <ul class="project-info clearfix">

                                <li>
                                    <span class="icon fal fa-calendar-alt"></span>
                                    <strong>06 Jan, 2022</strong>
                                </li>

                                <li>
                                    <span class="icon fal fa-map-marker-check"></span>
                                    <strong>Rashtrapati Bhavan, New Delhi</strong>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Project Detail -->

    <?php include("include/footer.php"); ?>