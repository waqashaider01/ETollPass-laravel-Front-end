
@extends('layouts.app2')
@section('content2')
    <!-- banner Start  -->
 <section>
<div class="faqBanner_rentel z-1">
  <div class="bannerallimage">
    <img src="./img/faq_commercial_.png"  alt=""class="imgbanner">
</div>
   <div class="container touchbanner_text">
    <h1>Commercial Fleets</h1>
    <div>
        <span class=""><a href="" class="px-2">HELP AND FAQs </a> |  <a href="" class="mx-2">Commercial Fleets</a></span>
    </div>
   </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 touchcontact">
            <h1>Fleet size and composition</h1>
             <p>A commercial fleet is a group of vehicles that are owned or leased by a business and used for business purposes. Commercial fleets can include a wide range of vehicles, including cars, trucks, vans, buses, and specialized equipment such as construction vehicles or delivery vehicles.</p>
             <p>
                Commercial fleets are used by businesses for a variety of purposes, including transportation of goods, delivery of products or services, and transportation of employees. They are often used by businesses that need to transport large quantities of goods or equipment, or that require a large number of vehicles to support their operations.</p>

                <h5>There are several factors that businesses may consider when managing a commercial fleet, including:</h5>
               <ol>
                <li class="ms-2">Vehicle selection: Businesses may choose vehicles that are suitable for their needs, such as vehicles with a specific size, capacity, or fuel efficiency.</li>
                <li class="ms-2">Maintenance and repair: Businesses may need to regularly maintain and repair their fleet vehicles to ensure that they are safe and reliable.</li>
                <li class="ms-2">Fleet management: Businesses may use software or other tools to track and manage their fleet vehicles, including tracking location, fuel usage, and maintenance schedules.</li>
                <li class="ms-2">Insurance: Businesses may need to purchase insurance for their fleet vehicles to protect against potential losses or damages.</li>
               </ol>
               <p>By effectively managing their commercial fleet, businesses can minimize costs and maximize the efficiency and productivity of their operations.</p>

            </div>
       <div class="col-md-6">
        <div class="fag_img1">
            <img src="./img/faq_rental_vehicale.png" alt="">
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
