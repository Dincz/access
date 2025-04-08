<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- end  -->
<div id="blogSection">
    <div class="hero_section d-flex align-items-center justify-content-center mb-5">
        <h1 class="scrollTrigger p-3 text-center">Blogs</h1>
    </div>
    <div class="scrollTrigger search_bar">
        <form class="d-flex flex-nowrap align-items-center" action="#" method="POST">
            <input type="text" name="search" placeholder="search blog" autocomplete="off" required>
            <button type="submit">
                <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo asset_url() ?>images/blogs/search.svg" alt="image">
            </button>
        </form>
    </div>
    <div class="blogs">
        <div class="body d-flex flex-wrap align-items-start jusitfy-content-center p-3">
            <?php
            foreach ($data['blogs'] as $row) {
            ?>
                <div class="scrollTrigger box col-12 col-sm-12 col-md-6 col-lg-4">
                    <a class="d-flex flex-column p-3" href="<?php echo base_url() ?>blogdetails/<?php echo $row['seo-url']; ?>">
                        <div class="thumnail">
                            <img src="<?php echo base_url() ?>uploads/<?php echo $row['blog-image']; ?>" class="lazy" data-src="<?php echo base_url() ?>uploads/<?php echo $row['blog-image']; ?>" alt="<?php echo $row['alt-name']; ?>">
                        </div>
                        <div class="content">
                            <h2 lang="en"><?php echo $row['blog-heading']; ?></h2>
                            <p><?php echo $row['short-description']; ?></p>
                        </div>
                        <div class="blog-button">
                            <button>Learn More</button>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- footer start -->
<?php $this->load->view('layout/footer'); ?>
<!-- end  -->