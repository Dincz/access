<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- end  -->
<div id="themeSectionContent">
    <div class="header text-center">
        <h1>Website Template</h1>
    </div>
    <div class="content d-flex flex-wrap p-2">
        <div class="left col-12 col-lg-3 p-2">
            <div class="heading">
                <h4 class="mb-3 scrollTrigger"><i style="font-size:16px ;" class="fa-solid fa-sliders mr-2"></i> Filter</h4>
            </div>
            <div class="content">
                <ul>
                    <!-- <li class="py-1"><a href="#">Health Care Theme <sup>New</sup></a></li> -->
                    <?php
                    
                    foreach ($templates as $row) {
                    ?>
                        <li class="py-1 scrollTrigger"><a href="#<?php echo str_replace(' ', '-', $row['title']) ?>"><?php echo $row['title'] ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="right d-flex flex-wrap col-12 col-lg-9 p-2 gap-2">

            <?php
            
            foreach ($templates as $row) {
            ?>
                <div class="box scrollTrigger" id="<?php echo $row['seo_url'] ?>">
                    <!--<a target="_blank" href="<?php echo base_url() ?>templates/theme/<?php echo $row['seo_url'] ?>">-->
                        <a target="_blank" href="<?php echo $row['theme_url'] ?>">
                        <img src="<?php echo asset_url() ?>images/placeholder.gif" class="lazy" data-src="<?php echo base_url('uploads/templates/'). $row['image'] ?>" alt="image">
                    </a>
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 p-2">
                        <div class="d-flex flex-column">
                            <!--<a href="<?php echo base_url() ?>templates/theme/<?php echo $row['seo_url'] ?>">-->
                            <a href="<?php echo $row['theme_url'] ?>">
                                <h5 class="m-0"><?php echo $row['title'] ?></h5>
                            </a>
                            <a href="<?php echo base_url('digital-markting-consultant-near-me') ?>">
                                <span>By Crezvatic</span>
                            </a>
                        </div>
                        <div class="d-flex previewBtnSection">
                            <!--<a class="PreviewBtn" href="<?php echo base_url() ?>templates/view/<?php echo $row['seo_url'] ?>">Preview</a>-->
                            <a class="PreviewBtn" href="<?php echo $row['theme_url'] ?>">Preview</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script>
    $('#themeSectionContent .content .left .heading').click(function() {
        $('#themeSectionContent .content .left').toggleClass('active')
    })
</script>

<!-- end  -->
<?php $this->load->view('layout/footer'); ?>
<!-- end  -->