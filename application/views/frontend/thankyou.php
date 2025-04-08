<?php $this->load->view('layout/header'); ?>

<section class="thankyou-section container d-flex flex-column justify-content-center align-items-center">
    <!-- <lottie-player src="https://lottie.host/40698942-5073-4029-b7ae-1d0c976550ba/lJSd5OU6yC.json" background="transparent" speed="1" autoplay></lottie-player> -->
    <dotlottie-player autoplay mode="normal" src="<?php echo asset_url()?>images/icons/thankyou.lottie">
    </dotlottie-player>

    
    <?php
    if($_GET['apply'] == "job"){
        ?>
        <h4 class="text-center">Our HR will get in touch with you soon</h4>
        <?php
    }else{
     ?>
     <h4 class="text-center">one of our marketing expert will get in touch with you soon</h4>
     <?php
    }
    
    ?>
    <a class="py-3 px-4 my-5" href="<?php echo base_url(); ?>"><i class="fa-solid fa-left-long"></i> Back to home</a>
</section>


<?php $this->load->view('layout/footer'); ?>