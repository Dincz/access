<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TC9JSJM');</script>
    <!-- End Google Tag Manager -->


    <!-- microsoft clarity tag -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "erefp4jg0w");
    </script>

    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo CAPCTHA_SITE_KEY ?>"></script>
    <script>
        const CAPCTHA_SITE_KEY = "<?php echo CAPCTHA_SITE_KEY ?>";
    </script>
    <script src="<?php base_url() ?>assets/js/captcha.js"></script>


    <!-- <script>console.log("captcha key is : ", <?php echo CAPCTHA_SITE_KEY ?>);</script> -->

    <!-- RECAPTCHA END -->

    <!-- End microsoft clarity tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon  -->
    <link rel="shortcut icon" href="<?php echo asset_url() ?>images/CV-Icon.png" type="image/x-icon">
    <!-- bootstarp cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- owl carousel theme.css link -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/index.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet"
        href="<?php echo asset_url() ?>css/thankyou.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet"
        href="<?php echo asset_url() ?>css/webservices.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet"
        href="<?php echo asset_url() ?>css/seoservice.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet"
        href="<?php echo asset_url() ?>css/smmservice.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet"
        href="<?php echo asset_url() ?>css/ppcservice.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet"
        href="<?php echo asset_url() ?>css/videocreation.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/contact.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/blog.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/aboutus.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/aboutus.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/sitemap.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/career.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">

    <link rel="stylesheet" href="<?php echo asset_url() ?>css/privacy.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <link rel="stylesheet"
        href="<?php echo asset_url() ?>css/styletheme.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>">
    <!--<link rel="stylesheet" href="<?php echo asset_url() ?>css/styleTheme2.css?query=<?php echo md5(date('y-m-d H:i:s')) ?>"> -->
    <?php


    if ((strpos(current_url(), base_url('templates')) !== false) || (strpos(current_url(), base_url('website-templates')) !== false)) {
    ?>
        <link rel="stylesheet" href="<?php echo asset_url() ?>css/templates.css">
    <?php
    }
    ?>
    <!-- jQuery library Aishwarya -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript Aishwarya-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
    $blogdetails = $this->uri->segment(1);
    if ($blogdetails == 'blogdetails') {
        $blogdetails = $data['blogdetail'];
        //var_dump($data['blogdetail']);

    ?>
        <!-- meta tags -->
        <title><?php echo $blogdetails['meta-title']; ?></title>
        <meta name="description" content="<?php echo $blogdetails['meta-description']; ?>">
        <meta name="keywords" content="<?php echo $blogdetails['meta-keywords']; ?>">
        <!-- end meta tags  -->

        <!--OG TAGS-->

        <?php echo $blogdetails['og_tags']; ?>

        <!--END OF OG TAGS-->
        <?php
    } else {
        $pageurl = $this->uri->segment(1);

        $servicepageurl = $this->uri->segment(2);

        if ($pageurl == null) {
        ?>
            <title>Digital Marketing Services| ROI Driven Digital Marketing Agency Mumbai</title>
            <meta name="description"
                content="Digital Marketing Services - Web Design & Development, Search Engine Optimization, Social Media Marketing, PPC, Content Marketing, Our Focus is on ROI">
            <meta name="keywords" content="digital marketing services">
            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="https://crezvatic.com">
            <meta property="og:type" content="website">
            <meta property="og:title" content="Digital Marketing Services| ROI Driven Digital Marketing Agency Mumbai">
            <meta property="og:description"
                content="Digital Marketing Services - Web Design & Development, Search Engine Optimization, Social Media Marketing, PPC, Content Marketing, Our Focus is on ROI">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Digital-Marketing-Company-Home-Page.webp">
            <meta property="og:site_name" content="Crezvatic Private Limited" />

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com">
            <meta name="twitter:title" content="Digital Marketing Services| ROI Driven Digital Marketing Agency Mumbai">
            <meta name="twitter:description"
                content="Digital Marketing Services - Web Design & Development, Search Engine Optimization, Social Media Marketing, PPC, Content Marketing, Our Focus is on ROI">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Digital-Marketing-Company-Home-Page.webp">

            <link rel="canonical" href="https://crezvatic.com" />

        <?php
        }
        // for Webservices page
        elseif ($pageurl == "website-design-and-development") { ?>
            <!-- <meta name="title" content="Web Design and Development Company in Mumbai | Call - 9820160482"> -->
            <title>Web Design and Development Company in Mumbai | Call - <?php echo PHONE; ?></title>
            <meta name="description"
                content="Crezvatic is a Creative Website Design and Development Company In Thane, Mumbai. We Design Professional Websites that Converts Visitors into Leads">
            <meta name="keywords" content="website development company in mumbai, website designing company in mumbai">
            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="https://crezvatic.com/website-design-and-development">
            <meta property="og:type" content="website">
            <meta property="og:title" content="Web Design and Development Company in Mumbai | Call - +91-9820160482">
            <meta property="og:description"
                content="Crezvatic is a Creative Website Design and Development Company In Thane, Mumbai. We Design Professional Websites that Converts Visitors into Leads">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Web-Design-and-Development-Company.webp">

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com/website-design-and-development">
            <meta name="twitter:title" content="Web Design and Development Company in Mumbai | Call - +91-9820160482">
            <meta name="twitter:description"
                content="Crezvatic is a Creative Website Design and Development Company In Thane, Mumbai. We Design Professional Websites that Converts Visitors into Leads">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Web-Design-and-Development-Company.webp">

            <link rel="canonical" href="https://crezvatic.com/website-design-and-development" />

        <?php }
        // for about us page 
        elseif ($pageurl == "digital-markting-consultant-near-me") { ?>
            <!-- <meta name="title" content="Digital Marketing Consultant| Digital Marketing Company in Mumbai"> -->
            <title>Digital Marketing Consultant| Digital Marketing Company in Mumbai</title>
            <meta name="description"
                content="As Professional Digital Marketing Consultants, We Plan & Create Digital Marketing Strategies & Campaigns to Grow Your Business Online.">
            <meta name="keywords" content="digital marketing consultant">
            <!-- Facebook Meta Tags -->

            <meta property="og:url" content="https://crezvatic.com/digital-markting-consultant-near-me">
            <meta property="og:type" content="website">
            <meta property="og:title" content="Digital Marketing Consultant | Digital Marketing Company in Mumbai">
            <meta property="og:description"
                content="As Professional Digital Marketing Consultants, We Plan & Create Digital Marketing Strategies & Campaigns to Grow Your Business Online.">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Digital-Marketing-Company-Home-Page.webp">

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com/digital-markting-consultant-near-me">
            <meta name="twitter:title" content="Digital Marketing Consultant | Digital Marketing Company in Mumbai">
            <meta name="twitter:description"
                content="As Professional Digital Marketing Consultants, We Plan & Create Digital Marketing Strategies & Campaigns to Grow Your Business Online.">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Digital-Marketing-Company-Home-Page.webp">

            <link rel="canonical" href="https://crezvatic.com/digital-markting-consultant-near-me" />

        <?php }
        // for ppc service page 
        elseif ($pageurl == "ppc-service-in-mumbai") { ?>
            <!-- <meta name="title" content="PPC Service In Mumbai |Connect Today To Create Customized PPC Ads"> -->
            <title>PPC Service In Mumbai |Connect Today To Create Customized PPC Ads</title>
            <meta title="title" content="description"
                content="We Create Effective PPC Campaigns That Will Help You Generate Traffic On Your Website, Which Will Turn Leads Into Conversions And Increase Your Business Revenue.">
            <meta name="keywords" content="ppc services in mumbai, sem services">

            <meta name="description" content=" We Create Effective PPC Campaigns That Will
Help You Generate Traffic On Your Website, Which Will Turn Leads Into Conversions
And Increase Your Business Revenue.">
            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="https://crezvatic.com/ppc-service-in-mumbai">
            <meta property="og:type" content="website">
            <meta property="og:title" content="PPC Service In Mumbai |Connect Today To
Create Customized PPC Ads">
            <meta property="og:description" content=" We Create Effective PPC Campaigns
That Will Help You Generate Traffic On Your Website, Which Will Turn Leads Into
Conversions And Increase Your Business Revenue.">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/PPC-Pay-Per-Click-Advertising.webp">
            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com/ppc-service-in-mumbai">
            <meta name="twitter:title" content="PPC Service In Mumbai |Connect Today To
Create Customized PPC Ads">
            <meta name="twitter:description" content=" We Create Effective PPC Campaigns
That Will Help You Generate Traffic On Your Website, Which Will Turn Leads Into
Conversions And Increase Your Business Revenue.">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/PPC-Pay-Per-Click-Advertising.webp">
            <link rel="canonical" href="https://crezvatic.com/ppc-service-in-mumbai" />
        <?php }
        // for video creation page 
        elseif ($pageurl == "video-marketing-agency") { ?>
            <!-- <meta name="title" content="Video Marketing Services |Best Video Marketing Agency in Mumbai"> -->
            <title>Video Marketing Services |Best Video Marketing Agency in Mumbai</title>
            <meta name="description"
                content="We Create Videos That Will Give You A Visible Boost In The Sales. our Video Marketing Service Will Help You Maximize Your Marketing Activities With Powerful Videos.">
            <meta name="keywords" content="video marketing agency, video marketing services,  video marketing company">
            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="https://crezvatic.com/video-marketing-agency">
            <meta property="og:type" content="website">
            <meta property="og:title" content="Video Marketing Services |Best Video Marketing Agency in Mumbai">
            <meta property="og:description"
                content="We Create Videos That Will Give You A Visible Boost In The Sales. our Video Marketing Service Will Help You Maximize Your Marketing Activities With Powerful Videos.">
            <meta property="og:image" content="<?php echo base_url() ?>categories/NotDisplayed/Video-Marketing-Agency.webp">

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com/video-marketing-agency">
            <meta name="twitter:title" content="Video Marketing Services |Best Video Marketing Agency in Mumbai">
            <meta name="twitter:description"
                content="We Create Videos That Will Give You A Visible Boost In The Sales. our Video Marketing Service Will Help You Maximize Your Marketing Activities With Powerful Videos.">
            <meta name="twitter:image" content="<?php echo base_url() ?>categories/NotDisplayed/Video-Marketing-Agency.webp">

            <link rel="canonical" href="https://crezvatic.com/video-marketing-agency" />

        <?php }
        // for blog main page 
        elseif ($pageurl == "digital-marekting-blogs-and-articals") { ?>
            <!-- <meta  name="title" content="Best Digital Marketing Blogs You Must Read to Upgrade Yourself"> -->
            <title>Best Digital Marketing Blogs You Must Read to Upgrade Yourself</title>
            <meta name="description"
                content="Read new & trending digital marketing blogs and articles. learn new tips & tricks to help build a successful online business with amazing strategies. ">
            <meta name="keywords" content="best digital marketing blogs,digital marketing blogs">
        <?php }
        // for seo service page 
        elseif ($pageurl == "best-seo-company-in-Mumbai") { ?>
            <meta name="title" content="SEO Services In Mumbai - Best SEO Services in Mumbai">
            <title>SEO Services In Mumbai - Best SEO Services in Mumbai</title>
            <meta name="description"
                content="Increase organic visibility, quality traffic & sales for your business. 10+ yrs experience, Collaborate with the best SEO Company, in Mumbai.">
            <meta name="keywords" content="SEO company in Mumbai, Seo services in mumbai, professional seo services">
            <meta property="og:type" content="website">
            <meta property="og:title" content="SEO Services In Mumbai - Best SEO Agency in Mumbai">
            <meta property="og:url" content="https://crezvatic.com/best-seo-company-in-Mumbai.jpg">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Crezvatic_SEO_Website_JL-01..webp">
            <meta property="og:description"
                content="Increase organic visibility, quality traffic & sales for your business. 10+ yrs experience, Collaborate with the best SEO Company, in Mumbai.">
            <meta property="og:site_name" content="Crezvatic Private Limited" />

            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="https://crezvatic.com/best-seo-company-in-Mumbai">
            <meta property="og:type" content="website">
            <meta property="og:title" content="SEO Services In Mumbai - Best SEO Agency in Mumbai">
            <meta property="og:description"
                content="Increase organic visibility, quality traffic & sales for your business. 10+ yrs experience, Collaborate with the best SEO Company, in Mumbai.">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Crezvatic_SEO_Website_JL-01..webp">

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com/best-seo-company-in-Mumbai">
            <meta name="twitter:title" content="SEO Services In Mumbai - Best SEO Agency in Mumbai">
            <meta name="twitter:description"
                content="Increase organic visibility, quality traffic & sales for your business. 10+ yrs experience, Collaborate with the best SEO Company, in Mumbai.">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Crezvatic_SEO_Website_JL-01..webp">

            <link rel="canonical" href="https://crezvatic.com/best-seo-company-in-mumbai" />



        <?php }
        // for smm service page 
        elseif ($pageurl == "social-media-marketing-agency-near-me") { ?>
            <!-- <meta  name="title" content="Best Social Media Marketing Agency in Mumbai | ROI Driven Strategies"> -->
            <title>Best Social Media Marketing Agency in Mumbai | ROI Driven Strategies</title>
            <meta name="description"
                content="Looking for a Social Media Marketing Company in Mumbai? #1 Social Media Agency in Mumbai. We Generate Sales & Revenue via Social Media Marketing. ">
            <meta name="keywords" content="social media marketing agency in mumbai , social media marketing agency near me">
            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="https://crezvatic.com/social-media-marketing-agency-near-me">
            <meta property="og:type" content="website">
            <meta property="og:title" content="Best Social Media Marketing Agency in Mumbai | ROI Driven Strategies">
            <meta property="og:description"
                content="Looking for a Social Media Marketing Company in Mumbai? #1 Social Media Agency in Mumbai. We Generate Sales & Revenue via Social Media Marketing. ">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Social-Media-Marketing-Agency-Near-Me.webp">

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com/social-media-marketing-agency-near-me">
            <meta name="twitter:title" content="Best Social Media Marketing Agency in Mumbai | ROI Driven Strategies">
            <meta name="twitter:description"
                content="Looking for a Social Media Marketing Company in Mumbai? #1 Social Media Agency in Mumbai. We Generate Sales & Revenue via Social Media Marketing. ">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Social-Media-Marketing-Agency-Near-Me.webp">

            <link rel="canonical" href="https://crezvatic.com/social-media-marketing-agency-near-me" />

        <?php }
        // for contact page 
        elseif ($pageurl == "contact-us-for-best-digital-marketing-services") {
        ?>
            <title>Crezvatic-Digital Marketing Service Providers in Mumbai</title>
            <meta name="description"
                content="crezvatic is a leading digital marketing services agency in Mumbai. we have the best web designers, web developers, SEO experts, and social media experts to make your business grow effectively. Contact us today.">
            <meta name="keywords" content="digital marketing services">
            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="https://crezvatic.com/contact-us-for-best-digital-marketing-services">
            <meta property="og:type" content="website">
            <meta property="og:title" content="Crezvatic-Digital Marketing Service Providers in Mumbai">
            <meta property="og:description"
                content="crezvatic is a leading digital marketing services agency in Mumbai. we have the best web designers, web developers, SEO experts, and social media experts to make your business grow effectively. Contact us today.">
            <meta property="og:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Digital-Marketing-Company-Home-Page.webp">

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="https://crezvatic.com/contact-us-for-best-digital-marketing-services">
            <meta name="twitter:title" content="Crezvatic-Digital Marketing Service Providers in Mumbai">
            <meta name="twitter:description"
                content="crezvatic is a leading digital marketing services agency in Mumbai. we have the best web designers, web developers, SEO experts, and social media experts to make your business grow effectively. Contact us today.">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>categories/NotDisplayed/Digital-Marketing-Company-Home-Page.webp">

            <link rel="canonical" href="https://crezvatic.com/contact-us-for-best-digital-marketing-services" />

        <?php
        }

        // for privacy page 
        elseif ($pageurl == "privacy-policy-for-website") {
        ?>
            <title>Crezvatic Digital Marketing Agency Privacy policy of the website </title>
            <meta name="description"
                content="This privacy policy sets out how crezvatic uses and protects any information that you give crezvatic when you use this website. ">
            <meta name="keywords" content="privacy policy for website, privacy policy">
        <?php
        }
        // for sitemap 
        elseif ($pageurl == "sitemap") {
        ?>
            <title>Crezvatic- Html Sitemap of the website</title>
            <meta name="description"
                content="Html Sitemap- Check out all the page links present on the website from this page for easy navigation of the website.">
            <meta name="keywords" content="sitemap">
        <?php
        }

        // for Service pages; can only accessable with direct link
        elseif ($servicepageurl == $data["servicedetail"]['seo-url']) {
            //     echo "<pre>";
            //    print_r($data["servicedetail"]['meta-title']);
            //    exit(); 
        ?>
            <title><?php echo $data["servicedetail"]['meta-title']; ?></title>
            <meta name="description" content="<?php echo $data["servicedetail"]['meta-description']; ?>">
            <meta name="keywords" content="<?php echo $data["servicedetail"]['meta-keywords']; ?>">
            <!-- Facebook Meta Tags -->
            <meta property="og:url" content="<?php echo base_url() ?><?php echo $data["servicedetail"]['seo-url']; ?>">
            <meta property="og:type" content="website">
            <meta property="og:title" content="<?php echo $data["servicedetail"]['meta-title']; ?>">
            <meta property="og:description" content="<?php echo $data["servicedetail"]['meta-description']; ?>">
            <meta property="og:image"
                content="<?php echo base_url() ?>uploads/service/<?php echo $data["servicedetail"]['service-image']; ?>">

            <!--<?php echo base_url() ?>uploads/service/<?php echo $row['service-image']; ?>-->

            <!-- Twitter Meta Tags -->
            <meta name="twitter:card" content="summary_large_image">
            <meta property="twitter:domain" content="crezvatic.com">
            <meta property="twitter:url" content="<?php echo base_url() ?><?php echo $data["servicedetail"]['seo-url']; ?>">
            <meta name="twitter:title" content="<?php echo $data["servicedetail"]['meta-title']; ?>">
            <meta name="twitter:description" content="<?php echo $data["servicedetail"]['meta-description']; ?>">
            <meta name="twitter:image"
                content="<?php echo base_url() ?>uploads/service/<?php echo $data["servicedetail"]['service-image']; ?>">

            <link rel="canonical" href="<?php echo base_url() ?><?php echo $data["servicedetail"]['seo-url']; ?>" />
        <?php
        }

        // for templates main page
        elseif ((strpos(current_url(), base_url('website-templates')) !== false)) {
        ?>
            <title>Website Design Templates And Customized Themes Online- Crezvatic </title>
            <meta name="description"
                content="choose from our best customizable website designs and themes for all types of business online Health Care Theme, Education Theme, Hotel, Restaurant, Gym Theme, Finance Theme and more.">
            <meta name="keywords" content="website templates, website design templates">
        <?php
        }

        // for templates each theme
        elseif ((strpos(current_url(), base_url('templates')) !== false)) {

        ?>
            <title>Website Templates - <?php echo $template['meta_title'] ?></title>
            <meta name="description" content="<?php echo $template['meta_description'] ?>">
            <meta name="keywords" content="<?php echo $template['meta_keywords'] ?>">
    <?php
        }
    }
    ?>
    <meta name="google-site-verification" content="Ezl2U65BDhd6jyIN2V-pfcLM1Z3RmQU36Qoi88PzRQU" />

    <!--WOTNOT START HERE -->
    <script src="https://app.wotnot.io/chat-widget/3zu2NtiRKJKk030405291044OYMW3DJk.js" defer></script>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC9JSJM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <style>
    .accessibility-controls {
        background-color: #4e0405;
    }

    .accessibility-btn {
        color: #fff;
        width: 45px;
        height: 45px;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        background: transparent;
        transition: background-color 0.3s ease, transform 0.2s ease;
        display: flex;
    justify-content: center;
    align-items: anchor-center;
    }

    .accessibility-btn:hover {
        background-color: #fff !important;
        transform: translateY(-2px);
    }
    </style>

    <header>
    <div class="accessibility-controls py-2">
    <div class="container">
        <div class="d-flex justify-content-center gap-3">
            <button onclick="changeTextSize('decrease')" class="btn accessibility-btn" title="Decrease Text">A-</button>
            <button onclick="changeTextSize('reset')" class="btn accessibility-btn" title="Reset Text">A</button>
            <button onclick="changeTextSize('increase')" class="btn accessibility-btn" title="Increase Text">A+</button>
        </div>
    </div>
