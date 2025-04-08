<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- end  -->
<?php

?>
<div id="themeSectionContentDetails" class="px-2">
    <div class="title d-flex flex-wrap align-items-center justify-content-between">
        <div class="d-flex flex-column col-12 col-md-10">
            <h1 class="mb-3 scrollTrigger"><?php echo $template['title'] ?></h1>
            <h6 class="mb-3 scrollTrigger"> <a style="color:gray  ;" href="<?php echo base_url('templates') ?>">All items</a> / <?php echo $template['title'] ?></h6>
        </div>
        <div class="d-flex justify-content-end col-12 col-md-2 scrollTrigger">
            <a class="PreviewBtn w-100" href="<?php echo base_url() ?>templates/view/<?php echo $template['seo_url'] ?>">Preview <i class="fa-solid fa-eye ml-2"></i></a>
        </div>
    </div>
    <div class="content">
        <img class="scrollTrigger w-100 rounded-2 mt-3 lazy" src="<?php echo asset_url() ?>images/placeholder.gif" data-src="<?php echo base_url('uploads/templates/') . $template['image'] ?>" alt="image">
        <div class="description scrollTrigger">
            <h3 class="my-3 ">Descriptions:</h3>
            <div class="desc">
                <?php echo $template['description'] ?>
            </div>
            <a style="color: white;" href="javascript:void(0)" class="text-center d-flex justify-content-center" id="readMoreLess">Read More</a>
        </div>
    </div>
    <div class="recentTheme mt-5">
        <hr>
        <div class="header mb-3 scrollTrigger">
            <h2>Similar Theme</h2>
        </div>
        <div class="content d-flex flex-wrap gap-2 mb-3">
            <?php
            foreach ($recent as $row) {
                if ($row['id'] != $template['id']) {


            ?>
                    <div class="box scrollTrigger">
                        <a href="<?php echo base_url() ?>templates/theme/<?php $row['seo_url'] ?>">
                            <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url('uploads/templates/') . $row['image'] ?>" alt="image">
                        </a>
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 p-2">
                            <div class="d-flex flex-column">
                                <a href="<?php echo base_url() ?>templates/theme/<?php $row['seo_url'] ?>">
                                    <h5 class="m-0"><?php echo $row['title'] ?></h5>
                                </a>
                                <a href="<?php echo base_url('digital-markting-consultant-near-me') ?>">
                                    <span>By Crezvatic</span>
                                </a>
                            </div>
                            <div class="d-flex previewBtnSection">
                                <a class="PreviewBtn" href="<?php echo base_url() ?>templates/theme/<?php $row['seo_url'] ?>">Preview</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<script>
    
</script>
<!-- end  -->
<?php $this->load->view('layout/footer'); ?>
<!-- end  -->