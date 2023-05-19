@extends('layouts.fe-guest')
@section('content')


<!-- Courses Details -->
<section class="sub-new-awolc-bg">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">

          <div class="sub-course-deta">
              <div class="sub-course-tt-box d-flex flex-wrap">
                  <div class="sub-course-unt">
                      <img src="{{asset('assets/frontend/assets/images/courses-details/Cambridge-Education.png')}}" alt="" />
                  </div>
                  <div class="sub-course-details-title">
                      <h6>University of Toronto</h6>
                      <div class="sub-course-country">
                          <img src="{{asset('assets/frontend/assets/images/country-flag/australia.svg')}}" alt="" /> Toronto, Ontario, CA
                      </div>
                  </div>
              </div>
          </div>

          <div class="sub-course-deta-title">
              <h2>Rotman School Of Management</h2>
          </div>

          <div class="sub-course-deta-slider">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{asset('assets/frontend/assets/images/courses-details/courses-details-banner.jpg')}}" alt="" />
                      </div>
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="{{asset('assets/frontend/assets/images/courses-details/courses-details-banner.jpg')}}" alt="" />
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{asset('assets/frontend/assets/images/courses-details/courses-details-banner.jpg')}}" alt="" />
                      </div>
                  </div>
              </div>
          </div>

          <div class="sub-course-deta-two-tab">

              <div class="sub-course-board-two-tab d-flex flex-wrap">
                <div class="sub-course-dtn-two">
                    <a href="javascript:;">Overview</a>
                    <a href="#Features">Features</a>
                    <a href="#Location">Location</a>
                    <a href="#Programs">Programs</a>
                </div>
              </div>

              <div class="row main-prog-mt">

                <div class="col-lg-8">
                  <div class="sub-prog-dtl">
                      <h5>Program Summary</h5>
                      <p>One of the world’s most innovative business schools, Rotman School of Management is located in Toronto and is part of the University of Toronto. Whether a student’s aim is to discover the latest in business thinking, accelerate their career or choose a new direction, this is the right place.</p>
                      <p>Rotman’s mission is to be a catalyst for positive change: rooted in transformative learning, informed by original insight and inspired by the biggest challenges in business and society. Rotman has distilled the shared beliefs and values down to four fundamental principles: diversity, excellence, integrity and respect.</p>
                      <h5>Why University Of Toronto - Rotman School Of Management</h5>
                      <p>One of the world’s most innovative business schools, Rotman School of Management is located in Toronto and is part of the University of Toronto. Whether a student’s aim is to discover the latest in business thinking, accelerate their career or choose a new direction, this is the right place.</p>
                      <p>Rotman’s mission is to be a catalyst for positive change: rooted in transformative learning, informed by original insight and inspired by the biggest challenges in business and society. Rotman has distilled the shared beliefs and values down to four fundamental principles: diversity, excellence, integrity and respect.</p>
                      <ul>
                          <li>Research: The school is a global centre of research and academic excellence at the heart of Canada’s multicultural commercial capital. Rotman is a catalyst for transformative learning, insights and public engagement, bringing together diverse views and initiatives around a defining purpose: to create value for business and society.</li>
                          <li>Community: Located at the heart of one of the world’s most dynamic and culturally diverse cities, the Rotman School is connected to the world through a network of business and research partners and globally-engaged alumni. We bring together the right minds, resources and support systems to ignite breakthrough solutions.</li>
                          <li>History: Established in 1827, the University of Toronto is recognized worldwide as Canada’s top research university, a reputation that will add value for students who aspire to careers with global dimensions. Rotman students are welcome everywhere on the beautiful and historic U of T campus. Explore the first-class athletic facilities, the fourth-largest research library in North America, and a range of dining choices.</li>
                          <li>Location: Due to the nature of the MBA Essentials Program being completed online, students will not be required to be on campus or in Toronto, Canada to complete their studies. </li>
                      </ul>
                  </div>

                  <div class="sub-location-mt sub-prog-dtl" id="Features">
                    <h5>Features</h5>

                    <div class="sub-features-box">

                      <div class="sub-plat-support-accordion sub-faq-accordion-inter">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
                                    <span class="title"><img src="assets/images/features-close.png" alt="" />  Work While Studying</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse1" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">RBC requires a minimum one-time deposit of $10,200CAD (maximum $10,300CAD). Note that wire transfer fees are deducted at source, so your transfer amount must take these fees into consideration. If the amount transferred differs from these amounts, it may be immediately refunded to the originating account, less fees.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
                                    <span class="title"><img src="assets/images/features-yes.png" alt="" /> Work While Studying</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse2" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">After receiving your account details from RBC, you may directly contact your assigned RBC advisor for all questions relating to your application. To help you receive a quick response, you must ensure that you include in the email all the information available on your application form such as SRF # and full name, as well as date of submission.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false">
                                    <span class="title"><img src="assets/images/features-close.png" alt="" /> Conditional Offer Letter</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse3" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">Absolutely! To receive a refund, you will need to provide proof of study permit rejection and submit a request to your RBC advisor. You will receive a refund your one-time deposit, minus the $200 CAD handling fee which is unfortunately non-refundable.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false">
                                    <span class="title"><img src="assets/images/features-yes.png" alt="" /> Accommodations</span>
                                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                </div>
                                <div id="collapse4" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">Absolutely! To receive a refund, you will need to provide proof of study permit rejection and submit a request to your RBC advisor. You will receive a refund your one-time deposit, minus the $200 CAD handling fee which is unfortunately non-refundable.</div>
                                </div>
                            </div>

                        </div>

                      </div>

                    </div>
                  </div>

                  <div class="sub-location-mt" id="Location">
                    <div class="sub-prog-dtl">
                      <h5>Location</h5>
                      <div class="sub-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70718518738!2d72.4396584431763!3d23.020497766443576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1675837851946!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>

                  <div id="Programs">
                    <div class="sub-similar-pr-title d-flex flex-wrap align-items-center sub-course-details-pb">
                      <div class="col-lg-6 d-flex flex-wrap align-items-center">
                        <h3>Programs</h3>
                        <span>5</span>
                      </div>
                      <div class="col-lg-3">
                        <div class="course-tab-relevance sub-relevance-opton-mt">
                          <div class="form-group">
                            <select class="form-control">
                              <option value="" selected="selected">- Relevance -</option>
                              <option value="School Rank">None</option>
                              <option value="Tuition (Low to High)">Tuition (Low to High)</option>
                              <option value="Tuition (High to Low)">Tuition (High to Low)</option>
                              <option value="Application Fee (Low to High)">Program Title (A-Z)</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="sub-relevance-opton-btn">
                          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Filters <img src="assets/images/filters-icon.png" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="collapse" id="collapseExample">
                      <div class="sub-course-filters-form">
                        <form class="d-flex flex-wrap align-items-center justify-content-center">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <select class="form-control">
                                <option value="" selected="selected">Program Level</option>
                                <option value="">None</option>
                                <option value="">Non-Credential</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <select class="form-control">
                                <option value="" selected="selected">Discipline</option>
                                <option value="">None</option>
                                <option value="">Business, Management & Economics</option>
                                <option value="">Management, Administration, General</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <select class="form-control">
                                <option value="" selected="selected">Intake</option>
                                <option value="">None</option>
                                <option value="">Nov 2023</option>
                                <option value="">Nov 2024</option>
                                <option value="">Jan 2025</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search Programs">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>

                      <div class="course-tab-content">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-lg-8 p-0">
                              <div class="sub-course-tt-box">
                                  <div class="sub-course-unt-title">
                                      <h6>1-Year Post-Secondary Certificate</h6>
                                      <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                      <p>Cheshire College South and West - Ellesmere Port</p>
                                  </div>
                                  <div class="sub-course-country">
                                      <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port, North West, United Kingdom
                                  </div>
                                  <div class="sub-course-appl-bg">
                                      <div class="d-flex flex-wrap">
                                          <div class="sub-tution-text">
                                              <h6>Tuition Fee</h6>
                                              <p>£14,250.00 GBP</p>
                                          </div>
                                          <div class="sub-tution-text">
                                              <h6>Application Fee</h6>
                                              <p>£0.00 GBP</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-4 p-0">
                                <div class="sub-course-btn-left">
                                    <a class="sub-start-btn-applica" href="javascript:;">Check Eligibility Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-tab-content">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-lg-8 p-0">
                              <div class="sub-course-tt-box">
                                  <div class="sub-course-unt-title">
                                      <h6>1-Year Post-Secondary Certificate</h6>
                                      <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                      <p>Cheshire College South and West - Ellesmere Port</p>
                                  </div>
                                  <div class="sub-course-country">
                                      <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port, North West, United Kingdom
                                  </div>
                                  <div class="sub-course-appl-bg">
                                      <div class="d-flex flex-wrap">
                                          <div class="sub-tution-text">
                                              <h6>Tuition Fee</h6>
                                              <p>£14,250.00 GBP</p>
                                          </div>
                                          <div class="sub-tution-text">
                                              <h6>Application Fee</h6>
                                              <p>£0.00 GBP</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-tab-content">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-lg-8 p-0">
                              <div class="sub-course-tt-box">
                                  <div class="sub-course-unt-title">
                                      <h6>1-Year Post-Secondary Certificate</h6>
                                      <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                      <p>Cheshire College South and West - Ellesmere Port</p>
                                  </div>
                                  <div class="sub-course-country">
                                      <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port, North West, United Kingdom
                                  </div>
                                  <div class="sub-course-appl-bg">
                                      <div class="d-flex flex-wrap">
                                          <div class="sub-tution-text">
                                              <h6>Tuition Fee</h6>
                                              <p>£14,250.00 GBP</p>
                                          </div>
                                          <div class="sub-tution-text">
                                              <h6>Application Fee</h6>
                                              <p>£0.00 GBP</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-4 p-0">
                                <div class="sub-course-btn-left">
                                    <a class="sub-start-btn-applica" href="javascript:;">Check Eligibility Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>

              </div>

              <div class="col-lg-4">

                  <div class="sub-prog-years-bg">

                      <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                          <div class="sub-course-unt">
                              <img src="assets/images/courses-details/certificate-file.png" alt="" />
                          </div>
                          <div class="sub-course-unt-title">
                              <h6>1-Year Post-Secondary Certificate</h6>
                              <div class="sub-course-country">
                                  Program Level
                              </div>
                          </div>
                      </div>
                      <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                          <div class="sub-course-unt">
                              <img src="assets/images/courses-details/calender.png" alt="" />
                          </div>
                          <div class="sub-course-unt-title">
                              <h6>2 year T-Level program including a work placement</h6>
                              <div class="sub-course-country">
                                  Program Length
                              </div>
                          </div>
                      </div>
                      <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                          <div class="sub-course-unt">
                              <img src="assets/images/courses-details/money.png" alt="" />
                          </div>
                          <div class="sub-course-unt-title">
                              <h6>£9,207.00 GBP / Year</h6>
                              <div class="sub-course-country">
                                  Cost of Living
                              </div>
                          </div>
                      </div>
                      <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                          <div class="sub-course-unt">
                              <img src="assets/images/courses-details/money-tuition.png" alt="" />
                          </div>
                          <div class="sub-course-unt-title">
                              <h6>£14,250.00 GBP / Year</h6>
                              <div class="sub-course-country">
                                  Tuition
                              </div>
                          </div>
                      </div>
                      <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                          <div class="sub-course-unt">
                              <img src="assets/images/courses-details/application-fee.png" alt="" />
                          </div>
                          <div class="sub-course-unt-title">
                              <h6>£0.00 GBP</h6>
                              <div class="sub-course-country">
                                  Application Fee
                              </div>
                          </div>
                      </div>

                  </div>

                  <div class="sub-prog-intake-bg">
                      <h5>Institution Details</h5>

                      <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                          <p>Founded</p>
                        </div>
                        <div>
                          <span>1827</span>
                        </div>
                      </div>
                      <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                          <p>School ID</p>
                        </div>
                        <div>
                          <span>2159</span>
                        </div>
                      </div>
                      <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                          <p>DLI number</p>
                        </div>
                        <div>
                          <span>O19332746152</span>
                        </div>
                      </div>
                      <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                          <p>Institution type</p>
                        </div>
                        <div>
                          <span>Public</span>
                        </div>
                      </div>
                  </div>

                  <div class="sub-prog-intake-bg">
                      <h5>Institution Details</h5>

                      <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                          <p>January - April</p>
                        </div>
                        <div>
                          <span>N/A</span>
                        </div>
                      </div>
                      <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                          <p>May - August</p>
                        </div>
                        <div>
                          <span>Under 15 days</span>
                        </div>
                      </div>
                      <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                          <p>September - December</p>
                        </div>
                        <div>
                          <span>N/A</span>
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
  <!-- Courses Details End -->
  @endsection
