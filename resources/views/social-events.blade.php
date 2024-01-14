@extends('Layout.app')
@section('content')
    <!-- END nav -->
    
      	
    <main>
    <section id="dates-list">
            <div class="row mb-5">
                <div class="col-12" id="line-title">
                    <h3>Social Event</h3>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">

<h3>Registration fees</h3>

<table class="w-75 mx-auto table mytable mb-5">
    <thead>
        <tr>
            <th class="align-top">Category</th>
            <th class="text-center">Early Registration<br>31 January - 31 March 2023</th>
            <th class="text-center">Late Registration<br>1 April - 19 May 2023</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Non-Student, Non-IEEE Member</td>
            <td class="text-center">550€</td>
            <td class="text-center">600€</td>
        </tr>
        <tr>
            <td>Non-Student, IEEE Member</td>
            <td class="text-center">500€</td>
            <td class="text-center">550€</td>
        </tr>
        <tr>
            <td>Student, Non-IEEE Member</td>
            <td class="text-center">450€</td>
            <td class="text-center">500€</td>
        </tr>
        <tr>
            <td>Student, IEEE Member</td>
            <td class="text-center">400€</td>
            <td class="text-center">450€</td>
        </tr>
        <tr>
            <td>Accompanying Person (participation in all social events)</td>
            <td class="text-center">100€</td>
            <td class="text-center">100€</td>
        </tr>
    </tbody>
</table>

<h4 class="mb-4">Registration fees include:</h4>

<div class="ms-1 mb-5">
    <ul class="ms-3">
        <li>access to all scientific sessions and the exhibitor's area</li>
        <li>participation in the technical tutorials</li>
        <li>conference bag, including proceedings</li>
        <li>all coffee breaks and lunches during the conference</li>
        <li>social events</li>
    </ul>
</div>

<p><b>At least one of the authors of each accepted paper has to register. Each registration will cover one accepted paper if paid at the student fee, or two accepted papers if paid at the full fee.</b></p>

<h4 class="mb-4">Please note that:</h4>

<div class="ms-1 mb-5">
    <ul class="ms-3">
        <li>If you select an <b>IEEE Member</b> registration type, you will be asked to provide your IEEE Member ID.</li>
        <li>When you reach the final step in the Registration Platform, you will receive an e-mail with all the information you submitted along with a <b>Reference ID</b>.</li>
        <li>Please include in your <b>payment of the registration fee</b> the name of the participant and Reference ID, so that the payment can be matched to you.</li>
    </ul>
</div>

<h3>Registration cancellation policy</h3>

<p>
    Please note that any changes or cancellations MUST BE RECEIVED by email <a class="text-decoration-underline" href="mailto:conference@ccbsgreece.gr">conference@ccbsgreece.gr</a> or fax at +30 2810 330606.
</p>

<div class="ms-3">
    <ul>
        <li><b>Until March 10th 2023</b>, Full refund minus 25€ administrative fee.</li>
        <li><b>From March 11th until April 20th 2023</b>, Full refund minus 20% of the registration fee.</li>
        <li><b>From April 21st 2023 onward</b>, No refund of registration fees.</li>
    </ul>
</div>

<h3>Payment options</h3>

    <p>
        <b>By bank transfer</b> to the following account:
    </p>

    <table class="table table-striped table-bordered">
        <tbody>
            <tr>
                <td>Bank Name</td>
                <td><b>EUROBANK</b></td>
            </tr>
            <tr>
                <td>Bank Address</td>
                <td>1, 62 Martyron Ave, Heraklion, Crete, Greece</td>
            </tr>
            <tr>
                <td>Account Holder</td>
                <td>Cretan Conference & Business Service LP</td>
            </tr>
            <tr>
                <td>Account Number</td>
                <td>0026.0134.00.0200765110</td>
            </tr>
            <tr>
                <td>Account IBAN</td>
                <td>GR9602601340000000200765110</td>
            </tr>
            <tr>
                <td>SWIFT Code</td>
                <td>ERBKGRAA</td>
            </tr>
            <tr>
                <td>Currency</td>
                <td><b>EURO</b></td>
            </tr>
        </tbody>
    </table>

    <p class="mb-4">
        Please include in your payment the <b>name</b> of the participant and <b>Reference ID</b>. <br>
        All bank transfers must be made without any charges to the recipient.
    </p>

    <p>
        <b>By online payment via credit card</b> (Visa / Mastercard only) by using the following link: <a class="text-decoration-underline" href="https://www.livepay.gr/ccbs-1.aspx" target="_blank">https://www.livepay.gr/ccbs-1.aspx</a> <br>
        Instructions on how to pay with LivePay <b><a class="text-decoration-underline" href="pdf/livepay-instructions.pdf">here</a></b>.
    </p>

<p class="mb-2">
    <b>For any question regarding payments please contact:</b> <br>
    Ms Katerina Koronaiou <br>
    E:<a class="text-decoration-underline" href="mailto:conference@ccbsgreece.gr">conference@ccbsgreece.gr</a> <br>
    T:+30 2810 331010 <br>
    F:+30 2810 330606 <br>
    <i>Partner Agency: CCBS Greece</i>
</p>
<img class="w-25 mb-5" src="images/ccbs.png" alt="">

</div>


</div>
    </section>
    @endsection

    @extends('Layout.app')
@section('content')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Registration</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registration<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
		<section class="ftco-section contact-section">
        <div class="container">

        <p>
                    The JURSE 2023 program will host social events, which are addressed to all registered participants and accompanying persons.
                </p>

                <h4 class="mb-3 mt-2">Ice Breaker (May 16)</h4>

                <p>
                    This welcome event will take place at the <a class="text-decoration-underline" href="venue.html" target="_blank">conference venue</a> and will include snack buffet and beverages. 
                    This event is ideal for networking among participants in a hospitable setting, while participants 
                    will also have the chance to register in advance for the conference.
                </p>

                <h4 class="mb-3 mt-2">Cultural Tour (May 17)</h4>

                <p>
                    A guided cultural tour at the <a class="text-decoration-underline" href="https://www.knossospalace.gr/" target="_blank">Knossos Palace</a> has been planned including 
                    transport with bus from/to the conference venue. Visitors will learn about the 
                    thriving Minoan civilization and will wander across the ruins of this unique 
                    archaeological site. The tour will end with a buffet and beverages on-site.
                </p>

                <h4 class="mb-3 mt-2">Gala Dinner (May 18)</h4>

                <p>
                    A visit to the <a class="text-decoration-underline" href="https://www.lyrarakis.com/en/home" target="_blank">Lyrarakis winery</a> at the Heraklion outskirts with bus from/to the 
                    conference venue has been organized. Visitors will have the chance to taste different local wine 
                    varieties and delectable cuisine at a site surrounded by the natural beauty of the island. 
                    During the dinner, the result of the student contest will be announced too.
                </p>

                <div class="row mb-5 mt-5">
                    <div class="col-lg-6">
                        <img src="images/knossos.png" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="images/winery.png" alt="">
                    </div>
                </div>

            </div>
        </div>
        </main><!-- End #main -->
    @endsection

