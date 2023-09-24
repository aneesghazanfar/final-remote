<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <title>Back-End Development Services&mdash; SSEDLAB</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
        background-image: url('{{ asset("/img/banner-tt/div.section__wrap.png") }}');
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
        padding-right: 10px;
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
        background-image: linear-gradient(to bottom, #000000a8, #00000070),
        url('{{ asset("/img/banner-tt/Frame-15.png") }}');
        background-repeat: no-repeat;
    }

    .delievery-industry-spec {
        padding: 116px 200px;
        background-image: linear-gradient(to bottom, #000000a8, #00000070),
        url('{{ asset("/img/banner-tt/Frame-14-1.png") }}');
        background-repeat: no-repeat;
    }

    .delievery-industry-spec-2 {
        padding: 116px 200px;
        background-image: linear-gradient(to bottom, #000000a8, #00000070),
        url(' {{asset("img/banner-tt/Frame 1000004729.png") }}');
        background-repeat: no-repeat;
    }

    .delievery-industry-spec-3 {
        padding: 116px 200px;
        background-image: linear-gradient(to bottom, #00000000, #00000000),
        url('{{ asset("/img/banner-tt/divabout-us.png") }}');
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
        font-size: 53px;
        font-style: normal;
        font-weight: 700;
        line-height: 60px;
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
        .delievery-industry-spec-2 h2 {
            font-family: Inter;
            font-size: 22px;
            font-style: normal;
            font-weight: 700;
            line-height: 34px;
            letter-spacing: -0.5px;
            text-transform: uppercase;
        }

        .delievery-industry-spec-2 p {
            font-size: 14px;
            margin-top: 10px;
        }

        .mb-container {
            width: 100%;
            margin: auto;
            background-color: #000;
            margin-top: 40px;
        }

        .mb-sec-2-inner h2 {
            font-size: 27px;
            font-style: normal;
            font-weight: 600;
            line-height: 41.8px;
            letter-spacing: -1px;
            margin-bottom: 20px;
        }

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
            padding: 20px 15px;
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
                        Expert back-end
                        development
                        services
                    </h1>
                    <p class="tt-banner-para">
                        Join forces with our back-end development services company to create tech products that scale
                        rapidly, perform well, and keep your employees and customers happy
                    </p>


                    <section class="banner-btn">
                        <button class="tt-banner-btn"> Hire back-end </button>
                        <img src="{{ asset('/img/SVG.svg') }}" alt="">
                    </section>

                </div>
            </div>
        </div>


        <!-- second Sections is here -->


        <section class="mb-sec-2">
            <div class="mb-sec-2-inner">
                <h2 class="mb-text-white">A rundown of our back-end development services</h2>
                <p>
                    We kick off back-end development projects with a meticulous analysis of your requirements and IT
                    infrastructure. Next, we devise a software architecture, create a technical roadmap, select suitable
                    tools, decide on the engagement model, and come up with an estimate that matches your budget and
                    objectives. Our back-end development services span
                </p>
                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Mobile app back-end development
                        </h3>
                        <p class="sec-2-device-p">
                            Our specialists create mobile back ends enabling advanced business logic in native and
                            cross-platform apps. Whether you need an application with multiple types of user accounts,
                            payment services, built-in customer loyalty and referral programs, or real-time sensor data
                            processing capabilities, we’ll take on the challenge!
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Back-end web development
                        </h3>
                        <p class="sec-2-device-p">
                            As part of our back-end web development services, we build applications from the ground up
                            or assist our clients’ front-end teams on a dedicated team or pay-as-you-go basis. Hire
                            back-end developers at ITRex if you need a customer-facing portal, sleek e-commerce website,
                            or enterprise-grade web application!
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Back-end integration via APIs
                        </h3>
                        <p class="sec-2-device-p">
                            With our back-end development services, you can interconnect the components of your IT
                            infrastructure and harness the power of third-party applications to move your business
                            forward! Our back-end API solutions securely log into apps, scavenge information across
                            databases, and automate processes, freeing up your employees’ time for creative work
                        </p>

                    </div>
                </div>
                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Back end as a service (BaaS)
                        </h3>
                        <p class="sec-2-device-p">
                            To help you roll out apps across different platforms and user bases faster, we build
                            reliable mobile back end as a service (mBaaS) solutions comprising a universal application
                            programming interface (API) for your future deployments. Tap into our back-end development
                            services to thrive in the digital, API-first era!
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Cloud back-end development
                        </h3>
                        <p class="sec-2-device-p">
                            A vetted Google Cloud and Microsoft partner, our back-end development company has the right
                            skills and tools to expedite your project. From setting up scalable data warehouse solutions
                            to managing containerized apps with Kubernetes or implementing DevOps and test automation ,
                            we know how to build cloud back-end solutions that deliver
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Back-end refactoring
                        </h3>
                        <p class="sec-2-device-p">
                            Changing an app’s behavior under the hood without disrupting user experience on the front
                            end is a trick few companies can pull. Our back-end development services team will help you
                            optimize web and cloud apps’ performance, address technical debt, split applications into
                            self-sufficient microservices, and migrate software to the cloud
                        </p>

                    </div>
                </div>
            </div>
            <section class="banner-btn mb-mt-50">
                <button class="tt-banner-btn">Explore our back-end </button>
                <img src="{{ asset('/img/SVG.svg') }}" alt="">
            </section>
        </section>


        <section class="mb-container sec-3">
            <div class="mb-end-to-end">
                <h1>EVERY STEP OF YOUR <span class="mb-orange">WEB DEVELOPMENT</span> JOURNEY
                    COVERED ― BY EXPERTS <br>

                </h1>
            </div>
        </section>

        <section class="mb-container sec-3">
            <div class="delievery-industry-spec">
                <h2> CUSTOM <span class="mb-orange">Our back-end</span> <br>
                    solutions</h2>
                <p>
                    We provide back-end development services to companies looking to modernize legacy software systems,
                    adapt their processes to the needs imposed by the remote work era, automate workflows, and fill the
                    gaps in their security defense. We’re excellent at building:
                </p>
            </div>
        </section>
        <!-- <section class="mb-container mb-container-padding">
            <div class="mb-icon-text-row-main">
                <div class="mb-icon-text-col-main">
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_4972)">
                                    <path d="M34.2128 11.9063V7.93998C34.2128 3.65633 31.2638 0.879883 26.9597 0.879883C22.6557 0.879883 19.7863 3.65633 19.7863 7.93998V11.9063H13.5693L15.9605 33.8799H38.0387L40.4298 11.9063H34.2128ZM27.0394 3.33902C29.59 3.33902 31.6623 5.40152 31.6623 7.93998V11.9063H25.3656V18.2525H22.4962V7.93998C22.4166 5.40152 24.4889 3.33902 27.0394 3.33902Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_4972">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Ecommerce</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_4983)">
                                    <path d="M34.9093 0.879883V10.7621L24.7062 16.0673V9.75136L12.5625 16.0673V33.8799H41.0626V0.879883H34.9093ZM24.3833 28.8823H17.42V22.6841H24.381L24.3833 28.8823ZM36.2047 28.8823H29.2442V22.6841H36.2052L36.2047 28.8823Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_4983">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Enterprise</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_4994)">
                                    <path d="M40.5298 0.879883H13.4695C13.4695 0.879883 10.0537 4.26955 10.0537 4.26753V24.5143C10.0537 24.5143 13.4715 27.902 13.4695 27.902H21.9488L26.9997 33.8799L32.0505 27.902H40.5298L43.9456 24.5143V4.26753C43.9456 4.26753 40.5278 0.879883 40.5298 0.879883ZM26.9997 5.5006C27.8542 5.5006 28.6894 5.7519 29.3999 6.22272C30.1104 6.69354 30.6642 7.36274 30.9911 8.14569C31.3182 8.92865 31.4037 9.79018 31.237 10.6214C31.0703 11.4525 30.6588 12.216 30.0547 12.8153C29.4504 13.4145 28.6806 13.8226 27.8425 13.9879C27.0045 14.1533 26.1358 14.0684 25.3464 13.7441C24.5569 13.4198 23.8821 12.8706 23.4074 12.166C22.9326 11.4613 22.6792 10.6329 22.6792 9.78542C22.6792 8.64902 23.1345 7.55915 23.9447 6.7556C24.7549 5.95203 25.8538 5.5006 26.9997 5.5006ZM35.2144 22.7503H18.7849V18.7664C18.7872 17.96 19.1111 17.1872 19.6861 16.617C20.2611 16.0467 21.0401 15.7252 21.8533 15.7227H32.1461C32.9592 15.7252 33.7383 16.0467 34.3132 16.617C34.8882 17.1872 35.2121 17.96 35.2144 18.7664V22.7503Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_4994">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Social Media</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_5005)">
                                    <path d="M27.9668 10.6234L35.9165 2.6579L34.1976 0.879883L27.0358 7.99195L19.8024 0.879883L18.0836 2.6579L26.1764 10.6234H13.5V33.8799H40.5V10.6234H27.9668ZM28.8979 25.8433L25.0305 22.0027L19.8024 27.1945L18.1552 25.5588L25.1021 18.6601L28.9695 22.5006L34.2692 17.2376L35.9165 18.8734L28.8979 25.8433Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_5005">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Real-Time Communication</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_5016)">
                                    <path d="M31.5749 30.6699H22.4248V33.7196H31.5749V30.6699Z" fill="#FFDB3B" />
                                    <path d="M26.9586 0.879883C19.045 0.879883 12.6152 7.1398 12.6152 14.8443C12.6152 19.9806 15.5004 24.5552 19.7869 26.9628V31.0558H34.2128V26.9628C38.4993 24.5552 41.3845 20.0609 41.3845 14.8443C41.3845 7.1398 34.9546 0.879883 26.9586 0.879883ZM25.4748 13.801H28.5249C30.9978 13.801 33.0587 15.8074 33.0587 18.215C33.0587 20.6227 30.9978 22.6291 28.5249 22.6291V24.9565H25.4748V22.6291C23.0019 22.6291 20.941 20.6227 20.941 18.215H23.991C23.991 19.0176 24.6505 19.6596 25.4748 19.6596H28.5249C29.3492 19.6596 30.0087 19.0176 30.0087 18.215C30.0087 17.4125 29.3492 16.7704 28.5249 16.7704H25.4748C23.0019 16.7704 20.941 14.7641 20.941 12.3564C20.941 9.94871 23.0019 7.94235 25.4748 7.94235V5.61495H28.5249V7.94235C30.9978 7.94235 33.0587 9.94871 33.0587 12.3564H30.0087C30.0087 11.5539 29.3492 10.9118 28.5249 10.9118H25.4748C24.6505 10.9118 23.991 11.5539 23.991 12.3564C23.991 13.1589 24.6505 13.801 25.4748 13.801Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_5016">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Finance</div>
                    </div>
                </div>
                <div class="mb-icon-text-col-main">
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_5029)">
                                    <path d="M10.5 0.879883V33.8799H43.5V0.879883H10.5ZM17.3906 30.9836H13.2026V26.7955H17.3906V30.9836ZM17.3906 23.3098H13.2026V19.1217H17.3906V23.3098ZM17.3906 15.636H13.2026V11.4479H17.3906V15.636ZM17.3906 7.96177H13.2026V3.77369H17.3906V7.96177ZM21.5636 24.9578V9.80199L34.1212 17.3799L21.5636 24.9578ZM40.7954 30.9836H36.6073V26.7955H40.7954V30.9836ZM40.7954 23.3098H36.6073V19.1217H40.7954V23.3098ZM40.7954 15.636H36.6073V11.4479H40.7954V15.636ZM40.7954 7.96177H36.6073V3.77369H40.7954V7.96177Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_5029">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Entertainment</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_5040)">
                                    <path d="M26.8188 28.5912C31.78 28.5912 35.8018 27.5999 35.8018 26.3771C35.8018 25.1543 31.78 24.1631 26.8188 24.1631C21.8577 24.1631 17.8359 25.1543 17.8359 26.3771C17.8359 27.5999 21.8577 28.5912 26.8188 28.5912Z" fill="#FFDB3B" />
                                    <path d="M26.819 22.4181C31.7172 22.4181 35.6878 18.4474 35.6878 13.5492C35.6878 7.21527 26.819 0.879883 26.819 0.879883C26.819 0.879883 17.9502 7.21527 17.9502 13.5492C17.9502 18.4474 21.9208 22.4181 26.819 22.4181Z" fill="#FFDB3B" />
                                    <path d="M38.3132 20.8476C37.5465 20.5348 36.7624 20.2665 35.9648 20.0439C35.6 20.5559 35.1933 21.0366 34.7489 21.4812C34.647 21.5831 34.5427 21.6821 34.4375 21.7794C35.4914 22.0254 36.5247 22.3528 37.528 22.7586C40.0063 23.7797 41.4863 25.1324 41.4863 26.3751C41.4863 27.6179 40.0045 28.9747 37.528 29.9944C34.6831 31.1686 30.8807 31.8125 26.8195 31.8125C22.7582 31.8125 18.9557 31.1686 16.1109 29.9944C13.6325 28.9733 12.1526 27.6202 12.1526 26.378C12.1526 25.1357 13.6325 23.7806 16.1109 22.7615C17.1129 22.3558 18.1447 22.0285 19.1971 21.7822C19.0919 21.685 18.9877 21.5859 18.8858 21.484C18.4413 21.0394 18.0346 20.5587 17.6698 20.0468C16.8722 20.2693 16.0881 20.5376 15.3214 20.8504C11.9478 22.2397 10.0879 24.2033 10.0879 26.378C10.0879 28.5525 11.9478 30.5158 15.3257 31.9074C18.4123 33.1793 22.4942 33.8799 26.8195 33.8799C31.1446 33.8799 35.2265 33.1793 38.3132 31.9074C41.6911 30.5148 43.551 28.5511 43.551 26.378C43.551 24.2048 41.6911 22.2397 38.3132 20.8476Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_5040">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Wellness</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_5053)">
                                    <path d="M40.7351 0.879883H32.621L26.9499 6.58146L21.1915 0.879883H13.1646L7.40625 6.58146V14.5291L26.9499 33.8799L46.4063 14.5291V6.58146L40.7351 0.879883Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_5053">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Healthcare</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_5064)">
                                    <path d="M27 5.30051C21.8916 -0.59309 13.6084 -0.59309 8.5 5.30051V33.8799C13.6084 27.9863 21.8916 27.9863 27 33.8799C32.1084 27.9863 40.3916 27.9863 45.5 33.8799V5.30051C40.3916 -0.593659 32.1084 -0.593659 27 5.30051Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_5064">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Education</div>
                    </div>
                    <div class="mb-icon-text-row">
                        <div class="mb-icon-text-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" viewBox="0 0 54 34" fill="none">
                                <g clip-path="url(#clip0_199_5075)">
                                    <path d="M48.8595 6.61659L39.904 6.69876V19.0237H36.8103V1.0293H7.17588V4.97327H12.5492V7.76692H7.17588H0.5V10.5606H7.17588V13.0256H18.9808V15.8192H7.17588H0.5V18.6129H7.17588V28.2263H12.2235C12.6306 31.3486 15.2358 33.7314 18.3295 33.7314C21.5046 33.7314 24.1098 31.3486 24.4355 28.2263H34.6936C35.1007 31.3486 37.7059 33.7314 40.7995 33.7314C43.8932 33.7314 46.5799 31.3486 46.9056 28.2263H53.5V19.0237L48.8595 6.61659ZM18.3295 31.02C16.4569 31.02 14.9101 29.4588 14.9101 27.569C14.9101 25.6791 16.4569 24.118 18.3295 24.118C20.202 24.118 21.7488 25.6791 21.7488 27.569C21.7488 29.4588 20.202 31.02 18.3295 31.02ZM40.7995 31.02C38.927 31.02 37.3802 29.4588 37.3802 27.569C37.3802 25.6791 38.927 24.118 40.7995 24.118C42.6721 24.118 44.2189 25.6791 44.2189 27.569C44.2189 29.4588 42.6721 31.02 40.7995 31.02Z" fill="#FFDB3B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_5075">
                                        <rect width="53" height="33" fill="white" transform="translate(0.5 0.879883)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mb-icon-text-col mb-icon-text-right">Logistics & Transportation</div>
                    </div>
                </div>
            </div>

        </section> -->








        <section class="mb-container sec-3">
            <div class="delievery-industry-spec-2">
                <h2> EVERY STEP OF YOUR<span class="mb-orange"> <br> WEB DEVELOPMENT</span> JOURNEY
                    COVERED ― BY EXPERTS</h2>
                <p>
                    Providing full-stack custom web development services, we create everything from the UI of your web
                    solution to algorithms and databases behind it. And we bring more as your trusted software
                    development partner, ready to resolve any of your tech challenges.
                </p>
            </div>
        </section>


        <!-- UI and UX section -->

        <section class="mb-sec-2 mb-container">
            <div class="mb-sec-2-inner">

                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            UX/UI Design
                        </h3>
                        <p class="sec-2-device-p">
                            We leverage best practices of user-centric design to translate vision into the
                            responsiveness, interactivity, ease of use, and grace of your web solution
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Front-end Development
                        </h3>
                        <p class="sec-2-device-p">
                            Highly proficient in modern frameworks like Angular, React, or Vue we create user
                            experiences that captivate and engage users
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Back-end Development
                        </h3>
                        <p class="sec-2-device-p">
                            Our back-end developers build the best-customized functionality while making sure your web
                            solution works flawlessly behind the scenes
                        </p>

                    </div>
                </div>

            </div>
            <div class="mb-sec-2-inner">

                <div class="mb-row mb-sec-2-2">
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            API Integration
                        </h3>
                        <p class="sec-2-device-p">
                            To save you time building essential functionality from scratch, we connect 3rd party
                            services through APIs, from marketing to payment or geolocation
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Web Development Consulting
                        </h3>
                        <p class="sec-2-device-p">
                            With our seasoned consultants who can guide you through every step of your web development
                            journey, you navigate tech complexities safely
                        </p>

                    </div>
                    <div class="mb-sec-2-inner-col">

                        <h3 class="sec-2-device">
                            Support & Maintenance
                        </h3>
                        <p class="sec-2-device-p">
                            As part of our custom web development services, we provide 24/7 infrastructure monitoring,
                            problem resolution, updates, custom redesign, and more
                        </p>

                    </div>
                </div>
            </div>
            <section class="banner-btn mb-mt-50">
                <button class="tt-banner-btn">Discuss your Web Development needs</button>
                <img src="{{ asset('/img/SVG.svg') }}" alt="">
            </section>
        </section>





    </div>

    <section class="mb-container sec-3">
        <div class="delievery-industry-spec-2">
            <h2> Tap into new trends
                <span class="mb-orange"> <br> with our custom web development services</span>
            </h2>
            <p>
                Our mission is to take business like yours to the top. That’s why ITRex is more than just a professional
                provider of custom web development services. Innovators at heart, we help you turn the latest tech
                innovations into exceptional business value. We help you outrun the competition.
            </p>
        </div>
    </section>


    <section class="mb-sec-2 mb-container">
        <div class="mb-sec-2-inner">

            <div class="mb-row mb-sec-2-2">
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Progressive Web Apps
                    </h3>
                    <p class="sec-2-device-p">
                        Build a lightweight and platform-agnostic PWA in its latest iteration or revamp your existing
                        web app into a PWA for impressive performance
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Accelerated Mobile Pages
                    </h3>
                    <p class="sec-2-device-p">
                        Strip your web pages down to the basics so that they load superfast, delivering an unmatched
                        user experience and improving your site visibility
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Single-page Applications
                    </h3>
                    <p class="sec-2-device-p">
                        Dynamically updating content with no page refreshing, SPAs are a superb way to provide a faster
                        and simple experience to users. Build your SPA with us
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Serverless architecture
                    </h3>
                    <p class="sec-2-device-p">
                        Get excellent scalability, improve your web app performance, and cut project costs by placing
                        the underlying infrastructure in the cloud
                    </p>

                </div>
            </div>

        </div>

        <section class="banner-btn mb-mt-50">
            <button class="tt-banner-btn">Contact us</button>
            <img src="{{ asset('/img/SVG.svg') }}" alt="">
        </section>
    </section>






    <!-- Technologies we work with -->


    <section class="mb-container sec-3">
        <div class="delievery-industry-spec-2">
            <h2> Our <span class="mb-orange"> <br>back-end development</span> tech stack </h2>

        </div>
    </section>


    <section class="mb-sec-2 ">
        <div class="mb-sec-2-inner">

            <div class="mb-row mb-sec-2-2">
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Programming Languages
                    </h3>
                    <p class="sec-2-device-p">
                        Java, Python, PHP, JavaScrip, C#, Go
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Frameworks & Development Environments
                    </h3>
                    <p class="sec-2-device-p">
                        .Net, .Node.js, Express.js, Nest.js, Symphony, Laravel, Django, Falkon, Flask
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Databases
                    </h3>
                    <p class="sec-2-device-p">
                        MySQL, PostgreSQL, Microsoft SQL Server, MongoDB, DynamoDB, MariaDB, Firebase, Apache Cassandra,
                        Redis, Elasticsearch
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">

                    <h3 class="sec-2-device">
                        Cloud
                    </h3>
                    <p class="sec-2-device-p">
                        Google Cloud, Microsoft Azure, Amazon Web Services
                    </p>

                </div>
            </div>

        </div>

        <section class="banner-btn mb-mt-50">
            <button class="tt-banner-btn">Get in touch</button>
            <img src="{{ asset('/img/SVG.svg') }}" alt="">
        </section>
    </section>


    <!-- How itrex make diff sec -->


    <section class="mb-container sec-3">
        <div class="delievery-industry-spec-2">
            <h2> How ITRex


                <span class="mb-orange"> <br>makes a difference</span>
            </h2>

        </div>
    </section>

    <!-- second Sections is here -->


    <section class="mb-sec-2  mb-mt-50">
        <div class="mb-sec-2-inner">

            <div class="mb-row mb-sec-2-2">
                <div class="mb-sec-2-inner-col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="57" viewBox="0 0 47 57" fill="none">
                        <g clip-path="url(#clip0_199_4797)">
                            <mask id="mask0_199_4797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="47" height="57">
                                <path d="M46.1196 0.805664H0.5V56.7935H46.1196V0.805664Z" fill="white" />
                            </mask>
                            <g mask="url(#mask0_199_4797)">
                                <path
                                    d="M10.2371 18.0918H8.41406V30.6141H8.45853V43.7264C8.45853 44.7245 9.25887 45.5413 10.2371 45.5413H14.0165V53.6173C14.0165 55.3867 15.4393 56.8386 17.1734 56.8386C18.9074 56.8386 20.3303 55.3867 20.3303 53.6173V45.4959H26.1995V53.5719C26.1995 55.3414 27.6224 56.7933 29.3564 56.7933C31.0905 56.7933 32.5134 55.3414 32.5134 53.5719V45.4959H36.2928C37.271 45.4959 38.0713 44.6792 38.0713 43.681V30.5688H38.1157V18.0918H36.2928H10.2371Z"
                                    fill="white" />
                                <path
                                    d="M42.9186 17.0479C41.1846 17.0479 39.7617 18.4997 39.7617 20.2692V34.7879C39.7617 36.5574 41.1846 38.0092 42.9186 38.0092C44.6527 38.0092 46.0756 36.5574 46.0756 34.7879V20.2692C46.12 18.4997 44.6972 17.0479 42.9186 17.0479Z"
                                    fill="white" />
                                <path
                                    d="M3.65692 17.0479C1.92284 17.0479 0.5 18.4997 0.5 20.2692V34.7879C0.5 36.5574 1.92284 38.0092 3.65692 38.0092C5.39101 38.0092 6.81383 36.5574 6.81383 34.7879V20.2692C6.81383 18.4997 5.43546 17.0479 3.65692 17.0479Z"
                                    fill="white" />
                                <path
                                    d="M30.4684 4.88872L33.0029 1.21366C33.0473 1.12292 32.9584 0.986805 32.825 0.896063C32.6916 0.805321 32.5582 0.759951 32.5138 0.850692L29.8459 4.61648C28.0674 3.89055 25.8887 3.48221 23.2654 3.43684C20.642 3.43684 18.4633 3.84518 16.6847 4.57112L14.1059 0.805321C14.0613 0.714579 13.8835 0.759951 13.7501 0.850692C13.6168 0.941435 13.5277 1.12292 13.5723 1.16829L16.1066 4.79797C8.77017 8.11005 8.54785 16.2315 8.54785 16.2315H38.0717C38.0717 16.2768 37.7605 8.24617 30.4684 4.88872ZM16.8181 11.5129C15.8399 11.5129 15.0395 10.6962 15.0395 9.69803C15.0395 8.69987 15.8399 7.8832 16.8181 7.8832C17.7962 7.8832 18.5966 8.69987 18.5966 9.69803C18.5966 10.7416 17.7962 11.5129 16.8181 11.5129ZM29.757 11.5129C28.7788 11.5129 27.9784 10.6962 27.9784 9.69803C27.9784 8.69987 28.7788 7.8832 29.757 7.8832C30.7352 7.8832 31.5355 8.69987 31.5355 9.69803C31.5355 10.7416 30.7797 11.5129 29.757 11.5129Z"
                                    fill="white" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_199_4797">
                                <rect width="45.91" height="55.9878" fill="white" transform="translate(0.5 0.805664)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="sec-2-device">
                        A-class team
                    </h3>
                    <p class="sec-2-device-p">
                        Delivering web solutions across industry verticals since 2009, our team of senior web developers
                        and designers know how to build your project right the first time. With us, you get a deep
                        understanding of your business challenges and unparalleled tech expertise to beat them
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="57" viewBox="0 0 49 57" fill="none">
                        <g clip-path="url(#clip0_199_4813)">
                            <mask id="mask0_199_4813" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="48" height="57">
                                <path d="M47.333 0.799805H0.163086V56.7998H47.333V0.799805Z" fill="white" />
                            </mask>
                            <g mask="url(#mask0_199_4813)">
                                <path
                                    d="M46.3443 44.4408C45.4974 46.3973 44.495 48.1982 43.3336 49.8539C41.7504 52.1112 40.4542 53.6736 39.4552 54.5412C37.9065 55.9654 36.2474 56.6948 34.4706 56.7362C33.1951 56.7362 31.6569 56.3732 29.8664 55.637C28.0699 54.9042 26.419 54.5412 24.9095 54.5412C23.3263 54.5412 21.6283 54.9042 19.8123 55.637C17.9934 56.3732 16.5281 56.7569 15.4077 56.795C13.7039 56.8676 12.0056 56.1175 10.3105 54.5412C9.22857 53.5975 7.87528 51.9798 6.25411 49.688C4.5147 47.2407 3.08467 44.4028 1.96436 41.1673C0.764548 37.6726 0.163086 34.2885 0.163086 31.0123C0.163086 27.2594 0.974023 24.0225 2.59831 21.31C3.87487 19.1313 5.57313 17.4127 7.69865 16.151C9.82416 14.8893 12.1208 14.2463 14.5941 14.2052C15.9474 14.2052 17.722 14.6238 19.9274 15.4465C22.1265 16.2719 23.5385 16.6905 24.1576 16.6905C24.6205 16.6905 26.1891 16.201 28.8483 15.2252C31.363 14.3202 33.4854 13.9456 35.2241 14.0932C39.9356 14.4735 43.4753 16.3307 45.8293 19.6767C41.6156 22.2299 39.5312 25.8058 39.5726 30.3931C39.6107 33.9664 40.907 36.9398 43.4546 39.3007C44.6091 40.3964 45.8984 41.2434 47.3329 41.8448C47.0219 42.7471 46.6935 43.6111 46.3443 44.4408ZM35.5387 1.92012C35.5387 4.72076 34.5156 7.33571 32.4761 9.75608C30.015 12.6334 27.038 14.296 23.8099 14.0337C23.7688 13.6977 23.7449 13.3442 23.7449 12.9725C23.7449 10.2839 24.9153 7.40657 26.9938 5.05395C28.0315 3.86278 29.3513 2.87233 30.9518 2.08224C32.5487 1.30393 34.0593 0.873512 35.4799 0.799805C35.5215 1.17421 35.5387 1.54867 35.5387 1.92012Z"
                                    fill="white" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_199_4813">
                                <rect width="48.16" height="56" fill="white" transform="translate(0.163086 0.799805)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="sec-2-device">
                        Fast time-to-value
                    </h3>
                    <p class="sec-2-device-p">
                        Using an agile approach and DevOps best practices, we ship new functionality faster while
                        keeping quality high. Along the way, you stay in the loop as we show results early to adapt to
                        your current vision
                    </p>

                </div>
                <div class="mb-sec-2-inner-col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="57" viewBox="0 0 70 57" fill="none">
                        <g clip-path="url(#clip0_199_4826)">
                            <path
                                d="M20.6584 44.7971H16.8115V48.7964H28.7989V40.7979H22.0083C22.0083 42.4695 21.4696 43.9381 20.6584 44.7971Z"
                                fill="white" />
                            <path
                                d="M44.7842 56.7954H60.7695V32.7998H44.7842V56.7954ZM48.7805 36.7991H56.7731V52.7962H48.7805V36.7991Z"
                                fill="white" />
                            <path
                                d="M32.7949 20.8018V48.7966H40.7875V44.7974H36.7912V24.801H64.7657V28.8003V32.7996V44.7974V48.7966H68.7619V20.8018H32.7949Z"
                                fill="white" />
                            <path
                                d="M4.82251 4.80298H48.7807V16.8024H52.777V0.803711H0.826172V36.7988H28.799V28.8002H4.82251V4.80298Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_199_4826">
                                <rect width="68.31" height="55.9918" fill="white"
                                    transform="translate(0.826172 0.803711)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="sec-2-device">
                        Deeply customized solutions
                    </h3>
                    <p class="sec-2-device-p">
                        Each and every step of our process in custom web development services is focused on your unique
                        business needs. We get a buzz out of unlocking tech complexities and tailoring a solution that
                        serves your mission best. This is because we are fully engaged in your success
                    </p>

                </div>
            </div>
        </div>
        <section class="banner-btn mb-mt-50">
            <button class="tt-banner-btn">Discuss your web app development </button>
            <img src="{{ asset('/img/SVG.svg') }}" alt="">
        </section>
    </section>

    <section class="mb-sec-2 mb-mt-50">
            <div class="mb-sec-2-inner">
                <h2 class="mb-text-white">Latest Projects</h2>
                <div class="swiper swiper-slider">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img src=" {{asset('img/wallmart_1.jpg') }}"
                                        alt="Swiper">
                                    <h3 class="slider-heading">AI-based enterprise software for No.1 retailer→</h3>
                                    <p>
                                        Self-service analytics enabled by AI algorithms empowers 3 million users with
                                        instant actionable insights.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img src=" {{asset('img/chip-mobile3.jpg') }}"
                                        alt="Swiper">
                                    <h3 class="slider-heading">Organ-on-a-chip platform for drug development→</h3>
                                    <p>
                                        Next-gen biotech platform relying on organ-chips enables faster, safer, and
                                        cheaper drug development for human use
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img src=" {{asset('img/case-health.jpg') }}"
                                        alt="Swiper">
                                    <h3 class="slider-heading">Predictive analytics for cancer clinicians→</h3>
                                    <p>
                                        ML-based analytics improves cancer prognostic accuracy and treatment
                                        recommendations.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img
                                        src=" {{asset('img/hybrid-cloud-preview.jpg') }}" alt="Swiper">
                                    <h3 class="slider-heading">Cloud infrastructure for social media giant→</h3>
                                    <p>
                                        Advanced cloud infrastructure connects data centers and on-premises systems to
                                        the cloud, driving agility in software development. </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img
                                        src=" {{asset('img/dollar-shave-club.webp') }}" alt="Swiper">
                                    <h3 class="slider-heading">
                                        Mobile app for Dollar Shave Club→
                                    </h3>
                                    <p>
                                        An Android app with no-fuss shopping features and flawless navigation helps the
                                        Dollar Shave Club skyrocket sales

                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img
                                        src=" {{asset('img/cybersecurity_preview.jpg') }}" alt="Swiper">
                                    <h3 class="slider-heading">
                                        Next-level cybersecurity for enterprise risk management →
                                    </h3>
                                    <p>
                                        A biometrics-based system provides bulletproof protection, eliminating
                                        credential deception and the need for passwords or PINs.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img src=" {{asset('img/case-logistics.jpg') }}"
                                        alt="Swiper">
                                    <h3 class="slider-heading">
                                        AI-driven logistics platform→
                                    </h3>
                                    <p>
                                        An IoT platform offers extended shipment management options to 25,000 active
                                        users.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img
                                        src=" {{asset('img/software_instruments (2).jpg') }}" alt="Swiper">
                                    <h3 class="slider-heading">
                                        Ecommerce solution for developer of virtual instruments →
                                    </h3>
                                    <p>
                                        A tailored ecommerce platform has enabled a developer of software musical
                                        instruments to reach out to wider audiences.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img
                                        src=" {{asset('img/shopping-technology-previeww.jpg') }}" alt="Swiper">
                                    <h3 class="slider-heading">
                                        AI-powered autonomous checkout→

                                    </h3>
                                    <p>
                                        An ML-driven solution allows retailers to make their stores checkout-free
                                        without the need to redesign them.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mb-position-relative mb-overlay-carousel">
                                <a href="/cdn-cgi/l/email-protection"><img
                                        src=" {{asset('img/BenefitsAdministrator.jpg') }}" alt="Swiper">
                                    <h3 class="slider-heading">
                                        Cloud solution for US third-party benefits administrators→
                                    </h3>
                                    <p>
                                        Migration of a legacy system to microservices enables clients to easily
                                        configure and manage employee benefits.
                                    </p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <span class="swiper-pagination"></span> -->
                <span id="leftIndicator" style="display: none;" class="swiper-button-prev"></span>
                <span id="rightIndicator" style="display: none;" class="swiper-button-next"></span>
                <div class="carousel-indicator">
                    <svg onclick="clickCarousel(this,'left')" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                        viewBox="0 0 17 17" fill="none">
                        <g clip-path="url(#clip0_199_4859)">
                            <path d="M11.2735 15.8321L3.54785 8.10645L5.03595 6.61835L12.7616 14.344L11.2735 15.8321Z"
                                fill="black" />
                            <path
                                d="M11.2735 0.380796L3.54785 8.10645L5.03595 9.59454L12.7616 1.86889L11.2735 0.380796Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_199_4859">
                                <rect width="16" height="16" fill="white" transform="translate(0.5 0.380859)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg onclick="clickCarousel(this,'right')" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                        viewBox="0 0 17 17" fill="none">
                        <g clip-path="url(#clip0_199_4864)">
                            <path d="M5.76166 16.5235L13.4873 8.79785L11.9992 7.30975L4.27356 15.0354L5.76166 16.5235Z"
                                fill="black" />
                            <path d="M5.76166 1.0722L13.4873 8.79785L11.9992 10.2859L4.27356 2.5603L5.76166 1.0722Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_199_4864">
                                <rect width="16" height="16" fill="white" transform="translate(0.5 0.380859)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="section__button" style="margin-top: 40px;"><a class="button button--orange" href="#">
                            <span class="button__wrap"><span class="button__inner_wrap">
                                    <b class="button__inner_text">Contact Us</b>
                                </span>
                                <span class="button__arrow">
                                    <svg class="alternative_solution" viewBox="0 0 1000 1000"
                                        preserveAspectRatio="none">
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
                                        data-emptyall="all fields should be filled" data-error="invalid Email format"
                                        data-errorbox="invalid Email format" data-errorback="We can’t find this Email">
                                        <span>We can’t find this
                                            Email</span></div>
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
                                                        <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3">
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
                    <img src="{{ asset('/img/main_page__download--mob.jpg') }}" alt="">
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
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('/js/tween.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    <script src="{{ asset('/js/axios.min.js') }}"></script>
    <script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/js/lightgallery.js') }}"></script>
    <script src="{{ asset('/js/main.min.js?v=5.0.6') }}"></script>
    <script src="{{ asset('/js/custom-main.min.js?v=1') }}"></script>
    <script src="{{ asset('/js/accordian.min.js') }}"></script>
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