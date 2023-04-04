@extends('layouts.app2')
@section('content2')



    <!-- banner Start  -->
 <section>
<div class="faqBanner_rentel z-1">
    <div class="bannerallimage">
        <img src="./img/getintouchbanner.png"  alt=""class="imgbanner">
    </div>
   <div class="container touchbanner_text">
    <h1>Get In Touch</h1>
    <div>
        <span class=""><a href="" class="px-2">Home </a> |  <a href="" class="mx-2">GEt in touch</a></span>
    </div>
   </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 touchcontact">
            <h1>Get In Touch</h1>
            <p>Want to get in touch? We’d love to hear from you. Here’s how
                you can reach us.</p>
               <!-- mobile icon  -->
               <div class="d-flex">
               <div class="touchicons">
                    <i class="fa-solid fa-phone-volume touchicons1"></i>
            </div>
            <div class="touch_contact_detail mx-3">
                <h5>Telephone:</h5>
                <p class="touchnumber">1300 88 53 67</p>
            </div>
            </div>

            <!-- location icon  -->

            <div class="d-flex my-4">
                <div class="touchicons">
                    <i class="fa-solid fa-location-dot touchicons2"></i>
             </div>
             <div class="touch_contact_detail mx-3">
                 <h5>Australian Address:
                </h5>
                 <p class="touchnumber">Level 1, 5 George St, North Strathfield NSW 2137</p>
             </div>
             </div>
             <div class="d-flex my-4">
                <div class="touchicons">
                    <i class="fa-solid fa-location-dot touchicons2"></i>
             </div>
             <div class="touch_contact_detail mx-3">
                 <h5> New Zealand Address:

                </h5>
                 <p class="touchnumber">Suite 9, Level 6, 203 Queen Street, Auckland, 1010, New Zealand</p>
             </div>
             </div>


        </div>
        <div class="col-md-6 my-3 touchinput ">
           <form action="">
<div class="mt-3">
    <div class="my-1"> <label for="">Full Name</label></div>
    <div> <input type="text" placeholder="Your Full Name"></div>
</div>
<div class="mt-4">
    <div class="my-1"> <label for="">Email</label></div>
    <div> <input type="email" placeholder="Your Full Name"></div>
</div>
<div class="mt-4">
    <div class="my-1"> <label for="">Email</label></div>
    <div>
        <textarea name="" id="" cols="30" rows="5" placeholder="Your Message"></textarea>
       </div>
</div>
<button type="button" class="touchbutton">Send</button>
           </form>


        </div>

    </div>
</div>

<!-- Map Start  -->

<div class="touchmap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238894.5095018677!2d73.23330136150473!3d33.54086136876325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e3!4m0!4m0!5e0!3m2!1sen!2s!4v1679714949856!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
 </section>




                    @endsection