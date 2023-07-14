<?php
$page = "Social Impact";

include("include/header.php"); ?>

<style>
    .txt-justify {
        text-align: justify;
        text-justify: inter-word;
    }

    #myVideo {
        /* position: fixed; */
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    /* Add some content at the bottom of the video/page */
    .content {
        /* position: fixed; */
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
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
                            <h2>Social Impact</h2>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Social Impact</li>
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

            <div class="upper-box">
                <div class="single-item-carousel owl-carousel owl-theme">
                    <video autoplay muted loop id="myVideo">
                        <source src="img/bg/vdo.mp4" type="video/mp4">
                        Your browser does not support mp4 video.
                    </video>

                    <div class="content" style="background-color: #032e3f;">
                        <ol>
                            <li>
                                <p>FUEL has reached more than 1,00,000 youth across different parts of the country.</p>
                            </li>
                            <li>
                                <p>FUEL has given training to 88 000 plus youth in skill development and is working in different parts of India providing sessions on Skilling career counselling and academic coaching while impacting more than 1.1 million youth globally.</p>
                            </li>
                            <li>
                                <p>FUEL is enabling students to excel by making substantial contributions by partnering with 3500 plus schools and colleges across India and changing the lives of more than 11 lakh plus students.</p>
                            </li>
                        </ol>
                        <!-- Use a button to pause/play the video with JavaScript -->
                        <a href="https://youtube.com/watch?v=jWPCRZKf-3k&feature=share" target="_blank" id="myBtn" onclick="myFunction()" class="btn ss-btn smoth-scroll">Watch Video<i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content2">
                <div class="row">

                    <div class="two-column mt-30 mb-30">
                        <div class="row aling-items-center">
                            <div class="image-column col-xl-4 col-lg-12 col-md-12">
                                <img src="img/gallery/Talent Search_Scholarship_Program/T1.jpg" alt="img">
                            </div>
                            <div class="image-column col-xl-4 col-lg-12 col-md-12">
                                <img src="img/gallery/Talent Search_Scholarship_Program/T8.jpg" alt="img">
                            </div>
                            <div class="image-column col-xl-4 col-lg-12 col-md-12">
                                <img src="img/gallery/Talent Search_Scholarship_Program/T9.jpg" alt="img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-11 col-md-3 p-relative">
                        <div class="slider-btn mt-10 aling-items-center">
                            <a href="gallery-details-6.php" class="btn ss-btn" data-animation="fadeInLeft" data-delay=".7s">Discover More in gallery <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- steps-area -->
    <section class="steps-area2 p-relative fix" style="background-color: #032e3f;">
        <div class="container mt-20 mb-20">
            <div class="animations-08"><img src="img/bg/an-img-20.png" alt="contact-bg-an-01"></div>
            <div class="row align-items-center">
                <!-- <h2>Voices of our students</h2> -->
                <div class="col-lg-4 col-md-12">
                    <div class="wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="img/team/poonam.jpeg" style="max-width: 360px;" alt="class image">
                    </div>

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="step-box step-box3 wow fadeInLeft animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="text">
                            <!-- <img src="img/testimonial/qt-icon.png" alt="icon"> -->
                            <p class="txt-justify">"Poonam, a 22-year-old management graduate, I found myself facing a daunting challenge after completing my studies – finding a suitable job in the highly competitive corporate world. Despite my academic qualifications, I lacked practical skills and experience that were crucial for securing a placement. Adding to my difficulties, my family's financial situation made it impossible for me to afford expensive training programs. </p> <br>
                            <p class="txt-justify">I tirelessly searched for opportunities to enhance my skills and increase my chances of getting hired. It was during this dark phase that I stumbled upon FUEL, an organization dedicated to providing free skill development training to young individuals like me. Filled with a glimmer of hope, I eagerly applied for the aptitude training program offered by FUEL. It felt like a ray of sunshine breaking through the clouds, signalling a new beginning. The training program at FUEL proved to be transformative. </p><br>
                            <p class="txt-justify">As my training at FUEL drew to a close, I received the news that I had been placed at Survik Software Pvt. Ltd., a renowned company in the field of recruitment management. The gratitude I felt in that moment was overwhelming."</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- steps-area-end -->
    <!-- steps-area -->
    <section class="steps-area2 p-relative fix" style="background-color: #032e3f;">

        <div class="container mt-20 mb-20">

            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="animations-01"><img src="img/bg/an-img-10.png" alt="an-img-01"></div>
                    <div class="step-box step-box2 wow fadeInRight animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="text">
                            <p class="txt-justify">"Minakshi Wangdare, 22-year-old a graduate student, with a bachelor of Computer Application. She faced financial difficulties as her father, who worked as a farmer, could not afford to pay for expensive training programs. Despite these challenges, Minakshi never gave up on her dream and continued to search for opportunities to enhance her skills. She had always been interested in data analysis, and she was excited to start her career in the tech industry.</p><br>
                            <p class="txt-justify">After graduating, Minakshi decided to enrol in a training program at FUEL Institute. The program was designed to help recent graduates develop the skills they need to be successful in data analysis. The program covered a variety of topics, including data mining, statistical analysis, and machine learning.</p><br>
                            <p class="txt-justify">Minakshi worked hard in the training program, and she quickly learned a lot about data analysis. She also made some great connections with other students and instructors.</p><br>
                            <p class="txt-justify">At the end of the training program, Minakshi was offered a job as a technology trainee at Protean eGov. She was thrilled to accept the offer, and she started working at Protean eGov a few weeks later."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="img/team/minakshi.png" style="max-width: 360px;" alt="class image">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- steps-area-end -->
    <!-- steps-area -->
    <section class="steps-area2 p-relative fix" style="background-color: #032e3f;">
        <div class="container mt-20 mb-20">
            <div class="animations-08"><img src="img/bg/an-img-20.png" alt="contact-bg-an-01"></div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="img/team/namdev.jpeg" style="max-width: 360px;" alt="class image">
                    </div>

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="step-box step-box3 wow fadeInLeft animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="text">
                            <p class="txt-justify">"Namdev Gurav, a 23-year-old graduate, was facing a similar struggle in his quest for a job. With a background in computer science, Namdev dreamt of working in the field of technology. However, his lack of practical skills and experience made it difficult for him to secure a job in the competitive industry.</p> <br>
                            <p class="txt-justify">When he discovered FUEL Institute, an organization dedicated to providing free training to underprivileged youth in various technological domains. Filled with hope and excitement, Namdev decided to apply for FUEL's training program in Core Java. During his training at FUEL, Namdev faced numerous challenges. The concepts of complex algorithms and programming languages seemed overwhelming at times. However, he didn't let these obstacles deter him. Namdev sought help from his mentors and collaborated with his fellow trainees to overcome difficulties and deepen his understanding.</p> <br>
                            <p class="txt-justify">FUEL's comprehensive training program equipped Namdev with practical skills and industry-relevant knowledge. With each passing day, he gained confidence in his abilities and started to see his dream of working in artificial intelligence become a reality. Upon completing the training program, Namdev was thrilled to receive a placement opportunity. He secured a position at Capgemini Technology Services India Limited as an A4 analyst. The placement not only provided him with a platform to showcase his skills but also offered a promising career path."</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- steps-area-end -->
    <!--End Project Detail -->

    <!-- main-area-end -->
    <?php include("include/footer.php"); ?>