</div>
        <div class="container d-flex flex-row flex-nowrap justify-content-between align-items-center py-3">

            <div class="right">
                <a class="menu d-flex flex-column flex-nowrap justify-content-center align-items-center gap-2 px-3 py-3"
                    data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="left">
                <a href="<?php echo base_url() ?>">
                    <img src="<?php echo asset_url() ?>images/logo/white_logo.png" alt="logo" title="Crezvatic">
                </a>
            </div>

            <div class="right d-flex flex-row flex-nowrap align-items-items-center gap-3">
                <div class="btn1 right d-flex flex-row flex-nowrap align-items-items-center gap-3">
                    <a href="#book_slot_section" class="button-85 meet px-4 py-2">Let's Meet</a>
                    <a href="#book_slot_section"
                        class="button-85 mobile-call d-flex flex-column flex-nowrap justify-content-center align-items-center">Let's
                        Meet
                        <!-- <dotlottie-player autoplay loop mode="normal" src="<?php echo asset_url() ?>images/meeting.lottie">
                        </dotlottie-player> -->
                    </a>
                </div>
                <div class="btn2 right d-flex flex-row flex-nowrap align-items-items-center gap-3">
                    <!-- <a href="tel:<?php echo PHONE; ?>" class="button-85 call px-4 py-2"><?php echo PHONE; ?></a> -->
                    <a href="tel:+91-86575 54091"
                        class="button-85 call px-4 py-2 d-flex flex-column flex-nowrap justify-content-center align-items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30">
                       <path d="M0 0h24v24H0V0z" fill="none" />
                       <path fill="#FFFFFF" d="M19.23 15.26l-2.54-.29c-.61-.07-1.21.14-1.64.57l-1.84 1.84c-2.83-1.44-5.15-3.75-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52c-.12-1.01-.97-1.77-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07.53 8.54 7.36 15.36 15.89 15.89 1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98z" />
                    </svg> -->
                        <!-- Call Now -->
                        <dotlottie-player autoplay loop mode="normal" src="<?php echo asset_url() ?>images/call.lottie">
                        </dotlottie-player>
                    </a>

                </div>
            </div>

        </div>
    </header>
    <!-- slide drawer -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
        style="background-color: #4e0405;">
        <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h4>
            <span type="button" class="text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="mdi-window-close" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#626262"
                        d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" />
                </svg>
            </span>
        </div>
        <div class="offcanvas-body d-flex flex-column align-items-start gap-2">
            <a class="w-100 px-4 py-2" href="<?php echo base_url() ?>">Home</a>
            <a class="w-100 px-4 py-2" href="<?php echo base_url() ?>digital-markting-consultant-near-me">About</a>
            <a class="w-100 px-4 py-2" href="<?php echo base_url() ?>digital-marekting-blogs-and-articals">Blog</a>
            <div class="dropdown w-100">
                <a class="dropdown_main
                w-100 px-4 py-2 d-flex flex-nowrap justify-content-between align-items-center"
                    data-bs-toggle="dropdown" aria-expanded="false" href="#">
                    Services
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu w-100 p-0">
                    <li><a class="dropdown-item px-3 py-2"
                            href="<?php echo base_url() ?>website-design-and-development">Website Design and
                            Development</a></li>
                    <li><a class="dropdown-item px-3 py-2"
                            href="<?php echo base_url() ?>best-seo-company-in-Mumbai">Search Engine Optimization
                            (SEO)</a></li>
                    <li><a class="dropdown-item px-3 py-2"
                            href="<?php echo base_url() ?>social-media-marketing-agency-near-me">Social Media Marketing
                            (SMM)</a></li>
                    <li><a class="dropdown-item px-3 py-2" href="<?php echo base_url() ?>ppc-service-in-mumbai">Pay Per
                            Click (PPC)</a></li>
                    <li><a class="dropdown-item px-3 py-2" href="<?php echo base_url() ?>video-marketing-agency">Video
                            Creation</a></li>
                </ul>
            </div>
            <a class="w-100 px-4 py-2"
                href="<?php echo base_url() ?>career">Careers</a>
                <a class="w-100 px-4 py-2"
                href="<?php echo base_url() ?>contact-us-for-best-digital-marketing-services">Contact Us</a>

            <!--<a class="w-100 px-4 py-2" href="<?php echo base_url() ?>website-templates">Website Templates</a>-->
        </div>
    </div>
    <!-- end  -->
    <script>
    // Function to change text size
    function changeTextSize(action) {
    let html = document.documentElement; // Target <html> instead of <body>
    let currentSize = parseFloat(window.getComputedStyle(html).fontSize); // Get root size
    let newSize;

    switch (action) {
        case 'increase':
            newSize = currentSize * 1.2; // Increase by 20%
            break;
        case 'decrease':
            newSize = currentSize * 0.8; // Decrease by 20%
            break;
        case 'reset':
            newSize = 16; // Reset to default (match your base size)
            break;
        default:
            return;
    }

    // Optional: Set min/max limits
    if (newSize < 12) newSize = 12;
    if (newSize > 32) newSize = 32;

    // Apply the new size to the root
    html.style.fontSize = newSize + 'px';

    // Save preference
    localStorage.setItem('fontSize', newSize);
}

// Apply saved size on load
window.onload = function() {
    let savedSize = localStorage.getItem('fontSize');
    if (savedSize) {
        document.documentElement.style.fontSize = savedSize + 'px';
    }
};
</script>