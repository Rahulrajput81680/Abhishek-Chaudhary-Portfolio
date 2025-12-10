<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Events - Abhishek Chaudhary</title>

</head>
   
<?php include 'components/links.php' ?>

<!-- page wrapper -->
<body>
    <?php include 'components/header.php' ?>

    <div class="boxed_wrapper">

        <!-- preloader -->
    <?php include 'components/preloader.php' ?>
        <!-- preloader end -->

        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index-2.html"><img src="assets/images/logo-2.png" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>Book Now</h4>
                                    <form action="" method="post" class="booking-form">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Text"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit">Send Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>Prahaladgadhi, Sultan Patti, Pratapgarh, UP</li>
                                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                                <ul class="social-box">
                                    <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                    <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->

        <!-- Page Title -->
        <section class="page-title custom-banner-height" style="background-image: url(https://cdn.pixabay.com/photo/2016/05/06/09/25/human-1375492_1280.png); position: relative;">
            <div class="banner-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
            <div class="auto-container" style="position: relative; z-index: 2;">
                <div class="content-box">
                    <div class="title centred">
                        <h1>Events</h1>
                    </div>
                    <!-- <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Events</li>
                    </ul> -->
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        
        
        <!-- Event Filter Buttons -->
        <section class="event-filter-section centred" style="background-color: #f5f5f5; padding: 30px 0;">
            <div class="auto-container">
                <div class="filter-buttons">
                    <button class="event-filter-btn active" data-filter="upcoming">
                        <i class="flaticon-calendar"></i> Upcoming Events
                    </button>
                    <button class="event-filter-btn" data-filter="past">
                        <i class="flaticon-history"></i> Past Events
                    </button>
                </div>
            </div>
        </section>
        <!-- Event Filter Buttons End -->

        <!-- news-section -->
        <section class="news-section blog-grid sec-pad-2 past-events-section" style="display: none;">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        
                                        <img src="assets/images/myImages/past-events1.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>15<span>Nov'2025</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4>Health & Medical Awareness Camp</h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/past-events2.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>14<span>Dec’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Education</a></div>
                                    <h4>Education Support Drive</h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/past-events3.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>06<span>Nov’25 </span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a>Youth Skill Development Workshop</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/Past-events4.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>15<span>Oct’25</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a>Senior Citizen Support Drive</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/past-events5.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>02<span>Oct’25</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a>Women Hygiene & Health Awareness Campaign</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Noah Benjamin</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/past-events6.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>27<span>Sep’25</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announced</a></div>
                                    <h4><a href="blog-details.html">Tree Plantation Mission</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a>Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <!-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-10.jpg" alt="">
                                    </figure>
                                    <div class="post-date"><h3>14<span>Sep’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Education</a></div>
                                    <h4><a href="blog-details.html">Have Your Say on New Pocket Parks for Collingwood</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-11.jpg" alt="">
                                    </figure>
                                    <div class="post-date"><h3>30<span>Aug’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a href="blog-details.html">Are You Enrolled to Vote in the 2021 Local Elections?</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban </a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-12.jpg" alt="">
                                    </figure>
                                    <div class="post-date"><h3>21<span>Aug’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a href="blog-details.html">We Calls for More Support for public housing...</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        <li><a href="blog.html"><i class="far fa-angle-double-left"></i></a></li>
                        <li><a href="blog.html" class="current">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html"><i class="far fa-angle-double-right"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </section>
        <!-- news-section end -->
         <section class="news-section blog-grid sec-pad-2 upcoming-events-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/upcomingEvents1.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>28<span>Jan’26</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a>Nasha Mukti Youth Awareness Rally</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/upcomingEvents2.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>14<span>Dec’26</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Education</a></div>
                                    <h4><a>Digital Literacy Program for Rural Students</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/upcomingEvents3.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>06<span>Nov’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a>Women Entrepreneurship & Self-Help Group Training</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/upcomingEvents4.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>15<span>Feb’26</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a>Scholarship Guidance & Career Awareness Seminar</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/upcomingEvents5.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>02<span>Jan’25</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a>Senior Citizen Health Check-Up and Support Camp</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Noah Benjamin</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <!-- <a href="blog-details.html"><i class="fas fa-link"></i></a> -->
                                        <img src="assets/images/myImages/upcomingEvents6.png" alt="">
                                    </figure>
                                    <div class="post-date"><h3>27<span>March’26</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a><i class="flaticon-star"></i>Education</a></div>
                                    <h4><a>Food Distribution Drive for Underprivileged Families</a></h4>
                                    <!-- <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-10.jpg" alt="">
                                    </figure>
                                    <div class="post-date"><h3>14<span>Sep’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Education</a></div>
                                    <h4><a href="blog-details.html">Have Your Say on New Pocket Parks for Collingwood</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-11.jpg" alt="">
                                    </figure>
                                    <div class="post-date"><h3>30<span>Aug’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a href="blog-details.html">Are You Enrolled to Vote in the 2021 Local Elections?</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban </a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-12.jpg" alt="">
                                    </figure>
                                    <div class="post-date"><h3>21<span>Aug’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a href="blog-details.html">We Calls for More Support for public housing...</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        <li><a href="blog.html"><i class="far fa-angle-double-left"></i></a></li>
                        <li><a href="blog.html" class="current">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html"><i class="far fa-angle-double-right"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </section>
        <!-- news-section end -->





       <?php include 'components/footer.php' ?>

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fas fa-angle-up"></span>
        </button>
    </div>

<?php include 'components/script.php' ?>
 
</body>
<!-- End of .page_wrapper -->


</html>
