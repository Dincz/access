<!-- header start  -->

<?php $this->load->view('layout/header'); ?>

<!-- end  -->
<div id="blogDetailSection">
    <div class="body d-flex flex-column justify-content-center">

        <div class="scrollTrigger banner text-center">
            <?php
            $blogdetails = $data['blogdetail'];
            // print_r($blogdetails);
            ?>
            <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url() ?>uploads/<?php echo $blogdetails['blog-image']  ?>" alt="<?php echo $blogdetails['alt-name']  ?>">

        </div>

        <div class="content mb-5">
            <div class="title mb-3">
                <h1 class="scrollTrigger"><?php echo $blogdetails['blog-heading']  ?></h1>
                <div class="scrollTrigger info d-flex flex-wrap align-items-start gap-3">
                    <div class="date d-flex flex-nowrap align-items-center gap-1">
                        <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/icons/calender.svg" alt="image">
                        <span><?php echo date('d F y', strtotime($blogdetails['created_at']))  ?></span>
                    </div>
                    <div class="writter d-flex flex-nowrap align-items-center gap-1">
                        <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/icons/person.svg" alt="image">
                        <span>Written by Crezvatic</span>
                    </div>
                    <div class="category d-flex flex-nowrap align-items-center gap-1">
                        <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/icons/tag.svg" alt="image">
                        <span>Blogs</span>
                    </div>
                </div>
            </div>
            <div class="scrollTrigger description">
                <?php echo $blogdetails['description']  ?>
            </div>

        </div>

        <!-- <div class="footer d-flex flex-wrap">

            <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-6 p-2">

                <div class="content d-flex flex-nowrap gap-2">

                    <img src="<?php echo asset_url() ?>images/blogs/2.webp" alt="image">

                    <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore ratione</a>

                </div>

            </div>

            <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-6 p-2">

                <div class="content d-flex flex-nowrap gap-2">

                    <img src="<?php echo asset_url() ?>images/blogs/3.webp" alt="image">

                    <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore ratione</a>

                </div>

            </div>

        </div> -->

    </div>





</div>


<!--Schema Code -->
<script type="application/ld+json">

<?php echo $blogdetails['schema_code']  ?>

</script>

<!-- footer start -->

<?php $this->load->view('layout/footer'); ?>

<!-- end  -->