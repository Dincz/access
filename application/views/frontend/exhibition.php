<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EventCon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/exib/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/slicknav.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/exib/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

    *,
    body {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
    }


    .form-holder {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        /* min-height: 100vh; */
    }

    .form-holder .form-content {
        position: relative;
        text-align: center;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
        /* padding: 60px; */
    }

    .form-content .form-items {
        border: 3px solid #fff;
        padding: 20px;
        display: inline-block;
        width: 100%;
        min-width: 360px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        text-align: left;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .form-content h3 {
        color: #fff;
        text-align: left;
        font-size: 1.75rem;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-content h3.form-title {
        margin-bottom: 30px;
    }

    .form-content p {
        color: #fff;
        text-align: left;
        font-size: 1.0625rem;
        ;
        font-weight: 300;
        line-height: 20px;
        margin-bottom: 30px;
    }


    .form-content label,
    .was-validated .form-check-input:invalid~.form-check-label,
    .was-validated .form-check-input:valid~.form-check-label {
        color: #fff;
    }

    .form-content input[type=text],
    .form-content input[type=password],
    .form-content input[type=email],
    .form-content select {
        width: 100%;
        padding: 9px 20px;
        text-align: left;
        border: 0;
        outline: 0;
        border-radius: 6px;
        background-color: #fff;
        font-size: 0.9375rem;
        font-weight: 300;
        color: #8D8D8D;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        margin-top: 16px;
    }


    .btn-primary {
        background-color: #6C757D;
        outline: none;
        border: 0px;
        box-shadow: none;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background-color: #495056;
        outline: none !important;
        border: none !important;
        box-shadow: none;
    }

    .form-content textarea {
        position: static !important;
        width: 100%;
        padding: 8px 20px;
        border-radius: 6px;
        text-align: left;
        background-color: #fff;
        border: 0;
        font-size: 0.9375rem;
        font-weight: 300;
        color: #8D8D8D;
        outline: none;
        resize: none;
        height: 120px;
        -webkit-transition: none;
        transition: none;
        margin-bottom: 14px;
    }

    .form-content textarea:hover,
    .form-content textarea:focus {
        border: 0;
        background-color: #ebeff8;
        color: #8D8D8D;
    }

    .mv-up {
        margin-top: -9px !important;
        margin-bottom: 8px !important;
    }

    .invalid-feedback {
        color: #ff606e;
    }

    .valid-feedback {
        color: #2acc80;
    }

    .down_bn {
        background: transparent;
        border: none;
        color: #fff;
        cursor: pointer;
    }
</style>

<body>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <img src="img/shape/shape_1.svg" alt="">
                            </div>
                            <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                                <img src="img/shape/shape_2.svg" alt="">
                            </div>
                            <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">1st & 2nd Dec 2023</span>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Business Jatra 2023</h3>

                            <a href="NewCrezvaticCompanyProfile2023.pdf" target="_blank" download="download">
                                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><input type="button" class="down_bn" name="" id="" value="Download Profile"> </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="performar_area black_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-80">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Enquiry Now</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <!-- <h3>Register Today</h3> -->
                                    <!-- <p>Fill in the data below.</p> -->
                                    <form action="https://crezvatic.com/Exhibition" class="requires-validation" novalidate method="post">

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                            <div class="valid-feedback">Username field is valid!</div>
                                            <div class="invalid-feedback">Username field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                            <div class="valid-feedback">Email field is valid!</div>
                                            <div class="invalid-feedback">Email field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="mobile" placeholder="Mobile No" required>
                                            <div class="valid-feedback">Mobile no is valid!</div>
                                            <div class="invalid-feedback">Mobile no field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="company" placeholder="Company Name" required>
                                            <div class="valid-feedback">Company Name is valid!</div>
                                            <div class="invalid-feedback">Company Name cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12 my-3">
                                            <textarea class="form-control" placeholder="Message" name="message" id="" cols="30" rows="4"></textarea>
                                        </div>

                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" name="registration" class="btn btn-primary">Submit</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="performar_area black_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">Join Us</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <h3>Register Today</h3>
                                    <p>Fill in the data below.</p>
                                    <form class="requires-validation" novalidate>
            
                                        <div class="col-md-12">
                                           <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                           <div class="valid-feedback">Username field is valid!</div>
                                           <div class="invalid-feedback">Username field cannot be blank!</div>
                                        </div>
            
                                        <div class="col-md-12">
                                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                             <div class="valid-feedback">Email field is valid!</div>
                                             <div class="invalid-feedback">Email field cannot be blank!</div>
                                        </div>
            
                                       <div class="col-md-12">
                                            <select class="form-select mt-3" required>
                                                  <option selected disabled value="">Position</option>
                                                  <option value="jweb">Junior Web Developer</option>
                                                  <option value="sweb">Senior Web Developer</option>
                                                  <option value="pmanager">Project Manager</option>
                                           </select>
                                            <div class="valid-feedback">You selected a position!</div>
                                            <div class="invalid-feedback">Please select a position!</div>
                                       </div>
            
            
                                       <div class="col-md-12">
                                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                                           <div class="valid-feedback">Password field is valid!</div>
                                           <div class="invalid-feedback">Password field cannot be blank!</div>
                                       </div>
            
            
                                       <div class="col-md-12 mt-3">
                                        <label class="mb-3 mr-1" for="gender">Gender: </label>
            
                                        <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                                        <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
            
                                        <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
            
                                        <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                                        <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                                           <div class="valid-feedback mv-up">You selected a gender!</div>
                                            <div class="invalid-feedback mv-up">Please select a gender!</div>
                                        </div>
            
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label">I confirm that all data are correct</label>
                                     <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                                    </div>
                              
            
                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- JS here -->
    <script src="<?php echo base_url() ?>assets/exib/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/ajax-form.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/scrollIt.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/gijgo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/tilt.jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/plugins.js"></script>



    <!--contact js-->
    <script src="<?php echo base_url() ?>assets/exib/js/contact.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/jquery.form.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/exib/js/mail-script.js"></script>


    <script src="<?php echo base_url() ?>assets/exib/js/main.js"></script>
    <script>
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>