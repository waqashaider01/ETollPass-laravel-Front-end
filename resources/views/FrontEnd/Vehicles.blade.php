
@extends('layouts.app2')
@section('content2')
    <!-- banner Start  -->
 <section>
<div class="faqBanner_rentel">

    <div class="bannerallimage">
        <img src="./img/vehical1.png"  alt=""class="imgbanner">
    </div>
   <div class="container touchbanner_text">
    <h1>Vehicles</h1>
    <div>
        <span class=""><a href="" class="px-2">Home </a> |  <a href="" class="mx-2">  vehicles</a></span>
    </div>
   </div>
</div>


<div class="container-fluid  ">

    <div class="container py-5  ">


        <div class="row">
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                   <a href="/vehicles_road_user"> <img class="card-img-top cardreltedimg" src="./img/vehical_img1.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Road User Charges</h5>
                      <a href="/vehicles_road_user" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                 <a href="/vehicale_varrent_certificate">   <img class="card-img-top cardreltedimg" src="./img/vehical_img2.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Warrants and Certificates</h5>
                      <a href="/vehicale_varrent_certificate" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                  <a href="vehical_buying_selling.html">  <img class="card-img-top cardreltedimg" src="./img/vehical_img3.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Buying and Selling Vehicles</h5>
                      <a href="vehical_buying_selling" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                   <a href="/vehicale_type"> <img class="card-img-top cardreltedimg" src="./img/vehical_img4.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Vehicle Types</h5>
                      <a href="/vehicale_type" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                    <a href="/vehicale_registration"> <img class="card-img-top cardreltedimg" src="./img/vehical_img5.png" alt="Card image cap"></a>

                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Vehicle Registration</h5>
                      <a href="/vehicale_registration" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                   <a href="/vehicles_clean_car"> <img class="card-img-top cardreltedimg" src="./img/vehical_img6.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Clean Car Programme</h5>
                      <a href="/vehicles_clean_car" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>

        </div>
    </div>
</div>
 </section>


 <!-- banner End  -->
@endsection
