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

<!-- content start  -->
<div class="main-section">
<div id="blogDetailSection">
        <div class="body d-flex flex-column justify-content-center">
            <!-- Image & Title start -->
            <div class="scrollTrigger banner text-center">
            <?php
            $servicedetail = $data['servicedetail'];
            // print_r($servicedetail);
            ?>
            <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url() ?>uploads/service/<?php echo $servicedetail['service-image']  ?>" alt="<?php echo $servicedetail['alt-name']  ?>">
            </div>
            <!-- Image & Title end --> 
        <!-- Description Start-->
           <div class="content mb-5">
            <div class="title mb-3">
                <h1 class="scrollTrigger"><?php echo $servicedetail['service-heading']  ?></h1>
                <div class="scrollTrigger info d-flex flex-wrap align-items-start gap-3">
                    <!--<div class="date d-flex flex-nowrap align-items-center gap-1">-->
                    <!--    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/icons/calender.svg" alt="image">-->
                    <!--    <span><?php echo date('d F y', strtotime($servicedetail['created_at']))  ?></span>-->
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
        <!-- Description end-->
</div>
    <div id="growth_partner_section" class="growth-partner container py-3 mt-5">
        <div class="scrollTrigger heading w-100 text-center">
            <h2>Why Choose <span>Crezvatic</span> as your Digital Growth Partner</h2>
        </div>
        <div class="content d-flex flex-wrap justify-content-center align-items-center py-5 gap-4">
            <div class="scrollTrigger box d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center">1000+</h3>
                <p class="text-center">High Ticket B2B Leads generated for <span> <a style="text-decoration: none; color: #ee2c2f;" href="https://www.labindia-analytical.com/"> Labindia Analytical </a></span></p>
            </div>
            <div class="scrollTrigger box d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center">4X</h3>
                <p class="text-center">More reservations confirmed for <span> <a style="text-decoration: none; color: #ee2c2f;" href="https://shrikanchanhotels.com/"> Shrikanchan Hotels</a> and resorts</span></p>
            </div>
            <div class="scrollTrigger box d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center">6000+</h3>
                <p class="text-center">New Customers acquired for <span> <a style="text-decoration: none; color: #ee2c2f;" href="https://wayam.in/"> wayam magazine </a></span></p>
            </div>
            <div class="scrollTrigger box d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center">7X</h3>
                <p class="text-center">More bookings for <span> <a style="text-decoration: none; color: #ee2c2f;" href="https://tentotreat.com/"> Tentotreat </a></span></p>
            </div>
            <div class="scrollTrigger box d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center">3X</h3>
                <p class="text-center">More Brand Visibility in E-commerce space for <span> <a style="text-decoration: none; color: #ee2c2f;" href="https://myrooots.com/"> Myrooots</a></span></p>
            </div>
            <div class="scrollTrigger box d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center">5X</h3>
                <p class="text-center">More Social Media Engagement For <span> <a style="text-decoration: none; color: #ee2c2f;" href="https://www.lechler.com/in-en">Lechler India</a></span></p>
            </div>
        </div>
    </div>
    <!-- end  -->
    <!-- ctc section  -->
    <div id="ctc_button" class="scrollTrigger ctc_button mb-5 text-center pt-5">
    <!-- <a href="javascript:void(0)" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/crezvatic/60min'});return false;" class="px-5 py-3 glow-on-hover" href="javascript:void(0)">Let's Connect</a> -->
    <a href="javascript:void(0)" data-cal-link="crezvatic-pvt-ltd-gb6gis/30min" class="px-5 py-3 glow-on-hover" href="javascript:void(0)">Let's Connect</a>
