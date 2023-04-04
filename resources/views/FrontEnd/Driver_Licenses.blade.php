@extends('layouts.app2')
@section('content2')



    <!-- banner Start  -->
 <section>
<div class="faqBanner_rentel z-1">

    <div class="bannerallimage">
        <img src="./img/deriver_licence.png"  alt=""class="imgbanner">
    </div>
   <div class="container touchbanner_text">
    <h1>Driver Licenses</h1>
    <div>
        <span class=""><a href="" class="px-2">Home </a> |  <a href="" class="mx-2">Driver Licenses</a></span>
    </div>
   </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 touchcontact">
            <h1>Getting a License</h1>
            <p>To drive a motor vehicle in New Zealand, you are required to hold a valid driver license. You can drive in New Zealand for up to 12 months on a license issued in another country as long as the license is in English or accompanied by an English translation. If your license is not in English, you must also carry an International Driving Permit.</p>
            <p>To get a New Zealand driver license, you must be at least 16 years old and pass a written test on the rules of the road and a practical driving test. If you want to drive a heavy vehicle, such as a bus or truck, you will need to pass additional tests.</p>
            <p>It is important to note that traffic laws and road conditions in New Zealand may be different from those in other countries, so it is important to familiarize yourself with them before driving.</p>
        </div>
       <div class="col-md-6">
        <div class="fag_img1">
            <img src="./img/deriver_licence_img.png" alt="">
        </div>
       </div>
    </div>
</div>

<div class="container-fluid  ">

    <div class="container py-5  ">


        <div class="row">
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                    <a href="/driver_licences"><img class="card-img-top cardreltedimg" src="./img/deriver_licence_1.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Road Signs</h5>
                      <a href="/driver_licences" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                  <a href="/derive_rule">  <img class="card-img-top cardreltedimg" src="./img/deriver_licence_2.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Rules of the Road</h5>
                      <a href="/derive_rule" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div class="card card_reltaed driver_card" >
                    <a href="/deriving_safe"><img class="card-img-top cardreltedimg" src="./img/deriver_licence_3.png" alt="Card image cap"></a>
                    <div class="card-body card_body_deriver">
                      <h5 class="card-title card_related_titile">Safe Driving Practices</h5>
                      <a href="/deriving_safe" class="realetd_faq_link">Read More </a>
                    </div>
                  </div>
            </div>


        </div>
    </div>
</div>
 </section>
    @endsection
