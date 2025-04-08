<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<style>
    header{
        display:none;
    }
    #ViewThemeSection{
        padding-top: 0rem;
    }
</style>
<!-- end  -->
<!--<div id="ViewThemeSection" class="px-2">-->
  <div id="ViewThemeSection" class="px-2">
    <iframe style="height:100vh ;" class="w-100 mb-2" src="<?php echo $template['theme_url'] ?>" frameborder="0"></iframe>
    <div class="cta d-flex flex-wrap align-items-center p-3">
        <p class="col-12 col-sm-10 m-0">Are you ready to take the big step towards your digital growth?</p>
        <a class="col-12 col-sm-2 mt-3 mt-sm-0" href="javascript:void(0)" data-cal-link="crezvatic-pvt-ltd-gb6gis/30min">Let's Talk</a>
    </div>
</div>
<!-- end  -->
<?php //$this->load->view('layout/footer'); ?>
<!-- end  -->