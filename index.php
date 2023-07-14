<?php

$page = "Home";

include("include/header.php");

?>

<style>
    @media (max-width: 767px) {
        .steps-area {
            padding-top: 21px;
        }

        .steps-area h3 {
            font-size: 1.2rem;
        }

        .about-area {
            padding-bottom: 0;
        }
    }

    .txt-justify {
        text-align: justify;
        text-justify: inter-word;
    }

    .fixed-img {
        height: 900px;
        width: 100%;
        background-image: url(img/bg/ceo-mentor.jpg);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
        padding: 100px;
    }
</style>

<!-- main-area -->
<main>
    <!-- slider-area -->
    <section id="home" class="slider-area fix p-relative">

        <div class="slider-active" style="background: #141b22;">

            <div class="single-slider slider-bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.02853641456582634) 0%, rgba(0,0,0,0.25262605042016806) 5%, rgba(0,0,0,0.30024509803921573) 20%, rgba(0,0,0,0.25262605042016806) 95%, rgba(0,0,0,0.02573529411764708) 100%), url(img/slider/slider_bg.jpg); background-size: cover; ">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-7">
                            <div class="slider-content s-slider-content mt-70">
                                <h5 data-animation="fadeInUp" data-delay=".4s">Give your Aspirations a right direction</h5>
                                <h2 data-animation="fadeInUp" data-delay=".4s">FUEL College of Management</h2>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 p-relative">
                            <div class="slider-btn mt-110" style="float: right;">
                                <a href="about-us.php" class="btn ss-btn m-1" data-animation="fadeInLeft" data-delay=".7s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                <a href="contact-us.php" class="btn ss-btn m-1 active " data-animation="fadeInLeft" data-delay=".8s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="single-slider slider-bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.02853641456582634) 0%, rgba(0,0,0,0.25262605042016806) 5%, rgba(0,0,0,0.30024509803921573) 20%, rgba(0,0,0,0.25262605042016806) 95%, rgba(0,0,0,0.02573529411764708) 100%), url(img/slider/slider_bg_01.jpg); background-size: cover; ">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-7">
                            <div class="slider-content s-slider-content mt-70">
                                <h5 data-animation="fadeInUp" data-delay=".4s">Give your Aspirations a right direction</h5>
                                <h2 data-animation="fadeInUp" data-delay=".4s">FUEL College of Management</h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 p-relative">
                            <div class="slider-btn mt-110" style="float: right;">
                                <a href="about-us.php" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".7s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                <a href="contact-us.php" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".8s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="single-slider slider-bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.02853641456582634) 0%, rgba(0,0,0,0.25262605042016806) 5%, rgba(0,0,0,0.30024509803921573) 20%, rgba(0,0,0,0.25262605042016806) 95%, rgba(0,0,0,0.02573529411764708) 100%), url(img/slider/slider_bg_02.jpg); background-size: cover;">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-7">
                            <div class="slider-content s-slider-content mt-70">
                                <h5 data-animation="fadeInUp" data-delay=".4s">Give your Aspirations a right direction</h5>
                                <h2 data-animation="fadeInUp" data-delay=".4s">FUEL College of Management</h2>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 p-relative">
                            <div class="slider-btn mt-110" style="float: right;">
                                <a href="about-us.php" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".7s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                <a href="contact-us.php" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".8s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- <div class="single-slider slider-bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.02853641456582634) 0%, rgba(0,0,0,0.25262605042016806) 5%, rgba(0,0,0,0.30024509803921573) 20%, rgba(0,0,0,0.25262605042016806) 95%, rgba(0,0,0,0.02573529411764708) 100%), url(img/slider/slider_bg_03.jpg); background-size: cover;">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-7">
                            <div class="slider-content s-slider-content mt-70">
                                <h5 data-animation="fadeInUp" data-delay=".4s">Give your Aspirations a right direction</h5>
                                <h2 data-animation="fadeInUp" data-delay=".4s">FUEL College of Management</h2>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 p-relative">
                            <div class="slider-btn mt-110" style="float: right;">
                                <a href="about-us.php" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".7s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                <a href="contact-us.php" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".8s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->

            <div class="single-slider slider-bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.02853641456582634) 0%, rgba(0,0,0,0.25262605042016806) 5%, rgba(0,0,0,0.30024509803921573) 20%, rgba(0,0,0,0.25262605042016806) 95%, rgba(0,0,0,0.02573529411764708) 100%), url(img/slider/slider_bg_04.jpg); background-size: cover;">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-7">
                            <div class="slider-content s-slider-content mt-70">
                                <h5 data-animation="fadeInUp" data-delay=".4s">Give your Aspirations a right direction</h5>
                                <h2 data-animation="fadeInUp" data-delay=".4s">FUEL College of Management</h2>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 p-relative">
                            <div class="slider-btn mt-110" style="float: right;">
                                <a href="about-us.php" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".7s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                <a href="contact-us.php" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".8s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </section>
    <!-- slider-area-end -->

    <!-- service-area -->
    <section class="service-details-two p-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="services-box07">

                        <div class="sr-contner">
                            <div class="icon">
                                <img src="img/icon/sve-icon4.png" alt="icon01">
                            </div>
                            <div class="text">
                                <h5><a href="about-us.php">We believe</a></h5>
                                <p class="txt-justify"> At FUEL College of Management, we believe that education is the key to unlock human potential and create a better future for all. That's why we are committed..</p>
                                <a href="about-us.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="services-box07 active">
                        <div class="sr-contner">
                            <div class="icon">
                                <img src="img/icon/sve-icon5.png" alt="icon01">
                            </div>
                            <div class="text">
                                <h5><a href="about-us.php">Our mission</a></h5>
                                <p class="txt-justify">To empower our students to become lifelong learners, critical thinkers, and engaged citizens who are capable of making meaningful contributions to their..</p>
                                <a href="about-us.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="services-box07">
                        <div class="sr-contner">
                            <div class="icon">
                                <img src="img/icon/sve-icon6.png" alt="icon01">
                            </div>
                            <div class="text">
                                <h5><a href="about-us.php">We offer</a></h5>
                                <p class="txt-justify">A wide range of programmes in fields such as arts and humanities, business, education, engineering, health sciences, natural sciences, and social sciences. Our..</p>
                                <a href="about-us.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service-details2-area-end -->

    <!-- about-area -->
    <section class="about-area about-p mt-40 pb-40 p-relative fix" style="border-bottom: #f39c24 4px solid;">
        <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="img/features/about-1.jpg" alt="img">
                        <div class="about-text second-about">
                            <span>25 <sub>+</sub></span>
                            <p>Years of Experience</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">
                            <h5><i class="fal fa-graduation-cap"></i> About </h5>
                            <h2>Welcome to FCM!</h2>
                        </div>
                        <p class="txt-justify">Welcome to FUEL College of Management, a premier educational institution offering industry relevant programmes for students who aspire to become future leaders in the world of business.</p>
                        <p class="txt-justify">Our College of Management has state-of-the-art infrastructure, exceptional faculty, and a vibrant student community that provides an enriching learning experience. FCM is a new institution of higher learning which will be dedicated to provide students an excellent education that prepares them for success in the 21st century. Our mission is to empower our students to become lifelong learners, critical thinkers, and engaged citizens who are capable of making meaningful contributions to their communities and the world.</p>
                        <p class="txt-justify">At FCM, we believe that education is the key to unlock human potential and create a better future for all especially the underserved sections of society. We have committed to provide a rigorous, innovative, and inclusive learning environment that fosters intellectual curiosity, creativity and collaboration.</p>
                        <p class="txt-justify">Our programmes are designed to meet the needs of the students with diverse backgrounds and interests, and they are taught by faculty members who are passionate about their subjects and have committed to help students succeed. </p>

                        <div class="slider-btn mt-20">
                            <a href="about-us.php" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- ceo-mentor area -->
    <div>
        <div class="fixed-img">
        </div>
    </div>
    <!-- ceo-mentor area-end -->

    <!-- courses-area -->
    <section class="courses pt-90 pb-40 p-relative fix" style="border-top: #f39c24 4px solid;">
        <div class="animations-01"><img src="img/bg/an-img-03.png" alt="an-img-01"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-relative">
                    <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5><i class="fal fa-graduation-cap"></i> Our Courses</h5>
                        <!-- <div class="col-lg-12 p-relative">
                    <div class="section-title center-align pr-50 mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5><i class="fal fa-graduation-cap"></i> Our Courses</h5>
                        <h2>
                            Courses that FCM provides
                        </h2> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item hover-zoomin">
                        <div class="thumb fix">
                            <a href="courses-details_1a.php"><img src="img/bg/couress-img-3.jpg" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="courses-content">
                            <div class="cat"><i class="fal fa-graduation-cap"></i>Bachelor of Business Administration</div>
                            <h3 class="pt-20"><a href="courses-details_1a.php">BBA - International Business</a></h3>
                            <p class="txt-justify">
                                <!-- Post Graduate Diploma Management (BBA) is a two-year postgraduate programme that is designed to provide students with a comprehensive understanding of various business functions and develop.. -->
                                The Bachelor of Business Administration in International Business is designed for students aspiring to work in a global environment...
                                <!-- This program offers valuable insights into the operations of multinational organizations, and various financial systems, and provides training in a foreign language. BBA in International Business is a 3-year undergraduate course. It is an advanced study of business and cultural concepts which are relevant to International Business, global practices, business practices followed by international competitors  -->
                            </p>
                            <a href="courses-details_2a.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item hover-zoomin">
                        <div class="thumb fix">
                            <a href="courses-details_2b.php"><img src="img/bg/couress-img-4.jpg" alt="contact-bg-an-02"></a>
                        </div>
                        <div class="courses-content">
                            <div class="cat"><i class="fal fa-graduation-cap"></i>Bachelor of Business Administration</div>
                            <h3 class="pt-20"><a href="courses-details_2b.php">BBA - Computer Applications</a></h3>
                            <p class="txt-justify">
                                <!-- BBA Business Analytics is the combination of skills, technologies, applications and processes used by organizations to gain data-driven insights. The course's findings may be.. -->
                                The BBA in Computer Application, also known as BBA in CA, is an undergraduate course that prepares students to become IT professionals...
                                <!-- in the growing IT industry... -->
                                <!-- This program focuses on advanced computer applications and their impact on businesses and society.Graduates of this program are equipped with the skills to innovate, develop, and maintain computer applications and systems.The BBA in Computer Application is a 3-year program with 6 semesters. In the first year, students establish a strong foundation in business administration  -->
                                <!-- and computer applications.    -->
                            </p>
                            <a href="courses-details_2b.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="courses-details_2.php"><img src="img/bg/couress-img-3.jpg" alt="contact-bg-an-03"></a>
                        </div>
                        <div class="courses-content">
                            <div class="cat"><i class="fal fa-graduation-cap"></i>Bachelor of Business Administration</div>
                            <h3><a href="courses-details_2.php">BBA in International Business</a></h3>
                            <p class="txt-justify">The bachelor of Business Administration in International Business or BBA in International Business is an undergraduate course that trains..</p>
                            <a href="courses-details_2.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="courses-details_2.php"><img src="img/bg/couress-img-4.jpg" alt="contact-bg-an-04"></a>
                        </div>
                        <div class="courses-content">
                            <div class="cat"><i class="fal fa-graduation-cap"></i>Bachelor of Business Administration</div>
                            <h3><a href="courses-details_1.php">BBA in Computer Application</a></h3>
                            <p class="txt-justify">BBA in Computer Application is a three-year undergraduate programme that combines the study of business management with..</p>
                            <a href="courses-details_2.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="courses-details_1.php"><img src="img/bg/couress-img-2.jpg" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="courses-content">
                            <div class="cat"><i class="fal fa-graduation-cap"></i>Post Graduate Diploma in Management</div>
                            <h3><a href="courses-details_1.php">BBA - Business Analytics</a></h3>
                            <p class="txt-justify">This degree can teach you how to collect and analyse data for commercial goals utilizing several analytical techniques and technologies.
                            </p>
                            <a href="courses-details_1.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <div class="courses-item hover-zoomin" style="background-image:url(img/bg/footer-bg.png); padding: 28% 12% 28% 12%">
                        <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                            <h2 style="font-size: 3.4vh;">Other PGDM courses provide by FUEL Business Schoo (FBS)</h2>
                            <p>FUEL Business School is an AICTE approved PGDM institution</p>
                            <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                                <a href="https://fuelbschool.com/" class="btn ss-btn smoth-scroll">Know more about <b>FBS</b><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <!-- courses-area -->


    <!-- steps-area -->
    <section class="steps-area p-relative" style="background-color: #032e3f;">
        <div class="animations-10"><img src="img/bg/an-img-10.png" alt="an-img-01"></div>
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12 mb-40 mt-40 col-md-12">
                    <div class="section-title mb-35 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h2>Pillars of FCM</h2>
                    </div>
                    <ul class="pr-20">
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon01.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Sustainability</h3>
                                    <p class="txt-justify">In order to be sustainable, a balance must be struck between economic development, environmental protection, and social well-being. Current demands must be met without compromising those of future generations. Our parent body, FUEL supports three of the sustainable development goals <b>– Quality Education, Gender Equality, Decent Work & Economic Growth.</b></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon02.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Social Responsibility</h3>
                                    <p class="txt-justify">FUEL helps build a community that is encouraging for the youth of the country. It enables young people to discover their potential, acquire necessary skills, have access to educational resources, and become successful.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon03.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Innovation and Entrepreneurship</h3>
                                    <p class="txt-justify">Our parent body, FUEL was founded by Mr. Ketan Deshpande when he was just 19 years old. FUEL(Friends Union for Energizing Lives) was started as a guiding institution to solve problems that he himself faced. Therefore developing entrepreneurship and building an innovative approach is in our DNA.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon01.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Engagement</h3>
                                    <p class="txt-justify">FUEL takes into account all sections of society, especially the underserved sections of society. Scholarships provided by FUEL can be a significant support for deserving students who may face financial constraints in pursuing higher education. By providing scholarships, FUEL promotes equal opportunities for education and supports talented students in achieving their academic goals.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon03.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Impact</h3>
                                    <p class="txt-justify">We shall strive to provide our students with an education that goes beyond just textbook learning. Our programmes are designed to provide a well-rounded experience that prepare our students for success in their professional and personal life.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-3 col-md-12">
                    <div class="step-img wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="img/features/pillars.jpg" alt="class image">
                    </div>

                </div> -->



            </div>

        </div>
    </section>
    <!-- steps-area-end -->

    <!-- event-area -->

    <section class="courses pt-120 pb-40 p-relative fix">

        <div class="animations-06"><img src="img/bg/an-img-06.png" alt="an-img-01"></div>
        <div class="animations-07"><img src="img/bg/an-img-07.png" alt="contact-bg-an-01"></div>
        <div class="animations-08"><img src="img/bg/an-img-08.png" alt="contact-bg-an-01"></div>
        <div class="animations-09"><img src="img/bg/an-img-09.png" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-relative">
                    <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5><i class="fal fa-graduation-cap"></i> Our Events</h5>
                        <h2>
                            Event Calendar
                        </h2>

                    </div>
                </div>

            </div>
            <div class="row class-active">
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="event-details_1.php"><img src="img/bg/evn-img-1.jpg" alt="contact-bg-an-01"></a>
                        </div>
                        <div style="min-height:14vW;" class="courses-content">
                            <!-- <div class="cat"><i class="fal fa-graduation-cap"></i> Lorem ipsum dolor sit amet</div> -->
                            <h5><a href="event-details_1.php">FUEL Delegation at Rashtrapati Bhavan</a></h5>
                            <p>Hon'ble Shri Ram Nath Kovind, Former President of India with FUEL Delegation at Rashtrapati..</p>
                            <a href="event-details_1.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="event-details_2.php"><img src="img/bg/evn-img-2.jpg" alt="contact-bg-an-01"></a>
                        </div>
                        <div style="min-height:14vW;" class="courses-content">
                            <h5><a href="event-details_2.php">Convocation of a Future Skills Training programme batch by FUEL</a></h5>
                            <p> Convocation of a Future Skills Training programme batch by FUEL in the presence..</p>
                            <a href="event-details_2.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="event-details_3.php"><img src="img/bg/evn-img-3.jpg" alt="contact-bg-an-01"></a>
                        </div>
                        <div  style="min-height:14vW;" class="courses-content">
                            <!-- <div class="cat"><i class="fal fa-graduation-cap"></i> Lorem ipsum dolor sit amet</div> -->
                            <h5><a href="event-details_3.php">CSR Journal Excellence Awards</a></h5>
                            <p style="height: 10vh;">Hon'ble Union Minister Shri.Nitin Gadkari Ji Awarded FUEL ''Change-Maker in Skill..</p>
                            <a href="event-details_3.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>

                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="event-details_4.php"><img src="img/bg/evn-img-4.jpg" alt="contact-bg-an-01"></a>
                        </div>
                        <div style="min-height:14vW;" class="courses-content">
                            <h5><a href="event-details_2.php">Launch of Digital Academy with Capgemini </a></h5>
                            <p>Launch of Digital Academy with Capgemini at FUEL Skills Institute ,Pune..</p>
                            <a href="event-details_4.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="event-details_5.php"><img src="img/bg/evn-img-5.jpg " alt="contact-bg-an-01"></a>
                        </div>
                        <div style="min-height:14vW;" class="courses-content">
                            <h5><a href="event-details_5.php">Inauguration of Future Skill Center</a></h5>
                            <p style="height: 15vh;">HSBC Technology India inaugurates Future Skill Center at FUEL Future Skill Institute , Pune..</p>
                            <a href="event-details_5.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="courses-item mb-30 hover-zoomin">
                        <div class="thumb fix">
                            <a href="event-details_6.php"><img src="img/bg/evn-img-6.jpg " alt="contact-bg-an-01"></a>
                        </div>

                        <div style="min-height:14vW;" class="courses-content">
                            <h5><a href="event-details_6.php">CSR Summit Awards 2022 (4th edition)</a></h5>
                            <p>FUEL received ''CSR'' Implementation Partner of the year Award at CSR Summit Award 2022..</p>
                            <a href="event-details_6.php" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="icon">
                            <img src="img/icon/cou-icon.png" alt="img">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Event-area -->

    <!-- courses-area -->

    <!-- admission-area -->
    <section class="about-area about-p pb-40 p-relative fix" style="background-image:url(img/bg/admission_bg.png); background-repeat: no-repeat; background-position: top;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="img/features/admission_poster.jpeg" alt="img" style="border-radius: 8px;">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">
                            <h2>Admission & Aid</h2>
                        </div>
                        <p class="txt-clr">Welcome to our college, a premier educational institution that offers industry-relevant and globally recognized programmes for students who aspire to become future leaders in the world of business.</p>
                        <p class="txt-justify">Our college is known for its state-of-the-art infrastructure, world-class faculty, and a vibrant student community that provides an enriching learning experience.</p>
                        <div class="slider-btn mt-20">
                            <a href="admission_sppu.php" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- admission-area-end -->

    <!-- frequently-area -->
    <section class="faq-area pt-40 pb-120 p-relative fix">
        <div class="animations-10"><img src="img/bg/an-img-04.png" alt="an-img-01"></div>
        <div class="animations-08"><img src="img/bg/an-img-05.png" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center  align-items-center">

                <div class="col-lg-7">
                    <div class="section-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2>General question & answer</h2>
                        <p>Get every single answer here..</p>
                    </div>
                    <div class="faq-wrap mt-30 pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            01 Is the BBA programme recognised by the government?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse show" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Yes, it is affiliated to Savitribai Phule Pune University (SPPU)... <br>To view the official approval certificate of our college, kindly<a href="sppu.php"><i> click here. </i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                            02 What are the career prospects for FUEL BBA graduates?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Graduates of the FUEL BBA programme will have a wide range of career opportunities in various fields such as banking, finance, consulting, marketing, human resources, and more. Some of the popular job roles for FUEL BBA graduates would include business analyst, marketing manager, financial analyst, operations manager, and more.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            03 Does the college provide placement assistance for FUEL BBA graduates?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Yes, the college will have a dedicated placement cell that provides placement assistance to FUEL BBA graduates. The placement cell will closely work with various companies and organizations to provide students with job opportunities that match their skills and interests. Additionally, the placement cell will also conduct training sessions, workshops, and seminars to prepare the students for the job market. FCM will effectively leverage the relationship that FUEL has with more than large corporates.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            04 Are there any opportunities for experiential learning or internships as part of the BBA/BBA program?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Yes, we will provide our BBA students with ample opportunities for experiential learning and internships. We partner with various organizations and companies to provide our students with real-world industry exposure and hands-on learning experiences.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                            05 Is there hostel facility available?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Yes, FCM provides hostel facilities for students. We understand the importance of a comfortable and convenient living arrangement for our students. Our hostels are well-maintained and equipped with essential amenities to ensure a pleasant stay.
                                        <div class="two-column mt-30 mb-30">
                                            <div class="row aling-items-center">
                                                <div class="image-column col-xl-4 col-lg-12 col-md-12">
                                                    <img src="img/gallery/infrastructure/hostelGirls/G4.jpg" alt="img">
                                                </div>
                                                <div class="image-column col-xl-4 col-lg-12 col-md-12">
                                                    <img src="img/gallery/infrastructure/hostelGirls/G5.jpg" alt="img">
                                                </div>
                                                <div class="image-column col-xl-4 col-lg-12 col-md-12">
                                                    <img src="img/gallery/infrastructure/hostelBoys/B4.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-bg02">
                        <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                            <h2>
                                Make A Contact
                            </h2>

                        </div>

                        <form action="" method="post" id="makeContact" name="makeContact" class="contact-form mt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-name mb-20">
                                        <input type="text" id="firstn" name="fullName" placeholder="First Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="email" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="number" id="phone" maxlength="12" name="phone" placeholder="Phone No." required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                    </div>
                                    <div class="slider-btn">
                                        <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span> <i class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- frequently-area-end -->

    <!-- main-area-end -->

    <?php include("include/footer.php"); ?>