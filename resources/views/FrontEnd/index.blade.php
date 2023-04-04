@extends('layouts.app')

@section('content')

    <section>
    <div style="position: relative;">
            <!-- -----Home Page Carousal------ -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators home_page_carousal_buttons">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner home_page_carousal_content">
                    <div class="carousel-item active carousal_images">
                        <img src="images/carousal/image1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousal_images">
                        <img src="images/carousal/image2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousal_images">
                        <img src="images/carousal/image3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

            <!-- --------On Image Content Banner---------- -->
            <div class="container">
                <div class="image_content">
                    <h1>eTollPass</h1>
                    <p>The foundation of any great organization is rooted in service. <br>
                        It is the nurturing force that fuels all growth.</p>
                </div>
            </div>
    </div>

        <!-- ------Customer Notification Banner------ -->
        <div class="container-fluid m-0 p-0">
            <div class="customer_notification_banner">
                <div class="container">
                    <h4>Customer Notification</h4>
                    <p>eTollPass advises customers to be aware of scam SMSs. eTollPass only sends SMSs to customers who
                        have
                        opted in to SMS, and our SMSs do not contain any random links.</p>
                </div>
            </div>
        </div>

        <!-- -----------------Cards Banner------------------- -->
        <section class="humnacard">
            <div class="container">
                <div class="row gy-5 gx-5 ">
                    <div class="col-lg-4 col-md-6 col-12">
                      <a href="/traffic_travel_information">
                        <div class="traficcard shadow">
                            <div class="row gx-5" >
                                <div class="col-lg-6 col-md-6 col-6">
                                    <img src="img/Rectangle2.png">
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 textcol"style="padding-right: 2rem" >
                                    <p class="cardlinkPcolor">Trafic and Travel information </p>
                                </div>
                            </div>
                        </div>

                      </a>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                      <a href="/planning_investment">

                        <div class="traficcard shadow">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <img src="img/Rectangle 9.png">
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 textcol" >
                                    <p class="cardlinkPcolor">planning and investment </p>
                                </div>
                            </div>



                        </div>
                      </a>

                    </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="/vehicles">

                            <div class="traficcard shadow">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <img src="img/Rectangle 15.png">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6 textcol" >
                                        <p class="cardlinkPcolor">Vehicles  </p>
                                    </div>
                                </div>



                            </div>
                        </a>

                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                       <a href="/safety">
                        <div class="traficcard shadow">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <img src="img/Rectangle 17.png">
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 textcol" >
                                    <p  class="cardlinkPcolor">Safetly  </p>
                                </div>
                            </div>



                        </div>
                       </a>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                    <a href="/driver_licenses">
                        <div class="traficcard shadow">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <img src="img/Rectangle 11.png">
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 textcol" >
                                    <p class="cardlinkPcolor">Driver license  </p>
                                </div>
                            </div>



                        </div>
                    </a>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                      <a href="/road_rail">
                        <div class="traficcard shadow">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <img src="img/Rectangle 16.png">
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 textcol" >
                                    <p class="cardlinkPcolor">Road And Rail </p>
                                </div>
                            </div>
                        </div>
                      </a>

                    </div>
                </div>
            </div>
        </section>

        <!-- -----------------Product Cards Banner------------------- -->
        <section class="freeproducts  ">



            <div class="container my-3">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-12">
                        <h2>Choose some of our free products Available in our software</h2>

                    </div>
                    <div class="col-lg-5 col-md-0 col-0">

                    </div>
                </div>
             <div class="row">
                <div class="col-lg-4 col-md-6 my-3 ">
                    <div class="card   card2"  >
                       <a href="/eftpos"> <img src="img/Rectangle 8 (2).png" class="card-img-top1" alt="..."></a>
                        <div class="card-body card_body_banner">
                          <h5 class="card-title">Eftpos</h5>
                          <a href="/eftpos" class="realetd_faq_link">Read
                            More <i class="fa-solid
                                fa-arrow-right-long mx-2"></i></a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3 ">
                    <div class="card   card2"  >
                       <a href="/car_rent"> <img src="img/banner_rectangle_card.png " class="card-img-top1" alt="..."></a>
                        <div class="card-body card_body_banner">
                          <h5 class="card-title">Car Rental Platform</h5>
                          <a href="/car_rent" class="realetd_faq_link">Read
                            More <i class="fa-solid
                                fa-arrow-right-long mx-2"></i></a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3 ">
                    <div class="card   card2" style="width: 18rem;">
                     <a href="/apple_google">   <img src="img/Rectangle 8 (1).png" class="card-img-top1" alt="..."></a>
                        <div class="card-body card_body_banner">
                          <h5 class="card-title">Apple/Google Motorway Pass</h5>
                          <a href="/apple_google" class="realetd_faq_link">Read
                            More <i class="fa-solid
                                fa-arrow-right-long mx-2"></i></a>
                        </div>
                      </div>
                </div>

             </div>
            </div>


        </section>
        <!-- -----------------EV Charging Image Banner------------------- -->


        <div class="faqBanner_rentel faqBanner_rentelindexbanner">
            <div class="bannerallimage">
              <img src="./img/index2banner.png"  alt=""class="imgbanner bannerimgmain1">
          </div>
             <div class="container touchbanner_text home_sec_banner_text">
              <h1> EV Charging with eFleetPass Energy -
               </h1>
               <h1> How to get Free Charge at our locations.</h1>
              <div>
                <button type="button" class="btn btn-primary EV_button">Search Now</button>
              </div>
             </div>
          </div>


        <!-- -----------------EV Charging Banner Content------------------- -->



        <!-- -----------------FAQs Cards Banner------------------- -->
        <div class="container-fluid faq_realted_link">

            <div class="container py-5 faq_related">
                <h1>Related Links</h1>

                <div class="row">
                    <div class="col-md-4 my-3">
                        <div class="card card_reltaed">
                            <img class="card-img-top cardreltedimg"
                                src="./img/faq_related1.png" alt="Card image
                                cap">


                            <div class="card-body">
                                <h5 class="card-title card_related_titile">Rental
                                    Vehicles</h5>

                                <a href="/help_fAqs_rental" class="realetd_faq_link">Read
                                    More <i class="fa-solid
                                        fa-arrow-right-long mx-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-3">
                        <div class="card card_reltaed">
                            <img class="card-img-top cardreltedimg"
                                src="./img/faq_related2.png" alt="Card image
                                cap">
                            <div class="card-body">
                                <h5 class="card-title card_related_titile">Commercial
                                    Fleets</h5>

                                <a href="/faq_commercial" class="realetd_faq_link">Read
                                    More <i class="fa-solid
                                        fa-arrow-right-long mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="card card_reltaed">
                            <img class="card-img-top cardreltedimg"
                                src="./img/faq_related3.png" alt="Card image
                                cap">


                            <div class="card-body">
                                <h5 class="card-title card_related_titile">GPS
                                    Tracking</h5>

                                <a href="/faq_gps" class="realetd_faq_link">Read
                                    More <i class="fa-solid
                                        fa-arrow-right-long mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="card card_reltaed">
                            <img class="card-img-top cardreltedimg"
                                src="./img/faq_related4.png" alt="Card image
                                cap">
                            <div class="card-body">
                                <h5 class="card-title card_related_titile">Pay
                                    Toll Notices</h5>
                                <a href="/faq_pay_toll" class="realetd_faq_link">Read
                                    More <i class="fa-solid
                                        fa-arrow-right-long mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="card card_reltaed">
                            <img class="card-img-top cardreltedimg"
                                src="./img/faq_related1.png" alt="Card image
                                cap">
                            <div class="card-body">
                                <h5 class="card-title card_related_titile">See
                                    all FAQs</h5>
                                <a href="/fAQ_all" class="realetd_faq_link">Read
                                    More <i class="fa-solid
                                        fa-arrow-right-long mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection
