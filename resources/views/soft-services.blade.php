<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
  <title>Software Engineering Services &mdash; SSEDLAB</title>
  <script src="https://code.jquery.com/jquery-3.7.1.js"integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href=" {{asset('css/swiper-bundle.min.css?v=4.043453451') }}">
  <link rel="stylesheet" href=" {{asset('css/style.min.css?v=4.0.012') }}">
  <link rel="stylesheet" href=" {{asset('css/custom-style.min.css?v=1') }}">
  <link rel="stylesheet" href=" {{asset('css/live-style.css') }}">
  <link rel="apple-touch-icon" sizes="180x180" href=" {{asset('i/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href=" {{asset('i/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href=" {{asset('i/favicon-16x16.png') }}">
  <link rel="manifest" href=" {{asset('i/site.webmanifest') }}">
  <link rel="mask-icon" href=" {{asset('i/safari-pinned-tab.svg') }}" color="#000">
  <link rel="shortcut icon" href=" {{asset('i/favicon.ico') }}">
  <meta name="description"content="Winfinity offers high-end, innovative, and regulated solutions for iGaming industry, providing premium quality content and products.">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content=" {{asset('i/browserconfig.xml') }}">
  <meta name="theme-color" content="#ffffff">


  <style>
    @font-face {
      font-family: Alfa Slab One;
      src: url(" {{asset('/fonts/AlfaSlabOne-Regular.ttf') }}");
    }

    @font-face {
      font-family: Inter;
      src: url(" {{asset('/fonts/static/Inter-Regular.ttf') }}");
    }

    @font-face {
      font-family: InterBold;
      src: url(" {{asset('/fonts/static/Inter-Bold.ttf') }}");
    }

    body {
      font-family: Inter !important;
    }


    .ss-heading {
      color: var(--white, #fff);
      text-align: center;
      font-family: Inter;
      font-size: 36px;
      font-style: normal;
      font-weight: 600;
      line-height: 41.8px;
      /* 116.111% */
      letter-spacing: -1px;
      text-transform: capitalize;
    }

    .ss-soft {
      background: var(--p,
          linear-gradient(94deg,
            #ff601d 19.93%,
            #ff4b00 44.36%,
            #f7500a 53.01%,
            #dd5f28 80.07%));
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-family: Inter;
      font-size: 36px;
      font-style: normal;
      font-weight: 600;
      line-height: 41.8px;
      letter-spacing: -1px;
      text-transform: capitalize;
    }

    .services-sec {
      background-color: #000;
      margin-top: 50px;
    }

    .ss-main-section {
      padding: 96px 0px;
    }

    .ss-sevices-para {
      color: #B3B4B6;
      text-align: center;

      /* Text md/Regular */
      font-family: Inter;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 24px;
      /* 150% */
      width: 948px;
      margin: auto;
      padding-top: 16px;
    }

    .ss-servies-box-heading {
      text-align: center;
      /* Text xl/Semibold */
      font-family: Inter;
      font-size: 20px;
      font-style: normal;
      font-weight: 600;
      line-height: 30px;
      padding-top: 20px;
      /* 150% */
    }

    .col4 {

      text-align: center;
    }

    .text-center {
      text-align: center;
    }

    .m-auto {
      margin: auto;
    }

    .ss-services-box-para {
      padding-top: 8px;
      color: #B3B4B6;
      text-align: center;

      /* Text md/Regular */
      font-family: Inter;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 24px;
      /* 150% */
    }

    .padd96 {
      padding-top: 96px;
      padding-bottom: 96px;
    }

    .d-flex {
      display: flex;
    }

    .jc {
      justify-content: center;
    }

    .jc {
      justify-content: space-between;
    }

    .al {
      align-items: center;
    }

    .pr48 {
      padding-right: 48px;
    }

    .row-box {
      margin: auto;
      width: 90%;
      padding-top: 64px;
    }



    .top_section-1 {}

    .banner-main-heading {
      color: #FFF;
      text-align: center;
      font-family: Alfa Slab One;
      font-size: 90px;
      font-style: normal;
      font-weight: 400;
      line-height: 133px;
      /* 147.778% */
      letter-spacing: 0.9px;
      text-transform: uppercase;
    }

    .tt-banner-para {
      color: #FFF;
      text-align: center;
      font-family: Inter;
      font-size: 20px;
      font-style: normal;
      font-weight: 400;
      line-height: 26px;
      letter-spacing: -0.05px;
      width: 1152px;
      margin: auto;
      padding: 30px 0px;
    }

    .section__button {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .tt-banner-btn {
      color: #FFF;
      font-family: Inter;
      font-size: 16px;
      font-style: normal;
      font-weight: 600;
      line-height: 16.5px;
      /* 103.125% */
      letter-spacing: 0.3px;
      text-transform: capitalize;
      background-color: transparent;
      border: none;
      padding-right: 30px;
    }

    .banner-btn {
      margin: auto;
      display: flex;
      width: 446px;
      height: 56px;
      padding: 20px 16.5px 19px 15.5px;
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      background: #CA5817;
    }

    .banner-img {
      background-image: url(' {{asset("/img/banner-tt/div.top_section.png") }}');
      background-position: cover;
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }

    .pt64 {
      margin-top: 64px;
    }

    .tt-solution-sec {
      background-image: url(' {{asset("/img/banner-tt/Frame\ 14.png") }}');
      width: 100%;
    }

    .tt-solution-sec2 {
      background-image: url(' {{asset("/img/banner-tt/div.section__wrap.png") }}');
      width: 100%;
      background-repeat: no-repeat;
    }

    .ss-company-heading {
      width: 80%;

      margin: auto;
      padding: 116px 0px;
      color: white;
      text-align: center;
      font-family: InterBold;
      font-size: 80px;
      font-style: normal;
      font-weight: 900;
      line-height: 129px;
      /* 161.25% */
      letter-spacing: -0.5px;
      text-transform: uppercase;
    }

    .soft-comp {
      /* background-image: url(' {{asset("/img/banner-tt/div.section__wrap.png") }}'); */
      background-image: url(' {{asset("/img/banner-tt/Frame\ 14.png") }}');
      
    }

    .ss-company-heading span {
      background: var(--p, linear-gradient(94deg, #FF601D 19.93%, #FF4B00 44.36%, #F7500A 53.01%, #DD5F28 80.07%));
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-family: Inter;
      font-size: 80px;
      font-style: normal;
      font-weight: 700;
      line-height: 129px;
      letter-spacing: -0.5px;
      text-transform: uppercase;
    }

    .tt-solution-main {
      width: 50%;
      margin-right: auto;
      padding: 121px 150px;
      /* background-image: url(./public/img/banner-tt/Frame\ 14.png); */
    }

    .tt-solution-main2 {
      width: 60%;
      margin-left: auto;
      padding: 121px 150px;
      /* background-image: url(./public/img/banner-tt/Frame\ 14.png); */
    }

    .tt-solution-heading {
      font-family: Inter;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: 60px;
      /* 187.5% */
      letter-spacing: -0.5px;
      text-transform: uppercase;
    }

    .tt-solution-heading span {
      background: var(--p, linear-gradient(94deg, #FF601D 19.93%, #FF4B00 44.36%, #F7500A 53.01%, #DD5F28 80.07%));
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .tt-soution-para {
      padding-top: 32px;
      color: #C2C2C2;
      font-family: Inter;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 23.8px;
      /* 148.75% */
      letter-spacing: -0.3px;
    }

    .small_head .color2 {

      color: #FFF;
      font-family: Inter;
      font-size: 48px;
      font-style: normal;
      font-weight: 600;
      line-height: 49.5px;
      /* 103.125% */
      letter-spacing: -1.5px;
      text-transform: capitalize;
    }

    .section__head2 {
      width: 100%;
      padding: 59px 0px;
    }

    .sld {
      background: black;
      padding: 1px 58px;
    }


    /* Style the tab */
    .tab {
      overflow: hidden;
      /* border: 1px solid #ccc; */
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f1f1f1;
      background-color: #000;
      padding: 80px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    /* .tab button:hover {
  background-color: #ddd;
} */

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #000;
      background: var(--p, linear-gradient(94deg, #FF601D 19.93%, #FF4B00 44.36%, #F7500A 53.01%, #DD5F28 80.07%));
      background-clip: text;
      -webkit-background-clip: text;
      font-size: 34px;
      font-style: normal;
      font-weight: 600;
      line-height: 45px;
      /* 132.353% */
      letter-spacing: -0.5px;
      -webkit-text-fill-color: transparent;


    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      /* border: 1px solid #ccc; */
      border-top: none;
      color: #B3B4B6;
      text-align: center;
      /* Text md/Regular */
      font-family: Inter;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 24px;
      /* 150% */
      padding: 100px;
      background-color: black !important;
    }

    .pb100 {
      padding-bottom: 100px;
    }

    .tab-text {
      color: #fff;
      padding: 20px 0px;
      text-align: center;
      font-family: Inter;
      font-size: 34px;
      font-style: normal;
      font-weight: 600;
      line-height: 45px;
      /* 132.353% */
      letter-spacing: -0.5px;
    }






    @media screen and (max-width:425px) {
      .tabcontent {
        padding: 20px;
      }

      .tab-text {
        color: #fff;
        padding: 20px 0px;
        text-align: center;
        font-family: Inter;
        font-size: 16px;
        line-height: 25px;
      }

      .pb100 {
        padding-bottom: 50px;
      }

      .tab {
        padding: 20px;
      }

      .tt-solution-main {
        width: 100%;
        padding: 20px 20px;
      }

      .banner-main-heading {

        font-size: 40px !important;
        font-style: normal;
        font-weight: 400;
        line-height: 45px !important;
        letter-spacing: 0.9px;
      }

      .tt-banner-para {
        width: 100% !important;
      }

      .row-box {
        flex-direction: column;
        width: 100%;
        padding: 0px 20px;
      }

      .ss-sevices-para {
        width: 100%;
        padding: 10px 20px;
        text-align: justify;
      }

      .col4 {
        padding: 15px 0px;
        width: 100%;
        text-align: center;
      }

      .ss-heading {
        padding: 0px 20px;
        font-size: 25px;
      }

      .ss-soft {
        font-size: 25px;
      }

      .ss-main-section {
        padding: 46px 0px;
      }

      .tt-banner-btn {
        color: #FFF;
        font-family: Inter;
        font-size: 12px;
        font-style: normal;
        font-weight: 600;
        /* line-height: 16.5px; */
        letter-spacing: 0.3px;
        text-transform: capitalize;
        background-color: transparent;
        border: none;
        padding-right: 20px;
      }

      .banner-btn {
        margin: auto;
        display: flex;
        width: 293px;
        height: 56px;
        padding: 20px 4.5px 19px 1.5px;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        background: #CA5817;
      }

      .tt-solution-heading {
        text-align: center;
      }

      .tt-soution-para {
        text-align: center;
      }

      .tt-solution-main2 {
        width: 100%;
        padding: 20px 20px;
      }

      .tt-solution-heading {
        font-family: Inter;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
        letter-spacing: -0.5px;
        text-transform: uppercase;
      }

      .ss-company-heading,
      .ss-company-heading span {
        width: 99%;
        margin: auto;
        line-height: 39px;
        padding: 116px 0px;
        color: white;
        text-align: center;
        font-family: InterBold;
        font-size: 31px;
        font-style: normal;
        font-weight: 900;
        line-height: 36px;
        letter-spacing: -0.5px;
        text-transform: uppercase;
      }

      .contact-form {
        margin-top: 4em;
      }

      .small_head .color2 {
        color: #FFF;
        font-family: Inter;
        font-size: 23px;
        font-style: normal;
        font-weight: 600;
        line-height: 39.5px;
        letter-spacing: -1.5px;
        text-transform: capitalize;
      }

      .sld {
        background: black;
        padding: 1px 28px;
      }

      /* .tt-solution-sec2::before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  z-index: 1; 
} */
      .form-label {
        flex-direction: column;
      }
    }



    @media screen and (max-width:768px) {
      .tabcontent {
        padding: 20px;
      }

      .tab-text {
        color: #fff;
        padding: 20px 0px;
        text-align: center;
        font-family: Inter;
        font-size: 16px;
        line-height: 25px;
      }

      .pb100 {
        padding-bottom: 50px;
      }

      .tab {
        padding: 20px;
      }

      .tt-solution-main {
        width: 100%;
        padding: 20px 20px;
      }

      .banner-main-heading {

        font-size: 40px !important;
        font-style: normal;
        font-weight: 400;
        line-height: 45px !important;
        letter-spacing: 0.9px;
      }

      .tt-banner-para {
        width: 100% !important;
      }

      .row-box {
        flex-direction: column;
        width: 100%;
        padding: 0px 20px;
      }

      .ss-sevices-para {
        width: 100%;
        padding: 10px 20px;
        text-align: justify;
      }

      .col4 {
        padding: 15px 0px;
        width: 100%;
        text-align: center;
      }

      .ss-heading {
        padding: 0px 20px;
        font-size: 25px;
      }

      .ss-soft {
        font-size: 25px;
      }

      .ss-main-section {
        padding: 46px 0px;
      }

      .tt-banner-btn {
        color: #FFF;
        font-family: Inter;
        font-size: 12px;
        font-style: normal;
        font-weight: 600;
        /* line-height: 16.5px; */
        letter-spacing: 0.3px;
        text-transform: capitalize;
        background-color: transparent;
        border: none;
        padding-right: 20px;
      }

      .banner-btn {
        margin: auto;
        display: flex;
        width: 293px;
        height: 56px;
        padding: 20px 4.5px 19px 1.5px;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        background: #CA5817;
      }

      .tt-solution-heading {
        text-align: center;
      }

      .tt-soution-para {
        text-align: center;
      }

      .tt-solution-main2 {
        width: 100%;
        padding: 20px 20px;
      }

      .tt-solution-heading {
        font-family: Inter;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
        letter-spacing: -0.5px;
        text-transform: uppercase;
      }

      .ss-company-heading,
      .ss-company-heading span {
        width: 87%;
        margin: auto;
        line-height: 39px;
        padding: 116px 0px;
        color: white;
        text-align: center;
        font-family: InterBold;
        font-size: 40px;
        font-style: normal;
        font-weight: 900;
        line-height: 42px;
        letter-spacing: -0.5px;
        text-transform: uppercase;
      }

      .contact-form {
        margin-top: 4em;
      }

      .small_head .color2 {
        color: #FFF;
        font-family: Inter;
        font-size: 23px;
        font-style: normal;
        font-weight: 600;
        line-height: 39.5px;
        letter-spacing: -1.5px;
        text-transform: capitalize;
      }

      .sld {
        background: black;
        padding: 1px 28px;
      }

      /* .tt-solution-sec2::before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  z-index: 1; 
} */
      .form-label {
        flex-direction: column;
      }
    }

    @media screen and (min-width: 768px) and (max-width:1024px) {
      .banner-main-heading {
        color: #FFF;
        text-align: center;
        font-family: Alfa Slab One;
        font-size: 67px;
        font-style: normal;
        font-weight: 400;
        line-height: 80px;
      }

      .tt-banner-para {
        width: 100%;
      }

      .tt-solution-main {
        width: 100%;
      }

      .tt-solution-main2 {
        width: 100%;
      }

      .ss-company-heading,
      .ss-company-heading span {
        width: 80%;
        margin: auto;
        padding: 116px 0px;
        color: white;
        text-align: center;
        font-family: InterBold;
        font-size: 50px;
        font-style: normal;
        font-weight: 900;
        line-height: 89px;
        letter-spacing: -0.5px;
        text-transform: uppercase;
      }
    }
  </style>
</head>

<body id="page-index">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCK6J8B" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <div class="body-wrap-1">
    <?php
    // require 'shared/_navbar.php';
    // navBar();
    ?>
    @include('navbar')

    <div class="top_section-1 vis_on_scroll ">
      <div class="top_section vis_on_scroll banner-img">
        <div class="container">
          <h1 class="banner-main-heading">
            Software engineering services
          </h1>
          <p class="tt-banner-para">
            Overhaul business processes, modernize existing technology systems, and bring innovative technology product to market with ITRex — a software engineering company that
            cares
          </p>


          <section class="banner-btn">
            <button class="tt-banner-btn">Discuss your software engineering needs</button>
            <img src="{{asset('img/SVG.svg') }}" alt="">
          </section>

        </div>
      </div>
    </div>




    <!-- services section -->
    <section class="services-sec container">

      <div class="ss-main-section">
        <h3 class="ss-heading">
          Custom <span class="ss-soft">software engineering</span> services
          that bring value from day one
        </h3>
        <p class="ss-sevices-para">We offer a whole gamut of software engineering and consulting services to help our
          clients create technology systems for enterprise resource planning, collaboration, customer management, data
          analysis, and process automation. You can turn to our software engineering firm for:</p>
        <div class="row-box d-flex jc al">
          <div class="col4 pr48">
            <div class="text-center">

              <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
            </div>
            <h3 class="ss-servies-box-heading">
              Technology Consulting & Audits
            </h3>
            <p class="ss-services-box-para">Technology consulting is the cornerstone of our software engineering services
              package. We’ll assess your business requirements, review your existing IT infrastructure, propose a suitable
              tech, and create a proof of concept to assess the feasibility of your idea.</p>
          </div>
          <div class="col4 pr48">
            <div class="text-center">

              <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
            </div>
            <h3 class="ss-servies-box-heading">
              Software Development
            </h3>
            <p class="ss-services-box-para">Whether you need a mobile app with a powerful cloud back end, dynamic web app, embedded software for a Smart Home device, or an advanced analytics platform to crunch your Big Data, our software engineering company is here at your service!</p>
          </div>
          <div class="col4">
            <div class="text-center">

              <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
            </div>
            <h3 class="ss-servies-box-heading">
              Solution Architecture
            </h3>
            <p class="ss-services-box-para">Drawing on the insights uncovered during the project discovery phase, our software architects join forces with skilled business analysts to design a resilient software architecture that will scale flexibly along with your business and leave room for innovation.</p>
          </div>
        </div>


        <div class="row-box d-flex jc al">
          <div class="col4 pr48">
            <div class="text-center">

              <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
            </div>
            <h3 class="ss-servies-box-heading">
              Application Modernization
            </h3>
            <p class="ss-services-box-para">Besides custom software engineering, we migrate legacy applications to a modern tech stack, segment bulky software into microservices, orchestrate containerized apps with Kubernetes, and interconnect the components of your IT infrastructure.</p>
          </div>
          <div class="col4 pr48">
            <div class="text-center">

              <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
            </div>
            <h3 class="ss-servies-box-heading">
              UI/UX Design
            </h3>
            <p class="ss-services-box-para">From auditing your customers’ buying journey to applying data democratization principles in data analytics dashboard , our software engineering company always creates navigation logic and interfaces that allow users to perform intended actions with minimal friction.</p>
          </div>
          <div class="col4">
            <div class="text-center">

              <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
            </div>
            <h3 class="ss-servies-box-heading">
              Quality Assurance
            </h3>
            <p class="ss-services-box-para">As part of our software product engineering services, we turn to manual testing and write scripts for automated to validate that your applications contain zero bugs, perform as expected, and deliver unsurpassed user experience.</p>
          </div>
        </div>
        <section class="banner-btn pt64">
          <button class="tt-banner-btn">Discuss your software engineering needs</button>
          <img src="{{asset('img/SVG.svg') }}" alt="">
        </section>
      </div>

    </section>



  </div>
  </div>







  <!-- solution section is here -->

  <section class="tt-solution-sec container">
    <div class="tt-solution-main">
      <h3 class="tt-solution-heading"> <span>Software engineering</span> solutions in focus</h3>
      <p class="tt-soution-para">
        Our software engineering company collaborates with businesses from the healthcare, finance, education, retail, supply chain management, and other verticals. We help our clients test the
        novel technology waters, scale IT systems company wide, and ensure faster paybacks. Our core software engineering solutions expertise spans:
      </p>
    </div>

  </section>







  <!-- services section -->
  <section class="services-sec container">

    <div class="ss-main-section">

      <div class="row-box d-flex jc al">
        <div class="col4 pr48">
          <div class="text-center">

            <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
          </div>
          <h3 class="ss-servies-box-heading">
            Technology Consulting & Audits
          </h3>
          <p class="ss-services-box-para">Technology consulting is the cornerstone of our software engineering services
            package. We’ll assess your business requirements, review your existing IT infrastructure, propose a suitable
            tech, and create a proof of concept to assess the feasibility of your idea.</p>
        </div>
        <div class="col4 pr48">
          <div class="text-center">

            <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
          </div>
          <h3 class="ss-servies-box-heading">
            Software Development
          </h3>
          <p class="ss-services-box-para">Whether you need a mobile app with a powerful cloud back end, dynamic web app, embedded software for a Smart Home device, or an advanced analytics platform to crunch your Big Data, our software engineering company is here at your service!</p>
        </div>
        <div class="col4">
          <div class="text-center">

            <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
          </div>
          <h3 class="ss-servies-box-heading">
            Solution Architecture
          </h3>
          <p class="ss-services-box-para">Drawing on the insights uncovered during the project discovery phase, our software architects join forces with skilled business analysts to design a resilient software architecture that will scale flexibly along with your business and leave room for innovation.</p>
        </div>
      </div>


      <div class="row-box d-flex jc al">
        <div class="col4 pr48">
          <div class="text-center">

            <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
          </div>
          <h3 class="ss-servies-box-heading">
            Application Modernization
          </h3>
          <p class="ss-services-box-para">Besides custom software engineering, we migrate legacy applications to a modern tech stack, segment bulky software into microservices, orchestrate containerized apps with Kubernetes, and interconnect the components of your IT infrastructure.</p>
        </div>
        <div class="col4 pr48">
          <div class="text-center">

            <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
          </div>
          <h3 class="ss-servies-box-heading">
            UI/UX Design
          </h3>
          <p class="ss-services-box-para">From auditing your customers’ buying journey to applying data democratization principles in data analytics dashboard , our software engineering company always creates navigation logic and interfaces that allow users to perform intended actions with minimal friction.</p>
        </div>
        <div class="col4">
          <div class="text-center">

            <img class="m-auto" src="{{asset('img/soft-services/Featured icon.png') }}" alt="">
          </div>
          <h3 class="ss-servies-box-heading">
            Quality Assurance
          </h3>
          <p class="ss-services-box-para">As part of our software product engineering services, we turn to manual testing and write scripts for automated to validate that your applications contain zero bugs, perform as expected, and deliver unsurpassed user experience.</p>
        </div>
      </div>
      <section class="banner-btn pt64">
        <button class="tt-banner-btn">Discuss your software engineering needs</button>
        <img src="{{asset('img/SVG.svg') }}" alt="">
      </section>
    </div>

  </section>



  <!-- soultion second section -->

  <section class="tt-solution-sec2 container">
    <div class="tt-solution-main2">
      <h3 class="tt-solution-heading"> <span>Software engineering</span> services delivered
        how and when you need them</h3>
      <p class="tt-soution-para">
        As an IT firm that went all the way from a software engineering outsourcing company to a technology vendor with niche expertise, ITRex offers flexible engagement models to meet your
        requirements:
      </p>
    </div>

  </section>




  <!-- tab section is here -->

  <div class="container">
    <div class="tab">
      <button class="tablinks active" onclick="openCity(event, 'London')">
        <div>
          <img class="m-auto" src="{{asset('img/tab/AI.svg') }}" alt="">
        </div>

        <p class="tab-text">
          Turnkey
          Projects
        </p>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Paris')">
        <div>
          <img class="m-auto" src="{{asset('img/tab/AI.svg') }}" alt="">
        </div>
        <p class="tab-text">
          Dedicated Teams
        </p>

      </button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo')">
        <div>
          <img class="m-auto" src="{{asset('img/tab/AI.svg') }}" alt="">
        </div>
        <p class="tab-text">
          IT staff
          Augmentation
        </p>
      </button>
    </div>

    <div id="London" class="tabcontent" style="display:block;">

      <p class="pb100">One way to avail of our software engineering services is to explore our turnkey product development model, which is based on the time and materials (T&M) approach. We’ll exercise full control over the development process and deliver working software (or pieces thereof!) at regular intervals, freeing up your time for strategic work. Expert knowledge, extensive reporting, transparent pricing, and customer centricity guaranteed.</p>
      <section class="banner-btn">
        <button class="tt-banner-btn">Discuss your software engineering needs</button>
        <img src="{{asset('img/SVG.svg') }}" alt="">
      </section>
    </div>

    <div id="Paris" class="tabcontent">
      <p class="pb100">Development process and deliver working software (or pieces thereof!) at regular product development model, which is based on the time and materials (T&M) approach. We’ll exercise full control over the development process and deliver working software (or pieces thereof!) at regular intervals, freeing up your time for strategic work. Expert knowledge, extensive reporting, transparent pricing, and customer centricity guaranteed.</p>
      <section class="banner-btn">
        <button class="tt-banner-btn">Discuss your software engineering needs</button>
        <img src="{{asset('img/SVG.svg') }}" alt="">
      </section>
    </div>

    <div id="Tokyo" class="tabcontent">
      <p class="pb100"> Poduct development model, which is based on the time and materials (T&M) approachOne way to avail of our software engineering services is to explore our turnkey product development model, which is based on the time and materials (T&M) approach. We’ll exercise full control over the development process and deliver working software (or pieces thereof!) at regular intervals, freeing up your time for strategic work. Expert knowledge, extensive reporting, transparent pricing, and customer centricity guaranteed.</p>
      <section class="banner-btn">
        <button class="tt-banner-btn">Discuss your software engineering needs</button>
        <img src="{{asset('img/SVG.svg') }}" alt="">
      </section>
    </div>

  </div>








  <!-- soft company section -->

  <section class="soft-comp container">
    <section class="main-soft-comp">
      <h1 class="ss-company-heading">Our <span>software engineering</span> company at a glance</h1>
    </section>
  </section>

  <section class="ss-slider">
    <div class="ss-slider-main">
      <!-- <div class="main_page_games section vis_on_scroll visible carousel-slider"> -->
      <div class="slidesection ">
        <div class="container sld">
          <!-- <div class="carousel-slider-container"> -->
          <section class="sec-slide slider-section">
            <div class="container slider-column">

              <div class="section__head2 small_head"><span class="color2">How customers benefit from our software engineering services </span></div>
              <div class="swiper swiper-slider">
                <div class="swiper-wrapper">

                  <div class="swiper-slide"><img src="{{asset('img/wallmart_1.jpg') }}" alt="Swiper">
                    <h3 class="slider-heading">AI-based enterprise software for No.1 retailer</h3>
                    <p class="slider-paragraph">Self-service analytics enabled by AI algorithms empowers 3 million users with instant actionable insights.</p>
                  </div>
                  <div class="swiper-slide"><img src="{{asset('img/case-health.jpg') }}" alt="Swiper">
                    <h3 class="slider-heading">Predictive analytics for cancer clinicians</h3>
                    <p class="slider-paragraph">ML-based analytics improves cancer prognostic accuracy and treatment recommendations. </p>
                  </div>
                  <div class="swiper-slide"><img src="{{asset('img/cybersecurity_preview.jpg') }}" alt="Swiper">
                    <h3 class="slider-heading">Next-level cybersecurity for enterprise risk management </h3>
                    <p class="slider-paragraph">A biometrics-based system provides bulletproof protection, eliminating credential deception and the need for passwords or PINs.</p>
                  </div>
                  <div class="swiper-slide"><img src="{{asset('img/case-logistics.jpg') }}" alt="Swiper">
                    <h3 class="slider-heading">AI-driven logistics platform</h3>
                    <p class="slider-paragraph">An IoT platform offers extended shipment management options to 25,000 active users.</p>

                  </div>
                  <div class="swiper-slide"><img src="{{asset('software_instruments (2).jpg') }}" alt="Swiper">
                    <h3 class="slider-heading">Ecommerce solution for developer of virtual instruments </h3>
                    <p class="slider-paragraph">A tailored ecommerce platform has enabled a developer of software musical instruments to reach out to wider audiences.</p>
                  </div>
                  <div class="swiper-slide"><img src="{{asset('img/BenefitsAdministrator.jpg') }}" alt="Swiper">
                    <h3 class="slider-heading">Cloud solution for US third-party benefits administrators</h3>
                    <p class="slider-paragraph">Migration of a legacy system to microservices enables clients to easily configure and manage employee benefits.</p>
                  </div>
                  <div class="swiper-slide"><img src="{{asset('img/shopping-technology-previeww.jpg') }}" alt="Swiper">
                    <h3 class="slider-heading">AI-powered autonomous checkout</h3>
                    <p class="slider-paragraph"> An ML-driven solution allows retailers to make their stores checkout-free without the need to redesign them.</p>
                  </div>
                </div>

                
                
                <span class="swiper-pagination"></span> 
                <span class="swiper-button-prev"></span>
                <span class="swiper-button-next"></span>
              </div>

              <div class="section__button" style="margin:30px 0 0 20px"><a class="button button--orange" href="#">
                  <span class="button__wrap"><span class="button__inner_wrap">
                      <b class="button__inner_text">Start your inovation journey</b>
                    </span>
                    <span class="button__arrow">
                      <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                        <foreignobject class="foreignobject" width="1000" height="1000">
                          <span class="foreignobject"></span>
                        </foreignobject>
                      </svg>
                      <span class="button__arrow_svg">
                        <svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                          <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                        </svg>
                      </span>
                    </span>
                  </span>
                </a>
              </div>
            </div>


          </section>

        </div>
      </div>
    </div>
  </section>















  <?php
  // require 'shared/_contact-form.php';
  // contactForm();
  ?>
  @include('contact-form')


  <?php
  // require 'shared/_footer.php';
  // footer();
  ?>
  @include('footer')
  <div class="popup-custom">
    <div class="popup__wrapper popup__presentation">
      <div class="popup__close closePopup" data-popup="popup__presentation__close">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L16.5 16.5" stroke="white" stroke-width="2"></path>
          <path d="M16.5 1L1 16.5" stroke="white" stroke-width="2"></path>
        </svg>
      </div>
      <div class="popup_presentation__wrap">
        <div class="popup_presentation__content_wrap form_sucsess_parent">
          <div class="popup_presentation__content_form">
            <div class="section__head popup__small_head"><span class="color-small"><b class="top_section__head_i_inner">PRESENTATION</b> </span></div>
            <div class="section__head small_head"><span class="color"><b class="top_section__head_i_inner">Download</b> </span><b class="top_section__head_i_inner">winfinity</b> <b class="top_section__head_i_inner">presentation</b></div>
            <div class="section__bottom">Provide your Email and we will send you Winfinity product
              Presentation download link.</div>
            <div class="section__form">
              <form class="form" action="/api/mailing/presentation-mail" method="post">
                <label class="form__input field">
                  <input type="email" name="email" data-valid="false" data-name="email" placeholder="Email">
                  <div class="form__input_label">Email</div>
                  <div class="form__input_error" data-empty="The field is required" data-emptyall="all fields should be filled" data-error="invalid Email format" data-errorbox="invalid Email format" data-errorback="We can’t find this Email"><span>We can’t find this
                      Email</span></div>
                </label>
                <label class="form__check field">
                  <input type="checkbox" data-valid="false" data-name="Agree"><span class="form__check_input"></span>
                  <div class="form__check_label">By checking this checkbox, I give a permission
                    for use of my personal data. </div>
                </label>
                <div class="form__submit">
                  <button class="disabled button button--orange">
                    <span class="button__wrap">
                      <span class="button__inner_wrap">
                        <b class="button__inner_text">SEND ME A LINK</b>
                      </span>
                      <span class="button__arrow">
                        <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                          <foreignObject class="foreignobject" width="1000" height="1000">
                            <span class="foreignobject"></span>
                          </foreignObject>
                        </svg>
                        <span class="button__arrow_svg">
                          <svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3"></path>
                            <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3"></path>
                          </svg>
                        </span>
                      </span>
                    </span>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="inner_product_presentation__thanks inner_product_thanks">
            <div class="inner_product_thanks__head"><span class="color">Thanks </span><br>for your
              request</div>
            <div class="inner_product_thanks__ckeck_email">Check your Email</div>
            <div class="inner_product_thanks__email_to">Presentation Download Link was sent to <span class="mail_content">*****<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a7b737d5a7d777b737634797577">[email&#160;protected]</a></span>
            </div>
          </div>
        </div>
        <div class="popup__presentation_img_wrap">
          <img src="./public/img/main_page__download--mob.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="popup">

  </div>
  <div class="popup__wrapper popup__cookies">
    <div class="popup__close closePopup">
      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L16.5 16.5" stroke="white" stroke-width="2"></path>
        <path d="M16.5 1L1 16.5" stroke="white" stroke-width="2"></path>
      </svg>
    </div>
    <div class="popup__title"> <span>We use cookies</span></div>
    <div class="popup__cookies_scroll">
      <div class="popup__description"> <span>This site uses cookies for several reasons. First and
          foremost, to ensure the correct operation of the site, as well as to collect statistical
          data and to personalize advertising and marketing content. Learn more about this on our <a href="#">cookie policy page.</a></span></div>
      <div class="popup__settings">
        <div class="popup__settings_wrapper">
          <div class="popup__title"> <span>Necessary cookies</span></div>
          <div class="popup__settings_orange"> <span>Always ON</span></div>
          <div class="popup__description"> <span>the purpose of the use is to provide technical
              functionality of our websites. The data from these cookies are processed on the
              basis of Winfinity’s legitimate interest.</span></div>
          <div class="popup__settings_checkboxes">
            <div class="popup__settings_checkbox_container">
              <div class="popup__title popup__settings_checkbox_label"> <span>Statistical
                  cookies</span>
                <label class="popup__settings_checkbox">
                  <input type="checkbox"><span> </span>
                </label>
                <div class="popup__settings_checkbox_arrow">
                  <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L13 1" stroke="#60626A"></path>
                  </svg>
                </div>
              </div>
              <div class="popup__settings_checkbox_info">
                <div class="popup__description popup__settings_checkbox_info_container">
                  <span>the purpose of the use is to identify usage trends and derive
                    analytics and statistics. These cookies are used to remember your
                    choices and make assumptions about your preferences for statistical
                    purposes, the legal basis is your consent. Winfinity uses an automated
                    tool called Google Analytics which allows us to record and analyze how
                    you and other visitors use the website. You can learn more about how
                    Google Analytics works and the information it allows us to collect and
                    analyze here <a href="https://support.google.com/analytics/answer/1012034?hl=lten&amp;ref_topic=6157800">https://support.google.com/analytics/answer/1012034?hl=lten&ref_topic=6157800.</a></span>
                </div>
              </div>
            </div>
            <div class="popup__settings_checkbox_container">
              <div class="popup__title popup__settings_checkbox_label"> <span>Marketing
                  cookies</span>
                <label class="popup__settings_checkbox">
                  <input type="checkbox"><span> </span>
                </label>
                <div class="popup__settings_checkbox_arrow">
                  <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L13 1" stroke="#60626A"></path>
                  </svg>
                </div>
              </div>
              <div class="popup__settings_checkbox_info">
                <div class="popup__description popup__settings_checkbox_info_container">
                  <span>the purpose of the use is to identify usage trends and derive
                    analytics and statistics. These cookies are used to remember your
                    choices and make assumptions about your preferences for statistical
                    purposes, the legal basis is your consent. Winfinity uses an automated
                    tool called Google Analytics which allows us to record and analyze how
                    you and other visitors use the website. You can learn more about how
                    Google Analytics works and the information it allows us to collect and
                    analyze here <a href="https://support.google.com/analytics/answer/1012034?hl=lten&amp;ref_topic=6157800">https://support.google.com/analytics/answer/1012034?hl=lten&ref_topic=6157800.</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popup__cookies_buttons">
      <button class="button button--black_hover button--gradient_hover toggleSettings" data-save="Save preferences" data-manage="manage cookies"><span class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">manage cookies</b></span><span class="button__arrow">
            <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
              <foreignobject class="foreignobject" width="1000" height="1000"><span class="foreignobject"></span></foreignobject>
            </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
              </svg>
            </span></span></span></button>
      <button class="button button--black_hover button--gradient_hover"><span class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">deny</b></span><span class="button__arrow">
            <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
              <foreignobject class="foreignobject" width="1000" height="1000"><span class="foreignobject"></span></foreignobject>
            </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
              </svg>
            </span></span></span></button>
      <button class="button button--orange popup__button_consent closePopup"><span class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">consent</b></span><span class="button__arrow">
            <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
              <foreignobject class="foreignobject" width="1000" height="1000"><span class="foreignobject"></span></foreignobject>
            </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
              </svg>
            </span></span></span></button>
    </div>
  </div>
  </div>
  </div>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!--    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>-->
  <script data-cfasync="false" src="./cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="./public/js/tween.js"></script>
  <script src="./public/js/custom.js"></script>
  <script src="./public/js/axios.min.js"></script>
  <script src="./public/js/swiper-bundle.min.js"></script>
  <script src="./public/js/lightgallery.js"></script>
  <script src="./public/js/main.min.js?v=5.0.6"></script>
  <script src="./public/js/custom-main.min.js?v=1"></script>
  <!-- <script src="./public/js/acordian/main.js"></script> -->
  <script src="./public/js/accordian.min.js"></script>
</body>

</html>