<?php include('header.php'); ?>
<style>
    h1.home-hero-heading {
        font-size: 48px
    }
</style>

<!-- Mobile Styles for hero images-->
<style>
    @media screen and (max-width: 767px) {
        .float-image {
            border-radius: 6px;
        }

        img {
            max-width: 100%;
            vertical-align: middle;
            display: inline-block;
        }

        img {
            border: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            overflow-clip-margin: content-box;
            overflow: clip;
        }

        body {
            color: #333;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 20px;
        }


        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: sans-serif;
        }

        .home-hero-image-block {
            width: 100%;
            grid-column-gap: 20px;
            grid-row-gap: 20px;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
            padding-left: 0;
        }

        .home-hero-image-block {
            width: 100%;
            background-image: none;
            background-repeat: repeat;
            background-size: auto;
            justify-content: center;
            display: flex;
        }

        .overlay-image {
            width: 180px;
            /* Smaller size for overlay images on mobile */
        }

        .master-container {
            position: relative;
            display: inline-block;
            max-width: 60%;
        }

        .master-image {
            width: 100%;
            height: auto;
        }

        .overlay {
            left: calc(100% + 10px);
            /* Adds some space between the container and the overlay */
        }

        .banner-float-images {
            /* width: 93%; */
            grid-column-gap: 20px;
            grid-row-gap: 20px;
            flex-direction: column;
            align-items: flex-start;
            margin-left: -66px;
            display: flex;
        }

        img {
            max-width: 100%;
            vertical-align: middle;
            display: inline-block;
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 100%;
            /* Moves the overlay to the right side of the container */
            transform: translate(0, -50%);
            /* Centers overlay vertically */
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* Aligns overlay images to the left within the overlay */
            gap: 20px;
        }

        .overlay-image {
            width: 80px;
            /* Set a fixed width for the overlay images */
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }



        /* Animation keyframes */
        @keyframes floatImageAnimation {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Float images with animation */
        .float-image {
            border-radius: 6px;
            opacity: 0;
            transform: translateY(50px);
            /* Start slightly below the final position */
            animation: floatImageAnimation 1s ease-in-out forwards;
        }

        /* Animation delays for sequential appearance */
        .float-image-one {
            animation-delay: 0.2s;
        }

        .float-image-two {
            animation-delay: 0.4s;
        }

        .float-image-three {
            animation-delay: 0.6s;
        }

    }
</style>

