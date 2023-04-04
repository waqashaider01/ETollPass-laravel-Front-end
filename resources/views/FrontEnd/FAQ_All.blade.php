@extends('layouts.app2')
@section('content2')



        <!-- banner Start  -->
        <section>
            <div class="faqBanner_rentel z-1">
                <div class="bannerallimage">
                    <img src="./img/faq_related_banner.png"  alt=""class="imgbanner">
                </div>
                <div class="container touchbanner_text">
                    <h1> See All FAQs</h1>
                    <div>
                        <span class=""><a href="" class="px-2">HELP AND FAQs
                            </a> | <a href="" class="mx-2"> Rental vehicles</a></span>
                    </div>
                </div>
            </div>

            <!-- Faq Start  -->
            <div class="container d-flex justify-content-center">
                <div class="accordion my-5 help_faqall "
                    id="accordionPanelsStayOpenExample">
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header"
                            id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne"
                                aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                              <h6>  What is a toll pass?</h6>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                               <p class="faqdetails"> A toll pass is a device or transponder that allows you to pay tolls electronically on toll roads in New Zealand. Instead of paying a toll in cash at a toll booth, you can drive through a designated lane and your toll will be automatically deducted from your toll pass account.
                            </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item my-2">
                        <h2 class="accordion-header"
                            id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                              <h6>  How do I get a toll pass in New Zealand?</h6>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                            <p class="faqdetails">    There are several toll pass providers in New Zealand, each with their own sign-up process. You can typically apply for a toll pass online or at a participating retailer. You will need to provide your personal and vehicle information and choose a payment method, such as credit card or direct debit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-3">
                        <h2 class="accordion-header"
                            id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                              <h6>  What types of toll passes are available in New Zealand?</h6>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <p class="faqdetails">There are several toll pass options available in New Zealand, including transponders that can be installed in your vehicle and mobile apps that allow you to pay tolls using your smartphone. Some toll pass providers also offer multi-use passes that can be used on multiple toll roads in different regions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item my-3">
                        <h2 class="accordion-header"
                            id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour">
                              <h6>  Are there any fees associated with using a toll pass in New Zealand?</h6>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                           <p class="faqdetails">There may be fees associated with using a toll pass in New Zealand, such as activation fees, monthly maintenance fees, and transaction fees. It is a good idea to check with the toll pass provider to understand any fees that may apply.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item my-3">
                        <h2 class="accordion-header"
                            id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFive"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive">
                              <h6> Can I use my toll pass on toll roads in other countries?</h6>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body">
                           <p class="faqdetails">It depends on the toll pass provider and the terms of your account. Some toll pass providers offer toll passes that can be used on toll roads in multiple countries, while others are only valid in a specific region. It is a good idea to check with the toll pass provider to understand which toll roads your pass is valid on.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Faq End  -->

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
