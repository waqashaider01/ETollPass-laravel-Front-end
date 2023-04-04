
@extends('layouts.app2')
@section('content2')



    <!-- banner Start  -->
 <section>
<div class="faqBanner_rentel z-1">

    <div class="bannerallimage">
        <img src="./img/faq_banner.png"  alt=""class="imgbanner">
    </div>
   <div class="container touchbanner_text">
    <h1>Help And FAQs</h1>
    <div>
        <span class=""><a href="" class="px-2">Home </a> |  <a href="/help_And_faq" class="mx-2">HELP AND FAQs</a></span>
    </div>
   </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 touchcontact">
            <h1>What is a toll road, and how does tolling work in New Zealand?</h1>
            <p>A toll road is a road that charges a fee, or toll, for vehicles to use it. Tolls are typically collected electronically, using a system that automatically charges the toll to the vehicle as it passes through a toll booth or other designated point on the road. Some toll roads also have manual toll booths where drivers can pay the toll in cash or with a credit card.</p>
             <p>
                In New Zealand, toll roads are not very common. However, there are a few toll roads in the country, including the Northern Gateway Toll Road near Auckland and the Tauranga Eastern Link Toll Road near Tauranga. Both of these toll roads use an electronic toll collection system called "Toll Road," which allows drivers to pay their tolls using a prepaid account, a credit or debit card, or a vehicle transponder.</p>
                <p>To use a toll road in New Zealand, drivers can either set up a prepaid account with the toll road operator or purchase a vehicle transponder, which is a small electronic device that can be attached to the windscreen of the vehicle. When a vehicle with a transponder passes through a toll booth, the toll is automatically charged to the prepaid account or the credit card associated with the transponder. Drivers can also pay their tolls online or by phone if they don't have a prepaid account or transponder.</p>
                <p>If you're planning to travel on a toll road in New Zealand, be sure to check the toll road operator's website for information on toll rates, payment options, and any other relevant details.</p>

        </div>
       <div class="col-md-6">
        <div class="fag_img1">
            <img src="./img/faq_img1.png" alt="">
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
