
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
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="./css/style.css">
        <!-- ---Linking Font Awesome CDN--- -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
            rel="stylesheet">


            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

             <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

            <!-- ---Website Main Browser Title--- -->

            {{-- <link rel="stylesheet" href="index.css"> --}}
            <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    </head>
    <body>

        <!--############################> Header Start <################-->
        <div class="container my-3 ">
            <div class="row">
                <div class="col-sm-3 logo">
                    <img src="./img/LOGO.png" alt="" class="logocl"
                        width="200px">
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-6 mt-4 ">
                    <div class="row ">
                        <div class="col d-flex ">
                            <div class="input-group me-2 ">
                                <input type="text" class="form-control inputtxt"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn bton" type="button">
                                        <i class="fa fa-search "></i>
                                    </button>
                                </div>
                            </div>

                            <button type="button" class="btn btn-outline-primary
                                ">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid menubar z-3" id="navbar"  >
            <div class="container" >
                <div class="row">
                    <div class="col-5  col-sm-7">
                        <nav class="navbar navbar-expand-lg ">

                            <button class="navbar-toggler nvbrbtn" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle
                                navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse"
                                id="navbarNavDropdown">
                                <!-- <div class="line mt-2 "></div> -->
                                <ul class="navbar-nav mt-2 ">

                                    <li class="nav-item nvitm">
                                        <a class="nav-link text-white "
                                            aria-current="page" href="/"><Strong>HOME</Strong></a>
                                    </li>
                                    <li class="nav-item nvitm">
                                        <a  class="nav-link text-white" href="/about"><strong>ABOUT
                                                US</strong></a>
                                    </li>
                                    <li class="nav-item nvitm">
                                        <a class="nav-link text-white" href="/help_And_faq"><strong>HELP
                                                AND FAQS</strong></a>
                                    </li>
                                    <li class="nav-item nvitm">
                                        <a class="nav-link text-white" href="/account"><strong>ACCOUNT AND PASSES</strong></a>
                                    </li>
                                    <!-- <li class="nav-item nvitm dropdown">
                                        <a class="nav-link dropdown-toggle
                                            text-white" href="/account"  role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <STRONG>ACCOUNT AND PASSES</STRONG>
                                        </a>
                                        <ul class="dropdown-menu dropmenu col-12
                                            mt-2">
                                            <li><a class="dropdown-item ditem
                                                    text-dark" href="#"><strong>Action</strong></a></li>
                                            <li><a class="dropdown-item ditem
                                                    text-dark" href="#"><strong>Another
                                                        action</strong></a></li>
                                            <li><a class="dropdown-item ditem
                                                    text-dark" href="#"><strong>Something
                                                        else here</strong></a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-7 col-sm-5 my-1">
                        <div class="text-end"><a href="/getin_touch"><button type="button" class="btn
                            btn-danger mt-2 wid">Get In Touch</button></a></div>
                    </div>
                </div>
            </div>
        </div>





    <main>
        @yield('content2')
    </main>












    <footer>
        <div class="container-fluid p-0 m-0 footer_full">
            <div class="footer_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 footer_all_columns">
                            <h5>About Us</h5>

                            <div class="footer_col">
                                <ul footer_col_ul>
                                    <li><a href="#">Tag installation</a></li>
                                    <li><a href="#">News and media</a></li>
                                    <li><a href="#">Schedule of fees</a></li>
                                    <li><a href="#">Toll road codes</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12 footer_all_columns">
                            <h5>Quick Links</h5>

                            <div class="footer_col">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/vehicles">Vehicles</a></li>
                                    <li><a href="/driver_licenses">Driving Licences</a></li>
                                    <li><a href="/getin_touch">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12 footer_all_columns">
                            <h5>Social Media</h5>

                            <div class="footer_col_social">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12 footer_all_columns">
                            <h5>Get In Touch</h5>

                            <div class="footer_col">
                                <ul>
                                    <li class="footer_li">
                                        <div class="footer_icons">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="footer_network">
                                            <h5>Telephone:</h5>
                                            <a href="#">1300 88 53 67</a>
                                        </div>
                                    </li>
                                    <li class="footer_li">
                                        <div class="footer_icons">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div class="footer_network">
                                            <h5>Australian Address:</h5>
                                            <p>Level 1, 5 George St, North Strathfield NSW 2137</p>
                                        </div>
                                    </li>
                                    <li class="footer_li">
                                        <div class="footer_icons">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div class="footer_network">
                                            <h5>New Zealand Address:</h5>
                                            <p>Suite 9, Level 6, 203 Queen Street, Auckland, 1010, New Zealand</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 footer0_col">
                            <p>@2022 eTollPass, All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="footer2_col">
                                <ul footer2_ul>
                                    <li><a href="">Legal</a></li>
                                    <li>
                                        <p> | </p>
                                    </li>
                                    <li><a href="">Online Privacy</a></li>
                                    <li>
                                        <p> | </p>
                                    </li>
                                    <li><a href="">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--############> Footer End <########### -->




    <!-- ---Javascript Plugin CDN Script--- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- ---Linking Customized JS File--- -->
    {{-- <script src="js/event.js"></script> --}}
    <script src="{{ asset('js/event.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('javascript/sticky.js')}}"></script>
</body>

</html>
