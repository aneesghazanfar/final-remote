<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <title>SaaS Development Services &mdash;   SSEDLAB</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href=" {{asset('css/main-css.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href=" {{asset('i/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{asset('i/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{asset('i/favicon-16x16.png') }}">
    <link rel="manifest" href=" {{asset('i/site.webmanifest') }}">
    <link rel="mask-icon" href=" {{asset('i/safari-pinned-tab.svg') }}" color="#000">
    <link rel="shortcut icon" href=" {{asset('i/favicon.ico') }}">
    <meta name="description"
        content="Winfinity offers high-end, innovative, and regulated solutions for iGaming industry, providing premium quality content and products.">
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

    .banner-img {
        background-image: url(' {{asset("/img/saas-service.png") }}');

        background-position: cover;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .top_section {
        padding: 15.625em 0 8.125em;
        font-size: 1rem;
        /* background: #000; */
        position: relative;
        z-index: 0;
        margin-bottom: 6.425em;
        overflow: hidden;
        --i: 0;
    }

    .banner-main-heading {
        color: #FFF;
        text-align: center;
        font-family: Alfa Slab One;
        font-size: 90px;
        font-style: normal;
        font-weight: 400;
        line-height: 133px;
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

    .banner-btn {
        margin: auto;
        display: flex;
        width: fit-content;
        height: 56px;
        padding: 20px 28.5px 19px 28.5px;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        background: #CA5817;
    }

    .tt-banner-btn {
        color: #FFF;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 16.5px;
        letter-spacing: 0.3px;
        text-transform: capitalize;
        background-color: transparent;
        border: none;
        padding-right: 30px;
    }

    /* asad css */
    .mb-sec-2 {
        padding: 60px 150px;
        background-color: #000;
    }
    .divlanding-list-item-text {
position: static !important;
    }

    .mb-text-white {
        color: #fff;
    }

    .mb-sec-2 {
        width: 97%;
        margin: auto;
    }

    .mb-sec-2-inner h2 {
        font-size: 37px;
        font-style: normal;
        font-weight: 600;
        line-height: 41.8px;
        /* 112.973% */
        letter-spacing: -1px;
        margin-bottom: 20px;
    }

    .mb-sec-2-inner p {
        max-width: 927px;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 29px;
    }

    .mb-row {
        display: flex;

    }

    .mb-sec-2-inner-col {
        width: 33.333333333%;
    }
    .divlanding-list-item-text {
position: static !important;
    }
    .mb-sec-2-inner p {
    line-height: inherit !important;
}
.optimize-route-planning-container {
    position: relative;
    letter-spacing: inherit;
    line-height: inherit;
}
.optimize-route-planning-container{
    letter-spacing: inherit !important  ;
    line-height: inherit !important;
    margin-bottom: 20px;
}
.divlanding-list-item{
    width: auto !important;
    height: auto !important;
}
.divlanding-list-item-text {
    padding: 0.75rem;
    font-size: 16px;
}
.divlanding-list-item-text
{
    max-width: inherit !important;
}
    .mb-orange {
        color: #CA5817;
    }

    .sec-2-device {
        font-size: 27px;
        margin: 16px 0;
    }

    .sec-2-device-p {
        font-size: 14px !important;
        color: #747272;
        margin-bottom: 10px;
        line-height: 22px !important;
    }

    .mb-orage {
        color: #CA5817;
    }

    .mb-sec-2-2 {
        margin-top: 40px;
    }

    .mb-mt-50 {
        margin-top: 50px;
    }

    .mb-container-padding {
        padding: 60px 150px;
    }

    .mb-container {
        width: 97%;
        margin: auto;
        background-color: #000;
        margin-top: 60px;
    }

    .mb-end-to-end {
        padding: 116px 200px;
        background-image: url(' {{asset("/img/banner-tt/Frame-15.png") }}');
        background-image: linear-gradient(to bottom, #000000a8, #00000070),
            /* url('./public/img/banner-tt/Frame-15.png'); */

            background-repeat: no-repeat;
    }

    .delievery-industry-spec {
        padding: 116px 200px;
        background-image: linear-gradient(to bottom, #000000a8, #00000070),
        url('{{asset("/img/banner-tt/Frame-14-1.png") }}');

        background-repeat: no-repeat;
    }

    .delievery-industry-spec-2 {
        padding: 116px 200px;
        background-image:
            linear-gradient(to bottom, #000000a8, #00000070),
            url('./public/img/banner-tt/Frame 1000004729.png');
        background-repeat: no-repeat;
    }

    .delievery-industry-spec-3 {
        padding: 116px 200px;
        background-image:
            linear-gradient(to bottom, #00000000, #00000000),
            url('./public/img/banner-tt/divabout-us.png');
        background-repeat: no-repeat;
    }

    .delievery-industry-spec-3 h1 {
        color: #FFF;
        font-family: Inter;
        font-size: 77px;
        font-style: normal;
        font-weight: 600;
        line-height: 80px;
        /* 103.896% */
        letter-spacing: -2px;
        text-align: start;
    }

    .delievery-industry-spec h2 {
        font-family: Inter;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 60px;
        /* 187.5% */
        letter-spacing: -0.5px;
        text-transform: uppercase;
    }

    .delievery-industry-spec-2 h2 {
        font-family: Inter;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 60px;
        /* 187.5% */
        letter-spacing: -0.5px;
        text-transform: uppercase;
    }

    .mb-end-to-end h1 {
        font-size: 80px;
        font-style: normal;
        font-weight: 700;
        line-height: 129px;
        /* 161.25% */
        letter-spacing: -0.5px;
        text-transform: uppercase;
    }

    .mb-steps-row {
        display: flex;
        flex-wrap: wrap;
    }

    .mb-steps-col {
        width: 50%;
    }

    .mb-steps-row-inner {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-bottom: 25px;
    }

    .mb-steps-row-inner:last-child {
        margin-bottom: 0px;
    }

    .mb-steps-col-inner-active {
        color: #CA5817;
    }

    .mb-steps-col-head {
        font-size: 32px;
        padding-left: 25px;
    }

    .mb-steps-col-circle {
        width: 8px;
        height: 8px;
        background-color: #fff;
        border-radius: 100px;
    }

    .mb-steps-col-left {
        position: relative;
    }

    .mb-steps-col-left::after {
        content: '';
        position: absolute;
        top: 0;
        height: 100%;
        left: 4px;
        width: 1px;
        background-color: #fff;
    }

    .delievery-industry-spec p {
        color: #C2C2C2;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 23.8px;
        /* 148.75% */
        letter-spacing: -0.3px;
        margin-top: 10px;
        max-width: 695px;
    }

    .mb-icon-text-row {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }

    .mb-icon-text-right {
        padding-left: 8px;
        font-size: 30px;
    }

    .mb-icon-text-row-main {
        display: flex;
    }

    .mb-icon-text-col-main {
        width: 50%;
    }

    .delievery-industry-spec-3-row {
        display: flex;
    }

    .delievery-industry-spec-3-col {
        width: 50%;
    }

    .mb-counter-number {
        color: #FFDB3B;
        font-family: Inter;
        font-size: 66px;
        font-style: normal;
        font-weight: 400;
        line-height: 80.5px;
        /* 121.97% */
        letter-spacing: -0.5px;
    }

    .mb-counter-text {
        color: #FFF;
        font-family: Inter;
        font-size: 19px;
        font-style: normal;
        font-weight: 400;
        line-height: 23px;
        margin-top: 7px;
        /* 121.053% */
        letter-spacing: -0.5px;
    }

    .mb-counter {
        margin-bottom: 40px;
    }

    .mb-client h2 {
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: 49.5px;
        letter-spacing: -1.5px;
        text-align: center;
        text-transform: capitalize;
    }

    .mb-client-row {
        display: flex;
        align-items: center;
    }


    .mb-client-col img {
        margin: auto;
    }

    .mb-client-col {
        margin-top: 40px;
    }

    .mb-client-col {
        flex: 1 1;
        text-align: center;
    }

    .mb-last-thinking {
        padding: 80px;
    }

    .mb-last-thinking-head {
        color: var(--white, #FFF);
        font-family: Inter;
        font-size: 146px;
        font-style: normal;
        font-weight: 600;
        line-height: 150px;
        /* 102.74% */
        text-align: start;
        letter-spacing: -4px;
    }

    .mb-last-thinking-row {
        display: flex;
    }

    .mb-last-thinking-col {
        width: 50%;
    }

    .mb-last-thinking-col h2 {
        color: var(--white, #FFF);
        font-family: Inter;
        font-size: 32px;
        font-style: normal;
        font-weight: 400;
        line-height: 55px;
        /* 114.583% */
        letter-spacing: -0.8px;
        max-width: 550px;
        padding-right: 15px;
    }

    .mb-tab {
        overflow: hidden;
        color: #fff;
        display: flex;
        justify-content: space-between;
    }

    /* Style the buttons inside the tab */
    .mb-tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        color: #fff;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */


    /* Create an active/current tablink class */
    .mb-tab .mb-button.active {
        border-bottom: 2px solid #FF601D;
    }

    .mb-tab .mb-button {
        border-bottom: 2px solid transparent;

    }

    /* Style the tab content */
    .mb-tabcontent {
        display: none;
        padding: 6px 12px;
    }

    .mb-tablinks div {
        color: var(--white, #FFF);
        text-align: center;
        font-family: Inter;
        font-size: 26px;
        font-style: normal;
        font-weight: 400;
        line-height: 45px;
        /* 132.353% */
        letter-spacing: -0.5px;
    }

    .mb-tab {
        border-bottom: 2px solid #DADADA;
    }

    .mb-tabcontent p {
        text-align: center;
        padding-top: 32px;
    }

    .mb-position-relative {
        position: relative;
    }

    .mb-overlay-carousel .slider-heading {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.40);
        left: 0;
        top: 0;
        padding: 32px;
        margin: 0px;
    }

    .carousel-indicator {
        border-radius: 100px;
        background: #FFF;
        display: flex;
        align-items: center;
        width: fit-content;
        width: 58px;
        justify-content: space-between;
        padding: 7px 6px;
        margin-top: 20px;
    }

    .mb-button.active div {
        color: #FF601D;
    }

    @media only screen and (max-width: 768px) {
        .banner-main-heading {
            color: #FFF;
            text-align: center;
            font-family: Alfa Slab One;
            font-size: 36px;
            font-style: normal;
            font-weight: 400;
            line-height: 42px;
            letter-spacing: 0.9px;
            text-transform: uppercase;
        }

        .tt-banner-para {
            color: #FFF;
            text-align: center;
            font-family: Inter;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 26px;
            letter-spacing: -0.05px;
            width: auto;
            margin: auto;
            padding: 30px 0px;
        }

        .mb-sec-2 {
            padding: 60px 15px;
            background-color: #000;
        }

        .mb-sec-2-inner-col {
            width: 100%;
        }

        .mb-row {
            display: flex;
            flex-wrap: wrap;
        }

        .mb-end-to-end {
            padding: 20px 15px;
        }

        .mb-end-to-end h1 {
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: 38px;
            letter-spacing: -0.5px;
            text-transform: uppercase;
        }

        .mb-container-padding {
            padding: 20px 15px;
        }

        .mb-steps-col {
            width: 100%;
        }

        .mb-steps-col-head {
            font-size: 20px;
            padding-left: 25px;
        }

        .mb-steps-col {
            width: 100%;
            font-size: 16px;
            margin-top: 12px;
        }

        .delievery-industry-spec {
            padding: 20px 15px;
        }

        .delievery-industry-spec h2 {
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 30px;
        }

        .mb-icon-text-right {
            padding-left: 8px;
            font-size: 20px;
        }

        .mb-icon-text-col-main {
            width: 100%;
        }

        .mb-icon-text-row-main {
            display: flex;
            flex-wrap: wrap;
        }

        .delievery-industry-spec-2 {
            padding: 20px 15px;
        }

        .mb-tab {
            overflow: hidden;
            color: #fff;
            flex-wrap: wrap;
            display: flex;
            justify-content: start !important;

        }

        .mb-tabcontent p {
            text-align: center;
            padding-top: 32px;
            font-size: 16px;
        }

        .delievery-industry-spec-3 {
            padding: 20px 15px;
        }

        .delievery-industry-spec-3 h1 {
            color: #FFF;
            font-family: Inter;
            font-size: 32px;
            font-style: normal;
            font-weight: 600;
            line-height: 54px;
            letter-spacing: -2px;
            text-align: start;
        }

        .mb-counter-number {
            color: #FFDB3B;
            font-family: Inter;
            font-size: 44px;
            font-style: normal;
            font-weight: 400;
            line-height: 57.5px;
            letter-spacing: -0.5px;
        }

        .mb-counter-text {
            color: #FFF;
            font-family: Inter;
            font-size: 17px;
        }



        .mb-client-col {
            text-align: center;
            width: 20%;
            flex: none;
        }

        .mb-client-col img {
            width: 300px;
        }

        .mb-client-row {
            display: flex;
            flex-wrap: wrap;

            align-items: center;
        }

        .mb-client-col {
            text-align: center;
            width: 30%;
            flex: none;
            padding: 7px;
        }

        .mb-client-col {
            margin-top: 15px;
        }

        .mb-last-thinking {
            padding: 15px;
        }

        .mb-last-thinking-head {
            color: var(--white, #FFF);
            font-family: Inter;
            font-size: 44px;
            font-style: normal;
            font-weight: 600;
            line-height: 73px;
            text-align: start;
            letter-spacing: 0px;
        }

        .mb-last-thinking-row {
            display: flex;
            flex-wrap: wrap;
        }

        .mb-last-thinking-col {
            width: 100%;
        }

        .mb-last-thinking-col h2 {
            color: var(--white, #FFF);
            font-family: Inter;
            font-size: 23px;
            font-style: normal;
            margin-bottom: 20px;
            font-weight: 400;
            line-height: 34px;
            letter-spacing: -0.8px;
            max-width: 550px;
            padding-right: 15px;
        }
    }




    
    </style>
</head>

<body id="page-index">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCK6J8B" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
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
                        End-to-end SaaS
                        development
                        services
                    </h1>
                    <p class="tt-banner-para">
                        As a top provider of SaaS development services, we are focused on building SaaS applications
                        that surpass your and your customers’ expectations

                    </p>


                    <section class="banner-btn">
                        <button class="tt-banner-btn">Get in Touch</button>
                        <img src="{{asset('img/SVG.svg')}}" alt="">
                    </section>

                </div>
            </div>
        </div>





        <section class="mb-sec-2">
            <div class="mb-sec-2-inner">
                <h2 class="mb-text-white">Our SaaS development services let you win big</h2>
                <p>
                    Leverage our top-tier skills and experience in Software-as-a-Service development to create a SaaS
                    product that will drive long-term success among customers. Our SaaS development services span the
                    entire software lifecycle, including:
                </p>
                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            SaaS Development Consulting
                        </h3>
                        <p class="sec-2-device-p">
                            We help with brainstorming SaaS ideas, drilling down the scope, selecting the right tech
                            stack, estimating ROI, and more. Get the best guidance to overcome any SaaS software
                            development challenge you might face.
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            SaaS Design & Prototyping
                        </h3>
                        <p class="sec-2-device-p">
                            If you want to glue customers to your SaaS app, you need to deliver state-of-the-art design.
                             Our SaaS development services help you turn a great
                             idea into great UI/UX and validate the concept with rapid prototyping.
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            End-to-End SaaS Development
                        </h3>
                        <p class="sec-2-device-p">
                            Need professionals to create a SaaS app from scratch? Our
                             full-cycle SaaS development company has worked with many startups and 
                            enterprises since 2009, delivering successful SaaS products that are built to last and grow.
                        </p>

                    </div>
                </div>

            </div>
            <div class="mb-sec-2-inner">

                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Migration to SaaS
                        </h3>
                        <p class="sec-2-device-p">
                            Transform your on-prem solution into a mind-blowing SaaS product.
                             We will re-architecture your app to best suit a new environment, 
                            choose the right approach to cloud migration, configure the cloud, and move data safely.
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Third-Party Integrations
                        </h3>
                        <p class="sec-2-device-p">
                            As part of our SaaS application development services,
                             we can add versatility to your SaaS app by connecting external systems through APIs.
                             Build new business opportunities with new integrations executed flawlessly.
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            SaaS Support & Maintenance
                        </h3>
                        <p class="sec-2-device-p">
                            Optimize your SaaS performance, fix bugs, improve user experience,
                             and cut costs using our SaaS development services. We can provide ad-hoc or regular support.
                             Focus on your business while we take care of the tech.
                        </p>

                    </div>
                </div>
            </div>
            <section class="banner-btn mb-mt-50">
                <button class="tt-banner-btn">Tell Us your SaaS software needs</button>
                <img src=" {{asset('img/SVG.svg') }}" alt="">
            </section>
        </section>
        


        <section class="mb-container sec-3">
            <div class="delievery-industry-spec">
                <h2> <span class="mb-orange">Our six-pillar approach
                    </span><br>
                    to SaaS software development
                </h2>
                <p>
                    We build impactful SaaS applications using our road-tested six-pillar approach:

                </p>
            </div>
        </section>




        <section class="mb-sec-2 mb-mt-50">
            <div class="mb-sec-2-inner">


                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            1. Tech stack choice
                        </h3>
                        <p class="sec-2-device-p">
                            We deeply analyze your project requirements, planned features, and the capabilities of the cloud provider to identify the right combination of tech.

                        </p>

                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            2. Multi-tenant architecture
                        </h3>
                        <p class="sec-2-device-p">
                            We build multi-tenant architecture with security in mind to make your scaling straightforward and customization easy while minimizing costs.
                        </p>

                    </div>
                </div>

                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            3. External services integration
                        </h3>
                        <p class="sec-2-device-p">
                            We save you time building functionality from scratch by performing complex integrations with external services based on your growth metrics.
                        </p>

                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            4. Scalability on demand
                        </h3>
                        <p class="sec-2-device-p">
                            We take scalability into account from the beginning of your SaaS software development project so that your app is able to adapt as you evolve.

                        </p>

                    </div>
                </div>

                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            5. Security audit
                        </h3>
                        <p class="sec-2-device-p">
                            We test your system thoroughly before deployment to ensure that all stored data is well-protected and compliant with standards like GDPR or HIPAA.
                        </p>

                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            6. Smooth deployment
                        </h3>
                        <p class="sec-2-device-p">
                            We take a tailored deployment approach to keep business disruption to a minimum, using DevOps to automate the process as much as possible.
                        </p>

                    </div>
                </div>

            </div>
            <section class="banner-btn mb-mt-50">
                <button class="tt-banner-btn">Talk to our SaaS experts</button>
                <img src=" {{asset('img/SVG.svg') }}" alt="">
            </section>


        </section>



        <section class="mb-container sec-3">
            <div class="delievery-industry-spec">
                <h2> <span class="mb-orange">Types of SaaS applications
                    </span><br>
                    we deliver
                </h2>
                <p>
                    For more than a decade, SSED SaaS development company has been empowering enterprises and startups
                    across industries by delivering secure and scalable SaaS solutions. Tell us the type of SaaS you
                    want to create and we will help you too.


                </p>
            </div>
        </section>


        <section class="mb-sec-2 mb-mt-50">

            <div class="mb-sec-2-inner">

                <div class="divlanding-list-list">
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        <b class="optimize-route-planning">CRMs</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        <b class="optimize-route-planning">Marketing Software</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divlanding-list-list">
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">ERPs</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">Cybersecurity Platforms</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divlanding-list-list">
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">Accounting Systems</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">Project Management Systems</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divlanding-list-list">
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">Document Automation Solutions</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">Communication & Collaboration Tools</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divlanding-list-list">
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">
                                        HR/HRM Software</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divlanding-list-col">
                    <div class="divlanding-list-item">
                        <div class="divlanding-list-item-icon"></div>
                        <div class="divlanding-list-item-text">
                            <div class="optimize-route-planning-container">
                                <p class="optimize-route-planning-to-red">
                                    <b class="optimize-route-planning">
                                        Other</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="banner-btn mb-mt-50">
                <button class="tt-banner-btn">Request our SaaS development services</button>
                <img src=" {{asset('img/SVG.svg') }}" alt="">
            </section>

        </section>




        <section class="mb-container sec-3">
            <div class="delievery-industry-spec">
                <h2> <span class="mb-orange">How our SaaS development
                    </span><br>
                    services differ
                </h2>
            </div>
        </section>



        <section class="mb-sec-2 mb-mt-50">

            <div class="mb-sec-2-inner">


                <div class="divlanding-list-list">
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        Building SaaS systems since 2009
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        Over 80% of our team are middle and senior-level professionals
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divlanding-list-list">
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        Expertise in disruptive tech to put you miles ahead of the competition
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        Tens of thousands of hours of custom software development
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divlanding-list-list">
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        Product mindset focusing on the value we add
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        Global corporations among 200+ happy clients
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divlanding-list-list">
                    <div class="divlanding-list-col">
                        <div class="divlanding-list-item">
                            <div class="divlanding-list-item-icon"></div>
                            <div class="divlanding-list-item-text">
                                <div class="optimize-route-planning-container">
                                    <p class="optimize-route-planning-to-red">
                                        Agile delivery to let you go faster, with a guaranteed success
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <section class="banner-btn mb-mt-50">
                <button class="tt-banner-btn">Discuss your SaaS project</button>
                <img src=" {{asset('img/SVG.svg') }}" alt="">
            </section>
        </section>

        @include('contact-form')

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
                            <div class="section__head popup__small_head"><span class="color-small"><b
                                        class="top_section__head_i_inner">PRESENTATION</b> </span></div>
                            <div class="section__head small_head"><span class="color"><b
                                        class="top_section__head_i_inner">Download</b> </span><b
                                    class="top_section__head_i_inner">winfinity</b> <b
                                    class="top_section__head_i_inner">presentation</b></div>
                            <div class="section__bottom">Provide your Email and we will send you Winfinity product
                                Presentation download link.</div>
                            <div class="section__form">
                                <form class="form" action="/api/mailing/presentation-mail" method="post">
                                    <label class="form__input field">
                                        <input type="email" name="email" data-valid="false" data-name="email"
                                            placeholder="Email">
                                        <div class="form__input_label">Email</div>
                                        <div class="form__input_error" data-empty="The field is required"
                                            data-emptyall="all fields should be filled"
                                            data-error="invalid Email format" data-errorbox="invalid Email format"
                                            data-errorback="We can’t find this Email">
                                            <span>We can’t find this
                                                Email</span>
                                        </div>
                                    </label>
                                    <label class="form__check field">
                                        <input type="checkbox" data-valid="false" data-name="Agree"><span
                                            class="form__check_input"></span>
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
                                                    <svg class="alternative_solution" viewBox="0 0 1000 1000"
                                                        preserveAspectRatio="none">
                                                        <foreignObject class="foreignobject" width="1000" height="1000">
                                                            <span class="foreignobject"></span>
                                                        </foreignObject>
                                                    </svg>
                                                    <span class="button__arrow_svg">
                                                        <svg viewBox="0 0 17 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.36402 2L14 9.63598L6.36403 17.272"
                                                                stroke-width="3">
                                                            </path>
                                                            <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3">
                                                            </path>
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
                            <div class="inner_product_thanks__email_to">Presentation Download Link was sent to <span
                                    class="mail_content">*****<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1a7b737d5a7d777b737634797577">[email&#160;protected]</a></span>
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
                        data and to personalize advertising and marketing content. Learn more about this on our <a
                            href="#">cookie policy page.</a></span></div>
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
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
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
                                            analyze here <a
                                                href="https://support.google.com/analytics/answer/1012034?hl=lten&amp;ref_topic=6157800">https://support.google.com/analytics/answer/1012034?hl=lten&ref_topic=6157800.</a></span>
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
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
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
                                            analyze here <a
                                                href="https://support.google.com/analytics/answer/1012034?hl=lten&amp;ref_topic=6157800">https://support.google.com/analytics/answer/1012034?hl=lten&ref_topic=6157800.</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__cookies_buttons">
                <button class="button button--black_hover button--gradient_hover toggleSettings"
                    data-save="Save preferences" data-manage="manage cookies"><span class="button__wrap"><span
                            class="button__inner_wrap"><b class="button__inner_text">manage cookies</b></span><span
                            class="button__arrow">
                            <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                                <foreignobject class="foreignobject" width="1000" height="1000"><span
                                        class="foreignobject"></span></foreignobject>
                            </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                                    <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                                </svg>
                            </span></span></span></button>
                <button class="button button--black_hover button--gradient_hover"><span class="button__wrap"><span
                            class="button__inner_wrap"><b class="button__inner_text">deny</b></span><span
                            class="button__arrow">
                            <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                                <foreignobject class="foreignobject" width="1000" height="1000"><span
                                        class="foreignobject"></span></foreignobject>
                            </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                                    <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                                </svg>
                            </span></span></span></button>
                <button class="button button--orange popup__button_consent closePopup"><span class="button__wrap"><span
                            class="button__inner_wrap"><b class="button__inner_text">consent</b></span><span
                            class="button__arrow">
                            <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                                <foreignobject class="foreignobject" width="1000" height="1000"><span
                                        class="foreignobject"></span></foreignobject>
                            </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("mb-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("mb-tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

const clickCarousel = (e, which) => {
    if (which == 'left') {
        leftIndicator.click()
    } else {
        rightIndicator.click()
    }

}
</script>

</html>