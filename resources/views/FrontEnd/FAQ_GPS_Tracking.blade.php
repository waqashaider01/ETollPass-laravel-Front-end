
@extends('layouts.app2')
@section('content2')
        <!-- banner Start  -->
        <section>
            <div class="faqBanner_rentel z-1">
                <div class="bannerallimage">
                    <img src="./img/faq_gpstracking_banner.png"  alt=""class="imgbanner">
                </div>
                <div class="container touchbanner_text">
                    <h1>GPS Tracking</h1>
                    <div>
                        <span class=""><a href="/help_And_faq" class="px-2">HELP AND FAQs
                            </a> | <a href="" class="mx-2"> GPS Tracking</a></span>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="row">
                    <div class="col-md-6 touchcontact">
                        <h1>How does it work?</h1>
<p>GPS, or Global Positioning System, is a satellite-based navigation system that can be used to track the location of a device or vehicle in real-time. GPS tracking is often used for fleet management, asset tracking, and personal tracking applications. In New Zealand, GPS tracking is a popular and widely used technology. It is commonly used by businesses to track the location and movements of their vehicles, such as delivery trucks or service vehicles. GPS tracking can also be used by individuals to track the location of their personal vehicles or to monitor the location and movements of loved ones, such as children or elderly relatives.</p>
<p>There are many GPS tracking service providers in New Zealand that offer a range of tracking solutions, including hardware devices that can be installed in vehicles and mobile apps that can be used to track the location of smartphones. Some GPS tracking providers offer additional features, such as real-time tracking, route optimization, and alerts for unauthorized movements.</p>
<p>GPS tracking is generally legal in New Zealand, but there are some privacy considerations to keep in mind. It is important to ensure that tracking is only used with the consent of the person being tracked, and that any tracking data is collected and used in a responsible manner. It is also a good idea to familiarize yourself with the terms and conditions of any GPS tracking service you use to understand how your tracking data will be used and protected.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="fag_img1">
                            <img src="./img/faq_gps_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

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
