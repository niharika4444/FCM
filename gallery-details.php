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
                     <figure class="image"><img src="img/gallery/protfolio-img01.jpg" alt="img"></figure>
                 </div>
             </div>

             <!-- Lower Content -->
             <div class="lower-content2">
                 <div class="row">
                     <div class="text-column col-lg-9 col-md-12 col-sm-12">
                         <div class="s-about-content wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                             <div class="two-column mt-30 mb-30">
                                 <div class="row aling-items-center">
                                     <div class="image-column col-xl-4 col-lg-12 col-md-12">
                                         <img src="img/gallery/protfolio-img02.jpg" alt="img">
                                     </div>
                                     <div class="text-column col-xl-4 col-lg-12 col-md-12 text-right">
                                         <img src="img/gallery/protfolio-img03.jpg" alt="img">
                                     </div>
                                     <div class="text-column col-xl-4 col-lg-12 col-md-12 text-right">
                                         <img src="img/gallery/protfolio-img04.jpg" alt="img">
                                     </div>
                                 </div>
                             </div>
                             <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>

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
                                     <strong>Category: </strong>
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