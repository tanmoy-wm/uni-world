@extends('layouts.fe-guest')
@section('content')
    <!-- Header Slider -->
    <section class="header-slider-bg">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-md-block">
                        <div class="carousel-slider-box">
                            <div class="carousel-slider-content">
                                <h1>Save Up To 30% on Exams</h1>
                                <p>Get TOEFL, PTE and GRE vouchers at amazing prices!</p>
                                <div class="carousel-slider-btn">
                                    <a class="carousel-slider-btn-bg" href="javascript:;">Buy Vouchers</a>
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('assets/frontend/assets/images/save-exams-banner.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-md-block">
                        <div class="carousel-slider-box">
                            <div class="carousel-slider-content">
                                <h1>Save Up To 30% on Exams</h1>
                                <p>Get TOEFL, PTE and GRE vouchers at amazing prices!</p>
                                <div class="carousel-slider-btn">
                                    <a class="carousel-slider-btn-bg" href="javascript:;">Buy Vouchers</a>
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('assets/frontend/assets/images/save-exams-banner.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-md-block">
                        <div class="carousel-slider-box">
                            <div class="carousel-slider-content">
                                <h1>Save Up To 30% on Exams</h1>
                                <p>Get TOEFL, PTE and GRE vouchers at amazing prices!</p>
                                <div class="carousel-slider-btn">
                                    <a class="carousel-slider-btn-bg" href="javascript:;">Buy Vouchers</a>
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('assets/frontend/assets/images/save-exams-banner.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Slider End -->

    <!-- TOEFL & PTE Exams up to 20-30% off -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-english-test-title">
                        <h2>We Help Students Get Admitted Into the Best International Educational Institutions</h2>
                        <h6>We want to help you help more students.</h6>
                        <p>Thanks to our partnerships with ETS & Pearson, you can offer students great discounts on TOEFL or
                            PTE exams.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-students-box sub-how-work-pb">
                        <img src="{{ asset('assets/frontend/assets/images/01-help-students.png') }}" alt="" />
                        <h5>Choose</h5>
                        <p>Pick your country to start shopping</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-students-box sub-how-work-pb">
                        <img src="{{ asset('assets/frontend/assets/images/02-help-students.png') }}" alt="" />
                        <h5>Shop</h5>
                        <p>Add vouchers to your cart</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-students-box sub-how-work-pb">
                        <img src="{{ asset('assets/frontend/assets/images/03-help-students.png') }}" alt="" />
                        <h5>Save</h5>
                        <p>Checkout and start saving</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- TOEFL & PTE Exams up to 20-30% off End -->

    <!-- How We Help -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="sub-how-we-help-main">
                    <div class="col-lg-6">
                        <div class="sub-how-img-help">
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"><img
                                    src="{{ asset('assets/frontend/assets/images/how-we-help.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-how-we-help-content sub-english-exm-title">
                            <h3>How to Save with ApplyBoard</h3>
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal">Play</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- How We Help End -->

    <!-- How to Get Started -->
    <section class="sub-best-programs-main">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>This program is currently only available to international students from:</h2>
                        <p>Bulk purchasing is currently only available to ApplyBoard Recruitment Partners. If you’re not
                            already an ApplyBoard RP, click here.</p>
                        <p>Get started by choosing your country:</p>
                    </div>
                </div>

                <div class="col-lg-12">

                    <div class="sub-currnt-inter-std-main">
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/brazil.png') }}"
                                    alt="">
                            </div>
                            <h6>Brazil</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/colombia.png') }}"
                                    alt="">
                            </div>
                            <h6>Colombia</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/costa-rica.png') }}"
                                    alt="">
                            </div>
                            <h6>Costa Rica</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/india.png') }}"
                                    alt="">
                            </div>
                            <h6>India</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/peru.png') }}"
                                    alt="">
                            </div>
                            <h6>Peru</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/brazil.png') }}"
                                    alt="">
                            </div>
                            <h6>Brazil</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/colombia.png') }}"
                                    alt="">
                            </div>
                            <h6>Colombia</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/costa-rica.png') }}"
                                    alt="">
                            </div>
                            <h6>Costa Rica</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/india.png') }}"
                                    alt="">
                            </div>
                            <h6>India</h6>
                        </div>
                        <div class="sub-currnt-inter-flag">
                            <div class="sub-currnt-img-flag">
                                <img src="{{ asset('assets/frontend/assets/images/international-students-flag/peru.png') }}"
                                    alt="">
                            </div>
                            <h6>Peru</h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- How to Get Started End -->

    <!-- Offer TOEFL -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-blog-pt-pb">
                        <h2>Offer TOEFL® Prep at a Discount!</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/blog-01.jpg') }}" alt="" />
                        </div>
                        <div class="sub-content-universities sub-content-univer-price">
                            <h3><a href="javascript:;">Official TOEFL Ibt® Guide: 6Th Edition Digital</a></h3>
                            <p>Rs. 1,700.00 <span class="old-price">Rs. 1,700.00</span></p>
                            <a class="sub-content-univer-price-btn" href="javascript:;">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/blog-01.jpg') }}" alt="" />
                        </div>
                        <div class="sub-content-universities sub-content-univer-price">
                            <h3><a href="javascript:;">Decoding English Language Proficiency Test Scores: TOEFL Ibt</a>
                            </h3>
                            <p>Rs. 1,700.00 <span class="old-price">Rs. 1,700.00</span></p>
                            <a class="sub-content-univer-price-btn" href="javascript:;">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/blog-01.jpg') }}" alt="" />
                        </div>
                        <div class="sub-content-universities sub-content-univer-price">
                            <h3><a href="javascript:;">Decoding English Language Proficiency Test Scores: TOEFL Ibt</a>
                            </h3>
                            <p>Rs. 1,700.00 <span class="old-price">Rs. 1,700.00</span></p>
                            <a class="sub-content-univer-price-btn" href="javascript:;">Quick View</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Offer TOEFL End -->

    <!-- Our Story -->
    <section class="sub-best-programs-main">
        <div class="container">
            <div class="row">

                <div class="sub-best-programs-box">
                    <div class="col-lg-6">
                        <div class="sub-best-img-programs sub-save-stov-mt-mb">
                            <img src="{{ asset('assets/frontend/assets/images/best-programs-and-schools.png') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-best-programs-content">
                            <h2>Our Story</h2>
                            <p class="pb-0">Applyboard Is Full Of Ex-International Students. We Know How Hard The Journey
                                Is.</p>
                            <p class="pb-0">Our Mission Is To Improve Access To Education. If Offering Discounted English
                                Exams Helps Your Students Study Abroad, That’s What We’ll Do!</p>
                            <p>We Know From Our Own Experience That English Exams And The Test Prep Come With Anxiety. Our
                                Founder And CEO, Martin Basiri, Struggled With His Exam When He Was An International
                                Student.</p>
                            <a class="page-scroll" href="#scrollspyHeading1">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Story End -->

    <!-- Blogs -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-blog-pt-pb">
                        <h2>Want to Learn More About English Exams? Click here!</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/blog-01.jpg') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Decoding English Language Proficiency Test Scores: TOEFL Ibt</a>
                            </h3>
                            <p>5 Min Read</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/blog-01.jpg') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Decoding English Language Proficiency Test Scores: TOEFL Ibt</a>
                            </h3>
                            <p>5 Min Read</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/blog-01.jpg') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Decoding English Language Proficiency Test Scores: TOEFL Ibt</a>
                            </h3>
                            <p>5 Min Read</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blogs End -->

    <!-- Become a Recruitment Partner -->
    <section class="sub-best-programs-main">
        <div class="container">
            <div class="row">

                <div class="sub-best-programs-box">
                    <div class="col-lg-6">
                        <div class="sub-best-img-programs sub-save-img-mt">
                            <img src="{{ asset('assets/frontend/assets/images/recruitment-partner.png') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-best-programs-content sub-intern-wd-btn">
                            <h2>Become a Recruitment Partner and access amazing discounts!</h2>
                            <p class="pt-0">Bulk Purchasing Is Currently Only Available To Applyboard Rps. If You’d Like
                                To Access Our Bulk Discounts As Well As Help More Students Study In The US, UK, Canada And
                                Australia, Click Below To Register!</p>
                            <a class="page-scroll" href="javascript:;">Become An Applyboard RP</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Become a Recruitment Partner End -->

    <!-- FAQ -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>FAQ</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-plat-support-accordion sub-faq-accordion-inter">

                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#collapse5"
                                    aria-expanded="true">
                                    <span class="title">What is a voucher code?</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse5" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">When you purchase products on our store at promotional pricing,
                                        you’ll receive a unique voucher code that can be redeemed on our partners' websites
                                        for the products you are purchasing. You can think of it like a pre-payment to help
                                        you save money on exams and prep!</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse6"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="title">Is buying the voucher the same as buying an exam or prep
                                        book?</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse6" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">Yes! It’s the same as buying the product directly from the exam
                                        or prep provider, only you're getting a better price. You will then use the voucher
                                        to retrieve the product from our partnered providers.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse7"
                                    aria-expanded="false">
                                    <span class="title">Can these vouchers be redeemed for any test?</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse7" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">TOEFL vouchers can be redeemed for any TOEFL® iBT test,
                                        including the TOEFL® iBT Home Edition. PTE vouchers can be redeemed for any PTE
                                        Academic, PTE Academic Online, PTE Home or PTE UKVI exams.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse8"
                                    aria-expanded="false">
                                    <span class="title">Are these exams accepted by any educational institution?</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse8" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">The vouchers we offer are for exams that are accepted by
                                        thousands of institutions worldwide and many immigration streams. Before booking a
                                        test, you must verify that the educational institution accepts the exam, and which
                                        version of the test meets the eligibility requirements for the desired program or
                                        course.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse9"
                                    aria-expanded="false">
                                    <span class="title">Will you be offering other English language tests and prep
                                        products?</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse9" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">ApplyBoard is looking to offer other English language tests in
                                        the future. Sign up for updates below and we'll let you know when they become
                                        available if you sign up for our mailing list below!</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse10"
                                    aria-expanded="false">
                                    <span class="title">Why is ApplyBoard selling vouchers?</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse10" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">ApplyBoard is full of ex-international students. We know how
                                        hard the journey is. Martin Basiri, ApplyBoard's cofounder and CEO, struggled with
                                        his own exam when he was an international student. So now we are dedicated to making
                                        things easier for students.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- FAQ End -->

    <!-- Count Number -->
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="sub-count-number-bg sub-count-number-bg-pt-pb sub-save-numb-pt-pb">
                    <div class="sub-count-number-box">
                        <h6>300,000+</h6>
                        <p>Students Helped</p>
                    </div>
                    <div class="sub-count-number-box">
                        <h6>15,00+</h6>
                        <p>School Partnerships</p>
                    </div>
                    <div class="sub-count-number-box">
                        <h6>10,000+</h6>
                        <p>Recruitment Partners</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Count Number End -->

    <!-- Stay in the know! -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>Stay in the know!</h2>
                        <p>Hear From One Of Our Reps About Exclusive Offers And Deals. By Signing Up You Agree To Be
                            Contacted By An Applyboard Rep.</p>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-3">
                    <div class="row">

                        <div class="sub-access-guide-form">
                            <form>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email *">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="sub-access-guide-form-btn">
                                        <button type="submit" class="btn btn-primary">Access The Guide</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Stay in the know! End -->
@endsection
