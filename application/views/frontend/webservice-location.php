<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- end  -->
<style>
    a{
        color:#ee2c2f;
        text-decoration: none;
    }
    a:hover{
        color:#ffffff;
        text-decoration: none;
    }
    
    h1{
        font-size : 22pt;
    }
    h2{
        font-size : 20pt;
    }
    h3{
        font-size : 18pt;
    }
    p{
        font-size : 16pt;
    }
    span{
        font-weight : 500;
    }
    
</style>

<div id="web_services" class="p-2">

    <div id="blogDetailSection">
        <div class="body d-flex flex-column justify-content-center">

            <div class="scrollTrigger banner text-center">
            <?php
            $servicedetail = $data['servicedetail'];
            // print_r($servicedetail);
            ?>
            <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url() ?>uploads/service/<?php echo $servicedetail['service-image']  ?>" alt="<?php echo $servicedetails['alt-name']  ?>">
            </div>
            
            <!-- service we provide section start -->
            <div class="services_provide mb-5 pt-5 container">
                <div class="scrollTrigger heading w-100 text-center">
                    <h1>Our <span>Web Design</span> & <span>Development </span>Service</h1>
                </div>
                <div class="body d-flex flex-wrap col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                    <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-4 p-3">
                        <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                            <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                                data-src="<?php echo asset_url() ?>images/web_services/e-com.svg" alt="icons">
                            <h5 class="text-center"><span>E-Commerce </span>Development</h5>
                        </div>
                    </div>
                    <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-4 p-3">
                        <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                            <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                                data-src="<?php echo asset_url() ?>images/web_services/web-design.svg" alt="icons">
                            <h5 class="text-center">New <span>Website Design</span> Development</h5>
                        </div>
                    </div>
                    <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-4 p-3">
                        <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                            <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                                data-src="<?php echo asset_url() ?>images/web_services/re-design.svg" alt="icons">
                            <h5 class="text-center"><span>Re-Design</span> Of Existing Website</h5>
                        </div>
                    </div>
                    <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-4 p-3">
                        <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                            <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                                data-src="<?php echo asset_url() ?>images/web_services/content-management.svg"
                                alt="icons">
                            <h5 class="text-center"><span>Content Management</span> System For Your Website</h5>
                        </div>
                    </div>
                    <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-4 p-3">
                        <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                            <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                                data-src="<?php echo asset_url() ?>images/web_services/web-maintaince.svg" alt="icons">
                            <h5 class="text-center"><span>Maintenance</span> Service</h5>
                        </div>
                    </div>
                    <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-4 p-3">
                        <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                            <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                                data-src="<?php echo asset_url() ?>images/web_services/app-development.svg" alt="icons">
                            <h5 class="text-center"><span>App</span> Development</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end  -->
            <!-- call action button  -->
            <?php $this->load->view('layout/callbutton'); ?>
            <!-- end  -->
            <div class="content mb-5">
            <div class="title mb-3">
                <h1 class="scrollTrigger"><?php echo $servicedetail['service-heading']  ?></h1>
                <div class="scrollTrigger info d-flex flex-wrap align-items-start gap-3">
                    <!--<div class="date d-flex flex-nowrap align-items-center gap-1">-->
                    <!--    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/icons/calender.svg" alt="image">-->
                    <!--    <span><?php echo date('d F y', strtotime($servicedetails['created_at']))  ?></span>-->
                    <!--</div>-->
                    <div class="writter d-flex flex-nowrap align-items-center gap-1">
                        <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/icons/person.svg" alt="image">
                        <span>Written by Crezvatic</span>
                    </div>
                    <div class="category d-flex flex-nowrap align-items-center gap-1">
                        <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/icons/tag.svg" alt="image">
                        <span>Services</span>
                    </div>
                </div>
            </div>
            <div class="scrollTrigger description">
                <?php echo $servicedetail['description']  ?>
            </div>

        </div>
        </div>
        <!-- call action button  -->
        <?php $this->load->view('layout/callbutton'); ?>
        <!-- end  -->
        <!-- what get in design and development  -->
        <div class="features mb-5 pt-5 container">
            <div class="scrollTrigger heading text-center">
                <h1>What will you get in our <span>Website design</span> and <span>development service</span></h1>
            </div>
            <div class="body d-flex flex-wrap col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/www.svg" alt="icons">
                        <span>Domain Registration</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/hosting.svg" alt="icons">
                        <span>Website Hosting</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/responsive.svg" alt="icons">
                        <span>Responsive & Mobile-Friendly Experience</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/crm.svg" alt="icons">
                        <span>CRM Development</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/royalty-image.svg" alt="icons">
                        <span>Royalty Free Licensed Image</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/business-email.svg" alt="icons">
                        <span>Business Email Accounts</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/social-media.svg" alt="icons">
                        <span>Social Media Account Integration</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-6 col-md-6 col-lg-3 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/content-management-1.svg"
                            alt="icons">
                        <span>Content Management System</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end  -->
        <!-- call action button  -->
        <?php $this->load->view('layout/callbutton'); ?>
        <!-- end  -->

        

    </div>

    <!-- why choose us  -->
    <div class="choose_us container mb-5 text-center pt-5">
        <div class="scrollTrigger heading">
            <h1><span>Why choose <a style="text-decoration: none; color: #ee2c2f;"
                        href="https://crezvatic.com/">crezvatic </a></span>over others</h1>
        </div>
        <div class="body mt-3">
            <div class="body d-flex flex-wrap col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                <div class="scrollTrigger box col-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/qualified-team.svg" alt="icons">
                        <span>Qualified Team</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/dedicated-support.svg" alt="icons">
                        <span>Dedicated Support</span>
                    </div>
                </div>
                <div class="scrollTrigger box col-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="content d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                        <img width="60" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                            data-src="<?php echo asset_url() ?>images/web_services/highly-secure.svg" alt="icons">
                        <span>Highly Secure</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end  -->
    <!-- blog sections  -->
    <?php
    if ($blogs != null) {
    ?>
    <div class="blog container mb-5" id="pageBlogSection">
        <div class="scrollTrigger heading">
            <span>Blog</span>
            <h1 class="mt-3">Digital Marketing Blogs & Updates</h1>
        </div>
        <div class="body d-flex flex-wrap col-12 mt-5">
            <!-- showing first blog  -->
            <div class="scrollTrigger left col-12 col-sm-12 col-md-12 col-lg-6">
                <a href="<?php echo base_url() ?>blogdetails/<?php echo $blogs[0]["seo-url"] ?>">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy"
                        data-src="<?php echo base_url() ?>uploads/<?php echo $blogs[0]["blog-image"]; ?>" alt="Image">
                    <h2 class="mt-2"><?php echo $blogs[0]["blog-heading"]; ?></h2>
                </a>
            </div>
            <?php
                // remove first blog 
                unset($blogs[0]);
                // After print all blogs if available
                if (count($blogs) > 0) {
                ?>
            <div class="right d-flex flex-column gap-4 col-12 col-sm-12 col-md-12 col-lg-6">
                <?php foreach ($blogs as  $value) { ?>
                <a class="scrollTrigger" href="<?php echo base_url() ?>blogdetails/<?php echo $value["seo-url"] ?>">
                    <div class="box d-flex flex-nowrap gap-3 ps-4">
                        <div class="left">
                            <img width="100" height="100" src="<?php echo asset_url() ?>images/placeholder.gif"
                                class="lazy" data-src="<?php echo base_url() ?>uploads/<?php echo $value["blog-image"]; ?>"
                                alt="image">
                        </div>
                        <div class="right">
                            <h4 class="word-break"><?php echo $value["blog-heading"]; ?></h4>
                            <div class="info d-flex flex-wrap gap-4">
                                <div class="date d-flex flex-nowrap align-items-center gap-2">
                                </div>
                                <div class="category d-flex flex-nowrap align-items-center gap-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
            <?php
                }
                ?>
        </div>
    </div>
    <?php
    }
    ?>
    <!-- still confuse  -->
    <div class="still_confuse mb-5 text-center pt-5">
        <div class="heading">
            <h1 class="scrollTrigger"><span>Still Confused ???</span></h1>
            <h4 class="scrollTrigger">Schedule Your <a style="text-decoration: none; color: #ee2c2f;"
                    href="https://crezvatic.com/contact">FREE Consultation </a>Now!</h4>
        </div>
    </div>
    <!-- end  -->
    <!-- call action button  -->
    <?php $this->load->view('layout/callbutton'); ?>
    <!-- end  -->
</div>
<!-- footer start -->
<?php $this->load->view('layout/footer'); ?>
<!-- end  -->