<section class="home-hero-section-one wf-section desktop-only" style="background: #fff;padding-bottom: 170px;padding-top:130px;background-image: url('./assets/images_new/bg-final.png');background-size: cover;background-position: 0 0">
    <div class="home-hero-container-large w-container">
        <div class="home-hero-main-block">
            <div class="home-hero-caption-block">
                <div class="overflow-off">
                    <div data-w-id="1fd6d305-6679-7cb9-fb3a-46939f11c7c4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d" class="w-clearfix">
                        <h1 class="home-hero-heading">
                            <span style="font-size: 36px"><span style="color:#0070DF">Marketing</span> done <span style="color:#0070DF">right</span></span><br>
                            <span style="color:#0070DF">Test</span> branding and design.<br />
                            <span style="color:#0070DF">Analyze</span> survey results.<br />
                            <span style="color:#0070DF">Impress</span> your clients.
                        </h1>
                    </div>
                </div>
                <div class="overflow-off">
                    <p data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee95" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; margin-top: 50px" class="hero-para-two">Create amazing branding. Fine tune branding and messaging.<br>Impress your clients with pitches backed by customer opinions.</p>
                </div>
                <div class="overflow-off">
                    <div class="hero-caption-buttons-one">
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee98" data-fancybox="register2" href="#registerbox" class="trial-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee99" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Create free account</div>
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9b" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Create free account</div>
                        </a>
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9d" onclick="book_a_demo();" class="trial-button feature-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9e" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Book a demo</div>
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0eea0" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Book a demo</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="home-hero-image-block" style="position: relative;">
    <!-- Big PNG -->
    <div class="banner-girl-image-block">
        <img src="./assets/images_new/mkt-back.png" loading="lazy" alt="Banner Girl Image" class="hero-main-image" style="width: 100%; height: auto;">
    </div>

    <!-- Floating Images (stacked vertically on the big PNG) -->
    <div class="banner-float-images" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); display: flex; flex-direction: column; align-items: center;">
        <div class="float-image-one" style="margin-bottom: 10px;">
            <img src="./assets/images_new/marketing-2.png" loading="lazy" alt="Float Image 1" class="float-image" style="width: 80px; height: auto;">
        </div>
        <div class="float-image-two" style="margin-bottom: 10px;">
            <img src="./assets/images_new/marketing-1.png" loading="lazy" alt="Float Image 2" class="float-image" style="width: 80px; height: auto;">
        </div>
        <div class="float-image-three">
            <img src="./assets/images_new/marketing-3.png" loading="lazy" alt="Float Image 3" class="float-image" style="width: 80px; height: auto;">
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- Mobile Hero Section  -->
<section class="home-hero-section-one wf-section mobile-only" style="background: #fff; padding-bottom: 170px;background-image: url('./assets/images_new/bg-final.png'); background-size: cover; background-position: 0 0;">
    <div class="home-hero-container-large w-container">
        <div class="home-hero-main-block">
            <div class="home-hero-caption-block">
                <div class="overflow-off">
                    <div data-w-id="1fd6d305-6679-7cb9-fb3a-46939f11c7c4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="w-clearfix">
                        <h1 class="home-hero-heading">
                            <span style="font-size: 36px"><span style="color:#0070DF">eStore</span> that <span style="color:#0070DF">sells</span></span><br>
                            <span style="color:#0070DF">A/B test </span> product pics.<br />
                            <span style="color:#0070DF">Improve</span> products copy.<br />
                            <span style="color:#0070DF">Optimize</span> checkout.
                        </h1>
                    </div>
                </div>
                <div class="overflow-off">
                    <p data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee95" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; margin-top: 50px;" class="hero-para-two">
                        Test and use product pictures and descriptions that sell.<br>Optimize the experience of your users and simply sell more.
                    </p>
                </div>
                <div class="overflow-off">
                    <div class="hero-caption-buttons-one">
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee98" data-fancybox="register2" href="#registerbox" class="trial-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee99" class="trail-text-two-home">
                                Create free account
                            </div>
                        </a>
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9d" onclick="book_a_demo();" class="trial-button feature-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9e" class="trail-text-two-home">
                                Book a demo
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Images Section Moved to the Bottom -->
        <div class="home-hero-image-block">
            <div data-w-id="b3ab55ef-0bde-ad3e-dba8-997bea786104" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <div class="home-hero-image-block">
                    <!-- Big PNG -->
                    <div class="banner-girl-image-block">
                        <img src="./assets/images_new/eshop-back.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 56vw, (max-width: 991px) 54vw, (max-width: 1439px) 26vw, 347.671875px" srcset="
                          ./assets/images_new/eshop-back.png 500w, 
                          ./assets/images_new/eshop-back.png 770w" alt="Banner Girl Image" class="hero-main-image">
                    </div>
                    <!-- Floating Images -->
                    <div class="banner-float-images">
                        <div class="float-image-one">
                            <img src="./assets/images_new/package-3.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/package-3.png 500w, 
                             ./assets/images_new/package-3.png 714w" alt="Banner Image One" class="float-image">
                        </div>
                        <div class="float-image-two">
                            <img src="./assets/images_new/package-1.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/package-1.png 500w, 
                             ./assets/images_new/package-1.png 710w" alt="Finance" class="float-image">
                        </div>
                        <div class="float-image-three">
                            <img src="./assets/images_new/package-2.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/package-2.png 500w, 
                             ./assets/images_new/package-2.png 714w" alt="Order Value" class="float-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="strategy-section wf-section" style="background-color: #f9fafb;padding-top: 50px;background-image: url('./assets/images_new/bg4.png');background-size: cover;background-position: 0 0">
    <div class="page-container w-container">
        <div class="services-block">

            <h2 class="strategy-heading"><span style="color:#0070DF">Fast</span> feedback. <span style="color:#0070DF">Better</span> pitches. <span style="color:#0070DF">Happy</span> clients.</h2>

            <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2556px, 0px, 0px); transition: all; width: 6390px;">
                        <div class="owl-item active" style="width: 1258px; margin-right: 20px;">
                            <div class="testimonial-single-slide">
                                <img src="assets/images_new/christian-t.png" alt="">
                                <div class="testimonial-slide-content">
                                    <p>The DIY tool is awesome. Easy to set up, an insane number of options and extremely transparent. The delivery was also enormously fast. In the end, our survey ensured success in the pitch because we were able to shine with prior knowledge from the target group.</p>
                                    <div class="testimonial-viewer">
                                        <div class="testimonial-name">
                                            <a href="#">Christian Büchler</a>
                                            <span>Founder, Social Ninjas</span>
                                        </div>
                                        <a href="#"><img src="assets/images_new/social-ninja-logo.png" alt="" height="48" style="width:210px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>


            <div class="features-services" style="padding-top:25px">
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d4-d8996253" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d5-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d5" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images/6449eb8c75b83703f4cebd26_Group%202490.svg" loading="lazy" alt="Save" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d9" class="bold-text" style="color: rgb(34, 34, 34);">Test messaging and design</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>Choose best branding names</li>
                            <li>Validate headlines, product benefits</li>
                            <li>Optimize Landing Pages, websites</li>
                        </ul>
                        <div class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/marketing-left.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.65625px" srcset="
                                                        ./assets/images_new/marketing-left.png 500w,
                                                        ./assets/images_new/marketing-left.png       612w
                                                    " alt="Growth" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e0-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e1-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e1" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images-new/6449eb8e4d0a0bf03087dc0a_Logo%20Two.svg" loading="lazy" alt="Globe" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e5" class="bold-text" style="color: rgb(34, 34, 34);">Fast results</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>Create your survey in minutes</li>
                            <li>Get responses in minutes</li>
                            <li>Easy results review and export</li>
                        </ul>
                        <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e9-d8996253" class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/marketing-center.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.671875px" srcset="
                                                        ./assets/images_new/marketing-center.png 500w,
                                                        ./assets/images_new/marketing-center.png       612w
                                                    " alt="Target" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ec-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ec" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ed-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ed" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images/6449eb90f0acdd8695d10564_Group%202493.svg" loading="lazy" alt="Settings" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22f1" class="bold-text" style="color: rgb(34, 34, 34);">Impressed clients</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>Ideas already validated with customers</li>
                            <li>Client pitch backup up by data</li>
                            <li>Easy to understand results</li>
                        </ul>
                        <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22f5-d8996253" class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/marketing-right.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.671875px" srcset="
                                                        ./assets/images_new/marketing-right.png 500w,
                                                        ./assets/images_new/marketing-right.png       612w
                                                    " alt="Analytics" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="ideas-section wf-section" style="background-color: #fff; background-image: url('./assets/images_new/bg5.png');background-size: cover;background-position: 0 0;padding-top: 50px">
    <div class="page-container w-container">

        <div class="overflow-off">
            <h2 data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff144" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="why-creative-heading">Pay only for results</h2>
        </div>
        <div class="overflow-off">
            <p data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff146" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-bottom: 0px" class="building-creative-paragraph">Get value out of every penny in your research budget. Run surveys when you need insights, not because you have a subscription!</p>
        </div>
        <div class="ideas-main-block">
            <div class="ideas">
                <div class="ideas-main-image-block">
                    <div data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff13f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;border-radius: 6px" class="ideas-main-banner"><img src="./assets/images_new/pricing-2-back.png" loading="lazy" sizes="(max-width: 479px) 81vw, (max-width: 767px) 70vw, (max-width: 991px) 75vw, (max-width: 1439px) 37vw, 496.1458435058594px" srcset="./assets/images_new/pricing-2-back.png 500w, ./assets/images_new/pricing-2-back.png 800w, ./assets/images_new/pricing-2-back.png 996w" alt="Employee Image" class="ideas-main-image"></div>
                </div>
                <a data-fancybox="register3" href="#registerbox" class="">
                    <div data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff141" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;border-radius: 6px" class="ideas-float-image"><img src="./assets/images_new/pricing-2-front.png" loading="lazy" sizes="(max-width: 479px) 56vw, (max-width: 991px) 58vw, (max-width: 1439px) 32vw, 416.4757080078125px" srcset="./assets/images_new/pricing-2-front.png 500w, ./assets/images_new/pricing-2-front.png 800w, ./assets/images_new/pricing-2-front.png 856w" alt="Chat" class="idea-float"></div>
                </a>
            </div>
            <div class="service-creative-text-block">

                <div class="creative-check-list-block">
                    <div class="home-page-creative-list-block">
                        <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                        <p class="creative-text-list-content" style="padding-bottom:20px"><span class="creative-list-span-text-content">No subscriptions</span>, pay as you go. Run as many surveys as you want, no commitment!</p>
                    </div>
                    <div class="home-page-creative-list-block">
                        <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                        <p class="creative-text-list-content list-three" style="padding-bottom:20px"><span class="creative-list-span-text-content">No hidden fees </span>, no monthly fees. You are paying to run surveys, there are no other fees or payments.</p>
                    </div>
                    <div class="home-page-creative-list-block">
                        <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                        <p class="creative-text-list-content list-two" style="padding-bottom:20px"><span class="creative-list-span-text-content">Secure payments: </span> make payments with trusted options like Stripe(with credit card) and PayPal</p>
                    </div>
                </div>
                <div class="learn-button-block">
                    <a data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff15f" data-fancybox="register5" href="#registerbox" class="start-free-trial-button-block feature-block footer-buttons-start discover-more learn w-inline-block" style="background-color:#0070DF">
                        <div class="start-trial-text-block feature-text-block discover-text" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Sign Up</div>
                        <div class="start-trial-text-block feature-text-block text-two discover-more-text" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Sign Up</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pricing-page-solutions-section wf-section" style="background-color: #fff;background-image: url('./assets/images_new/bg7.png');background-size: cover;background-position: 0 0">
    <div class="pricing-page-solutions-container w-container">
        <div class="pricing-page-solutions-main-block">

            <h2 class="pricing-solutions-heading" style="width:70%"><span style="color:#0070DF">Market Research</span> is what <span style="color:#0070DF">we know</span></h2>

            <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2556px, 0px, 0px); transition: all; width: 6390px;">
                        <div class="owl-item active" style="width: 1258px; margin-right: 20px;">
                            <div class="testimonial-single-slide">
                                <img src="assets/images_new/alexa-t.png" alt="">
                                <div class="testimonial-slide-content">
                                    <p>Make Opinion expertise in survey design, research methodologies, and user-friendly platform made the entire process seamless.</p>
                                    <div class="testimonial-viewer">
                                        <div class="testimonial-name">
                                            <a href="#">Alexa Cotiaux</a>
                                            <span>Product Lead at Oaks</span>
                                        </div>
                                        <a href="#"><img src="assets/images_new/oaks-logo.png" alt="" height="48" style="width:98px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>

            <div class="counter-container w-container">
                <div class="counter-main-block">
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b066-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b066" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block">
                        <div class="count-icon-block"><img src="./assets/images_new/g-survey.png" loading="lazy" alt="Feature Icon Three"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">200K+</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">Surveys</p>
                    </div>
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b06d-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b06d" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block box-two">
                        <div class="count-icon-block"><img src="./assets/images_new/g-answers.png" loading="lazy" alt="Feature Icon One"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">15M+</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">Survey Answers</p>
                    </div>
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b074-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b074" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block box-three">
                        <div class="count-icon-block"><img src="./assets/images_new/g-takers.png" loading="lazy" alt="Feature Icon Two"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">52M+</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">Survey Takers</p>
                    </div>
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b07b-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b07b" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block box-four">
                        <div class="count-icon-block four"><img src="./assets/images_new/g-clients.png" loading="lazy" alt="Icon"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">200+</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">Satisfied Clients</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="home-page-solutions-section wf-section" style="background-image: url('./assets/images_new/bg6.png');background-size: cover;background-position: 0 0">
    <div class="home-page-solutions-container w-container">
        <div class="home-page-solutions-main-block">
            <h2 class="home-page-solutions-heading">Your <span style="color:#0070DF">success</span> is our success!</h2>

            <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2556px, 0px, 0px); transition: all; width: 6390px;">
                        <div class="owl-item active" style="width: 1258px; margin-right: 20px;">
                            <div class="testimonial-single-slide">
                                <img src="assets/images_new/samia-t.png" alt="">
                                <div class="testimonial-slide-content">
                                    <p style="font-size: 22px">I had a great experience working with Make Opinion. Their team was responsive and really demonstrated a commitment to helping me realise my goals[...]. I’m super grateful to the Make Opinion team and definitely think their service is a great budget friendly time-saving tool.</p>
                                    <div class="testimonial-viewer">
                                        <div class="testimonial-name">
                                            <a href="#">Samia McClain</a>
                                            <span>ESSEC M1 Student, Public Relations<br>Author of L'aficionada</span>
                                        </div>
                                        <a href="#"><img src="assets/images_new/uni11.png" alt="" height="96" style="width:96px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>
            <div class="home-page-solutions">
                <div id="w-node-d64d79a4-4a4a-794e-205b-03edfbd2fdb2-29476037" data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdb2" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;background: #fff" class="home-page-solutions-block">
                    <div class="home-page-solutions-text-block">
                        <div class="header-small width-eighty">Expert advice</div>
                        <p class="home-page-solutions-sub-paragraph">Do you have questions about your research, fine tuning or designing your survey?<br>Our experts will help you!</p>
                        <div class="home-page-solutions-button-block">
                            <a data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdb9" onclick="book_a_demo()" class="button home-three-start-free-trial creative-block-learn-more-button w-inline-block" style="border: 1px solid #0070DF">
                                <div class="trail-text home-three-text" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">Book a demo</div>
                                <div class="trail-text-two home-three-text" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">Book a demoS</div>
                            </a>
                        </div>
                    </div>
                    <div class="home-page-solutions-image-block"><img src="./assets/images_new/expert-advice.png" loading="lazy" alt="Layout" class="solutions-home-three-image"></div>
                </div>
                <div id="w-node-d64d79a4-4a4a-794e-205b-03edfbd2fdc0-29476037" data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdc0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;background: #fff" class="home-page-solutions-block">
                    <div class="home-page-solutions-text-block">
                        <div class="header-small width-eighty">Fast support</div>
                        <p class="home-page-solutions-sub-paragraph">We have a dedicated support team to answer your platform usage related questions at any time.</p>
                        <div class="home-page-solutions-button-block">
                            <a data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdb9" data-fancybox="register4" href="#registerbox" class="button home-three-start-free-trial creative-block-learn-more-button w-inline-block" style="border: 1px solid #0070DF">
                                <div class="trail-text home-three-text" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">Sign Up</div>
                                <div class="trail-text-two home-three-text" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">Sign Up</div>
                            </a>
                        </div>
                    </div>
                    <div class="home-page-solutions-image-block"><img src="./assets/images_new/fast-support.png" loading="lazy" alt="Security Image" class="solutions-home-three-image"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ask-for-demo-hero-section wf-section" style="padding-bottom: 400px;background-color: #fff;background-image: url('./assets/images_new/bg8.png');background-size: cover;background-position: 0 0">
    <div class="container-small w-container">
        <div class="demo-main-block">
            <h1 class="demo-heading">Create a free Make Opinion account</h1>
            <p class="demo-para">And start your first survey today!</p>
            <div class="demo-form-block">
                <div id="w-node-e6190bc3-7b05-8029-1f59-c34b1326c35d-e200f905" class="demo-form" style="background-color: #F9FAFB">
                    <div class="demo" style="background-color: #F9FAFB">
                        <div class="bold-text demo-margin">Create free account</div>
                        <div class="sign-up">
                            <div class="w-form">
                                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="POST" action="https://app.makeopinion.com/index.php?page=register" aria-label="Email Form 2">

                                    <div class="text-field-block">
                                        <input type="text" class="contact-form-text-field w-input" maxlength="256" name="firstname" data-name="fname" placeholder="Name*" id="firstname" required="">
                                        <input type="tel" class="contact-form-text-field w-input" maxlength="256" name="lastname" data-name="lname" placeholder="Last Name*" id="lastname" required="">
                                    </div>


                                    <input type="text" class="contact-form-text-field w-input" maxlength="256" name="email_register" data-name="email_register" placeholder="Email address*" id="email_register" required="">
                                    <input type="password" class="contact-form-text-field w-input" maxlength="256" name="password_register" data-name="password_register" placeholder="Password*" id="password_register" required="">
                                    <input type="text" class="contact-form-text-field w-input" maxlength="256" name="company" data-name="company" placeholder="Company*" id="company" required="">
                                    <input type="hidden" name="source" data-name="source" value="website" id="source">
                                    <input type="hidden" name="register" data-name="register" value="true" id="true">
                                    <input type="hidden" name="street_line1" data-name="street_line1" value="" id="street_line1">
                                    <input type="hidden" name="street_line2" data-name="street_line2" value="" id="street_line2">
                                    <input type="hidden" name="zip_code" data-name="zip_code" value="" id="zip_code">
                                    <input type="hidden" name="city" data-name="city" value="" id="city">
                                    <input type="hidden" name="phoneNumber" data-name="phoneNumber" value="" id="phoneNumber">


                                    <label class="w-checkbox checkbox-field"><input type="checkbox" id="terms1" name="terms" data-name="Checkbox" class="w-checkbox-input"><span class="google-sign-up-text w-form-label" for="checkbox">I accept the<a href="https://app.makeopinion.com/Make%20Opinion%20DIY%20Terms%20and%20Conditions.pdf" class="privacy" target="_blank" style="color:#0070DF"> terms</a></span></label>

                                    <input type="submit" value="Create free account" data-wait="Please wait..." class="contact-us-submit demo-submit w-button">
                                </form>
                                <div class="w-form-done" tabindex="-1" role="region" aria-label="Email Form 2 success">
                                    <div>Thank you! Your submission has been received!</div>
                                </div>
                                <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email Form 2 failure">
                                    <div>Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-e6190bc3-7b05-8029-1f59-c34b1326c36f-e200f905" class="sign-up-image-main-block">
                    <div class="sign-up-banner-image">
                        <div class="girl-image">
                            <img src="./assets/images_new/register.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 77vw, (max-width: 991px) 34vw, (max-width: 1279px) 35vw, 433px"
                                srcset="./assets/images_new/register.webp 500w, 
                                  ./assets/images_new/register.png 800w, 
                                  ./assets/images_new/register.png 1054w" alt="Banner Girl Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include('footer.php'); ?>