<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Crezvatic - Admin Panel Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo asset_url() ?>admin/images/favicon.png">
    <link href="<?php echo asset_url() ?>admin/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <!-- <a href="index.html"><img src="images/logo-full.png" alt=""></a> -->
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    <?php
                                    if($this->session->flashdata("success")){
                                        ?>
                                        <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata("success") ?></div>
                                        <?php
                                    }
                                    
                                    ?>
                                    <?php
                                    if($this->session->flashdata("error")){
                                        ?>
                                        <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata("error") ?></div>
                                        <?php
                                    }
                                    
                                    ?>    
                                        
                                    <form action="<?php echo base_url() ?>admin/login/login" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <!-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1 text-white">
                                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                    <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> -->
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="<?php echo asset_url() ?>admin/page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo asset_url() ?>admin/vendor/global/global.min.js"></script>
    <script src="<?php echo asset_url() ?>admin/js/custom.min.js"></script>
    <script src="<?php echo asset_url() ?>admin/js/deznav-init.js"></script>

</body>

</html>