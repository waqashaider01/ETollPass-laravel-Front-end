@extends('layouts.app2')
@section('content2')

        <!-- banner Start  -->
        <section>
            <div class="faqBanner_rentel z-1">

                <div class="bannerallimage">
                    <img src="./img/safety_banner.png" alt=""
                       class="imgbanner">
                </div>
                <div class="container touchbanner_text">
                    <h1>Safety</h1>
                    <div>
                        <span class=""><a href="" class="px-2">HOME </a> |
                            <a href="" class="mx-2">Safety</a></span>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="row">
                 <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6   safety_card_img">
                        <a href="/deriving_safety">  <img src="./img/safety_deriving.png" alt=""></a>
                        </div>
                        <div class="col-lg-8  mt-sm-3 mt-md-0 col-md-6 gx-lg-5 safety_card_text">
                            <h3>Driving Safely</h3>
                            <p>There are a number of steps you can take to help ensure that you drive safely while in New Zealand.</p>
                        <a href="/deriving_safety">Read More</a>
                        </div>
                    </div>
                 </div>

                 <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-6   safety_card_img">
                        <a href="vehicle_safety">  <img src="./img/vehicale_safety.png" alt=""></a>
                        </div>
                        <div class="col-lg-8  mt-sm-3 mt-md-0 col-md-6 gx-lg-5 safety_card_text">
                            <h3>Vehicle Safety</h3>
                            <p>Vehicle safety is an important issue in New Zealand, as it can help to reduce the number of accidents and injuries on the roads</p>
                        <a href="vehicle_safety">Read More</a>
                        </div>
                    </div>
                 </div>

                 <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-6   safety_card_img">
                         <a href="/children_safety"> <img src="./img/children_safety.png" alt=""></a>
                        </div>
                        <div class="col-lg-8  mt-sm-3 mt-md-0 col-md-6 gx-lg-5 safety_card_text">
                            <h3>Children’s Safety </h3>
                            <p>In New Zealand, there are a number of rules and regulations in place to ensure the safety of children in vehicles.</p>
                        <a href="/children_safety">Read More</a>
                        </div>
                    </div>
                 </div>
                </div>
            </div>


        </section>


        <!-- banner End  -->
   @endsection
