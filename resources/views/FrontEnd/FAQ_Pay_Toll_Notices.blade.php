@extends('layouts.app2')
@section('content2')


    <!-- banner Start  -->
 <section>
<div class="faqBanner_rentel z-1">
  <div class="bannerallimage">
    <img src="./img/faq_pay_tal_banner.png"  alt=""class="imgbanner">
</div>
   <div class="container touchbanner_text">
    <h1>Pay Toll Notices</h1>
    <div>
        <span class=""><a href="/help_And_faq" class="px-2">HELP AND FAQs </a> |  <a href="" class="mx-2">Pay Toll Noticess</a></span>
    </div>
   </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 touchcontact">
            <h1>Pay a toll notices</h1>
             <p>Toll roads are roads that charge a fee, or toll, for vehicles to use them. Tolls are typically collected electronically, using a system that automatically charges the toll to the vehicle as it passes through a toll booth or other designated point on the road. Some toll roads also have manual toll booths where drivers can pay the toll in cash or with a credit card.
            </p>
            <p>Pay toll notices are sent to vehicle owners or drivers when a toll has not been paid for using a toll road. These notices are typically sent by the toll road operator or a collection agency that has been contracted to collect unpaid tolls on behalf of the toll road operator.</p>
                <h5>There are several reasons why a pay toll notice may be issued:</h5>
               <ol>
                <li class="ms-2">The vehicle owner or driver did not pay the toll at the time of travel: If you use a toll road and do not pay the toll, you may receive a pay toll notice.</li>
                <li class="ms-2">The vehicle's license plate was not recognized by the toll collection system: Some toll collection systems use cameras to capture images of license plates as vehicles pass through a toll booth. If the license plate is not recognized, the toll may not be charged, and a pay toll notice may be issued.</li>
                <li class="ms-2">The vehicle owner or driver did not have a prepaid account or transponder: Some toll roads require drivers to have a prepaid account or a transponder (a small electronic device that can be attached to the windscreen of the vehicle) in order to pay tolls automatically. If you do not have a prepaid account or transponder and do not pay the toll manually at the time of travel, you may receive a pay toll notice.</li>
                <li class="ms-2">The vehicle owner or driver did not respond to a previous pay toll notice: If you receive a pay toll notice and do not pay the toll and any additional fees or charges by the deadline specified in the notice, you may receive additional pay toll notices with increasing fees and penalties.</li>
               </ol>
               <p>Pay toll notices are issued to ensure that tolls are paid for the use of toll roads. It's important to pay tolls and any additional fees or charges by the deadline specified in the notice to avoid additional penalties or fines.</p>

            </div>
       <div class="col-md-6">
        <div class="fag_img1">
            <img src="./img/faq_pay_tall.png" alt="">
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
      <!--###########> Footer Star  <########-->
 @endsection