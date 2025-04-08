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
<div id="smm_services" class="">
    <div id="blogDetailSection">
        <div class="body d-flex flex-column justify-content-center">
            <div class="scrollTrigger banner text-center">
            <?php
            $servicedetail = $data['servicedetail'];
            // print_r($servicedetail);
            // exit;
            ?>
            <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url() ?>uploads/service/<?php echo $servicedetail['service-image']  ?>" alt="<?php echo $servicedetail['alt-name']  ?>">
            </div>

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
        <!-- call action button  -->
        <?php $this->load->view('layout/callbutton'); ?>
        <!-- end  -->
    </div>

    <!-- Brand we have work with  -->
    <div class="certificate mb-5 pt-5">
        <div class="heading text-center mb-5">
            <h2 class="scrollTrigger">Work we have done for the <span>Brands</span></h2>
        </div>
        <div class="scrollTrigger body">
            <div class="marquee">
                <div class="marquee__group">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/1.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/2.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/3.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/4.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/5.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/6.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/7.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/8.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/9.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/10.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/11.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/12.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/13.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/14.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/1.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/2.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/3.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/4.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/5.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/6.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/7.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/8.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/9.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/10.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/11.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/12.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/13.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/14.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/1.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/2.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/3.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/4.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/5.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/6.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/7.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/8.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/9.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/10.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/11.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/12.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/13.webp" alt="">
                    <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/certificate/14.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- call action button  -->
    <?php $this->load->view('layout/callbutton'); ?>
    <!-- end  -->
    <!-- customer review  -->
    <?php $this->load->view('layout/review'); ?>

    <!-- blog sections  -->
    <?php
    
    // print_r($blogs);
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
    <!-- contact us  -->
    <div class="contact_us d-flex flex-column align-items-center justify-content-center col-12 mb-5 p-3">
        <div class="content text-center">
            <h1 class="scrollTrigger">Let's boost your social media presence!</h1>
            <h3 class="scrollTrigger">Reach the fingertips of your target audience with <a style="text-decoration: none; color: #ee2c2f;" href="https://crezvatic.com/contact">social media marketing </a></h3>
        </div>
        <!-- call action button  -->
        <?php $this->load->view('layout/callbutton'); ?>
        <!-- end  -->
    </div>


</div>

<!-- footer start -->
<?php $this->load->view('layout/footer'); ?>
<!-- end  -->