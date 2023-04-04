@extends('layouts.app')



@section('content')

  <!-- ############>Header End ############### -->

<!-- Banner Start  -->
    <!-- <section class="home">
    <div class="text">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h1>
                       Eftpos
                    </h1>
                    <p style="color:white">
                        Home  | Eftpos
                    </p>

                </div>
                <div class="col-lg-6 col-md-6 col-12">

                </div>
            </div>
        </div>
    </div>
</section> -->
<div class="faqBanner_rentel z-1">

  <div class="bannerallimage">
      <img src="./img/eftolpassbanner.png"  alt=""class="imgbanner">
  </div>
 <div class="container touchbanner_text">
  <h1>  Eftpos</h1>
  <div>
      <span class=""><a href="/" class="px-2">  Home </a> |  <a href="/eftpos" class="mx-2"> Eftpos</a></span>
  </div>
 </div>
</div>

<section class="home2" style="margin-top:4rem">
    <div class="container">
        <div class="row row-img gy-5">
            <div class="col-lg-6 col-md-6 col-12">
                <h1>What is Eftpos ?</h1>
                <p>EFTPOS, or Electronic Funds Transfer at Point of Sale, is a system used for electronic payments at retail locations. It allows customers to pay for goods and services using debit cards, credit cards, or prepaid cards, rather than using cash or checks. The transaction is processed electronically through a network of financial institutions, eliminating the need for a physical exchange of money. </p>
                <p>EFTPOS terminals are commonly used in retail stores, restaurants, and other businesses that accept card payments. To use EFTPOS, a customer simply inserts or swipes their card into the terminal and enters their PIN or provides a signature to confirm the transaction. The payment is then transferred electronically from the customer's bank account or credit card to the merchant's account. EFTPOS is widely used in many countries around the world and is a convenient and secure way to make payments.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12 col-img">
                <img src="img/Rectangle 6609.png">

            </div>
        </div>
    </div>
</section>

<section class="FAQ container">
    <h1>Frequently Asked Questions</h1>
    <div class="accordion allacc" id="accordionExample">
        <div class="accordion-item at">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button cutomebtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             How do I use Eftpos?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body ab">
              To use EFTPOS, you will need a debit or credit card that is linked to your bank account or credit card account. When you are ready to make a payment at a business that accepts EFTPOS, simply insert or swipe your card into the terminal and follow the prompts on the screen. You may be asked to enter your PIN or provide a signature to confirm the transaction.
            </div>
          </div>
        </div>
        <div class="accordion-item at">
            <h2 class="accordion-header" id="headingt">
              <button class="accordion-button cutomebtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapset" aria-expanded="true" aria-controls="collapset">
                Is EFTPOS safe to use?
              </button>
            </h2>
            <div id="collapset" class="accordion-collapse collapse show" aria-labelledby="headingt" data-bs-parent="#accordionExample">
              <div class="accordion-body ab">
                EFTPOS is a secure way to make payments because it uses encrypted information to process transactions. Additionally, you are protected by the terms and conditions of your bank or credit card issuer, which may include fraud protection and other safeguards.
              </div>
            </div>
          </div>
          <div class="accordion-item at">
            <h2 class="accordion-header" id="headingth">
              <button class="accordion-button cutomebtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseth" aria-expanded="true" aria-controls="collapseth">
                Can I use EFTPOS to withdraw cash?
              </button>
            </h2>
            <div id="collapseth" class="accordion-collapse collapse show" aria-labelledby="headingth" data-bs-parent="#accordionExample">
              <div class="accordion-body ab">
                Yes, you can use EFTPOS to withdraw cash at certain locations, such as ATMs or banks. You will need to enter your PIN to complete the transaction.
              </div>
            </div>
          </div>

          <div class="accordion-item at">
            <h2 class="accordion-header" id="headingf">
              <button class="accordion-button cutomebtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsef" aria-expanded="true" aria-controls="collapsef">
                Are there any fees associated with using EFTPOS?
              </button>
            </h2>
            <div id="collapsef" class="accordion-collapse collapse show" aria-labelledby="headingf" data-bs-parent="#accordionExample">
              <div class="accordion-body ab">
                There may be fees associated with using EFTPOS, depending on your bank or credit card issuer and the terms of your account. It is a good idea to check with your financial institution to understand any fees that may apply.
              </div>
            </div>
          </div>

          <div class="accordion-item at">
            <h2 class="accordion-header" id="headingfi">
              <button class="accordion-button cutomebtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefi" aria-expanded="true" aria-controls="collapsefi">
                Can I use EFTPOS to make online purchases?
              </button>
            </h2>
            <div id="collapsefi" class="accordion-collapse collapse show" aria-labelledby="headingfi" data-bs-parent="#accordionExample">
              <div class="accordion-body ab">
                Yes, you can use EFTPOS to make online purchases by providing your card details at the checkout page of an online retailer. You may be required to enter your card details and PIN or provide a signature to confirm the transaction.
              </div>
            </div>
          </div>
          <div class="accordion-item at">
            <h2 class="accordion-header" id="headings">
              <button class="accordion-button cutomebtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapses" aria-expanded="true" aria-controls="collapses">
                Can I use EFTPOS to make online purchases?
              </button>
            </h2>
            <div id="collapses" class="accordion-collapse collapse show" aria-labelledby="headings" data-bs-parent="#accordionExample">
              <div class="accordion-body ab">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut fuga quisquam natus repudiandae facilis magnam, qui nihil ipsum ipsa consequuntur hic voluptatibus, perferendis reiciendis ad? Eligendi odio quia a est libero? Dignissimos, iusto. Quaerat consectetur maxime voluptate, culpa dolor neque ad unde laborum cumque consequatur ea voluptatibus incidunt provident.
              </div>
            </div>
          </div>
      </div>
</section>



@endsection
