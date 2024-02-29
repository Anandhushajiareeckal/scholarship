@extends('layouts.frontend')
@section('body')
<header class="hero-area gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-5">
                    <div class="hero-content">
                        <h6 class="come-for-learn-text">
                            <span>Come</span>
                            <span>for</span>
                            <span>Learn</span>
                        </h6>
                        <div class="text">
                            <h1 class="hero-heading">A Better</h1>
                            <h1 class="hero-heading">
                                <span class="main-middle-text" style="color: #d98a1a;">Learning</span>
                            </h1>
                            <h1 class="hero-heading hero-heading-last-word">Starts Here.</h1>
                        </div>
                        <p>While the lovely valley teems with vapour around me, and the meridian sun strikes the upper</p>
                        <div class="hero-btns">
                            <a href="#" class="theme-btn theme-button1">Browse Course
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-7">
                    <div class="hero-right-side">
                        <img src="uploads/setting/1697366091-ynvLlXobr8.png" alt="hero-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="special-feature-area p-0 ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-feature-item d-flex align-items-center">
                    <div class="flex-shrink-0 feature-img-wrap">
                        <img src="uploads_demo/setting/feature-icon1.png" alt="feature">
                    </div>
                    <div class="flex-grow-1 ms-3 feature-content">
                        <h6>Learn From Experts</h6>
                        <p>Mornings of spring which I enjoy with my whole heart about the gen</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-feature-item d-flex align-items-center">
                    <div class="flex-shrink-0 feature-img-wrap">
                        <img src="uploads_demo/setting/feature-icon2.png" alt="feature">
                    </div>
                    <div class="flex-grow-1 ms-3 feature-content">
                        <h6>Earn a Certificate</h6>
                        <p>Meridian sun strikes the upper surface of the impenetrable foliage</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-feature-item d-flex align-items-center">
                    <div class="flex-shrink-0 feature-img-wrap">
                        <img src="uploads_demo/setting/feature-icon3.png" alt="feature">
                    </div>
                    <div class="flex-grow-1 ms-3 feature-content">
                        <h6>5000+ Courses</h6>
                        <p>serenity has taken possession of my entire soul, like these sweet spring</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="courses-area section-t-space section-b-85-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
                    <div class="section-title section-title-left d-flex align-items-start">
                        <div class="section-heading-img">
                            <img src="uploads_demo/setting/courses-heading-img.png" alt="Course">
                        </div>
                        <div>
                            <h3 class="section-heading">A Broad Selection Of Courses.</h3>
                            <p class="section-sub-heading">CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS</p>
                        </div>
                    </div>
                    <a href="#" class="theme-btn theme-button2 theme-button3">View All
                        <i data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="course-slider-items owl-carousel owl-theme">
                    <div class="col-12 col-sm-4 col-lg-3 w-100">
                        <div class="card course-item  border-0 radius-3 bg-white">
                            <div class="course-img-wrap overflow-hidden">
                                <a href="#">
                                    <img src="uploads_demo/course/7.jpg" alt="course" class="img-fluid">
                                </a>
                                <div class="course-item-hover-btns position-absolute">
                                    <span
                                        class="course-item-btn addToWishlist"
                                        data-course_id="15"
                                        data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                        title="Add to Wishlist"
                                    >
                                        <i data-feather="heart"></i>
                                    </span>
                                    <span
                                        class="course-item-btn addToCart"
                                        data-course_id="15"
                                        data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                        title="Add to Cart"
                                    >
                                        <i data-feather="shopping-bag"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title course-title">
                                    <a href="#">APIs in PHP: from Basic to Advanced</a>
                                </h5>
                                <p class="card-text instructor-name-certificate font-medium font-12">
                                    <a href="#">Darrell Edwards</a>
                                </p>
                                <div class="course-item-bottom">
                                    <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                                        <span class="font-medium font-14 me-2">5.00</span>
                                        <div class="star-ratings" style="width: 83.3125px;">
                                            <div class="fill-ratings" style="width: 100%">
                                                <span>★★★★★</span>
                                            </div>
                                            <div class="empty-ratings">
                                                <span>★★★★★</span>
                                            </div>
                                        </div>
                                        <span class="rating-count font-14 ms-2">(2)</span>
                                    </div>
                                    <div class="instructor-bottom-item font-14 font-semi-bold">
                                        <div class="instructor-bottom-item font-14 font-semi-bold">
                                            Price:
                                            <span class="color-hover">
                                               ₹ 30.00 
                                            </span>
                                        </div>
                                        <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                                            <span class="color-para">
                                                Cashback:
                                            </span>
                                            <span class="color-orange">
                                           ₹     3 
                                            </span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-3 w-100">
                    <div class="card course-item  border-0 radius-3 bg-white">
                        <div class="course-img-wrap overflow-hidden">
                            <a href="#">
                                <img src="uploads/course/1657090503-9ynVP5V0Tx.jpg" alt="course" class="img-fluid">
                            </a>
                            <div class="course-item-hover-btns position-absolute">
                                <span
                                    class="course-item-btn addToWishlist"
                                    data-course_id="20"
                                    data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                    title="Add to Wishlist"
                                >
                                    <i data-feather="heart"></i>
                                </span>
                                <span
                                    class="course-item-btn addToCart"
                                    data-course_id="20"
                                    data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                    title="Add to Cart"
                                >
                                    <i data-feather="shopping-bag"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title course-title">
                                <a href="#">Python for Beginners - Learn Programming</a>
                            </h5>
                            <p class="card-text instructor-name-certificate font-medium font-12">
                                <a href="#">Jack Nicholson</a>
                            </p>
                            <div class="course-item-bottom">
                                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                                    <span class="font-medium font-14 me-2">0.00</span>
                                    <div class="star-ratings" style="width: 83.3125px;">
                                        <div class="fill-ratings" style="width: 0%">
                                            <span>★★★★★</span>
                                        </div>
                                        <div class="empty-ratings">
                                            <span>★★★★★</span>
                                        </div>
                                    </div>
                                    <span class="rating-count font-14 ms-2">(2)</span>
                                </div>
                                <div class="instructor-bottom-item font-14 font-semi-bold">
                                    <div class="instructor-bottom-item font-14 font-semi-bold">
                                        Price:
                                        <span class="color-hover">
                                           ₹ 49.00 
                                        </span>
                                    </div>
                                    <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                                        <span class="color-para">
                                            Cashback:
                                        </span>
                                        <span class="color-orange">
                                         ₹   4.9 
                                        </span>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item  border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <a href="#">
                            <img src="uploads/course/1657093851-FB5ijemy3h.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-course_id="27"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                            <span
                                class="course-item-btn addToCart"
                                data-course_id="27"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                title="Add to Cart"
                            >
                                <i data-feather="shopping-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#">Become a Certified HTML, CSS, JavaScript...</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#">James Bond</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                                <span class="font-medium font-14 me-2">0.00</span>
                                <div class="star-ratings" style="width: 83.3125px;">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                                <span class="rating-count font-14 ms-2">(2)</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">
                                <div class="instructor-bottom-item font-14 font-semi-bold">
                                    Price:
                                    <span class="color-hover">
                                       ₹ 50.00 
                                    </span>
                                </div>
                                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                                    <span class="color-para">
                                        Cashback:
                                    </span>
                                    <span class="color-orange">
                                   ₹     5 
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 w-100">
            <div class="card course-item  border-0 radius-3 bg-white">
                <div class="course-img-wrap overflow-hidden">
                    <a href="#">
                        <img src="uploads/course/1657177052-8IjvMdQbBh.jpg" alt="course" class="img-fluid">
                    </a>
                    <div class="course-item-hover-btns position-absolute">
                        <span
                            class="course-item-btn addToWishlist"
                            data-course_id="30"
                            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                            title="Add to Wishlist"
                        >
                            <i data-feather="heart"></i>
                        </span>
                        <span
                            class="course-item-btn addToCart"
                            data-course_id="30"
                            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                            title="Add to Cart"
                        >
                            <i data-feather="shopping-bag"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title course-title">
                        <a href="#">Mastering Data Structures &amp; Algorithms u...</a>
                    </h5>
                    <p class="card-text instructor-name-certificate font-medium font-12">
                        <a href="#">Jack Nicholson</a>
                    </p>
                    <div class="course-item-bottom">
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                            <span class="font-medium font-14 me-2">0.00</span>
                            <div class="star-ratings" style="width: 83.3125px;">
                                <div class="fill-ratings" style="width: 0%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(2)</span>
                        </div>
                        <div class="instructor-bottom-item font-14 font-semi-bold">
                            <div class="instructor-bottom-item font-14 font-semi-bold">
                                Price:
                                <span class="color-hover">
                                   ₹ 50.00 
                                </span>
                            </div>
                            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                                <span class="color-para">
                                    Cashback:
                                </span>
                                <span class="color-orange">
                               ₹     5 
                                </span>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-lg-3 w-100">
        <div class="card course-item  border-0 radius-3 bg-white">
            <div class="course-img-wrap overflow-hidden">
                <a href="#">
                    <img src="uploads/course/1657177527-twxWzEQHTJ.jpg" alt="course" class="img-fluid">
                </a>
                <div class="course-item-hover-btns position-absolute">
                    <span
                        class="course-item-btn addToWishlist"
                        data-course_id="31"
                        data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                        title="Add to Wishlist"
                    >
                        <i data-feather="heart"></i>
                    </span>
                    <span
                        class="course-item-btn addToCart"
                        data-course_id="31"
                        data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                        title="Add to Cart"
                    >
                        <i data-feather="shopping-bag"></i>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title course-title">
                    <a href="#">Competitive Programming Essentials, Mast...</a>
                </h5>
                <p class="card-text instructor-name-certificate font-medium font-12">
                    <a href="#">Jack Nicholson</a>
                </p>
                <div class="course-item-bottom">
                    <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                        <span class="font-medium font-14 me-2">0.00</span>
                        <div class="star-ratings" style="width: 83.3125px;">
                            <div class="fill-ratings" style="width: 0%">
                                <span>★★★★★</span>
                            </div>
                            <div class="empty-ratings">
                                <span>★★★★★</span>
                            </div>
                        </div>
                        <span class="rating-count font-14 ms-2">(2)</span>
                    </div>
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        <div class="instructor-bottom-item font-14 font-semi-bold">
                            Price:
                            <span class="color-hover">
                               ₹ 50.00 
                            </span>
                        </div>
                        <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                            <span class="color-para">
                                Cashback:
                            </span>
                            <span class="color-orange">
                           ₹     5 
                            </span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
    <div class="card course-item  border-0 radius-3 bg-white">
        <div class="course-img-wrap overflow-hidden">
            <a href="#">
                <img src="uploads/course/1657177707-uKF8xDEzRj.jpg" alt="course" class="img-fluid">
            </a>
            <div class="course-item-hover-btns position-absolute">
                <span
                    class="course-item-btn addToWishlist"
                    data-course_id="32"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                    title="Add to Wishlist"
                >
                    <i data-feather="heart"></i>
                </span>
                <span
                    class="course-item-btn addToCart"
                    data-course_id="32"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                    title="Add to Cart"
                >
                    <i data-feather="shopping-bag"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title course-title">
                <a href="#">MERN Stack Doctor Appointment Booking Ap...</a>
            </h5>
            <p class="card-text instructor-name-certificate font-medium font-12">
                <a href="#">Darrell Edwards</a>
            </p>
            <div class="course-item-bottom">
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                    <span class="font-medium font-14 me-2">0.00</span>
                    <div class="star-ratings" style="width: 83.3125px;">
                        <div class="fill-ratings" style="width: 0%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(2)</span>
                </div>
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        Price:
                        <span class="color-hover">
                           ₹ 45.00 
                        </span>
                    </div>
                    <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                        <span class="color-para">
                            Cashback:
                        </span>
                        <span class="color-orange">
                         ₹   4.5 
                        </span>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
    <div class="course-img-wrap overflow-hidden">
        <a href="#">
            <img src="uploads/course/1669814930-hI5q3yMOZ6.jpg" alt="course" class="img-fluid">
        </a>
        <div class="course-item-hover-btns position-absolute">
            <span
                class="course-item-btn addToWishlist"
                data-course_id="34"
                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                title="Add to Wishlist"
            >
                <i data-feather="heart"></i>
            </span>
            <span
                class="course-item-btn addToCart"
                data-course_id="34"
                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                title="Add to Cart"
            >
                <i data-feather="shopping-bag"></i>
            </span>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title course-title">
            <a href="#">Laravel For Beginners - Become A Laravel...</a>
        </h5>
        <p class="card-text instructor-name-certificate font-medium font-12">
            <a href="#">Benjamin Lucas</a>
        </p>
        <div class="course-item-bottom">
            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                <span class="font-medium font-14 me-2">0.00</span>
                <div class="star-ratings" style="width: 83.3125px;">
                    <div class="fill-ratings" style="width: 0%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                </div>
                <span class="rating-count font-14 ms-2">(2)</span>
            </div>
            <div class="instructor-bottom-item font-14 font-semi-bold">
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    Price:
                    <span class="color-hover">
                        ₹120.00 
                    </span>
                    <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                        ₹150.00 
                    </span>
                </div>
                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                    <span class="color-para">
                        Cashback:
                    </span>
                    <span class="color-orange">
                    ₹    12 
                    </span>
                </div>
            </span>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
