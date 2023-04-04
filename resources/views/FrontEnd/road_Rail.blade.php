<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
            crossorigin="anonymous">
@extends('layouts.app2')
@section('content2')
        <!-- banner Start  -->
        <section>
            <div class="faqBanner_rentel z-1">

                <div class="bannerallimage">
                    <img src="./img/road_rail_banner.png" alt=""
                       class="imgbanner">
                </div>
                <div class="container touchbanner_text">
                    <h1>Roads & Rail</h1>
                    <div>
                        <span class=""><a href="" class="px-2">Vehicles </a> |
                            <a href="" class="mx-2">Roads & Rail</a></span>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="row">
                    <div class="col-md-6 touchcontact">


                       <p>New Zealand has a network of roads and railways that serve the country's transportation needs. The road network consists of both state highways and local roads, and is administered by the New Zealand Transport Agency. The railway network is primarily used for freight, although there are also a number of passenger services. It is operated by the KiwiRail company.
                    </p>

                    <p>
                        The road network in New Zealand is extensive and covers the entire country. It includes both paved and unpaved roads, and ranges from small rural roads to major motorways. The state highway system is the main route for long distance travel in New Zealand, and consists of a network of roads that connect the major cities and towns. There are also a number of local roads that serve smaller communities and provide access to rural areas.</p>
                        <p>
                            The railway network in New Zealand is primarily used for the transport of goods, including coal, forestry products, and dairy products. There are also a number of passenger services, including the Interislander ferry service, which operates between the North and South Islands, and the TranzAlpine service, which runs between Christchurch and Greymouth. In addition to these services, there are also a number of tourist railways that operate in different parts of the country.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="fag_img1">
                            <img src="./img/road_rail_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </section>


        <!-- banner End  -->

  @endsection