</div>    <!-- end  -->
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
    <!--End Blog-->
    
    <!-- archive  -->
    <div id="archive_section" class="archive container py-3 mt-5">
        <div class="scrollTrigger heading w-100 text-center pb-4">
            <h2>What we have <span>Acheived</span></h2>
        </div>
        <div class="scrollTrigger content owl-carousel owl-theme py-3 " id="archive_content">
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap align-items-center gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">LabIndia</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/labindia/1.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">MyRoots</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/myrooots/1.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">shrikanchan hotels</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/shrikanchan/1.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">Tent-O-Treat</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/tot/1.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">MyRoots</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/myrooots/2.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">Wayam</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/wayam/1.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">LabIndia</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/labindia/3.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">MyRoots</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/myrooots/3.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">shrikanchan hotels</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/shrikanchan/2.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">Wayam</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/wayam/3.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">LabIndia</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/labindia/2.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">Tent-O-Treat</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/tot/2.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">shrikanchan hotels</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/shrikanchan/3.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">Wayam</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/wayam/2.webp" alt="Poster">
            </div>
            <div class="box">
                <div class="dots d-flex flex-nowrap justify-content-between align-items-start p-3">
                    <div class="d-flex flex-nowrap gap-2">
                        <span class="green"></span>
                        <span class="yellow"></span>
                        <span class="red"></span>
                    </div>
                    <p class="m-0">Tent-O-Treat</p>
                    <div>
                        <img src="<?php echo base_url()?>/assets/images/icons/enlarge.webp" alt="icon">
                    </div>
                </div>
                <img src="<?php echo base_url()?>/assets/images/archive/white/tot/3.webp" alt="Poster">
            </div>
        </div>
    </div>
    <!-- end  -->
    <!-- ctc section  -->
    <div id="ctc_button" class="scrollTrigger ctc_button mb-5 text-center pt-5">
    <!-- <a href="javascript:void(0)" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/crezvatic/60min'});return false;" class="px-5 py-3 glow-on-hover" href="javascript:void(0)">Let's Connect</a> -->
    <a href="javascript:void(0)" data-cal-link="crezvatic-pvt-ltd-gb6gis/30min" class="px-5 py-3 glow-on-hover" href="javascript:void(0)">Let's Connect</a>
</div>    <!-- end  -->
    <!-- certificate  -->
    <div class="certificate mb-5 pt-5">
        <div class="heading text-center mb-5">
            <h2 class="scrollTrigger"><span>Technology</span> we used</h2>
            <p class="scrollTrigger">Driving technology for leading brands</p>
        </div>
        <div class="scrollTrigger body">
            <div class="marquee">
                <div class="marquee__group">
                    <img src="<?php echo base_url()?>/assets/images/certificate/1.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/2.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/3.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/4.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/5.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/6.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/7.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/8.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/9.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/10.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/11.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/12.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/13.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/14.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/1.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/2.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/3.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/4.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/5.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/6.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/7.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/8.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/9.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/10.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/11.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/12.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/13.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/14.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/1.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/2.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/3.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/4.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/5.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/6.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/7.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/8.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/9.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/10.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/11.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/12.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/13.webp" alt="">
                    <img src="<?php echo base_url()?>/assets/images/certificate/14.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- booking query start -->
    <div class="booking-query py-3 mt-3">
        <div id="booking_query_section" class="container">
            <div class="scrollTrigger heading w-100 text-center py-3">
                <h2 class="text-center">Why you should<span> book a call with us</span></h2>
                <span class="text-center">In this 30 minute call we will give you guys some insights on below mentioned things</span>
            </div>
            <div class="content d-flex flex-wrap justify-content-center align-items-center gap-4 py-3">
                <div class="scrollTrigger box d-flex flex-nowrap justify-content-start align-items-center px-4 py-2 gap-2">
                    <img src="<?php echo base_url()?>/assets/images/icons/1.webp" alt="Icon">
                    <p class="m-0">Areas of Improvement in your Website</p>
                </div>
                <div class="scrollTrigger box d-flex flex-nowrap justify-content-start align-items-center px-4 py-2 gap-2">
                    <img src="<?php echo base_url()?>/assets/images/icons/2.webp" alt="Icon">
                    <p class="m-0">Growth opportunities in the online world</p>
                </div>
                <div class="scrollTrigger box d-flex flex-nowrap justify-content-start align-items-center px-4 py-2 gap-2">
                    <img src="<?php echo base_url()?>/assets/images/icons/3.webp" alt="Icon">
                    <p class="m-0">Digital marketing services your Brand will need & Pricing </p>
                </div>
                <div class="scrollTrigger box d-flex flex-nowrap justify-content-start align-items-center px-4 py-2 gap-2">
                    <img src="<?php echo base_url()?>/assets/images/icons/4.webp" alt="Icon">
                    <p class="m-0">Glimpse of Digital Roadmap for your Brand</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end  -->
    <!-- ctc section Button  -->
    <div id="ctc_button" class="scrollTrigger ctc_button mb-5 text-center pt-5">
    <!-- <a href="javascript:void(0)" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/crezvatic/60min'});return false;" class="px-5 py-3 glow-on-hover" href="javascript:void(0)">Let's Connect</a> -->
    <a href="javascript:void(0)" data-cal-link="crezvatic-pvt-ltd-gb6gis/30min" class="px-5 py-3 glow-on-hover" href="javascript:void(0)">Let's Connect</a>
</div>    <!-- end  -->
</div>
<!-- footer start -->

<?php $this->load->view('layout/footer'); ?>

<!-- end  -->