<div class="course-img-wrap overflow-hidden">
    <a href="#">
        <img src="uploads/course/1669877751-dmdXIqfTbH.jpg" alt="course" class="img-fluid">
    </a>
    <div class="course-item-hover-btns position-absolute">
        <span
            class="course-item-btn addToWishlist"
            data-course_id="36"
            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
            title="Add to Wishlist"
        >
            <i data-feather="heart"></i>
        </span>
        <span
            class="course-item-btn addToCart"
            data-course_id="36"
            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
            title="Add to Cart"
        >
            <i data-feather="shopping-bag"></i>
        </span>
    </div>
</div>
<div class="card-body">
    <h5 class="card-title course-title">
        <a href="#">Ethical Hacking - Drip Content Course</a>
    </h5>
    <p class="card-text instructor-name-certificate font-medium font-12">
        <a href="#">Benjamin Lucas</a>
    </p>
    <div class="course-item-bottom">
        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
            <span class="font-medium font-14 me-2">0.00</span>
            <div class="star-ratings" style="width: 83.3125px;">
                <div class="fill-ratings" style="width: 0%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
            </div>
            <span class="rating-count font-14 ms-2">(2)</span>
        </div>
        <div class="instructor-bottom-item font-14 font-semi-bold">
            <div class="instructor-bottom-item font-14 font-semi-bold">
                Price:
                <span class="color-hover">
                    ₹200.00 
                </span>
                <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                    ₹220.00 
                </span>
            </div>
            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                <span class="color-para">
                    Cashback:
                </span>
                <span class="color-orange">
                ₹    20 
                </span>
            </div>
        </span>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="courses-area section-t-space section-b-85-space">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
            <div class="section-title section-title-left d-flex align-items-start">
                <div class="section-heading-img">
                    <img src="uploads/setting/1685186091-2J2u1Okflh.png" alt="Category Course">
                </div>
                <div>
                    <h3 class="section-heading">Course By Categories</h3>
                    <p class="section-sub-heading">CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS</p>
                </div>
            </div>
            <div class="course-tab-nav-wrap d-flex justify-content-between">
                <ul class="nav nav-tabs tab-nav-list border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link active"
                            id="development-tab"
                            data-bs-toggle="tab"
                            href="#"
                            role="tab"
                            aria-controls="development"
                            aria-selected="true"
                        >Development</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link "
                            id="business-tab"
                            data-bs-toggle="tab"
                            href="#"
                            role="tab"
                            aria-controls="business"
                            aria-selected="false"
                        >Business</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link "
                            id="it-software-tab"
                            data-bs-toggle="tab"
                            href="#it-software"
                            role="tab"
                            aria-controls="it-software"
                            aria-selected="false"
                        >IT &amp; Software</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link "
                            id="design-tab"
                            data-bs-toggle="tab"
                            href="#design"
                            role="tab"
                            aria-controls="design"
                            aria-selected="false"
                        >Design</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="tab-content" id="myTabContent">
    <div
        class="tab-pane fade show active"
        id="development"
        role="tabpanel"
        aria-labelledby="development-tab"
    >
        <div class="course-slider-items owl-carousel owl-theme">
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item  border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <a href="#ourse-details/javascript-understanding-the-weir#">
                            <img src="uploads/course/1655545018-UOg3MEPfM6.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-course_id="1"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                            <span
                                class="course-item-btn addToCart"
                                data-course_id="1"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                title="Add to Cart"
                            >
                                <i data-feather="shopping-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#ourse-details/javascript-understanding-the-weir#">JavaScript: Understanding the Weird Part...</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#sers/2/#">Johnny Depp</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                                <span class="font-medium font-14 me-2">5.00</span>
                                <div class="star-ratings" style="width: 83.3125px;">
                                    <div class="fill-ratings" style="width: 100%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                                <span class="rating-count font-14 ms-2">(2)</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">
                                <div class="instructor-bottom-item font-14 font-semi-bold">
                                    Price:
                                    <span class="color-hover">
                                       ₹ 50.00 
                                    </span>
                                </div>
                                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                                    <span class="color-para">
                                        Cashback:
                                    </span>
                                    <span class="color-orange">
                                   ₹     5 
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 w-100">
            <div class="card course-item  border-0 radius-3 bg-white">
                <div class="course-img-wrap overflow-hidden">
                    <a href="#ourse-details/python-for-beginners-learn-prog#">
                        <img src="uploads/course/1657090503-9ynVP5V0Tx.jpg" alt="course" class="img-fluid">
                    </a>
                    <div class="course-item-hover-btns position-absolute">
                        <span
                            class="course-item-btn addToWishlist"
                            data-course_id="20"
                            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                            title="Add to Wishlist"
                        >
                            <i data-feather="heart"></i>
                        </span>
                        <span
                            class="course-item-btn addToCart"
                            data-course_id="20"
                            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                            title="Add to Cart"
                        >
                            <i data-feather="shopping-bag"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title course-title">
                        <a href="#ourse-details/python-for-beginners-learn-prog#">Python for Beginners - Learn Programming</a>
                    </h5>
                    <p class="card-text instructor-name-certificate font-medium font-12">
                        <a href="#sers/6/#">Jack Nicholson</a>
                    </p>
                    <div class="course-item-bottom">
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                            <span class="font-medium font-14 me-2">0.00</span>
                            <div class="star-ratings" style="width: 83.3125px;">
                                <div class="fill-ratings" style="width: 0%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(2)</span>
                        </div>
                        <div class="instructor-bottom-item font-14 font-semi-bold">
                            <div class="instructor-bottom-item font-14 font-semi-bold">
                                Price:
                                <span class="color-hover">
                                   ₹ 49.00 
                                </span>
                            </div>
                            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                                <span class="color-para">
                                    Cashback:
                                </span>
                                <span class="color-orange">
                                 ₹   4.9 
                                </span>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-lg-3 w-100">
        <div class="card course-item  border-0 radius-3 bg-white">
            <div class="course-img-wrap overflow-hidden">
                <a href="#ourse-details/the-complete-2022-web-development-b#">
                    <img src="uploads/course/1657090784-naj1j0hXAl.jpg" alt="course" class="img-fluid">
                </a>
                <div class="course-item-hover-btns position-absolute">
                    <span
                        class="course-item-btn addToWishlist"
                        data-course_id="21"
                        data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                        title="Add to Wishlist"
                    >
                        <i data-feather="heart"></i>
                    </span>
                    <span
                        class="course-item-btn addToCart"
                        data-course_id="21"
                        data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                        title="Add to Cart"
                    >
                        <i data-feather="shopping-bag"></i>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title course-title">
                    <a href="#ourse-details/the-complete-2022-web-development-b#">The Complete 2022 Web Development Bootca...</a>
                </h5>
                <p class="card-text instructor-name-certificate font-medium font-12">
                    <a href="#sers/6/#">Jack Nicholson</a>
                </p>
                <div class="course-item-bottom">
                    <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                        <span class="font-medium font-14 me-2">0.00</span>
                        <div class="star-ratings" style="width: 83.3125px;">
                            <div class="fill-ratings" style="width: 0%">
                                <span>★★★★★</span>
                            </div>
                            <div class="empty-ratings">
                                <span>★★★★★</span>
                            </div>
                        </div>
                        <span class="rating-count font-14 ms-2">(2)</span>
                    </div>
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        <div class="instructor-bottom-item font-14 font-semi-bold">
                            Price:
                            <span class="color-hover">
                               ₹ 49.00 
                            </span>
                        </div>
                        <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                            <span class="color-para">
                                Cashback:
                            </span>
                            <span class="color-orange">
                             ₹   4.9 
                            </span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
    <div class="card course-item  border-0 radius-3 bg-white">
        <div class="course-img-wrap overflow-hidden">
            <a href="#ourse-details/react-next-js-with-typ#">
                <img src="uploads/course/1657091046-ua5pjxktej.jpg" alt="course" class="img-fluid">
            </a>
            <div class="course-item-hover-btns position-absolute">
                <span
                    class="course-item-btn addToWishlist"
                    data-course_id="22"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                    title="Add to Wishlist"
                >
                    <i data-feather="heart"></i>
                </span>
                <span
                    class="course-item-btn addToCart"
                    data-course_id="22"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                    title="Add to Cart"
                >
                    <i data-feather="shopping-bag"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title course-title">
                <a href="#ourse-details/react-next-js-with-typ#">React + Next JS with TypeScript</a>
            </h5>
            <p class="card-text instructor-name-certificate font-medium font-12">
                <a href="#sers/6/#">Jack Nicholson</a>
            </p>
            <div class="course-item-bottom">
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                    <span class="font-medium font-14 me-2">0.00</span>
                    <div class="star-ratings" style="width: 83.3125px;">
                        <div class="fill-ratings" style="width: 0%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(2)</span>
                </div>
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        Price:
                        <span class="color-hover">
                           ₹ 69.00 
                        </span>
                    </div>
                    <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                        <span class="color-para">
                            Cashback:
                        </span>
                        <span class="color-orange">
                         ₹   6.9 
                        </span>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
    <div class="course-img-wrap overflow-hidden">
        <a href="#ourse-details/react-the-complete-guide-incl-hooks-react-route#">
            <img src="uploads/course/1657091384-VX5ZldBJ3q.jpg" alt="course" class="img-fluid">
        </a>
        <div class="course-item-hover-btns position-absolute">
            <span
                class="course-item-btn addToWishlist"
                data-course_id="23"
                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                title="Add to Wishlist"
            >
                <i data-feather="heart"></i>
            </span>
            <span
                class="course-item-btn addToCart"
                data-course_id="23"
                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                title="Add to Cart"
            >
                <i data-feather="shopping-bag"></i>
            </span>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title course-title">
            <a href="#ourse-details/react-the-complete-guide-incl-hooks-react-route#">React - The Complete Guide (incl Hooks,...</a>
        </h5>
        <p class="card-text instructor-name-certificate font-medium font-12">
            <a href="#sers/2/#">Johnny Depp</a>
        </p>
        <div class="course-item-bottom">
            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                <span class="font-medium font-14 me-2">0.00</span>
                <div class="star-ratings" style="width: 83.3125px;">
                    <div class="fill-ratings" style="width: 0%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                </div>
                <span class="rating-count font-14 ms-2">(2)</span>
            </div>
            <div class="instructor-bottom-item font-14 font-semi-bold">
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    Price:
                    <span class="color-hover">
                       ₹ 55.00 
                    </span>
                </div>
                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                    <span class="color-para">
                        Cashback:
                    </span>
                    <span class="color-orange">
                     ₹   5.5 
                    </span>
                </div>
            </span>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
<div class="course-img-wrap overflow-hidden">
    <a href="#ourse-details/Laravel-For-Beginners-Become-A-Laravel-Master-CMS-#">
        <img src="uploads/course/1669814930-hI5q3yMOZ6.jpg" alt="course" class="img-fluid">
    </a>
    <div class="course-item-hover-btns position-absolute">
        <span
            class="course-item-btn addToWishlist"
            data-course_id="34"
            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
            title="Add to Wishlist"
        >
            <i data-feather="heart"></i>
        </span>
        <span
            class="course-item-btn addToCart"
            data-course_id="34"
            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
            title="Add to Cart"
        >
            <i data-feather="shopping-bag"></i>
        </span>
    </div>
</div>
<div class="card-body">
    <h5 class="card-title course-title">
        <a href="#ourse-details/Laravel-For-Beginners-Become-A-Laravel-Master-CMS-#">Laravel For Beginners - Become A Laravel...</a>
    </h5>
    <p class="card-text instructor-name-certificate font-medium font-12">
        <a href="#sers/60/#">Benjamin Lucas</a>
    </p>
    <div class="course-item-bottom">
        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
            <span class="font-medium font-14 me-2">0.00</span>
            <div class="star-ratings" style="width: 83.3125px;">
                <div class="fill-ratings" style="width: 0%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
            </div>
            <span class="rating-count font-14 ms-2">(2)</span>
        </div>
        <div class="instructor-bottom-item font-14 font-semi-bold">
            <div class="instructor-bottom-item font-14 font-semi-bold">
                Price:
                <span class="color-hover">
                    ₹120.00 
                </span>
                <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                    ₹150.00 
                </span>
            </div>
            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                <span class="color-para">
                    Cashback:
                </span>
                <span class="color-orange">
                ₹    12 
                </span>
            </div>
        </span>
    </div>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
<div class="course-img-wrap overflow-hidden">
    <a href="#ourse-details/ethical-hacking-drip-content#">
        <img src="uploads/course/1669877751-dmdXIqfTbH.jpg" alt="course" class="img-fluid">
    </a>
    <div class="course-item-hover-btns position-absolute">
        <span
            class="course-item-btn addToWishlist"
            data-course_id="36"
            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
            title="Add to Wishlist"
        >
            <i data-feather="heart"></i>
        </span>
        <span
            class="course-item-btn addToCart"
            data-course_id="36"
            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
            title="Add to Cart"
        >
            <i data-feather="shopping-bag"></i>
        </span>
    </div>
</div>
<div class="card-body">
    <h5 class="card-title course-title">
        <a href="#ourse-details/ethical-hacking-drip-content#">Ethical Hacking - Drip Content Course</a>
    </h5>
    <p class="card-text instructor-name-certificate font-medium font-12">
        <a href="#sers/60/#">Benjamin Lucas</a>
    </p>
    <div class="course-item-bottom">
        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
            <span class="font-medium font-14 me-2">0.00</span>
            <div class="star-ratings" style="width: 83.3125px;">
                <div class="fill-ratings" style="width: 0%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
            </div>
            <span class="rating-count font-14 ms-2">(2)</span>
        </div>
        <div class="instructor-bottom-item font-14 font-semi-bold">
            <div class="instructor-bottom-item font-14 font-semi-bold">
                Price:
                <span class="color-hover">
                    ₹200.00 
                </span>
                <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                    ₹220.00 
                </span>
            </div>
            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                <span class="color-para">
                    Cashback:
                </span>
                <span class="color-orange">
                ₹    20 
                </span>
            </div>
        </span>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div
class="tab-pane fade "
id="business"
role="tabpanel"
aria-labelledby="business-tab"
>
<div class="course-slider-items owl-carousel owl-theme">
<div class="col-12 col-sm-4 col-lg-3 w-100">
    <div class="card course-item  border-0 radius-3 bg-white">
        <div class="course-img-wrap overflow-hidden">
            <a href="#ourse-details/docker-kubernetes-the-practica#">
                <img src="uploads/course/1657092802-1IxHQisPZW.jpg" alt="course" class="img-fluid">
            </a>
            <div class="course-item-hover-btns position-absolute">
                <span
                    class="course-item-btn addToWishlist"
                    data-course_id="25"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                    title="Add to Wishlist"
                >
                    <i data-feather="heart"></i>
                </span>
                <span
                    class="course-item-btn addToCart"
                    data-course_id="25"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                    title="Add to Cart"
                >
                    <i data-feather="shopping-bag"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title course-title">
                <a href="#ourse-details/docker-kubernetes-the-practica#">Docker &amp; Kubernetes: The Practical Guide</a>
            </h5>
            <p class="card-text instructor-name-certificate font-medium font-12">
                <a href="#sers/4/#">James Bond</a>
            </p>
            <div class="course-item-bottom">
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                    <span class="font-medium font-14 me-2">0.00</span>
                    <div class="star-ratings" style="width: 83.3125px;">
                        <div class="fill-ratings" style="width: 0%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(2)</span>
                </div>
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        Price:
                        <span class="color-hover">
                           ₹ 45.00 
                        </span>
                    </div>
                    <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                        <span class="color-para">
                            Cashback:
                        </span>
                        <span class="color-orange">
                         ₹   4.5 
                        </span>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
    <div class="course-img-wrap overflow-hidden">
        <a href="#ourse-details/advanced-css-and-sass-flexb#">
            <img src="uploads/course/1657093969-6dzy9wZNYd.jpg" alt="course" class="img-fluid">
        </a>
        <div class="course-item-hover-btns position-absolute">
            <span
                class="course-item-btn addToWishlist"
                data-course_id="26"
                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                title="Add to Wishlist"
            >
                <i data-feather="heart"></i>
            </span>
            <span
                class="course-item-btn addToCart"
                data-course_id="26"
                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                title="Add to Cart"
            >
                <i data-feather="shopping-bag"></i>
            </span>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title course-title">
            <a href="#ourse-details/advanced-css-and-sass-flexb#">Advanced CSS and Sass: Flexbox, Grid</a>
        </h5>
        <p class="card-text instructor-name-certificate font-medium font-12">
            <a href="#sers/4/#">James Bond</a>
        </p>
        <div class="course-item-bottom">
            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                <span class="font-medium font-14 me-2">0.00</span>
                <div class="star-ratings" style="width: 83.3125px;">
                    <div class="fill-ratings" style="width: 0%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                </div>
                <span class="rating-count font-14 ms-2">(2)</span>
            </div>
            <div class="instructor-bottom-item font-14 font-semi-bold">
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    Price:
                    <span class="color-hover">
                       ₹ 45.00 
                    </span>
                </div>
                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                    <span class="color-para">
                        Cashback:
                    </span>
                    <span class="color-orange">
                     ₹   4.5 
                    </span>
                </div>
            </span>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div
class="tab-pane fade "
id="it-software"
role="tabpanel"
aria-labelledby="it-software-tab"
>
<div class="course-slider-items owl-carousel owl-theme">
<div class="col-12 col-sm-4 col-lg-3 w-100">
    <div class="card course-item  border-0 radius-3 bg-white">
        <div class="course-img-wrap overflow-hidden">
            <a href="#ourse-details/angular-the-complet#">
                <img src="uploads/course/1655545541-20j0PT4KDE.jpg" alt="course" class="img-fluid">
            </a>
            <div class="course-item-hover-btns position-absolute">
                <span
                    class="course-item-btn addToWishlist"
                    data-course_id="3"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                    title="Add to Wishlist"
                >
                    <i data-feather="heart"></i>
                </span>
                <span
                    class="course-item-btn addToCart"
                    data-course_id="3"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                    title="Add to Cart"
                >
                    <i data-feather="shopping-bag"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title course-title">
                <a href="#ourse-details/angular-the-complet#">Angular - The Complete Guide</a>
            </h5>
            <p class="card-text instructor-name-certificate font-medium font-12">
                <a href="#sers/4/#">James Bond</a>
            </p>
            <div class="course-item-bottom">
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                    <span class="font-medium font-14 me-2">0.00</span>
                    <div class="star-ratings" style="width: 83.3125px;">
                        <div class="fill-ratings" style="width: 0%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(2)</span>
                </div>
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        Price:
                        <span class="color-hover">
                           ₹ 45.00 
                        </span>
                    </div>
                    <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                        <span class="color-para">
                            Cashback:
                        </span>
                        <span class="color-orange">
                         ₹   4.5 
                        </span>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
    <div class="course-img-wrap overflow-hidden">
        <a href="#ourse-details/become-a-ce#-css-javascript-de#">
            <img src="uploads/course/1657093851-FB5ijemy3h.jpg" alt="course" class="img-fluid">
        </a>
        <div class="course-item-hover-btns position-absolute">
            <span
                class="course-item-btn addToWishlist"
                data-course_id="27"
                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                title="Add to Wishlist"
            >
                <i data-feather="heart"></i>
            </span>
            <span
                class="course-item-btn addToCart"
                data-course_id="27"
                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                title="Add to Cart"
            >
                <i data-feather="shopping-bag"></i>
            </span>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title course-title">
            <a href="#ourse-details/become-a-ce#-css-javascript-de#">Become a Certified HTML, CSS, JavaScript...</a>
        </h5>
        <p class="card-text instructor-name-certificate font-medium font-12">
            <a href="#sers/4/#">James Bond</a>
        </p>
        <div class="course-item-bottom">
            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                <span class="font-medium font-14 me-2">0.00</span>
                <div class="star-ratings" style="width: 83.3125px;">
                    <div class="fill-ratings" style="width: 0%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                </div>
                <span class="rating-count font-14 ms-2">(2)</span>
            </div>
            <div class="instructor-bottom-item font-14 font-semi-bold">
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    Price:
                    <span class="color-hover">
                       ₹ 50.00 
                    </span>
                </div>
                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                    <span class="color-para">
                        Cashback:
                    </span>
                    <span class="color-orange">
                   ₹     5 
                    </span>
                </div>
            </span>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
<div class="course-img-wrap overflow-hidden">
    <a href="#ourse-details/learn-c-programming-in-ten-eas#">
        <img src="uploads/course/1657094178-Ys7zCw6IDD.jpg" alt="course" class="img-fluid">
    </a>
    <div class="course-item-hover-btns position-absolute">
        <span
            class="course-item-btn addToWishlist"
            data-course_id="28"
            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
            title="Add to Wishlist"
        >
            <i data-feather="heart"></i>
        </span>
        <span
            class="course-item-btn addToCart"
            data-course_id="28"
            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
            title="Add to Cart"
        >
            <i data-feather="shopping-bag"></i>
        </span>
    </div>
</div>
<div class="card-body">
    <h5 class="card-title course-title">
        <a href="#ourse-details/learn-c-programming-in-ten-eas#">Learn C# Programming (In Ten Easy Steps)</a>
    </h5>
    <p class="card-text instructor-name-certificate font-medium font-12">
        <a href="#sers/5/#">Darrell Edwards</a>
    </p>
    <div class="course-item-bottom">
        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
            <span class="font-medium font-14 me-2">0.00</span>
            <div class="star-ratings" style="width: 83.3125px;">
                <div class="fill-ratings" style="width: 0%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
            </div>
            <span class="rating-count font-14 ms-2">(2)</span>
        </div>
        <div class="instructor-bottom-item font-14 font-semi-bold">
            <div class="instructor-bottom-item font-14 font-semi-bold">
                Price:
                <span class="color-hover">
                   ₹ 55.00 
                </span>
            </div>
            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                <span class="color-para">
                    Cashback:
                </span>
                <span class="color-orange">
                 ₹   5.5 
                </span>
            </div>
        </span>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div
class="tab-pane fade "
id="design"
role="tabpanel"
aria-labelledby="design-tab"
>
<div class="course-slider-items owl-carousel owl-theme">
<div class="col-12 col-sm-4 col-lg-3 w-100">
    <div class="card course-item  border-0 radius-3 bg-white">
        <div class="course-img-wrap overflow-hidden">
            <a href="#ourse-details/apis-in-php-from-basic-to-a#">
                <img src="uploads_demo/course/7.jpg" alt="course" class="img-fluid">
            </a>
            <div class="course-item-hover-btns position-absolute">
                <span
                    class="course-item-btn addToWishlist"
                    data-course_id="15"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                    title="Add to Wishlist"
                >
                    <i data-feather="heart"></i>
                </span>
                <span
                    class="course-item-btn addToCart"
                    data-course_id="15"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                    title="Add to Cart"
                >
                    <i data-feather="shopping-bag"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title course-title">
                <a href="#ourse-details/apis-in-php-from-basic-to-a#">APIs in PHP: from Basic to Advanced</a>
            </h5>
            <p class="card-text instructor-name-certificate font-medium font-12">
                <a href="#sers/5/#">Darrell Edwards</a>
            </p>
            <div class="course-item-bottom">
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                    <span class="font-medium font-14 me-2">5.00</span>
                    <div class="star-ratings" style="width: 83.3125px;">
                        <div class="fill-ratings" style="width: 100%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(2)</span>
                </div>
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        Price:
                        <span class="color-hover">
                           ₹ 30.00 
                        </span>
                    </div>
                    <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                        <span class="color-para">
                            Cashback:
                        </span>
                        <span class="color-orange">
                       ₹     3 
                        </span>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
    <div class="course-img-wrap overflow-hidden">
        <a href="#ourse-details/mastering-data-structures-algorithms-using-#">
            <img src="uploads/course/1657177052-8IjvMdQbBh.jpg" alt="course" class="img-fluid">
        </a>
        <div class="course-item-hover-btns position-absolute">
            <span
                class="course-item-btn addToWishlist"
                data-course_id="30"
                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                title="Add to Wishlist"
            >
                <i data-feather="heart"></i>
            </span>
            <span
                class="course-item-btn addToCart"
                data-course_id="30"
                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                title="Add to Cart"
            >
                <i data-feather="shopping-bag"></i>
            </span>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title course-title">
            <a href="#ourse-details/mastering-data-structures-algorithms-using-#">Mastering Data Structures &amp; Algorithms u...</a>
        </h5>
        <p class="card-text instructor-name-certificate font-medium font-12">
            <a href="#sers/6/#">Jack Nicholson</a>
        </p>
        <div class="course-item-bottom">
            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                <span class="font-medium font-14 me-2">0.00</span>
                <div class="star-ratings" style="width: 83.3125px;">
                    <div class="fill-ratings" style="width: 0%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                </div>
                <span class="rating-count font-14 ms-2">(2)</span>
            </div>
            <div class="instructor-bottom-item font-14 font-semi-bold">
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    Price:
                    <span class="color-hover">
                       ₹ 50.00 
                    </span>
                </div>
                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                    <span class="color-para">
                        Cashback:
                    </span>
                    <span class="color-orange">
                   ₹     5 
                    </span>
                </div>
            </span>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
<div class="course-img-wrap overflow-hidden">
    <a href="#ourse-details/competitive-programming-essentials-master-algorith#">
        <img src="uploads/course/1657177527-twxWzEQHTJ.jpg" alt="course" class="img-fluid">
    </a>
    <div class="course-item-hover-btns position-absolute">
        <span
            class="course-item-btn addToWishlist"
            data-course_id="31"
            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
            title="Add to Wishlist"
        >
            <i data-feather="heart"></i>
        </span>
        <span
            class="course-item-btn addToCart"
            data-course_id="31"
            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
            title="Add to Cart"
        >
            <i data-feather="shopping-bag"></i>
        </span>
    </div>
</div>
<div class="card-body">
    <h5 class="card-title course-title">
        <a href="#ourse-details/competitive-programming-essentials-master-algorith#">Competitive Programming Essentials, Mast...</a>
    </h5>
    <p class="card-text instructor-name-certificate font-medium font-12">
        <a href="#sers/6/#">Jack Nicholson</a>
    </p>
    <div class="course-item-bottom">
        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
            <span class="font-medium font-14 me-2">0.00</span>
            <div class="star-ratings" style="width: 83.3125px;">
                <div class="fill-ratings" style="width: 0%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
            </div>
            <span class="rating-count font-14 ms-2">(2)</span>
        </div>
        <div class="instructor-bottom-item font-14 font-semi-bold">
            <div class="instructor-bottom-item font-14 font-semi-bold">
                Price:
                <span class="color-hover">
                   ₹ 50.00 
                </span>
            </div>
            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                <span class="color-para">
                    Cashback:
                </span>
                <span class="color-orange">
               ₹     5 
                </span>
            </div>
        </span>
    </div>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
<div class="course-img-wrap overflow-hidden">
    <a href="#ourse-details/mern-stack-doctor-appointment-book#">
        <img src="uploads/course/1657177707-uKF8xDEzRj.jpg" alt="course" class="img-fluid">
    </a>
    <div class="course-item-hover-btns position-absolute">
        <span
            class="course-item-btn addToWishlist"
            data-course_id="32"
            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
            title="Add to Wishlist"
        >
            <i data-feather="heart"></i>
        </span>
        <span
            class="course-item-btn addToCart"
            data-course_id="32"
            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
            title="Add to Cart"
        >
            <i data-feather="shopping-bag"></i>
        </span>
    </div>
</div>
<div class="card-body">
    <h5 class="card-title course-title">
        <a href="#ourse-details/mern-stack-doctor-appointment-book#">MERN Stack Doctor Appointment Booking Ap...</a>
    </h5>
    <p class="card-text instructor-name-certificate font-medium font-12">
        <a href="#sers/5/#">Darrell Edwards</a>
    </p>
    <div class="course-item-bottom">
        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
            <span class="font-medium font-14 me-2">0.00</span>
            <div class="star-ratings" style="width: 83.3125px;">
                <div class="fill-ratings" style="width: 0%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
            </div>
            <span class="rating-count font-14 ms-2">(2)</span>
        </div>
        <div class="instructor-bottom-item font-14 font-semi-bold">
            <div class="instructor-bottom-item font-14 font-semi-bold">
                Price:
                <span class="color-hover">
                   ₹ 45.00 
                </span>
            </div>
            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                <span class="color-para">
                    Cashback:
                </span>
                <span class="color-orange">
                 ₹   4.5 
                </span>
            </div>
        </span>
    </div>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
<div class="card course-item  border-0 radius-3 bg-white">
<div class="course-img-wrap overflow-hidden">
    <a href="#ourse-details/The-complete-Scorm-demo-course-web-design-deve#">
        <img src="uploads/course/1669902683-mafaIoaLC9.jpg" alt="course" class="img-fluid">
    </a>
    <div class="course-item-hover-btns position-absolute">
        <span
            class="course-item-btn addToWishlist"
            data-course_id="35"
            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
            title="Add to Wishlist"
        >
            <i data-feather="heart"></i>
        </span>
        <span
            class="course-item-btn addToCart"
            data-course_id="35"
            data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
            title="Add to Cart"
        >
            <i data-feather="shopping-bag"></i>
        </span>
    </div>
</div>
<div class="card-body">
    <h5 class="card-title course-title">
        <a href="#ourse-details/The-complete-Scorm-demo-course-web-design-deve#">The complete Scorm demo course - web des...</a>
    </h5>
    <p class="card-text instructor-name-certificate font-medium font-12">
        <a href="#sers/60/#">Benjamin Lucas</a>
    </p>
    <div class="course-item-bottom">
        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
            <span class="font-medium font-14 me-2">5.00</span>
            <div class="star-ratings" style="width: 83.3125px;">
                <div class="fill-ratings" style="width: 100%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
            </div>
            <span class="rating-count font-14 ms-2">(2)</span>
        </div>
        <div class="instructor-bottom-item font-14 font-semi-bold">
            <div class="instructor-bottom-item font-14 font-semi-bold">
                Price:
                <span class="color-hover">
                    ₹100.00 
                </span>
                <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                    ₹120.00 
                </span>
            </div>
            <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                <span class="color-para">
                    Cashback:
                </span>
                <span class="color-orange">
                ₹    10 
                </span>
            </div>
        </span>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="bg-light courses-area courses-bundels-area section-b-85-space section-t-space">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
            <div class="section-title section-title-left d-flex align-items-start">
                <div class="section-heading-img">
                    <img class="w-60px" src="uploads/setting/1692793231-v7cAgIs6ct.png" alt="Product">
                </div>
                <div>
                    <h3 class="section-heading">Extensive Product Variety
                        <span class="color-deep-orange font-18">(Addon)</span>
                    </h3>
                    <p class="section-sub-heading">Diverse Range of Available Products</p>
                </div>
            </div>
            <a href="#rodu#" class="theme-btn theme-button2 theme-button3">View All
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-arrow-right"
                >
                    <line
                        x1="5"
                        y1="12"
                        x2="19"
                        y2="12"
                    ></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="tab-content" id="myTabContent1">
    <div
        class="tab-pane fade show active"
        id="React"
        role="tabpanel"
        aria-labelledby="React-tab"
    >
        <div class="course-slider-items owl-carousel owl-theme">
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692796882-O6KTq7brqd.jpg" alt="Don Quixote">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/don-#">Don Quixote</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹230.00 
                        </span>
                        <span class="new-price">
                            ₹225.40 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="1"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692796203-zTgulZ3IKb.png" alt="Harry Potter and the Sorcerer&#039;s">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/harry-potter-and-the-sorcer#">Harry Potter and the Sorcerer&#039;s</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹300.00 
                        </span>
                        <span class="new-price">
                            ₹291.00 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="2"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692796640-VFuPOP5vAY.png" alt="Unveiling Don Quixote&#039;s Odyssey">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/-unveiling-don-quixote%27s-#">Unveiling Don Quixote&#039;s Odyssey</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹580.00 
                        </span>
                        <span class="new-price">
                            ₹551.00 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="3"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692798716-gyQlTk1heB.png" alt="Classic Cotton Crewneck T-Shirt">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/classic-cotton-crewneck-#">Classic Cotton Crewneck T-Shirt</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹999.00 
                        </span>
                        <span class="new-price">
                            ₹799.20 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="5"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692798971-N6RWYFWV77.jpg" alt="Chronicles of the Enchanted Realm">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/chronicles-of-the-enchante#">Chronicles of the Enchanted Realm</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹499.00 
                        </span>
                        <span class="new-price">
                            ₹439.12 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="6"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692799288-6ZRRA7fUcX.jpg" alt="Exploring the Depths of Human Consciousness">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/exploring-the-depths-of-human-consci#">Exploring the Depths of Human Consciousness</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹699.00 
                        </span>
                        <span class="new-price">
                            ₹636.09 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="7"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692799569-xTlJ4oJCxJ.jpg" alt="Tales from Beyond the Veil">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/tales-from-beyond-t#">Tales from Beyond the Veil</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹799.00 
                        </span>
                        <span class="new-price">
                            ₹631.21 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="8"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="single-product-list bg-white">
                    <div class="product-img">
                        <img src="uploads/product/1692799924-irD4fdh5ch.jpg" alt="Chronicles of a World Unveiled">
                    </div>
                    <h5 class="product-title">
                        <a href="#roduct-view/chronicles-of-a-world-u#">Chronicles of a World Unveiled</a>
                    </h5>
                    <div class="rating-part">
                        <span>0.0</span>
                        <div class="rating-part-star">
                            <div class="course-rating search-instructor-rating w-100 mb-0 d-inline-flex align-items-center justify-content-center">
                                <div class="star-ratings">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="num-total">(0)</span>
                    </div>
                    <div class="pice-area">
                        <span>Price:</span>
                        <span class="old-price">
                            ₹699.00 
                        </span>
                        <span class="new-price">
                            ₹615.12 
                        </span>
                    </div>
                    <button
                        type="button"
                        class="theme-btn theme-button1 theme-button3 addToCart"
                        data-product_id="9"
                        data-quantity="1"
                        data-route="student/add-#"
                    >Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section class="courses-area courses-bundels-area section-t-space section-b-85-space bg-page">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
            <div class="section-title section-title-left d-flex align-items-start">
                <div class="section-heading-img">
                    <img src="uploads/setting/1662702531-GnteVs5zPc.png" alt="Course">
                </div>
                <div>
                    <h3 class="section-heading">Latest Bundle Courses</h3>
                    <p class="section-sub-heading">Choose From 5,000 Online Video Courses With New Additions</p>
                </div>
            </div>
            <a href="#" class="theme-btn theme-button2 theme-button3">View All
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-arrow-right"
                >
                    <line
                        x1="5"
                        y1="12"
                        x2="19"
                        y2="12"
                    ></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="tab-content" id="myTabContent1">
    <div
        class="tab-pane fade show active"
        id="React"
        role="tabpanel"
        aria-labelledby="React-tab"
    >
        <div class="course-slider-items owl-carousel owl-theme">
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <a href="#undle-details/Bundle-course-Web-development-specia#">
                            <img src="uploads/bundle/1669902808-9TIvfckTbU.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-bundle_id="5"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                            <span
                                class="course-item-btn addToCart"
                                data-bundle_id="5"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                title="Add to Cart"
                            >
                                <i data-feather="shopping-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#undle-details/Bundle-course-Web-development-specia#">Bundle course - Web development special...</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#sers/60/#">Benjamin Lucas</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="instructor-bottom-item font-14 font-semi-bold mb-15">Courses:
                                <span class="color-hover">2</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">Price:
                                <span class="color-hover">
                             ₹        200
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <a href="#undle-details/ultimate-renewable-energy-bundle-course-for-be#">
                            <img src="uploads/bundle/1662703371-UulOac2DpP.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-bundle_id="4"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                            <span
                                class="course-item-btn addToCart"
                                data-bundle_id="4"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                title="Add to Cart"
                            >
                                <i data-feather="shopping-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#undle-details/ultimate-renewable-energy-bundle-course-for-be#">Ultimate Renewable Energy Bundle Course...</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#sers/2/#">Johnny Depp</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="instructor-bottom-item font-14 font-semi-bold mb-15">Courses:
                                <span class="color-hover">3</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">Price:
                                <span class="color-hover">
                             ₹        199
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <a href="#undle-details/options-trading-basics-3-course#">
                            <img src="uploads/bundle/1662703180-xG4o7nZaOs.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-bundle_id="3"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                            <span
                                class="course-item-btn addToCart"
                                data-bundle_id="3"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                title="Add to Cart"
                            >
                                <i data-feather="shopping-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#undle-details/options-trading-basics-3-course#">Options Trading Basics (3-Course Bundle)</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#sers/2/#">Johnny Depp</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="instructor-bottom-item font-14 font-semi-bold mb-15">Courses:
                                <span class="color-hover">2</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">Price:
                                <span class="color-hover">
                             ₹        99
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <a href="#undle-details/bitcoin-ethereum-cryptocurrency-course-2-course#">
                            <img src="uploads/bundle/1662702790-NmtHUBxd9T.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-bundle_id="2"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                            <span
                                class="course-item-btn addToCart"
                                data-bundle_id="2"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                title="Add to Cart"
                            >
                                <i data-feather="shopping-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#undle-details/bitcoin-ethereum-cryptocurrency-course-2-course#">Bitcoin &amp; Ethereum CryptoCurrency Course...</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#sers/2/#">Johnny Depp</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="instructor-bottom-item font-14 font-semi-bold mb-15">Courses:
                                <span class="color-hover">2</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">Price:
                                <span class="color-hover">
                             ₹        70
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <a href="#undle-details/Matching-learning-with-python-jav#">
                            <img src="uploads/bundle/1662702126-5F3EyTbw6F.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-bundle_id="1"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                            <span
                                class="course-item-btn addToCart"
                                data-bundle_id="1"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-cart"
                                title="Add to Cart"
                            >
                                <i data-feather="shopping-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#undle-details/Matching-learning-with-python-jav#">Matching learning with python &amp; javascr...</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#sers/2/#">Johnny Depp</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="instructor-bottom-item font-14 font-semi-bold mb-15">Courses:
                                <span class="color-hover">5</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">Price:
                                <span class="color-hover">
                             ₹        50
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section class="courses-area section-t-space section-b-85-space">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
            <div class="section-title section-title-left d-flex align-items-start">
                <div class="section-heading-img">
                    <img src="uploads/setting/1685183964-mQ7TWVJGRt.png" alt="Course">
                </div>
                <div>
                    <h3 class="section-heading">Upcoming Course Section</h3>
                    <p class="section-sub-heading">Choose From 5,000 Online Video Courses With New Additions</p>
                </div>
            </div>
            <a href="#" class="theme-btn theme-button2 theme-button3">View All
                <i data-feather="arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="course-slider-items owl-carousel owl-theme">
            <div class="col-12 col-sm-4 col-lg-3 w-100">
                <div class="card course-item course-item-upcoming border-0 radius-3 bg-white">
                    <div class="course-img-wrap overflow-hidden">
                        <span class="course-tag badge radius-3 font-12 font-medium position-absolute bg-warning">Upcoming</span>
                        <a href="#ourse-details/PHP-for-Beginners-Become-a-PHP-Master-CMS-#">
                            <img src="uploads/course/1657091202-uW4GOdGMEz.jpg" alt="course" class="img-fluid">
                        </a>
                        <div class="course-item-hover-btns position-absolute">
                            <span
                                class="course-item-btn addToWishlist"
                                data-course_id="19"
                                data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                                title="Add to Wishlist"
                            >
                                <i data-feather="heart"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title course-title">
                            <a href="#ourse-details/PHP-for-Beginners-Become-a-PHP-Master-CMS-#">PHP for Beginners - Become a PHP Master...</a>
                        </h5>
                        <p class="card-text instructor-name-certificate font-medium font-12">
                            <a href="#sers/2/#">Johnny Depp</a>
                        </p>
                        <div class="course-item-bottom">
                            <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                                <span class="font-medium font-14 me-2">0.00</span>
                                <div class="star-ratings" style="width: 83.3125px;">
                                    <div class="fill-ratings" style="width: 0%">
                                        <span>★★★★★</span>
                                    </div>
                                    <div class="empty-ratings">
                                        <span>★★★★★</span>
                                    </div>
                                </div>
                                <span class="rating-count font-14 ms-2">(2)</span>
                            </div>
                            <div class="instructor-bottom-item font-14 font-semi-bold">
                                <div class="instructor-bottom-item font-14 font-semi-bold">
                                    Price:
                                    <span class="color-hover">
                                       ₹ 25.00 
                                    </span>
                                    <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                                       ₹ 30.00 
                                    </span>
                                </div>
                                <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                                    <span class="color-para">
                                        Cashback:
                                    </span>
                                    <span class="color-orange">
                                     ₹   2.5 
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 w-100">
            <div class="card course-item course-item-upcoming border-0 radius-3 bg-white">
                <div class="course-img-wrap overflow-hidden">
                    <span class="course-tag badge radius-3 font-12 font-medium position-absolute bg-warning">Upcoming</span>
                    <a href="#ourse-details/Microservices-with-Node-JS-an#">
                        <img src="uploads/course/1657091640-eByXJSy7Mo.jpg" alt="course" class="img-fluid">
                    </a>
                    <div class="course-item-hover-btns position-absolute">
                        <span
                            class="course-item-btn addToWishlist"
                            data-course_id="24"
                            data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                            title="Add to Wishlist"
                        >
                            <i data-feather="heart"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title course-title">
                        <a href="#ourse-details/Microservices-with-Node-JS-an#">Microservices with Node JS and React</a>
                    </h5>
                    <p class="card-text instructor-name-certificate font-medium font-12">
                        <a href="#sers/2/#">Johnny Depp</a>
                    </p>
                    <div class="course-item-bottom">
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                            <span class="font-medium font-14 me-2">5.00</span>
                            <div class="star-ratings" style="width: 83.3125px;">
                                <div class="fill-ratings" style="width: 100%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(2)</span>
                        </div>
                        <div class="instructor-bottom-item font-14 font-semi-bold">
                            <div class="instructor-bottom-item font-14 font-semi-bold">
                                Free
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-lg-3 w-100">
        <div class="card course-item course-item-upcoming border-0 radius-3 bg-white">
            <div class="course-img-wrap overflow-hidden">
                <span class="course-tag badge radius-3 font-12 font-medium position-absolute bg-warning">Upcoming</span>
                <a href="#ourse-details/Nodejs-Express-Mongo#">
                    <img src="uploads/course/1657176827-nA6qr1u48P.jpg" alt="course" class="img-fluid">
                </a>
                <div class="course-item-hover-btns position-absolute">
                    <span
                        class="course-item-btn addToWishlist"
                        data-course_id="29"
                        data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                        title="Add to Wishlist"
                    >
                        <i data-feather="heart"></i>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title course-title">
                    <a href="#ourse-details/Nodejs-Express-Mongo#">Node.js, Express, MongoDB &amp; More</a>
                </h5>
                <p class="card-text instructor-name-certificate font-medium font-12">
                    <a href="#sers/2/#">Johnny Depp</a>
                </p>
                <div class="course-item-bottom">
                    <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                        <span class="font-medium font-14 me-2">0.00</span>
                        <div class="star-ratings" style="width: 83.3125px;">
                            <div class="fill-ratings" style="width: 0%">
                                <span>★★★★★</span>
                            </div>
                            <div class="empty-ratings">
                                <span>★★★★★</span>
                            </div>
                        </div>
                        <span class="rating-count font-14 ms-2">(2)</span>
                    </div>
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        <div class="instructor-bottom-item font-14 font-semi-bold">
                            Price:
                            <span class="color-hover">
                               ₹ 50.00 
                            </span>
                            <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                               ₹ 55.00 
                            </span>
                        </div>
                        <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                            <span class="color-para">
                                Cashback:
                            </span>
                            <span class="color-orange">
                           ₹     5 
                            </span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-sm-4 col-lg-3 w-100">
    <div class="card course-item course-item-upcoming border-0 radius-3 bg-white">
        <div class="course-img-wrap overflow-hidden">
            <span class="course-tag badge radius-3 font-12 font-medium position-absolute bg-warning">Upcoming</span>
            <a href="#ourse-details/Enforcing-Pro#">
                <img src="uploads/course/1685185818-dHsXTYjK4E.jpg" alt="course" class="img-fluid">
            </a>
            <div class="course-item-hover-btns position-absolute">
                <span
                    class="course-item-btn addToWishlist"
                    data-course_id="33"
                    data-route="https://lmszai.zainikthemes.com/student/add-to-wishlist"
                    title="Add to Wishlist"
                >
                    <i data-feather="heart"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title course-title">
                <a href="#ourse-details/Enforcing-Pro#">Enforcing Procedures</a>
            </h5>
            <p class="card-text instructor-name-certificate font-medium font-12">
                <a href="#sers/2/#">Johnny Depp</a>
            </p>
            <div class="course-item-bottom">
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center">
                    <span class="font-medium font-14 me-2">0.00</span>
                    <div class="star-ratings" style="width: 83.3125px;">
                        <div class="fill-ratings" style="width: 0%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(2)</span>
                </div>
                <div class="instructor-bottom-item font-14 font-semi-bold">
                    <div class="instructor-bottom-item font-14 font-semi-bold">
                        Price:
                        <span class="color-hover">
                           ₹ 40.00 
                        </span>
                        <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                           ₹ 50.00 
                        </span>
                    </div>
                    <div class="bg-light-purple d-flex font-12 justify-content-between mt-2 p-1 rounded">
                        <span class="color-para">
                            Cashback:
                        </span>
                        <span class="color-orange">
                       ₹     4 
                        </span>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="courses-area courses-bundels-area one-to-one-consultation-area section-t-space section-b-85-space bg-page">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
            <div class="section-title section-title-left d-flex align-items-start">
                <div class="section-heading-img">
                    <img src="uploads_demo/about_us_general/team-members-heading-img.png" alt="Consultant">
                </div>
                <div>
                    <h3 class="section-heading">One to one consultation</h3>
                    <p class="section-sub-heading">Consult with your favorite consultant!</p>
                </div>
            </div>
            <a href="#onsultation-instruct#" class="theme-btn theme-button2 theme-button3">View All
                <i data-feather="arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="course-slider-items one-to-one-slider-items owl-carousel owl-theme">
            <div class="col-12 col-sm-4 col-lg-3 w-100 mt-0 mb-25">
                <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
                    <div class="search-instructor-img-wrap mb-15">
                        <a href="#sers/2/#">
                            <img src="uploads_demo/user/1.jpg" alt="instructor" class="fit-image rounded-circle">
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <h6 class="card-title">
                            <a href="#sers/2/#">Johnny Depp</a>
                        </h6>
                        <p class="card-text instructor-designation font-medium mb-15">
                            PHP Developer
                            <span class="mx-2">||</span>Author Level 3
                        </p>
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                            <span class="font-medium font-14 me-2">5.0</span>
                            <div class="star-ratings">
                                <div class="fill-ratings" style="width: 100%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(2)</span>
                        </div>
                        <div class="search-instructor-bottom-item font-14 font-medium">
                            <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                                <img
                                    src="frontend/assets/img/ranking_badges/membership_1.png"
                                    title="1 Years of Membership"
                                    alt="1 Years of Membership"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/rank_3.png"
                                    title="Author Level 3"
                                    alt="Author Level 3"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/course_1.png"
                                    title="0 to 5 Course"
                                    alt="0 to 5 Course"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/student_1.png"
                                    title="0 to 10 Student"
                                    alt="0 to 10 Student"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/sale_1.png"
                                    title="0 to 10 Sold"
                                    alt="0 to 10 Sold"
                                    class="fit-image rounded-circle"
                                >
                            </div>
                        </div>
                        <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                            <div class="search-instructor-new-price font-medium mx-1">
                                50/Hour
                            </div>
                            <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                        </div>
                        <div class="w-100">
                            <button
                                type="button"
                                data-type="3"
                                data-booking_instructor_user_id="2"
                                data-hourl₹y_fee=" 50/h"
                                data-hourly_rate="50"
                                data-get_off_days_route="https://lmszai.zainikthemes.com/get-off-days/2"
                                class="theme-btn theme-button1 theme-button3 w-100 bookSchedule"
                                data-bs-toggle="modal"
                                data-bs-target="#consultationBookingModal"
                            >
                                Book Schedule
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100 mt-0 mb-25">
                <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
                    <div class="search-instructor-img-wrap mb-15">
                        <a href="#sers/4/#">
                            <img src="uploads_demo/user/2.jpg" alt="instructor" class="fit-image rounded-circle">
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <h6 class="card-title">
                            <a href="#sers/4/#">James Bond</a>
                        </h6>
                        <p class="card-text instructor-designation font-medium mb-15">
                            Python Developer
                            <span class="mx-2">||</span>Author Level 2
                        </p>
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                            <span class="font-medium font-14 me-2">0.0</span>
                            <div class="star-ratings">
                                <div class="fill-ratings" style="width: 0%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(0)</span>
                        </div>
                        <div class="search-instructor-bottom-item font-14 font-medium">
                            <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                                <img
                                    src="frontend/assets/img/ranking_badges/membership_1.png"
                                    title="1 Years of Membership"
                                    alt="1 Years of Membership"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/rank_2.png"
                                    title="Author Level 2"
                                    alt="Author Level 2"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/course_1.png"
                                    title="0 to 5 Course"
                                    alt="0 to 5 Course"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/student_1.png"
                                    title="0 to 10 Student"
                                    alt="0 to 10 Student"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/sale_1.png"
                                    title="0 to 10 Sold"
                                    alt="0 to 10 Sold"
                                    class="fit-image rounded-circle"
                                >
                            </div>
                        </div>
                        <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                            <div class="search-instructor-new-price font-medium mx-1">
                                66/Hour
                            </div>
                            <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                        </div>
                        <div class="w-100">
                            <button
                                type="button"
                                data-type="3"
                                data-booking_instructor_user_id="4"
                                data-hourl₹y_fee=" 66/h"
                                data-hourly_rate="66"
                                data-get_off_days_route="https://lmszai.zainikthemes.com/get-off-days/4"
                                class="theme-btn theme-button1 theme-button3 w-100 bookSchedule"
                                data-bs-toggle="modal"
                                data-bs-target="#consultationBookingModal"
                            >
                                Book Schedule
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100 mt-0 mb-25">
                <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
                    <div class="search-instructor-img-wrap mb-15">
                        <a href="#sers/5/#">
                            <img src="uploads_demo/user/3.jpg" alt="instructor" class="fit-image rounded-circle">
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <h6 class="card-title">
                            <a href="#sers/5/#">Darrell Edwards</a>
                        </h6>
                        <p class="card-text instructor-designation font-medium mb-15">
                            JavaScript Developer
                            <span class="mx-2">||</span>Author Level 2
                        </p>
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                            <span class="font-medium font-14 me-2">5.0</span>
                            <div class="star-ratings">
                                <div class="fill-ratings" style="width: 100%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(1)</span>
                        </div>
                        <div class="search-instructor-bottom-item font-14 font-medium">
                            <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                                <img
                                    src="frontend/assets/img/ranking_badges/membership_1.png"
                                    title="1 Years of Membership"
                                    alt="1 Years of Membership"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/rank_2.png"
                                    title="Author Level 2"
                                    alt="Author Level 2"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/course_1.png"
                                    title="0 to 5 Course"
                                    alt="0 to 5 Course"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/student_1.png"
                                    title="0 to 10 Student"
                                    alt="0 to 10 Student"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/sale_1.png"
                                    title="0 to 10 Sold"
                                    alt="0 to 10 Sold"
                                    class="fit-image rounded-circle"
                                >
                            </div>
                        </div>
                        <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                            <div class="search-instructor-new-price font-medium mx-1">
                                80/Hour
                            </div>
                            <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                        </div>
                        <div class="w-100">
                            <button
                                type="button"
                                data-type="3"
                                data-booking_instructor_user_id="5"
                                data-hourl₹y_fee=" 80/h"
                                data-hourly_rate="80"
                                data-get_off_days_route="https://lmszai.zainikthemes.com/get-off-days/5"
                                class="theme-btn theme-button1 theme-button3 w-100 bookSchedule"
                                data-bs-toggle="modal"
                                data-bs-target="#consultationBookingModal"
                            >
                                Book Schedule
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100 mt-0 mb-25">
                <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
                    <div class="search-instructor-img-wrap mb-15">
                        <a href="#sers/6/#">
                            <img src="uploads_demo/user/4.jpg" alt="instructor" class="fit-image rounded-circle">
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <h6 class="card-title">
                            <a href="#sers/6/#">Jack Nicholson</a>
                        </h6>
                        <p class="card-text instructor-designation font-medium mb-15">
                            Nodejs Developer
                            <span class="mx-2">||</span>Author Level 3
                        </p>
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                            <span class="font-medium font-14 me-2">0.0</span>
                            <div class="star-ratings">
                                <div class="fill-ratings" style="width: 0%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(0)</span>
                        </div>
                        <div class="search-instructor-bottom-item font-14 font-medium">
                            <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                                <img
                                    src="frontend/assets/img/ranking_badges/membership_1.png"
                                    title="1 Years of Membership"
                                    alt="1 Years of Membership"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/rank_3.png"
                                    title="Author Level 3"
                                    alt="Author Level 3"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/course_1.png"
                                    title="0 to 5 Course"
                                    alt="0 to 5 Course"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/student_1.png"
                                    title="0 to 10 Student"
                                    alt="0 to 10 Student"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/sale_1.png"
                                    title="0 to 10 Sold"
                                    alt="0 to 10 Sold"
                                    class="fit-image rounded-circle"
                                >
                            </div>
                        </div>
                        <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                            <div class="search-instructor-new-price font-medium mx-1">
                                99/Hour
                            </div>
                            <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                        </div>
                        <div class="w-100">
                            <button
                                type="button"
                                data-type="3"
                                data-booking_instructor_user_id="6"
                                data-hourl₹y_fee=" 99/h"
                                data-hourly_rate="99"
                                data-get_off_days_route="https://lmszai.zainikthemes.com/get-off-days/6"
                                class="theme-btn theme-button1 theme-button3 w-100 bookSchedule"
                                data-bs-toggle="modal"
                                data-bs-target="#consultationBookingModal"
                            >
                                Book Schedule
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 w-100 mt-0 mb-25">
                <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
                    <span class="instructor-price-cutoff badge radius-3 font-12 font-medium position-absolute bg-orange">
                        40%
off
                    </span>
                    <div class="search-instructor-img-wrap mb-15">
                        <a href="#sers/60/#">
                            <img src="uploads/user/1669903389-ARXS2mtKaM.jpg" alt="instructor" class="fit-image rounded-circle">
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <h6 class="card-title">
                            <a href="#sers/60/#">Benjamin Lucas</a>
                        </h6>
                        <p class="card-text instructor-designation font-medium mb-15">
                            Organization Owner
                            <span class="mx-2">||</span>Author Level 1
                        </p>
                        <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                            <span class="font-medium font-14 me-2">5.0</span>
                            <div class="star-ratings">
                                <div class="fill-ratings" style="width: 100%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="rating-count font-14 ms-2">(1)</span>
                        </div>
                        <div class="search-instructor-bottom-item font-14 font-medium">
                            <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                                <img
                                    src="frontend/assets/img/ranking_badges/membership_1.png"
                                    title="1 Years of Membership"
                                    alt="1 Years of Membership"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/rank_1.png"
                                    title="Author Level 1"
                                    alt="Author Level 1"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/course_1.png"
                                    title="0 to 5 Course"
                                    alt="0 to 5 Course"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/student_1.png"
                                    title="0 to 10 Student"
                                    alt="0 to 10 Student"
                                    class="fit-image rounded-circle"
                                >
                                <img
                                    src="frontend/assets/img/ranking_badges/sale_1.png"
                                    title="0 to 10 Sold"
                                    alt="0 to 10 Sold"
                                    class="fit-image rounded-circle"
                                >
                            </div>
                        </div>
                        <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                            <div class="search-instructor-new-price font-medium mx-1">
                                3/Hour
                            </div>
                            <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1">
                                5.00
                            </div>
                        </div>
                        <div class="w-100">
                            <button
                                type="button"
                                data-type="3"
                                data-booking_instructor_user_id="60"
                                data-hourl₹y_fee=" 3/h"
                                data-hourly_rate="3"
                                data-get_off_days_route="https://lmszai.zainikthemes.com/get-off-days/60"
                                class="theme-btn theme-button1 theme-button3 w-100 bookSchedule"
                                data-bs-toggle="modal"
                                data-bs-target="#consultationBookingModal"
                            >
                                Book Schedule
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<section class="top-instructor-area section-t-space bg-white">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
            <div class="section-title section-title-left d-flex align-items-start">
                <div class="section-heading-img">
                    <img src="uploads_demo/setting/top-instructor-heading-img.png" alt="Our categories">
                </div>
                <div>
                    <h3 class="section-heading">Top Rated Courses From Our Top Instructor.</h3>
                    <p class="section-sub-heading">CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS</p>
                </div>
            </div>
            <a href="#ns#" class="theme-btn theme-button2 theme-button3">View All Instructor
                <i data-feather="arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="row top-instructor-content-wrap">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0 mb-25">
        <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
            <div class="search-instructor-img-wrap mb-15">
                <a href="#sers/2/#">
                    <img src="uploads_demo/user/1.jpg" alt="instructor" class="fit-image rounded-circle">
                </a>
            </div>
            <div class="card-body p-0">
                <h6 class="card-title">
                    <a href="#sers/2/#">Johnny Depp</a>
                </h6>
                <p class="card-text instructor-designation font-medium mb-15">
                    PHP Developer
                    <span class="mx-2">||</span>Author Level 3
                </p>
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                    <span class="font-medium font-14 me-2">5.0</span>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 100%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(2)</span>
                </div>
                <div class="search-instructor-bottom-item font-14 font-medium">
                    <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                        <img
                            src="frontend/assets/img/ranking_badges/membership_1.png"
                            title="1 Years of Membership"
                            alt="1 Years of Membership"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/rank_3.png"
                            title="Author Level 3"
                            alt="Author Level 3"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/course_1.png"
                            title="0 to 5 Course"
                            alt="0 to 5 Course"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/student_1.png"
                            title="0 to 10 Student"
                            alt="0 to 10 Student"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/sale_1.png"
                            title="0 to 10 Sold"
                            alt="0 to 10 Sold"
                            class="fit-image rounded-circle"
                        >
                    </div>
                </div>
                <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                    <div class="search-instructor-new-price font-medium mx-1">
                        50/Hour
                    </div>
                    <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                </div>
                <div class="w-100">
                    <a href="#sers/2/#" class="green-theme-btn theme-button1 w-100">View Profile</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0 mb-25">
        <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
            <div class="search-instructor-img-wrap mb-15">
                <a href="#sers/4/#">
                    <img src="uploads_demo/user/2.jpg" alt="instructor" class="fit-image rounded-circle">
                </a>
            </div>
            <div class="card-body p-0">
                <h6 class="card-title">
                    <a href="#sers/4/#">James Bond</a>
                </h6>
                <p class="card-text instructor-designation font-medium mb-15">
                    Python Developer
                    <span class="mx-2">||</span>Author Level 2
                </p>
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                    <span class="font-medium font-14 me-2">0.0</span>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 0%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(0)</span>
                </div>
                <div class="search-instructor-bottom-item font-14 font-medium">
                    <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                        <img
                            src="frontend/assets/img/ranking_badges/membership_1.png"
                            title="1 Years of Membership"
                            alt="1 Years of Membership"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/rank_2.png"
                            title="Author Level 2"
                            alt="Author Level 2"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/course_1.png"
                            title="0 to 5 Course"
                            alt="0 to 5 Course"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/student_1.png"
                            title="0 to 10 Student"
                            alt="0 to 10 Student"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/sale_1.png"
                            title="0 to 10 Sold"
                            alt="0 to 10 Sold"
                            class="fit-image rounded-circle"
                        >
                    </div>
                </div>
                <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                    <div class="search-instructor-new-price font-medium mx-1">
                        66/Hour
                    </div>
                    <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                </div>
                <div class="w-100">
                    <a href="#sers/4/#" class="green-theme-btn theme-button1 w-100">View Profile</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0 mb-25">
        <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
            <div class="search-instructor-img-wrap mb-15">
                <a href="#sers/5/#">
                    <img src="uploads_demo/user/3.jpg" alt="instructor" class="fit-image rounded-circle">
                </a>
            </div>
            <div class="card-body p-0">
                <h6 class="card-title">
                    <a href="#sers/5/#">Darrell Edwards</a>
                </h6>
                <p class="card-text instructor-designation font-medium mb-15">
                    JavaScript Developer
                    <span class="mx-2">||</span>Author Level 2
                </p>
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                    <span class="font-medium font-14 me-2">5.0</span>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 100%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(1)</span>
                </div>
                <div class="search-instructor-bottom-item font-14 font-medium">
                    <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                        <img
                            src="frontend/assets/img/ranking_badges/membership_1.png"
                            title="1 Years of Membership"
                            alt="1 Years of Membership"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/rank_2.png"
                            title="Author Level 2"
                            alt="Author Level 2"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/course_1.png"
                            title="0 to 5 Course"
                            alt="0 to 5 Course"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/student_1.png"
                            title="0 to 10 Student"
                            alt="0 to 10 Student"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/sale_1.png"
                            title="0 to 10 Sold"
                            alt="0 to 10 Sold"
                            class="fit-image rounded-circle"
                        >
                    </div>
                </div>
                <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                    <div class="search-instructor-new-price font-medium mx-1">
                        80/Hour
                    </div>
                    <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                </div>
                <div class="w-100">
                    <a href="#sers/5/#" class="green-theme-btn theme-button1 w-100">View Profile</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0 mb-25">
        <div class="card instructor-item search-instructor-item position-relative text-center border-0 p-30 px-3">
            <div class="search-instructor-img-wrap mb-15">
                <a href="#sers/6/#">
                    <img src="uploads_demo/user/4.jpg" alt="instructor" class="fit-image rounded-circle">
                </a>
            </div>
            <div class="card-body p-0">
                <h6 class="card-title">
                    <a href="#sers/6/#">Jack Nicholson</a>
                </h6>
                <p class="card-text instructor-designation font-medium mb-15">
                    Nodejs Developer
                    <span class="mx-2">||</span>Author Level 3
                </p>
                <div class="course-rating search-instructor-rating w-100 mb-15 d-inline-flex align-items-center justify-content-center">
                    <span class="font-medium font-14 me-2">0.0</span>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 0%">
                            <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <span class="rating-count font-14 ms-2">(0)</span>
                </div>
                <div class="search-instructor-bottom-item font-14 font-medium">
                    <div class="search-instructor-award-img d-inline-flex flex-wrap justify-content-center">
                        <img
                            src="frontend/assets/img/ranking_badges/membership_1.png"
                            title="1 Years of Membership"
                            alt="1 Years of Membership"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/rank_3.png"
                            title="Author Level 3"
                            alt="Author Level 3"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/course_1.png"
                            title="0 to 5 Course"
                            alt="0 to 5 Course"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/student_1.png"
                            title="0 to 10 Student"
                            alt="0 to 10 Student"
                            class="fit-image rounded-circle"
                        >
                        <img
                            src="frontend/assets/img/ranking_badges/sale_1.png"
                            title="0 to 10 Sold"
                            alt="0 to 10 Sold"
                            class="fit-image rounded-circle"
                        >
                    </div>
                </div>
                <div class="search-instructor-price d-inline-flex align-items-center mb-15">
                    <div class="search-instructor-new-price font-medium mx-1">
                        99/Hour
                    </div>
                    <div class="search-instructor-old-price text-decoration-line-through color-gray font-13 font-medium mx-1"></div>
                </div>
                <div class="w-100">
                    <a href="#sers/6/#" class="green-theme-btn theme-button1 w-100">View Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<section class="customers-says-area gradient-bg p-0">
<div class="section-overlay section-t-space section-b-space">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-title text-center">
                <div class="section-heading-img">
                    <img src="uploads_demo/setting/customers-say-heading-img.png" alt="Our categories">
                </div>
                <h3 class="section-heading section-heading-light mx-auto">What Our Valuable Customers Say.</h3>
            </div>
        </div>
    </div>
    <div class="row testimonial-content-wrap">
        <div class="col-md-4">
            <div class="testimonial-item">
                <div class="testimonial-top-content d-flex align-items-center">
                    <div class="flex-shrink-0 quote-img-wrap">
                        <img src="frontend/assets/img/icons-svg/quote.svg" alt="quote">
                    </div>
                    <div class="flex-grow-1 ms-3 testimonial-content">
                        <h6 class="font-16">DANIEL JHON</h6>
                        <p class="font-13 font-medium">UI/UX DESIGNER</p>
                    </div>
                </div>
                <div class="testimonial-bottom-content">
                    <h6 class="text-white">Great instructor, great course</h6>
                    <p class="font-17">Wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot</p>
                    <ul class="rating-list d-flex align-items-center me-2">
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-item">
                <div class="testimonial-top-content d-flex align-items-center">
                    <div class="flex-shrink-0 quote-img-wrap">
                        <img src="frontend/assets/img/icons-svg/quote.svg" alt="quote">
                    </div>
                    <div class="flex-grow-1 ms-3 testimonial-content">
                        <h6 class="font-16">NORTH</h6>
                        <p class="font-13 font-medium">DEVELOPER</p>
                    </div>
                </div>
                <div class="testimonial-bottom-content">
                    <h6 class="text-white">Awesome course &amp; good response</h6>
                    <p class="font-17">Noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence</p>
                    <ul class="rating-list d-flex align-items-center me-2">
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-half"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-item">
                <div class="testimonial-top-content d-flex align-items-center">
                    <div class="flex-shrink-0 quote-img-wrap">
                        <img src="frontend/assets/img/icons-svg/quote.svg" alt="quote">
                    </div>
                    <div class="flex-grow-1 ms-3 testimonial-content">
                        <h6 class="font-16">HIBRUPATH</h6>
                        <p class="font-13 font-medium">MARKETER</p>
                    </div>
                </div>
                <div class="testimonial-bottom-content">
                    <h6 class="text-white">Fantastic course</h6>
                    <p class="font-17">Noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence</p>
                    <ul class="rating-list d-flex align-items-center me-2">
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                        <li class="star-full">
                            <span class="iconify" data-icon="bi:star-fill"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section class="faq-area home-page-faq-area section-t-space">
<div class="container">
<div class="faq-area-shape"></div>
<div class="row align-items-center">
    <div class="col-md-6 col-lg-6 col-xl-5">
        <div class="section-title">
            <h3 class="section-heading">Frequently Ask Questions.</h3>
            <p class="section-sub-heading">CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS</p>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_0">
                    <button
                        class="accordion-button font-medium font-18 "
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse_0"
                        aria-expanded="true"
                        aria-controls="collapse_0"
                    >
                        1. which I enjoy with my whole heart am alone feel?
                    </button>
                </h2>
                <div
                    id="collapse_0"
                    class="accordion-collapse collapse show"
                    aria-labelledby="heading_0"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a greater artist than now. When, while the lovely valley with vapour around me, and the meridian.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_1">
                    <button
                        class="accordion-button font-medium font-18 collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse_1"
                        aria-expanded="false"
                        aria-controls="collapse_1"
                    >
                        2. which I enjoy with my whole heart am alone feel?
                    </button>
                </h2>
                <div
                    id="collapse_1"
                    class="accordion-collapse collapse "
                    aria-labelledby="heading_1"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a greater artist than now. When, while the lovely valley with vapour around me, and the meridian.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_2">
                    <button
                        class="accordion-button font-medium font-18 collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse_2"
                        aria-expanded="false"
                        aria-controls="collapse_2"
                    >
                        3. which I enjoy with my whole heart am alone feel?
                    </button>
                </h2>
                <div
                    id="collapse_2"
                    class="accordion-collapse collapse "
                    aria-labelledby="heading_2"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a greater artist than now. When, while the lovely valley with vapour around me, and the meridian.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_3">
                    <button
                        class="accordion-button font-medium font-18 collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse_3"
                        aria-expanded="false"
                        aria-controls="collapse_3"
                    >
                        4. Are certificates provided upon course completion on LMSZAI?
                    </button>
                </h2>
                <div
                    id="collapse_3"
                    class="accordion-collapse collapse "
                    aria-labelledby="heading_3"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        Upon course completion, LMSZAI provides certificates as tangible proof of your achievement, showcasing your expertise and dedication to continuous learning and skill development.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_4">
                    <button
                        class="accordion-button font-medium font-18 collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse_4"
                        aria-expanded="false"
                        aria-controls="collapse_4"
                    >
                        5. How can I enroll in a course on LMSZAI?
                    </button>
                </h2>
                <div
                    id="collapse_4"
                    class="accordion-collapse collapse "
                    aria-labelledby="heading_4"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        To enroll in a course on LMSZAI, log in, browse courses, select one, and click &quot;Enroll&quot; or &quot;Join Course.&quot;
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-7">
        <div class="faq-area-right position-relative">
            <img src="uploads_demo/setting/faq-img.jpg" alt="faq" class="img-fluid">
            <div class="still-no-luck radius-3 bg-white position-absolute">
                <h6>Still no luck?</h6>
                <p>Then feel free to
                    <a href="#on#" class="text-decoration-underline color-heading">Contact With Us</a>
                    ,
We are 24/7 for you
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section class="course-instructor-support-area bg-light section-t-space">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="section-title text-center">
            <h3 class="section-heading">Quality Course, Instructor And Support</h3>
            <p class="section-sub-heading">CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS</p>
        </div>
    </div>
</div>
<div class="row course-instructor-support-wrap">
    <div class="col-md-4">
        <div class="instructor-support-item bg-white radius-3 text-center">
            <div class="instructor-support-img-wrap">
                <img src="uploads_demo/instructor_support/instructor-support-1.png" alt="support">
            </div>
            <h6>Courses</h6>
            <p>Single stroke at the present moment and yet I feel that was</p>
            <a href="#" class="theme-btn theme-button1 theme-button3">Popular Courses
                <i data-feather="arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="instructor-support-item bg-white radius-3 text-center">
            <div class="instructor-support-img-wrap">
                <img src="uploads_demo/instructor_support/instructor-support-2.png" alt="support">
            </div>
            <h6>Expert instructor</h6>
            <p>Single stroke at the present moment and yet I feel that was</p>
            <a href="#ll-ins#" class="theme-btn theme-button1 theme-button3">Explore Instructor
                <i data-feather="arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="instructor-support-item bg-white radius-3 text-center">
            <div class="instructor-support-img-wrap">
                <img src="uploads_demo/instructor_support/instructor-support-3.png" alt="support">
            </div>
            <h6>27/4 online support</h6>
            <p>Single stroke at the present moment and yet I feel that was</p>
            <a href="#upport-tic#" class="theme-btn theme-button1 theme-button3">Support Center
                <i data-feather="arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="row client-logo-area">
    <div class="col">
        <div class="client-logo-item text-center">
            <img src="uploads_demo/client-logo/1.png" alt="Ovita">
        </div>
    </div>
    <div class="col">
        <div class="client-logo-item text-center">
            <img src="uploads_demo/client-logo/2.png" alt="Vigon">
        </div>
    </div>
    <div class="col">
        <div class="client-logo-item text-center">
            <img src="uploads_demo/client-logo/3.png" alt="Betribe">
        </div>
    </div>
    <div class="col">
        <div class="client-logo-item text-center">
            <img src="uploads_demo/client-logo/4.png" alt="Parsit">
        </div>
    </div>
    <div class="col">
        <div class="client-logo-item text-center">
            <img src="uploads_demo/client-logo/5.png" alt="Karika">
        </div>
    </div>
</div>
</div>
</section>
<div
class="modal fade"
id="consultationBookingModal"
tabindex="-1"
aria-labelledby="consultationBookingModalLabel"
aria-hidden="true"
>
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="consultationBookingModalLabel">Booking Now</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
        ></button>
    </div>
    <div class="row booking-header-row consultation-select-date-hour">
        <div class="input-group flex-nowrap col-md-6 consultantion-calendar-box">
            <label class="col-md-5 col-form-label font-17 font-semi-bold color-heading">Select Date:</label>
            <div class="book-schedule-calendar-wrap position-relative appendDatePicker"></div>
        </div>
        <div class="input-group col-md-6 consultantion-hours-box">
            <label class="col-md-3 col-form-label font-17 font-semi-bold color-heading">Hours</label>
            <input
                type="text"
                class="form-control font-medium hourly_fee"
                disabled
                value="0"
            >
            <input type="hidden" class="form-control font-medium hourly_rate" value="0">
        </div>
        <input type="hidden" class="booking_instructor_user_id" value>
    </div>
    <div class="row booking-header-row">
        <div class="col-sm-6 col-md-4">
            <div class="input-group row">
                <label class="col-sm-4 col-md-6 col-form-label font-17 font-semi-bold color-heading">Type</label>
                <div class="col-sm-8 col-md-6 InPerson d-none">
                    <div class="time-slot-item">
                        <input
                            type="radio"
                            name="available_type"
                            class="btn-check"
                            value="1"
                            id="checkboxInperson"
                            autocomplete="off"
                        >
                        <label class="btn btn-outline-primary mb-0" for="checkboxInperson">In Person</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="input-group row">
                <div class="col Online d-none">
                    <div class="time-slot-item">
                        <input
                            type="radio"
                            name="available_type"
                            class="btn-check"
                            value="2"
                            id="checkboxOnline"
                            autocomplete="off"
                        >
                        <label class="btn btn-outline-primary mb-0" for="checkboxOnline">Online</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="appendDayAndTime"></div>
    <div class="modal-footer d-flex justify-content-between align-items-center">
        <button type="button" class="theme-btn theme-button1 default-hover-btn w-100 makePayment" data-route="student/add-to-cart-consu#">Make Payment</button>
    </div>
</div>
</div>
</div>
<input type="hidden" class="getInstructorBookingTimeRoute" value="get-instructor-bookin#">
<div
class="modal fade VideoTypeModal"
id="newVideoPlayerModal"
tabindex="-1"
aria-labelledby="newVideoPlayerModal"
aria-hidden="true"
>
<div class="modal-header border-bottom-0">
<button
    type="button"
    class="btn-close"
    data-bs-dismiss="modal"
    aria-label="Close"
>
    <span class="iconify" data-icon="akar-icons:cross"></span>
</button>
</div>
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-body">
        <div class="video-player-area">
            <video
                id="player"
                playsinline
                controls
                data-poster="https://lmszai.zainikthemes.com/uploads_demo/setting/video-poster.jpg"
                controlsList="nodownload"
            >
                <source src="uploads_demo/setting/test.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>
</div>
</div> --}}
@endsection