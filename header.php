<!DOCTYPE html>
<html data-wf-domain="makeopinion.com" data-wf-page="64180ac3118cc5475656367e" data-wf-site="64180342570b0dc26c6fd2d1" lang="en" class="w-mod-js w-mod-ix wf-inter-n4-active wf-inter-n5-active wf-inter-n6-active wf-plusjakartasans-n3-active wf-plusjakartasans-n4-active wf-plusjakartasans-n5-active wf-plusjakartasans-n6-active wf-plusjakartasans-n7-active wf-plusjakartasans-n8-active wf-active" data-lt-installed="true">

<head>
   <?php
   // Get the current page address
   $current_page = $_SERVER['REQUEST_URI'];

   // Define an array to store page titles and their corresponding URLs
   $page_titles = array(
      "/en/index.php" => "Create surveys. Reach People. Understand Results.",
      "/en/audience.php" => "Real People. Honest Answers. Worldwide.",
      "/en/uc-brand.php" => "Brand Understanding",
      "/en/uc-concept-test.php" => "Concept Testing",
      "/en/uc-landing-page.php" => "Landing Page Optimization",
      "/en/uc-messaging.php" => "Messaging and Claims Test",
      "/en/uc-package-design.php" => "Package Design Testing",
      "/en/uc-price.php" => "Price Analysis Survey",
      "/en/uc-usage-attitudes.php" => "Usage and Attitudes Survey",
      "/en/uc-ux-research.php" => "UX Research Survey",
      "/en/pricing.php" => "Pay only for results. No platform fees, no subscriptions!",
      "/en/blog.php" => "Make Opinion Blog",
      "/en/about-us-mission.php" => "Make Opinion Misssion",
      "/en/about-us-conferences.php" => "Make Opinion Team at conferences",
      "/en/research-students.php" => "Survey Tool for Students",
      "/en/user-designer.php" => "Make Opinion for Designers",
      "/en/user-ecommerce.php" => "Make Opinion for eCommerce Platforms",
      "/en/user-eshop.php" => "Make Opinion for eShops",
      "/en/user-marketing.php" => "Make Opinion for Marketing Teams",
      "/en/user-product.php" => "Make Opinion for Product Teams",
      "/en/user-researcher.php" => "Make Opinion for Researchers",
      "/en/user-startup.php" => "Make Opinion for Startups",
      "/en/user-students.php" => "Make Opinion for Students"
   );

   $page_descriptions = array(
      "/en/index.php" => "Make Opinion is a complete Market Research platform, allowing businesses to gather fast customer insights from real people worldwide.",
      "/en/audience.php" => "Access millions of survey respondents across the globe in minutes. Real time pricing and capacity feasibility before paying anything.",
      "/en/uc-brand.php" => "Understand how your customers view your brand, your competition, reasons and barriers for product usage. Make Opinion brand awareness surveys.",
      "/en/uc-concept-test.php" => "Identify customer needs and preferences, so that you can build products for real needs. Start a Concept Test survey today.",
      "/en/uc-landing-page.php" => "Test the performance of your Landing Page with surveys. Understand why users prefer design and content variants.",
      "/en/uc-messaging.php" => "Write persuasive content that sells. Understand what messages work better with a messaging test survey today.",
      "/en/uc-package-design.php" => "Design amazing product packages that sell. Find the perfect design and copy for your product with Package Test surveys.",
      "/en/uc-price.php" => "Understand customer expectations. Find prices for new products and optimise existing prices with price analysis surveys today.",
      "/en/uc-usage-attitudes.php" => "Understand your customer base: who are they, how to target them, and with what product offerings.",
      "/en/uc-ux-research.php" => "Design great user experiences by testing with real people. Understand users preferences with UX Research surveys.",
      "/en/pricing.php" => "Get value out of every penny in your research budget. Run surveys when you need insights, not because you have a subscription!",
      "/en/blog.php" => "Make Opinion Blog is introducing people in the world of Market Research. Survey Design, Audience Definition and specific methodologies are described in concise, easy to follow articles.",
      "/en/about-us-mission.php" => "Make Opinion mission is to empower every business, no matter its size or budget, to understand the market and its customers.",
      "/en/about-us-conferences.php" => "Review featured materials and events where we took center stage as featured speakers, sharing our insights on a range of market research topics.",
      "/en/research-students.php" => "Next level thesis backed by data from real surveys. Easy setup, fast results, all in one platform at affordable prices.",
      "/en/marketing.php" => "We empower Marketing teams to design amazing experiences. Fine tune branding and messaging. Impress your clients with pitches backed by customer opinions.",
      "/en/user-designer.php" => "Test User Experience with real people. Iterate based on real feedback from users with UX Research surveys.",
      "/en/user-ecommerce.php" => "Understand your competition, reasons and barriers for customer purchases. Find what your customers want, react and sell more.",
      "/en/user-eshop.php" => "Fine tune branding and messaging. Impress your clients with pitches backed by customer opinions.",
      "/en/user-marketing.php" => "Test and use product pictures and descriptions that sell. Optimize the experience of your users and simply sell more.",
      "/en/user-product.php" => "Validate ideas before investing in development. Prioritize features for max impact.",
      "/en/user-researcher.php" => "User-friendly platform, advanced question types and survey logic. Fast answers from real people and data visualisation for results.",
      "/en/user-startup.php" => "Validate and refine your business idea with real people. Build products that sell and are loved by customers.",
      "/en/user-students.php" => "Next level thesis backed by data from real surveys. Easy setup, fast results, all in one platform at affordable prices."
   );

   // Check if the current page exists in the array
   if (array_key_exists($current_page, $page_titles)) {
      // Set the title based on the current page
      $title = $page_titles[$current_page];
      $description = $page_descriptions[$current_page];
   } else {
      // Set a default title if the current page is not found in the array
      $title = "Create surveys. Reach People. Understand Results.";
      $description = "Make Opinion is a complete Market Research platform, allowing businesses to gather fast customer insights from real people worldwide.";
   }

   // Output the HTML with the dynamic title
   echo "
      <title>$title</title>
      <meta name=\"description\" content=\"$description\">";

   if ($current_page == '/en/imprint.php') {
      // Print the meta tags to prevent indexing
      echo '<meta name="robots" content="noindex, nofollow">';
   }
   ?>
   <?php
   $server = "http://localhost:3000";
   ?>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta property="og:type" content="website">
   <meta content="width=device-width, initial-scale=1" name="viewport">
   <link href="<?php echo $server; ?>/assets/css/zeta-template.webflow.00f8545d6.css?update=20240324" rel="stylesheet" type="text/css">
   <style>
      .wf-force-outline-none[tabindex="-1"]:focus {
         outline: none;
      }
   </style>
   <style>
      @media (min-width:992px) {
         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9b"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee99"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0eea0"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9e"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="a2e1b4f5-690a-4192-4b72-e267dd57c374"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="a2e1b4f5-690a-4192-4b72-e267dd57c372"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="b058aca7-51b0-c67f-d1b1-0a60c6f3ef17"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            color: rgb(0, 0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="eaa33a40-e23a-6100-1c87-d34d4cb5eff6"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            color: rgb(0, 0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="c8a50175-fa21-af14-854d-ec827ba7cacb"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="c8a50175-fa21-af14-854d-ec827ba7cac9"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }
      }
   </style>
   <link href="https://fonts.googleapis.com/" rel="preconnect">
   <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous">
   <!--<script src="https://makeopinion.com/en/assets/js/webfont.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/owl.carousel.min.css" >
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/owl.theme.default.min.css" >
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/magnific-popup.css" >
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/style.css?15" media="all">
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/responsive.css?22" > -->
   <!-- local -->

   <script src="<?php echo $server; ?>/assets/js/webfont.js" type="text/javascript"></script>
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/style.css?15" media="all">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/responsive.css?22">
   <script type="text/javascript">
      WebFont.load({
         google: {
            families: ["Inter:regular,500,600", "Plus Jakarta Sans:300,regular,500,600,700,800"]
         }
      });
   </script>
   <script type="text/javascript">
      ! function(o, c) {
         var n = c.documentElement,
            t = " w-mod-";
         n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
   </script>
   <script type="text/javascript">
      window.__WEBFLOW_CURRENCY_SETTINGS = {
         "currencyCode": "USD",
         "symbol": "$",
         "decimal": ".",
         "fractionDigits": 2,
         "group": ",",
         "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
         "hideDecimalForWholeNumbers": false
      };
   </script>
   <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
   <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.0/jquery.marquee.min.js"></script>

   <!-- Include Easy FancyBox -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


</head>

<body cz-shortcut-listen="true" class="audi-P  P-dsign">
   <header class="nevigation wf-section">
      <div data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1dc" data-animation="over-left" data-collapse="medium" data-duration="1000" data-easing="ease" data-easing2="ease" role="banner" class="navbar-main w-nav" id="header-sections" style="will-change: background; background-color: rgb(255, 255, 255);">
         <div class="navbar-container w-container">
            <a href="<?php echo $server; ?>/index.php" style="width: 244px;height: auto;padding-left:0px" class="zeta-template w-nav-brand" aria-label="home"><img src="https://makeopinion.com/logo-main.png" loading="lazy" alt="Brand Logo" style="margin:-16px"></a>
            <nav role="navigation" class="navbar-menu-block w-nav-menu">
               <div class="navbar-menu-wrapper">
                  <div class="navbar-menu">
                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;display: none">
                        <div class="menu-font w-dropdown-toggle" role="button" tabindex="0">
                           <div onClick="window.location='<?php echo $server; ?>/index.php';" class="menu-font">Home</div>
                        </div>
                     </div>
                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-2" aria-controls="w-dropdown-list-2" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font">Products</div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-2" aria-labelledby="w-dropdown-toggle-2">
                           <a href="<?php echo $server; ?>/index.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinion Research</a>
                           <a style="display: none" href="live-interview.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinion Live Interview</a>
                           <a href="<?php echo $server; ?>/audience.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinion Audience</a>
                        </nav>
                     </div>

                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1ef"
                        class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-1"
                           aria-controls="w-dropdown-list-1" aria-haspopup="menu" aria-expanded="false"
                           role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font">Solutions</div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list"
                           style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                           id="w-dropdown-list-1" aria-labelledby="w-dropdown-toggle-1">
                           <div class="dropdown__menu__wrapper">
                              <div class="dropdown__menu__left">
                                 <h3 class="dropdown__menu__title">Use cases</h3>
                                 <a href="<?php echo $server; ?>/uc-brand.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Brand Understanding</a>
                                 <a href="<?php echo $server; ?>/uc-concept-test.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Concept and Idea Test</a>
                                 <a href="<?php echo $server; ?>/uc-landing-page.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Landing Page Optimization</a>
                                 <a href="<?php echo $server; ?>/uc-messaging.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Message and Claims Test</a>
                                 <a href="<?php echo $server; ?>/uc-package-design.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Package Design Test</a>
                                 <a href="<?php echo $server; ?>/uc-price.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Price Analysis</a>
                                 <a href="<?php echo $server; ?>/uc-usage-attitudes.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Usage and Attitudes</a>
                                 <a href="<?php echo $server; ?>/uc-ux-research.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">UX Research</a>
                              </div>
                              <div class="dropdown__menu__right">
                                 <h3 class="dropdown__menu__title">Our users</h3>
                                 <a href="<?php echo $server; ?>/user-designer.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Designers</a>
                                 <a href="<?php echo $server; ?>/user-ecommerce.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">E-Commerce</a>
                                 <a href="<?php echo $server; ?>/user-marketing.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Marketing</a>
                                 <a href="<?php echo $server; ?>/user-eshop.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">eShops</a>
                                 <a href="<?php echo $server; ?>/user-product.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Product</a>
                                 <a href="<?php echo $server; ?>/user-researcher.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Researcher</a>
                                 <a href="<?php echo $server; ?>/user-startup.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Startups</a>
                                 <a href="<?php echo $server; ?>/user-students.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Students</a>
                              </div>
                           </div>
                        </nav>
                     </div>

                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle">
                           <div onClick="window.location='<?php echo $server; ?>/pricing.php';" class="menu-font">Pricing</div>
                        </div>
                     </div>
                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle">
                           <div onClick="window.location='<?php echo $server; ?>/blog.php';" class="menu-font">Blog</div>
                        </div>
                     </div>

                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-3" aria-controls="w-dropdown-list-3" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font">About Us</div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-3" aria-labelledby="w-dropdown-toggle-3">
                           <a href="https://makeopinion.com/en/about-us-mission.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Our Mission</a>
                           <a href="https://makeopinion.com/en/about-us-conferences.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Industry Events</a>
                        </nav>
                     </div>

                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-3" aria-controls="w-dropdown-list-3" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font"><img src="https://makeopinion.com/en/assets/images_new/earth.svg" loading="lazy" width="25" height="25" alt="Language"></div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-3" aria-labelledby="w-dropdown-toggle-3">
                           <a href="https://makeopinion.com/en" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">English</a>
                           <a href="https://makeopinion.com/jp" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">日本語 (Japanese)</a>
                        </nav>
                     </div>

                  </div>
               </div>
            </nav>

            <div data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e229" class="hamburger">
               <div class="humburger-bar-one"></div>
               <div class="humburger-bar-two"></div>
            </div>
            <div class="smart-application-hero-button responsive-button-off" style="background-color:transparent">
               <div class="smart-application-hero-button-bg" style="background-color:transparent"></div>
               <a role="button" href="https://app.makeopinion.com/" class="trial-button feature-button w-inline-block" style="padding-left:20px; padding-right:20px;margin-right:10px;">
                  <div class="trail-text-two-home">Sign In</div>
               </a>
            </div>
            <div class="smart-application-hero-button responsive-button-off">
               <div class="smart-application-hero-button-bg"></div>
               <a role="button" data-fancybox="register" href="#registerbox" class="trial-button bg-yellow w-inline-block" style="background: #0070DF;color:#fff;padding-left:20px; padding-right:20px;">
                  <div class="trail-text-two-home">Register</div>
               </a>
            </div>
         </div>
         <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
      </div>
   </header>