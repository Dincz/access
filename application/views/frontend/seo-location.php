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
<div id="seo_services" class="p-2">
<div id="blogDetailSection">
        <div class="body d-flex flex-column justify-content-center">

        <div class="scrollTrigger banner text-center">
            <?php
            $servicedetail = $data['servicedetail'];
            // print_r($servicedetail);
            ?>
            <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url() ?>uploads/service/<?php echo $servicedetail['service-image']  ?>" alt="<?php echo $servicedetails['alt-name']  ?>">
        </div>
    <!-- seo services -->
    <div class="seo_services mb-5 pt-5 container">
        <div class="scrollTrigger heading w-100 text-center">
            <h1>We Generate <span>Traffic</span>, <span>Leads</span> & <span>Revenue</span> Through SEO Services</h1>
        </div>
        <div class="body d-flex flex-column mt-5 pt-5">
            <div class="scrollTrigger content">
                <div class="box d-flex flex-nowrap align-items-center">
                    <div class="right text-center">
                        <h3 class="m-0">E-Commerce SEO</h3>
                    </div>
                    <div class="left pe-5">
                        <h1 class="m-0">01</h1>
                    </div>
                </div>
                <div class="clip"></div>
            </div>
            <div class="scrollTrigger content">
                <div class="box d-flex flex-nowrap align-items-center">
                    <div class="left ps-5">
                        <h1 class="m-0">02</h1>
                    </div>
                    <div class="right text-center">
                        <h3 class="m-0">Local SEO</h3>
                    </div>
                </div>
                <div class="clip"></div>
            </div>
            <div class="scrollTrigger content">
                <div class="box d-flex flex-nowrap align-items-center">
                    <div class="right text-center">
                        <h3 class="m-0">B2B SEO</h3>
                    </div>
                    <div class="left pe-5">
                        <h1 class="m-0">03</h1>
                    </div>
                </div>
                <div class="clip"></div>
            </div>
            <div class="scrollTrigger content">
                <div class="box d-flex flex-nowrap align-items-center">
                    <div class="left ps-5">
                        <h1 class="m-0">04</h1>
                    </div>
                    <div class="right text-center">
                        <h3 class="m-0">International SEO</h3>
                    </div>
                </div>
                <div class="clip"></div>
            </div>
            <div class="scrollTrigger content">
                <div class="box d-flex flex-nowrap align-items-center">
                    <div class="right text-center">
                        <h3 class="m-0">Technical SEO</h3>
                    </div>
                    <div class="left pe-5">
                        <h1 class="m-0">05</h1>
                    </div>
                </div>
                <div class="clip"></div>
            </div>
            <div class="scrollTrigger content">
                <div class="box d-flex flex-nowrap align-items-center">
                    <div class="left ps-5">
                        <h1 class="m-0">06</h1>
                    </div>
                    <div class="right text-center">
                        <h3 class="m-0">App SEO</h3>
                    </div>
                </div>
                <div class="clip"></div>
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
    </div>
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
                        <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url() ?>uploads/<?php echo $blogs[0]["blog-image"]; ?>" alt="Image">
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
                                        <img width="100" height="100" src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url() ?>uploads/<?php echo $value["blog-image"]; ?>" alt="image">
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

     <!-- what are you waiting for -->
     <div class="still_confuse mb-5 text-center pt-5">
        <div class="heading">
            <h1 class="scrollTrigger"><span>So, What Are You Waiting For?</span></h1>
            <h4 class="scrollTrigger">GET IN TOUCH WITH THE LEADING <a style="text-decoration: none; color: #ee2c2f;" href="https://crezvatic.com/digital-markting-consultant-near-me">SEO AGENCY</a> IN MUMBAI</h4>
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