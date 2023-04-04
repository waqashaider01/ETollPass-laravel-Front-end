@extends('layouts.app2')
@section('content2')



    <!-- banner Start  -->
 <section>
<div class="faqBanner_rentel z-1">
  <div class="bannerallimage">
    <img src="./img/faq_related_banner.png"  alt=""class="imgbanner">
</div>
   <div class="container touchbanner_text">

    <h1>Rental Vehicles</h1>
    <div>
        <span class=""><a href="/help_And_faq" class="px-2">HELP AND FAQs </a> |  <a href="" class="mx-2"> Rental vehicles</a></span>
    </div>
   </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 touchcontact">
            <h1>Rental Vehicles in New Zealand</h1>
             <p>Rental vehicles are vehicles that are rented out to individuals or organizations for a specified period of time. There are many companies that offer rental vehicles, including car rental companies, truck rental companies, and recreational vehicle (RV) rental companies.
                Car rental companies offer a variety of vehicles for rent, including compact cars, sedans, SUVs, and vans. These vehicles can be rented by the day, week, or month, and are often used by travelers who need a car while on vacation or by individuals or businesses who need a temporary vehicle.</p>
                <p>Truck rental companies offer a range of trucks for rent, including pickup trucks, box trucks, and moving trucks. These vehicles are often used by individuals or businesses for one-time hauls or for moving purposes.
                    Recreational vehicle (RV) rental companies offer a variety of RVs for rent, including travel trailers, motorhomes, and campervans. These vehicles are often used by travelers who want to take extended road trips or by families who want to go camping.</p>

                    <p>To rent a vehicle, you'll typically need to be at least 21 years old (although some rental companies may have a higher minimum age requirement) and have a valid driver's license. You may also be required to provide a credit card for a security deposit. Be sure to read the rental agreement carefully before signing it, as it will outline the terms and conditions of the rental, including the rental period, the mileage allowance, and any additional fees or charges.</p>
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

    @endsection
